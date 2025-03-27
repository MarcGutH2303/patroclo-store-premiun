@extends('layouts.app')
@section('content')
<h1 class="text-center text-gray-800 text-2xl font-medium">{{ $producto[0]->nombre }}</h1>

<div class="row my-5">
    <div class="col-md-12">
        <div class="rounded overflow-hidden shadow-lg">
            <img class="w-full" src="{{ $producto[0]->imagen_url }}" alt="Imagen de ejemplo">
            <div class="px-6 py-4">
                <div class="grid grid-cols-12 py-2">
                    <div class="col-span-12 md:col-span-6">
                        <span class="font-bold">Subcategoria: </span>
                        <span>{{ $producto[0]->subcategoria->nombre }}</span>
                    </div>
                    <div class="col-span-12 md:col-span-2">
                        <span class="font-bold">Marca: </span>
                        <span>{{ $producto[0]->marca->nombre }}</span>
                    </div>
                    <div class="col-span-12 md:col-span-2">
                        <span class="font-bold">Precio: </span>
                        <span>$ {{ number_format($producto[0]->precio_dolares, 2) }}</span>
                    </div>
                    <div class="col-span-12 md:col-span-2">
                        <span class="font-bold">Stock: </span>
                        <span>{{ $producto[0]->stock }}</span>
                    </div>
                </div>
                <h3 class="font-bold">Descripción</h3>
                <p class="text-gray-700 text-base">
                {{ $producto[0]->descripcion }}
                </p>
            </div>
            <div class="px-6 py-4 flex justify-end">
                <a href="../categorias" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline">Ir a Categorias</a>
                <a href="{{ $producto[0]->informacion_fabricante_url }}" target="_blank" class="bg-gray-400 text-white font-bold py-2 px-4 rounded-full hover:bg-gray-700 focus:outline-none focus:shadow-outline">Información de Fabricante</a>
            </div>
        </div>
    </div>
</div>


@endsection
