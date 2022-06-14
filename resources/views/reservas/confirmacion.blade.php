<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-plantilla>
                        Examen
{{-- {{$vuelo}} --}}

                        <form action="{{ route('reservas.store',$vuelo) }}" method="post">

                            @csrf
                            @method('post')

                            vuelo:{{$vuelo->aeropuertoSalida->ciudad}}
                            <br>                            

                           plazas libres:  {{$pazasLibres}},
                              <br>
                          
                            <input type="number"  name="vuelo_id" value="{{$vuelo->id}}" readonly {{-- hidden --}}>
<br>
                            <label for="">plazas</label>
                            <input type="number" min="1"  max="{{$pazasLibres}}" name="plazas">


<br>

                            
<br>
<button type="submit">enviar</button>

                        </form>



                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
