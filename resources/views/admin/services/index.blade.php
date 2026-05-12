<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <h1 class="text-2xl font-bold mb-4 text-blue-900">CHU Oujda - Gestion des Services</h1>

                <!-- Formulaire simple -->
                <form action="{{ route('services.store') }}" method="POST" class="mb-6">
                    @csrf
                    <input type="text" name="nom_service" placeholder="Nom du service..." class="border-gray-300 rounded-md">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Ajouter</button>
                </form>

                <!-- Liste -->
                <ul class="list-disc pl-5">
                    @foreach($services as $service)
                        <li>{{ $service->nom_service }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
