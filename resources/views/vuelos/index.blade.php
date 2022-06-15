<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('create vuelo') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <x-plantilla>
            Examen

            vuelos:
<br>
            {{-- {{$vuelos}} --}}

            @foreach ($vuelos as $vuelo)

            codigo: {{$vuelo->codigo}}-->>
            aeropuerto salida: {{$vuelo->aeropuertoSalida->nombre}}//
            hora salida: {{$vuelo->salida}}//
            compañia: {{$vuelo->compania->nombre}}//
            plazas: {{$vuelo->plazas_totales}}//
            precio: {{$vuelo->precio}}//

<br><br>
            @endforeach
          



          </x-plantilla>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
