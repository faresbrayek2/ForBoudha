<?php

namespace App\Http\Controllers;
use App\Models\Client;  // Importation du modèle Client

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer la liste des clients, ordonnée par prénom dans l'ordre ascendant
        $clients = Client::orderBy('prenom', 'asc')->paginate(10); // Utilisation de la pagination

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retourne la vue pour créer un nouveau client
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'dateNaissance' => 'required|date',
            'adresse' => 'required|string|max:255',
            'tel' => 'required|string|max:15', // Vous pouvez également ajouter des règles plus spécifiques pour le téléphone
        ]);

        // Si les données sont valides, création d'un nouveau client
        $client = new Client();
        $client->nom = $validatedData['nom'];
        $client->prenom = $validatedData['prenom'];
        $client->dateNaissance = $validatedData['dateNaissance'];
        $client->adresse = $validatedData['adresse'];
        $client->tel = $validatedData['tel'];
        $client->save();

        // Redirection vers la liste des clients avec un message de succès
        return redirect()->route('clients.index')->with('success', 'Client ajouté avec succès.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Récupérer le client par son ID depuis la base de données
        $client = Client::findOrFail($id);

        // Envoyer le client vers la vue 'show'
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Récupérer le client par son ID
        $client = Client::findOrFail($id);

        // Retourner la vue d'édition avec les données du client
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Valider les nouvelles données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'dateNaissance' => 'required|date',
            'adresse' => 'required|string|max:255',
            'tel' => 'required|string|max:15', // Validation du téléphone
        ]);

        // Récupérer le client à mettre à jour
        $client = Client::findOrFail($id);

        // Mettre à jour les données du client
        $client->nom = $validatedData['nom'];
        $client->prenom = $validatedData['prenom'];
        $client->dateNaissance = $validatedData['dateNaissance'];
        $client->adresse = $validatedData['adresse'];
        $client->tel = $validatedData['tel'];
        $client->save();

        // Rediriger vers la liste des clients avec un message de succès
        return redirect()->route('clients.index')->with('success', 'Client mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Récupérer le client à supprimer
        $client = Client::findOrFail($id);

        // Supprimer le client
        $client->delete();

        // Rediriger vers la liste des clients avec un message de succès
        return redirect()->route('clients.index')->with('success', 'Client supprimé avec succès.');
    }
}
