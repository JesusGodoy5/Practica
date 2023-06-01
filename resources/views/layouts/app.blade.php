<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evaluacion - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="{{ route('principal') }}" class="-m-1.5 p-1.5 text-3xl font-black" aria-current="page">Evaluacion</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            @auth
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900 mx-6">Hola: <span class="font-normal"> {{auth()->user()->username}} </a>
            <form method="POST" action={{route('logout')}}>
                @csrf
                <button type="submit" class="text-sm font-semibold leading-6 text-gray-900">Cerrar sesión</button>
            </form>
          </div>
          @endauth

          @guest
          <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900 mx-6">Iniciar sesion</a>
          <a href="{{ route('register') }}" class="text-sm font-semibold leading-6 text-gray-900">Crear cuenta</a>
          @endguest
        </nav>
      </header>
      
    
        <!--Contenido para cada una de las vistas-->

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center  text-3xl mb-10">
                @yield('titulo')
            </h2>
            
            @yield('contenido')

            
        </main>


    </body>
</html>
