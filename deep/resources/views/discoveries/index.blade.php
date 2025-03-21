<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('discoveries') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('discoveries.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create Discovery</a>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">id</th>
                                
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">title</th>
                                
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">description</th>
                                
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">date</th>
                                
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">area_of_study</th>
                                
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">scientists_inventors</th>
                                
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">references</th>
                                
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">keywords</th>
                                
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">image_url</th>
                                
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($discoveries as $entity)
                                <tr>
                                                                        
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $entity->id }}</td>
                                                                        
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $entity->title }}</td>
                                                                        
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $entity->description }}</td>
                                                                        
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $entity->date }}</td>
                                                                        
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $entity->area_of_study }}</td>
                                                                        
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $entity->scientists_inventors }}</td>
                                                                        
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $entity->references }}</td>
                                                                        
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $entity->keywords }}</td>
                                                                        
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $entity->image_url }}</td>
                                    

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('discoveries.edit', $entity->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <form action="{{ route('discoveries.destroy', $entity->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                        </form>
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