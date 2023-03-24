@extends('layouts.app2')

@section('title','Log In')

@section('content')

<div class="menu"> <!--div menu-->
    <header>
        <nav>
            <ul>	
                <li><a href="{{ route('register.index') }}"><span class="tercero"><i class="icon icon-suitcase"></i></span>Registrarse</a></li>
            </ul>
        </nav>
    </header>
</div> <!--Cierre div menu-->

<div class="logg"> <!--div logg-->
    
    <h2>Iniciar Sesión</h2>
    <img src="IMG/mono.png" class="user">

    <form method="POST" action="">
        @csrf
        <p>Usuario:</p>
        <input type="email" name="email" id="email" placeholder="ejemplo@gmail.com">

        <p>Contraseña:</p>
        <input type="password" name="password" id="password">

        <input type="submit" value="Iniciar Sesión">

        @error('message')
            <p class="border border-red-500 rounded-md bg-red-100 w-full 
            text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror
    </form>
</div> <!--Cierre div logg-->

@endsection