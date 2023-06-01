@extends('layouts.app')

@section('titulo')
Productos
@endsection


@section('contenido')

<div class="md:flex md:justify-center md:gap-10 md:items-center">
       
    <!-- Formulario de dashboard -->
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl md:flex md:justify-center md:gap-10 md:items-center">
        <a href="{{route('productos')}}" value="Iniciar sesión" class="text-center bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"> VER PRODUCTOS </a>
    </div>
</div>
    

</div>



@endsection
