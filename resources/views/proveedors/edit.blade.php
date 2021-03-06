@extends('layouts.main', ['activePage' => 'Proveedores', 'titlePage' => 'Registro de Proveedores'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="/proveedors/{{$proveedores->idproveedor}}" method="post" class="form-horizontal">
          @csrf
          @METHOD('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Proveedor</h4>
              <p class="card-category">Ingresar datos del proveedor</p>
            </div>
            <div class="card-body">
               @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif
              <div class="row">
                <label for="nit" class="col-sm-2 col-form-label">NIT</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nit" placeholder="Ingrese nit " value="{{ $proveedores->nit }}" autofocus>
                  @if ($errors->has('nit'))
                    <span class="error text-danger" for="input-nit">{{ $errors->first('nit') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="proveedor" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="proveedor" placeholder="Ingrese nombre" value="{{ $proveedores->proveedor }}" >
                  @if ($errors->has('proveedor'))
                    <span class="error text-danger" for="input-proveedor">{{ $errors->first('proveedor') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="personacontacto" class="col-sm-2 col-form-label">Nombre de contacto</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="personacontacto" placeholder="Ingrese el nombre de contacto" value="{{ $proveedores->personacontacto }}">
                  @if ($errors->has('personacontacto'))
                    <span class="error text-danger" for="input-personacontacto">{{ $errors->first('personacontacto') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" name="correo" placeholder="Ingrese el correo" value="{{ $proveedores->correo }}">
                  @if ($errors->has('correo'))
                    <span class="error text-danger" for="input-correo">{{ $errors->first('correo') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="telefono" placeholder="Ingrese el numero" value="{{ $proveedores->telefono }}">
                  @if ($errors->has('telefono'))
                    <span class="error text-danger" for="input-telefono">{{ $errors->first('telefono') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="direccion" placeholder="Ingrese direccion" value="{{ $proveedores->direccion }}">
                  @if ($errors->has('direccion'))
                    <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
            </div>
            </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="{{route('proveedors.index')}}">
                  <i class="material-icons">close</i>Cancelar</a>
            </div>
            <!--End footer-->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
