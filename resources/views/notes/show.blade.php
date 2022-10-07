<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('exito'))
                <div class="bg-green-200 border border-green-400 rounded-md font-bold text-white mb-8 pl-2 py-4">{{session('exito')}}</div>
            @endif
            
            <div class="flex flex-row justify-end">
                <a href="{{route('notes.edit', $note)}}" class="btn-crear" >Editar Nota</a>
                <form action="{{route('notes.destroy', $note)}}" method="POST" class="ml-4">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white 
                    font-semibold px-4 py-2 rounded-md">Borrar Nota</button>
                </form>
            </div>
            
            <div class="p-6 bg-white border-b border-gray-200 pb-4 mt-4 rounded-md">
                <h2 class="text-4xl font-semibold mb-4">{{$note->title}}</h2>
                <p>{{$note->text}}</p>
            </div>

            <div class="flex justify-end">
                <span class="text-sm opacity-70">{{$note->created_at->diffForHumans()}}</span>
                <span class="text-sm opacity-70 ml-8">{{$note->created_at->diffForHumans()}}</span>
            </div>

        </div>
    </div>
</x-app-layout>
