@extends('layouts.app')

@section('titulo')
    Productos
@endsection

@section('contenido')
    <div class="container grid px-6 mx-auto">
        <div class="flex justify-end">
            <a href="{{route('newproduct')}}">
                <button
                class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5  transition-colors duration-150  border border-transparent rounded-lg  focus:outline-none focus:shadow-outline-blue">
                <span>Agregar producto</span>
            </button>
            </a>
        </div>
        <br>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Nombre</th>
                            <th class="px-4 py-3">Descripción corta</th>
                            <th class="px-4 py-3">Descripción larga</th>
                            <th class="px-4 py-3">Precio venta</th>
                            <th class="px-4 py-3">Precio compra</th>
                            <th class="px-4 py-3">Stock</th>
                            <th class="px-4 py-3">Fecha ingreso</th>
                            <th class="px-4 py-3">Peso</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($productos as $product)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p class="font-semibold">{{$product->id}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$product->name}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$product->descripcion_corta}}
                            </td>
                            <td class="px-4 py-3 text-xs">
                                {{$product->descripcion_larga}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$product->precio_venta}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$product->precio_compra}}

                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$product->stock}}

                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$product->created_at}}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{$product->peso}}
                            </td>
                            <td class="px-4 py-3">
                                <form action="{{route('delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <button type="submit" aria-label="Delete" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                                        borrar
                                    </button>                               
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection