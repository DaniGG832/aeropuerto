<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-plantilla>
                        Examen

                        
<br>
<br>

@foreach ($reservas as $reserva)
 
{{-- {{$reserva}}/ --}}

codigo vuelo:{{$reserva->vuelo->codigo}} /
aeropuerto salida:{{$reserva->vuelo->aeropuertoSalida->nombre}} / 
Pazas:{{$reserva->plazas}} /
precio persona:{{$reserva->vuelo->precio}} € /
Precio total :{{$reserva->vuelo->precio*$reserva->plazas}} € /

<br>
<br>
@endforeach


<br>
<br>
<br>

<a href="{{route('reservas.create')}}">Reservar vuelo</a>
                        
                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>