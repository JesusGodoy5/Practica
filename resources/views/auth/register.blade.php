<!-- Extender el diseño de la aplicación principal -->
@extends('layouts.app')

<!-- Definir el título de la página -->
@section('titulo')
    Regístrate 
@endsection

<!-- Sección de contenido que se envía al contenedor (yield) -->
@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
       
        <!-- Formulario de registro -->
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action='/register' method="POST" novalidate>
                @csrf 
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre" class="border p-3 w-full rounded-lg  @error('name') border-red-500 @enderror" value="{{old('name')}}"/> 
                    
                
                @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                </p>
                @enderror
                
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input id="username" name="username" type="text" placeholder="Tu Username" class="border p-3 w-full rounded-lg  @error('username') border-red-500 @enderror" value="{{old('username')}}"/>

                    @error('username')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                </p>
                @enderror

                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input id="email" name="email" type="email" placeholder="Tu Email" class="border p-3 w-full rounded-lg  @error('email') border-red-500 @enderror" value="{{old('email')}}"/>

                    @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                </p>
                @enderror

                    
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input id="password" name="password" type="password" placeholder="Tu Password" class="border p-3 w-full rounded-lg  @error('password') border-red-500 @enderror"/>

                    @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                </p>
                @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repetir Password" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"/>
                </div>

                <input type="submit" value="Crear cuenta" class="bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500  transition-colors cursor-pointer uppercase font-bold w-full p-3">
            </form>
        </div>
    </div>
@endsection
