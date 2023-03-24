@extends('layouts.appMenu')

@section('title','Consulta Sucursales')

@section('content')

<head>
  <meta charset="UTF-6">
  <link rel="stylesheet" href="CSS/estilosFormSucu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
   
<h1 class="text-3xl text-center font-bold mt-5"><FONT COLOR="black">Consulta de Sucursales</FONT></h1>
<center>
<div class="container mt-5">
<table class="table table-striped table-bordered table-dark">

<thead class="text-center">
      <tr>
        <td>ID </td>
        <td>Nombre </td>
        <td>Dirección </td>
        <td>Página </td>
        <td>Teléfono </td>

      </tr>
    </thead>
    <tbody class="text-center">
    @foreach($ConsultaSuc as $sucursal)
    <tr>

        <td>{{$sucursal->id}}</td>
        <td>{{$sucursal->nombre}}</td>
        <td>{{$sucursal->direccion}}</td>
        <td>{{$sucursal->pagina}}</td>
        <td>{{$sucursal->telefono}}</td>
        @endforeach
    </tr>
    </tbody>
</table>

</center>
    </div>



</body>


@endsection