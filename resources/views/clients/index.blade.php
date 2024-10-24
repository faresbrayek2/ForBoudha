<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-6">Liste des Clients</h1>

                    <!-- Bouton pour ajouter un nouveau client -->
                    <a href="{{ route('clients.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-6 inline-block">
                        Ajouter un Client
                    </a>

                    @if($clients->isEmpty())
                        <p class="text-gray-600">Aucun client trouvé.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead>
                                    <tr>
                                        <th class="border px-4 py-2">ID</th>
                                        <th class="border px-4 py-2">Nom</th>
                                        <th class="border px-4 py-2">Prénom</th>
                                        <th class="border px-4 py-2">Date de Naissance</th>
                                        <th class="border px-4 py-2">Adresse</th>
                                        <th class="border px-4 py-2">Téléphone</th>
                                        <th class="border px-4 py-2">Actions</th> <!-- Colonne pour les actions CRUD -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clients as $client)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $client->id }}</td>
                                            <td class="border px-4 py-2">{{ $client->nom }}</td>
                                            <td class="border px-4 py-2">{{ $client->prenom }}</td>
                                            <td class="border px-4 py-2">{{ $client->dateNaissance }}</td>
                                            <td class="border px-4 py-2">{{ $client->adresse }}</td>
                                            <td class="border px-4 py-2">{{ $client->tel }}</td>
                                            <td class="border px-4 py-2 space-x-2">
                                                <!-- Bouton pour afficher les détails d'un client -->
                                                <a href="{{ route('clients.show', $client->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-sm">
                                                    Voir
                                                </a>
                                    @if(auth()->user()->role === 'admin')

                                                <!-- Bouton pour modifier un client -->
                                                <a href="{{ route('clients.edit', $client->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded text-sm">
                                                    Modifier
                                                </a>

                                                <!-- Formulaire pour supprimer un client -->
                                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-sm"
                                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');">
                                                        Supprimer
                                                    </button>
                                                </form>
                                                                                                    @endcan

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Liens de pagination -->
                        <div class="mt-6">
                            {{ $clients->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
