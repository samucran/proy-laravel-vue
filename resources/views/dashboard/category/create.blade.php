@extends('dashboard.master')
@section('titulo','AgregarCatgoria')
@section('contenido')
@include('dashboard.partials.validation-error')
<h1>Registrar categoria</h1>

<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <main>
        <div class="row">
            <div class="from-group">
                <label for="name">Articulo</label>
                <input type="text" class="form-control" name="name" id="name">
                <div class="row form-group">
                    <label for="description">Contenido</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>

                </div>
                <div class="row center">
                    <div class="col s6">
                    <button class="btn btn-success btn-sm" type="submit">Publicar</button>
                    <a href="{{ url('dashboard/category') }}" class="btn btn-secundary btn-sm">Cancelar</a>
                </div>

                </div>

            </div>

        </div>
    </main>
</form>
@endsection