<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails du Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><strong>ID :</strong> {{ $client->id }}</p>
                    <p><strong>Nom :</strong> {{ $client->nom }}</p>
                    <p><strong>Prénom :</strong> {{ $client->prenom }}</p>
                    <p><strong>Date de Naissance :</strong> {{ $client->dateNaissance }}</p>
                    <p><strong>Adresse :</strong> {{ $client->adresse }}</p>
                    <p><strong>Téléphone :</strong> {{ $client->tel }}</p>

                    <a href="{{ route('clients.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Retour à la liste des clients</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
