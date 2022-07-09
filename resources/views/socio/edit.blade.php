@extends('adminlte::page')

@section('title', 'CRUD con Laravel 9')

@section('content_header')
    <h1>Editar Artículo</h1>
@stop

@section('content')
    <form action='/socios/{{$socio->id}}' method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{ $socio->nombre }}">
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="apellido" name="apellido" type="text" class="form-control" value="{{ $socio->apellido }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">DNI</label>
            <input id="doc" name="doc" type="number" class="form-control" value="{{ $socio->doc }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Nacionalidad</label>
            <input id="nacionalidad" name="nacionalidad" type="text" class="form-control" value="{{ $socio->nacionalidad }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">domicilio</label>
            <input id="domicilio" name="domicilio" type="text" class="form-control" value="{{ $socio->domicilio }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Correo</label>
            <input id="email" name="email" type="email" class="form-control" value="{{ $socio->email }}">
        </div>

        <a href="/socios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop