<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion des Salles - CHU Oujda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Test Tag (تقدر تمسحو ملي تتأكد) -->
            <h1 class="text-2xl font-bold text-red-600 bg-yellow-300 p-2 mb-4 rounded">Tailwind Status: OK ✅</h1>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-gray-700">Liste des Salles disponibles</h3>
                    <a href="{{ route('salles.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow transition">
                        + Ajouter une Salle
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-gray-50 text-gray-600 text-sm uppercase">
                                <th class="px-6 py-4 border-b font-bold text-left">Nom de la Salle</th>
                                <th class="px-6 py-4 border-b font-bold text-left">Type</th>
                                <th class="px-6 py-4 border-b font-bold text-left">Service Responsable</th>
                                <th class="px-6 py-4 border-b font-bold text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 text-sm">
                            @foreach($salles as $salle)
                            <tr class="hover:bg-gray-50 transition duration-150">
                                <td class="px-6 py-4 border-b font-medium">{{ $salle->nom_salle }}</td>
                                <td class="px-6 py-4 border-b">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold">
                                        {{ $salle->type_salle }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 border-b">{{ $salle->service->nom_service }}</td>
                                <td class="px-6 py-4 border-b text-center">
                                    <button class="text-indigo-600 hover:text-indigo-900 font-bold mr-3">Modifier</button>
                                    <button class="text-red-500 hover:text-red-700 font-bold">Supprimer</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
