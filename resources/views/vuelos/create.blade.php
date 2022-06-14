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

            crear vuelo:

            <form action="{{ route('vuelos.store', []) }}" method="post">

              @csrf
              @method('post')


              <input type="text" name="codigo" placeholder="codigo"> <br>

              salida
              <br>
              <input type="datetime-local" name="salida" placeholder="fecha salida"> <br>

              llegada
              <br>
              <input type="datetime-local" name="llegada" placeholder="fecha salida"> <br>
              aeropuerto salida
              <select name="salida_id" id="">
                @foreach ($aeropuertos as $aeropuerto)
                  <option value="{{ $aeropuerto->id }}">{{ $aeropuerto->nombre }}</option>
                @endforeach

              </select>
              <br>

              aeropuerto llegada
              <select name="llegada_id" id="">
                @foreach ($aeropuertos as $aeropuerto)
                  <option value="{{ $aeropuerto->id }}">{{ $aeropuerto->nombre }}</option>
                @endforeach

              </select>
              <br>

              compañia
              {{ $companias }}
              <select name="compania_id" id="">
                @foreach ($companias as $compania)
                  <option value="{{ $compania->id }}">{{ $compania->nombre }}</option>
                @endforeach

              </select>
              <br>


              plazas

              <input type="number" name="plazas_totales" placeholder="plazas_totales"> <br>


              <br>
              precio
              <input type="number" step="0.01" name="precio" placeholder="precio"> <br>
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
