<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('exito'))
                <div class="bg-green-200 border border-green-400 rounded-md 
                font-bold text-white mb-8 pl-2 py-4">{{session('exito')}}</div>
            @endif
            
            <a href="{{route('notes.create')}}" class="btn-crear mb-4" >Crear Nota</a>

            @forelse($notes as $note)
                

                <div class="p-6 bg-white border-b border-gray-200 pb-4 mt-4 rounded-md">
                    <a href="{{route('notes.show', $note)}}">
                        <h2 class="text-2xl font-semibold mb-2">{{$note->title}}</h2>
                    </a>
                    <p>{{$note->text}}</p>  
                </div>
                
                <div class="flex justify-end">
                    <span class="text-sm opacity-70">{{$note->created_at->diffForHumans()}}</span>
                    <span class="text-sm opacity-70 ml-8">{{$note->created_at->diffForHumans()}}</span>
                </div>
            @empty
                <div>No hay notas registradas...</div>
            @endforelse

            {{$notes->links()}}

        </div>
    </div>
</x-app-layout>
