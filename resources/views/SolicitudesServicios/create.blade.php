@extends('layouts.main', ['activePage' => 'Solicitud', 'titlePage' => 'Nueva solicitud'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('SolicitudesServicios.store')}}" method="post" class="form-horizontal">
          @csrf
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Solicitud</h4>
              <p class="card-category">Ingresar datos</p>
            </div>
            <div class="card-body">
              {{-- @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif --}}
              <div class="row">
                <label for="fechasolicitud" class="col-sm-2 col-form-label">Fecha Solicitud</label>
                <div class="col-sm-7">
                  <input type="date" class="form-control" name="fechasolicitud">
                  @if ($errors->has('fechasolicitud'))
                    <span class="error text-danger" for="input-fechasolicitud">{{ $errors->first('fechasolicitud') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="fechaservicio" class="col-sm-2 col-form-label">Fecha Servicio</label>
                <div class="col-sm-7">
                  <input type="date" class="form-control" name="fechaservicio">
                  @if ($errors->has('fechaservicio'))
                    <span class="error text-danger" for="input-fechaservicio">{{ $errors->first('fechaservicio') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="precio">
                  @if ($errors->has('precio'))
                    <span class="error text-danger" for="input-precio">{{ $errors->first('precio') }}</span>
                  @endif
                </div>
              </div>

              <div class="row">
                <label for="modalidad" class="col-sm-2 col-form-label">Modalidad</label>

                <div class="col-sm-7">
                        <div class="radio">
                            <input type="radio"  id="domicilio" value="domicilio" name="Modalidad" checked/>Domicilio
                            <input type="radio"  id="presencial" value="En tienda" name="Modalidad"/>En tienda
                        </div>
                  @if ($errors->has('modalidad'))
                    <span class="error text-danger" for="input-modalidad">{{ $errors->first('modalidad') }}</span>
                  @endif
                </div>

              </div>

              <div class="row">
                <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="direccion">
                  @if ($errors->has('direccion'))
                    <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="{{route('SolicitudesServicios.index')}}">
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
