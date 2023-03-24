@extends('layouts.appMenu')

@section('title','Sucursal')

@section('content')
<head>
  <meta charset="UTF-6">
  <link rel="stylesheet" href="CSS/estilosFormAdmin.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>
    <br>
    <br>
    <br>
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow-lg">

    <h1 class="text-3xl text-center font-bold"><FONT COLOR="black">Registro de Sucursales</FONT></h1>

    <form class="mt-4" method="POST" action="">
        @csrf

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre de sucursal"
        id="nombre" name="nombre">

        @error('nombre')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Dirección de la sucursal"
        id="direccion" name="direccion">

        @error('direccion')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Página web de la sucursal"
        id="pagina" name="pagina">

        @error('pagina')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <input type="number" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Teléfono fijo"
        id="telefono" name="telefono">

        @error('telefono')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600">Enviar</button>



    </form>
    
</div>


<script src="js/jquery.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>

@endsection