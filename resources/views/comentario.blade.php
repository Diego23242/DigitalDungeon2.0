@extends('plantilla')
@section('titulo1')
{{ 'Comentarios' }}
@section('seccion')
    <div class="container mt-5">
        <div class="form-container">
            <h2 class="mb-4">Comentarios</h2>
            <form method="POST" action="{{ route('comentario.store') }}">
            @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Comentario</label>
                    <input type="text" class="form-control" id="comentario" name="comentario" required>
                </div>
                <button class="btn btn-primary">
                 <span class="fas fa-user-plus"></span>Enviar
                </button>
            </form>
        </div>
    </div>
@stop