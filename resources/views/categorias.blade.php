@extends('layouts.app')


@section('content')
    <h1 class="text-center text-gray-800 text-2xl font-medium">Elige una categoria</h1>

    <div class="flex flex-wrap justify-evenly mt-4 gap-4">

        @foreach($categorias as $categoria)

            <div class="max-w-sm rounded overflow-hidden shadow-lg cursor-pointer" onclick="verSubcategorias('{{ $categoria->id_categoria }}')">
                <img class="w-full object-cover rounded" src="{{ $categoria->imagen_url }}" alt="Imagen de ejemplo">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $categoria->nombre }}</div>
                </div>
            </div>

        @endforeach

    </div>

@endsection

<script>
    function verSubcategorias(id_categoria) {
        window.location.href = `../public/subcategoria/${id_categoria}`
    }
</script>
