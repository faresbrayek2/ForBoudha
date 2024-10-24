<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier le client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('clients.update', $client->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                            <input type="text" name="nom" id="nom" value="{{ $client->nom }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="mb-4">
                            <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
                            <input type="text" name="prenom" id="prenom" value="{{ $client->prenom }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="mb-4">
                            <label for="dateNaissance" class="block text-sm font-medium text-gray-700">Date de Naissance</label>
                            <input type="date" name="dateNaissance" id="dateNaissance" value="{{ $client->dateNaissance }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="mb-4">
                            <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                            <input type="text" name="adresse" id="adresse" value="{{ $client->adresse }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="mb-4">
                            <label for="tel" class="block text-sm font-medium text-gray-700">Téléphone</label>
                            <input type="tel" name="tel" id="tel" value="{{ $client->tel }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Mettre à jour</button>
                        <a href="{{ route('clients.index') }}" class="text-indigo-600 hover:underline ml-4">Retour à la liste des clients</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
