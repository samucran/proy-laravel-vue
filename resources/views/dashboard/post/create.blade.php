@extends('dashboard.master')
@section('titulo','AgregarAsignatura')
@section('contenido')
@include('dashboard.partials.validation-error')
<h1>Registrar asignatura</h1>

<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <main>
        <div class="row">
            <div class="from-group">
                <label for="name">Nombre de la asignatura</label>
                <input type="text" class="form-control" name="name" id="name">
                <div class="row form-group">
                    <label for="description">Descripcion</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>
                <div class="from-group">
                    <label for="string">Nombre docente</label>
                    <input type="text" class="form-control" name="string" id="string">
                </div>
                <div class="from-group">
                    <label for="string">Numero de creditos</label>
                    <input type="text" class="form-control" name="int" id="int">
                </div>

                

                <div class="row form-group">
                    <label for="description">Asignatura pre requisitos</label>
                    <select name="category" id="category">
                        <option value="">Selecciona Asignatura pre</option>
                        @foreach ($category as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                            
                        @endforeach
                    </select>
                </div>

                <div class="row center">
                    <div class="col s6">
                    <button class="btn btn-success btn-sm" type="submit">Publicar</button>
                    <a href="{{ url('dashboard/post') }}" class="btn btn-secundary btn-sm">Cancelar</a>
                </div>

                </div>

            </div>

        </div>
    </main>
</form>
@endsection