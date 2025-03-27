@extends('layouts.app')
@section('content')
<h1 class="text-center text-gray-800 text-2xl font-medium">Elige una subcategoria</h1>

    <div class="flex flex-wrap justify-evenly mt-4 gap-4">

        @foreach($subcategorias as $subcategoria)

            <div class="max-w-sm rounded overflow-hidden shadow-lg cursor-pointer" onclick="verProductos('{{ $subcategoria->id_subcategoria }}')">
                <img class="w-full object-cover rounded" src="{{ $subcategoria->imagen_url }}" alt="Imagen de ejemplo">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $subcategoria->nombre }}</div>
                </div>
            </div>

        @endforeach

    </div>

@endsection

<script>
    function verProductos(id_subcategoria) {
        window.location.href = `../producto/${id_subcategoria}`
    }
</script>
