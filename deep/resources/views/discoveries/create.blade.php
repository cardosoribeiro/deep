<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create discoveries') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('discoveries.store') }}" method="POST">
                        @csrf
                                                
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">id</label>
                            
                            <input type="text" name="id" id="id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                        
                        </div>                                                
                                                
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">title</label>
                            
                            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                        
                        </div>                                                
                                                
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">description</label>
                            
                            <input type="text" name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                        
                        </div>                                                
                                                
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">date</label>
                            
                            <input type="text" name="date" id="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                        
                        </div>                                                
                                                
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">area_of_study</label>
                            
                            <input type="text" name="area_of_study" id="area_of_study" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                        
                        </div>                                                
                                                
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">scientists_inventors</label>
                            
                            <input type="text" name="scientists_inventors" id="scientists_inventors" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                        
                        </div>                                                
                                                
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">references</label>
                            
                            <input type="text" name="references" id="references" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                        
                        </div>                                                
                                                
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">keywords</label>
                            
                            <input type="text" name="keywords" id="keywords" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                        
                        </div>                                                
                                                
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">image_url</label>
                            
                            <input type="text" name="image_url" id="image_url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                        
                        </div>                                                
                        
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>