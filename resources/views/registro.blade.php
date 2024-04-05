@extends('plantilla')

@section('titulo1', 'Registro')

@section('seccion')
  <div class="container mt-5">
    <div class="form-container">
      <h2 class="mb-4">Registro de Usuario</h2>
      <form action="{{ route('personas.store') }}" method="POST">
        @csrf
        <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre" required>
          </div>
          <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" id="apellidos" class="form-control" name="apellidos" placeholder="Apellidos" required>
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" id="telefono" class="form-control" name="telefono" placeholder="Teléfono" data-toggle="tooltip" data-placement="top" title="El teléfono debe ser de 10 dígitos">
          </div>
          <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Usuario" required>
          </div>
          <div class="mb-3">
            <label for="psw" class="form-label">Contraseña</label>
            <input type="password" id="psw" class="form-control" name="psw" placeholder="Contraseña" required>
          </div>
        </div>
      </div>
        <!-- Botón de registro -->
      <button class="btn btn-primary">
        <span class="fas fa-user-plus"></span>Registrar
      </button>
    </form>
    <!-- Enlace a iniciar sesión -->
    <p class="mt-3">¿Ya tienes cuenta? <a href="login.html" class="card-link">Ingresa aquí</a></p>
  </div>
</div>
@stop
