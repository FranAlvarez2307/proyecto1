<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="p-6 bg-white border-b border-gray-200 pb-4 mt-4">
                <form action="{{route('notes.store')}}" method="POST">
                    @csrf
                    @method('post')
                    <x-text-input 
                        name="title" 
                        placeholder="Titulo" 
                        class="w-full my-2 py-2 px-2" 
                        :value="@old('title')" />
                    @error('title')
                        <div class="text-red-200 text-sm">{{$message}}</div>
                    @enderror
                    <x-text-area 
                        name="text" 
                        placeholder="Texto de la nota" 
                        class="w-full my-2"
                        :value="@old('text')" />

                    @error('text')
                        <div class="text-red-200 textr-sm">{{$message}}</div>
                    @enderror
                    <button type="submit" class="btn-crear">Store Note</button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>