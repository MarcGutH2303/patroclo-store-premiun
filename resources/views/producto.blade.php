@extends('layouts.app')
@section('content')
<h1 class="text-center text-gray-800 text-2xl font-medium">Elige un producto</h1>

    <div class="flex flex-wrap justify-evenly mt-4 gap-4">

        @foreach($productos as $producto)

            <div class="max-w-sm rounded overflow-hidden shadow-lg cursor-pointer" onclick="verProductoDetalle('{{ $producto->id_producto }}')">
                <img class="w-full object-cover rounded" src="{{ $producto->imagen_url }}" alt="Imagen de ejemplo">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $producto->nombre }}</div>
                </div>
            </div>

        @endforeach

    </div>

@endsection

<script>
    function verProductoDetalle(id_producto) {
        window.location.href = `../producto-detalle/${id_producto}`
    }
</script>
