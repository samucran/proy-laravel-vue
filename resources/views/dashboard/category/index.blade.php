@extends('dashboard.master')
@section('titulo','Category')
@section('contenido')
<main>
    <div class="container py-4">
        <h2>Categorias Publicadas</h2>
        <a href="{{ url('dashboard/category/create') }}" class="btn btn-primary btn-sm">Nueva categoria</a>
        <table class="table table-dark table-striaped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha de creacion</th>
                    <th>Fecha de modificacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td><a href="{{ ('category/'.$category->id.'/edit') }}" >Editar</a></td>
                    <td>
                        <form action="{{ url('dashboard/category/'.$category->id) }}"method="category">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
                        </form>

                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>


    </div>
</main>
@endsection