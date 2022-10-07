<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="p-6 bg-white border-b border-gray-200 pb-4 mt-4">
                <form action="{{route('notes.update', $note)}}" method="POST">
                    @csrf
                    @method('put')
                    <x-text-input 
                        name="title" 
                        class="w-full my-2 py-2 px-2"
                        :value="$note->title" />
                    @error('title')
                        <div class="text-red-200 text-sm">{{$message}}</div>
                    @enderror
                    <x-text-area 
                        name="text"  
                        class="w-full my-2"
                        :value="$note->text" />
                        
                    @error('text')
                        <div class="text-red-200 textr-sm">{{$message}}</div>
                    @enderror
                    <button type="submit" class="btn-crear">Store Note</button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>