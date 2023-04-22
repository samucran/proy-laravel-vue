@extends('dashboard.master')
@section('titulo','EditarCategoria')
@section('contenido')
@include('dashboard.partials.validation-error')
<h1>Editar Categoria</h1>

<form action="{{ url('dashboard/category'.$category->id) }}" method="POST">
    @method("PUT")
    @csrf
    <main>
        <div class="row">
            <div class="from-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
                <div class="row form-group">
                    <label for="description">Contenido</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $category->description }}</textarea>

                </div>
                <div class="row center">
                    <div class="col s6">
                    <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                    <a href="{{ url('dashboard/category') }}" class="btn btn-secundary btn-sm">Cancelar</a>
                </div>

                </div>

            </div>

        </div>
    </main>
</form>
@endsection