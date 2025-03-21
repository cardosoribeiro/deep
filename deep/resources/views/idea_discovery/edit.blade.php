<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit ideaDiscovery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('idea_discovery.update', $entity->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                                                
                        <input type="hidden" name="id" id="id"  value="{{ $entity->id }}">                                            
                        
                        
                        
                        
                        
                        <div class="mb-4">
                            <label for="idea_id" class="block text-gray-700 text-sm font-bold mb-2">ideaId</label>
                            
                            <select name="idea_id" id="idea_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($ideas as $entity)
                                <option value="{{ $entity->id }}" >{{$entity->id }}</option>
                            @endforeach
                            </select>
                             
                        </div>
                        
                        
                        
                        
                        <div class="mb-4">
                            <label for="discovery_id" class="block text-gray-700 text-sm font-bold mb-2">discoveryId</label>
                            
                            <select name="discovery_id" id="discovery_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($discoveries as $entity)
                                <option value="{{ $entity->id }}" >{{$entity->id }}</option>
                            @endforeach
                            </select>
                             
                        </div>
                        
                        
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>