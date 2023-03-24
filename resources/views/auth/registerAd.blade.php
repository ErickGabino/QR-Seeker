@extends('layouts.appMenu')

@section('title','Registro Administrador')

@section('content')

<head>
  <meta charset="UTF-6">
  <title>Sucursal</title>
  <link rel="stylesheet" href="CSS/estilosFormSucu.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>

<body>
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold"><FONT COLOR="black">Registre Administrador</FONT></h1>

    <form class="mt-4" method="POST" action="">
        @csrf

        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre"
        id="name" name="name">
                
        @error('name')
        
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror
       
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Apellido Paterno"
        id="nameap" name="nameap">

        
     
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Apellido Materno"
        id="nameam" name="nameam">

        <input type="number" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Telefono"
        id="telefono" name="telefono">
        


        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo"
        id="email" name="email">

        @error('email')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password"
        id="password" name="password">

        @error('password')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password Confirmation"
        id="password_confirmation" name="password_confirmation">

     
        <p> Administrador</p>
            <select class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="txtAdmin" required="" >
              <option selected disabled >Elije...</option>
              <option >Activo</option>
              <option>Habilitado</option>
              <option>Desabilitado</option>
            </select>

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
        text-white font-semibold p-2 my-3 hover:bg-indigo-600">Enviar</button>



    </form>

</div>
</body>


@endsection