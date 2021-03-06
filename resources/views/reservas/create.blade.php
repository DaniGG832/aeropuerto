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


                        <form action="{{ route('reservas.confirmacion',[]) }}" method="post">

                            @csrf
                            @method('post')

                            selecciona el vuelo:
<br>
                            @foreach ($vuelos as $vuelo)
                                <input type="radio" id="{{$vuelo->id}}" name="vuelo_id" value="{{$vuelo->id}}">
                                <label for="{{$vuelo->id}}"> {{ $vuelo->codigo . '/sale de:' . $vuelo->aeropuertoSalida->ciudad }}</label><br>
                            @endforeach
<br>
                           
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
