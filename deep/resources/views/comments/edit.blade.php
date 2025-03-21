<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit comments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('comments.update', $entity->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                                                
                        <input type="hidden" name="id" id="id"  value="{{ $entity->id }}">                                            
                        
                        
                        
                        
                        
                        <div class="mb-4">
                            <label for="user_id" class="block text-gray-700 text-sm font-bold mb-2">userId</label>
                            
                            <select name="user_id" id="user_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($user as $entity)
                                <option value="{{ $entity->id }}" >{{$entity->id }}</option>
                            @endforeach
                            </select>
                             
                        </div>
                        
                        
                        
                        
                        <div class="mb-4">
                            <label for="commentable" class="block text-gray-700 text-sm font-bold mb-2">commentable</label>
                            
                            <input type="text" name="commentable" id="commentable" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $entity->commentable }}">
                             
                        </div>
                        
                        
                        
                        
                        <div class="mb-4">
                            <label for="text" class="block text-gray-700 text-sm font-bold mb-2">text</label>
                            
                            <input type="text" name="text" id="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $entity->text }}">
                             
                        </div>
                        
                        
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>