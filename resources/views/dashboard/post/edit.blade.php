@extends('dashboard.master')
@section('titulo','EditarPost')
@section('contenido')
@include('dashboard.partials.validation-error')
<h1>Editar post</h1>

<form action="{{ url('dashboard/post'.$post->id) }}" method="POST">
    @method("PUT")
    @csrf
    <main>
        <div class="row">
            <div class="from-group">
                <label for="name">Articulo</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $post->name }}">
                <div class="row form-group">
                    <label for="description">Contenido</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $post->description }}</textarea>
                </div>
                <div class="row form-group">
                    <label for="description">Categoria</label>
                    <select name="category" id="category">
                        <option value="">Selecciona una categoria</option>
                        @foreach ($category as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                            
                        @endforeach
                    </select>
                </div>
                <div class="row center">
                    <div class="col s6">
                    <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                    <a href="{{ url('dashboard/post') }}" class="btn btn-secundary btn-sm">Cancelar</a>
                </div>

                </div>

            </div>

        </div>
    </main>
</form>
@endsection