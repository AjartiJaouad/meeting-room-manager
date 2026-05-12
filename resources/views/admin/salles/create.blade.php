<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <h2 class="text-xl font-bold mb-6 text-blue-900 border-b pb-2">Ajouter une Nouvelle Salle (CHU Oujda)</h2>

                <form action="{{ route('salles.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Nom de la Salle -->
                        <div class="col-span-2">
                            <label class="block font-medium text-gray-700">Nom de la Salle</label>
                            <input type="text" name="nom_salle" class="w-full border-gray-300 rounded-md shadow-sm" placeholder="Ex: Salle de Réunion A" required>
                        </div>

                        <!-- Type d'usage -->
                        <div>
                            <label class="block font-medium text-gray-700">Type d'usage</label>
                            <select name="type_salle" class="w-full border-gray-300 rounded-md shadow-sm">
                                <option value="Réunion">Réunion</option>
                                <option value="Formation">Formation</option>
                                <option value="Soutenance">Soutenance</option>
                            </select>
                        </div>

                        <!-- Service Responsable (الدروب داون اللي عمرنا) -->
                        <div>
                            <label class="block font-medium text-gray-700">Service Responsable</label>
                            <select name="service_id" class="w-full border-gray-300 rounded-md shadow-sm">
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->nom_service }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Capacité -->
                        <div>
                            <label class="block font-medium text-gray-700">Capacité (Places)</label>
                            <input type="number" name="capacite" class="w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>

                        <div class="col-span-2 mt-4">
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md font-bold transition">
                                Enregistrer la Salle
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
