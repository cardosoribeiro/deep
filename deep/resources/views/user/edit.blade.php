<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('user.update', $entity->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                                                
                        <input type="hidden" name="id" id="id"  value="{{ $entity->id }}">                                            
                        
                        
                        
                        
                        
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">name</label>
                            
                            <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $entity->name }}">
                             
                        </div>
                        
                        
                        
                        
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">email</label>
                            
                            <input type="text" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $entity->email }}">
                             
                        </div>
                        
                        
                        
                        
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">password</label>
                            
                            <input type="text" name="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $entity->password }}">
                             
                        </div>
                        
                        
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>