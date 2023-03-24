@extends('layouts.appMenu')

@section('title','Consulta Administradores')

@section('content')

<head>
  <meta charset="UTF-6">
  <link rel="stylesheet" href="CSS/estilosFormSucu.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
   

<h1 class="text-3xl text-center font-bold mt-5"><FONT COLOR="black">Consulta de Administrador</FONT></h1>


<center>
<div class="container mt-5">
<table class="table table-striped table-bordered table-dark">

<thead class="text-center">
      <tr>
        <td>ID </td>
        <td>Nombre </td>
        <td>Apellido Paterno </td>
        <td>Apellido Materno </td>
        <td>Telefono </td>
        <td>Correo </td>
        <td>Administrador </td>

      </tr>
    </thead>
    <tbody class="text-center">
    @foreach($ConsultaAd as $Administrador)
    <tr>
       
        <td>{{$Administrador->id}}</td>
        <td>{{$Administrador->name}}</td>
        <td>{{$Administrador->nameap}}</td>
        <td>{{$Administrador->nameam}}</td>
        <td>{{$Administrador->telefono}}</td>
        <td>{{$Administrador->email}}</td>
        <td>{{$Administrador->txtAdmin}}</td>
        @endforeach
    </tr>
    </tbody>
</table>

</center>
    </div>
    


</body>


@endsection