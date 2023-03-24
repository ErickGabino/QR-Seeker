@extends('layouts.appMenu')

@section('title','Registrar Producto')

@section('content')

<head>
<meta charset="UTF-6">
  <title>Productos</title>
  <link rel="stylesheet" href="CSS/estilosFormProd.css">
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>
<body>

<main>
	<div class="content-all">

    <!--Formulario de Productos -->
    <body>
        <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
    rounded-lg shadow-lg">
    
    <h1 class="text-3xl text-center font-bold"><FONT COLOR="black">Registro de Productos</FONT></h1>
    
        <form class="mt-4" method="POST" action="" enctype="multipart/form-data">
            @csrf
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre"
            id="nombre" name="nombre">
                    
            @error('nombre')          
                <p class="border border-red-500 rounded-md bg-red-100 w-full 
                text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
           
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Categoria"
            id="categoria" name="categoria">       

            @error('categoria')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Descripcion"
            id="descripcion" name="descripcion">
    
            
            <input type="double" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Precio"
            id="precio" name="precio">      

            @error('precio')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
    
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Sucursal"
            id="Sucursal" name="Sucursal">
    
            @error('Sucursal')
                <p class="border border-red-500 rounded-md bg-red-100 w-full 
                text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror

            <input type="file" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" id="imagen" name="imagen">
    
            @error('File')
                <p class="border border-red-500 rounded-md bg-red-100 w-full 
                text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
            <input type="file" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" id="qr" name="qr">
    
            @error('File qr')
                <p class="border border-red-500 rounded-md bg-red-100 w-full 
                text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror


            <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-indigo-600">Registrar</button>   
        </form>   

</body>

@endsection