@extends('layouts.main', ['activePage' => 'Solicitud', 'titlePage' => 'Editar Solicitud'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="/SolicitudesServicios/{{$SolicitudServicio->idsolicitudservicio}}" method="post" class="form-horizontal">
          @csrf
          @METHOD('PUT')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Servicio o Producto</h4>
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
                  <input type="text" class="form-control" name="fechasolicitud" value="{{ $SolicitudServicio->fechasolicitud }}" autofocus>
                  @if ($errors->has('fechasolicitud'))
                    <span class="error text-danger" for="input-fechasolicitud">{{ $errors->first('fechasolicitud') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="fechaservicio" class="col-sm-2 col-form-label">Fecha Servicio</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="fechaservicio" value="{{ $SolicitudServicio->fechaservicio }}">
                  @if ($errors->has('fechaservicio'))
                    <span class="error text-danger" for="input-fechaservicio">{{ $errors->first('fechaservicio') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="precio" value="{{ $SolicitudServicio->precio }}">
                  @if ($errors->has('precio'))
                    <span class="error text-danger" for="input-precio">{{ $errors->first('precio') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="modalidad" class="col-sm-2 col-form-label">Modalidad</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="modalidad" value="{{ $SolicitudServicio->modalidad }}">
                  @if ($errors->has('modalidad'))
                    <span class="error text-danger" for="input-modalidad">{{ $errors->first('modalidad') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="direccion" value="{{ $SolicitudServicio->direccion }}">
                  @if ($errors->has('direccion'))
                    <span class="error text-danger" for="input-direccion">{{ $errors->first('direccion') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="idestadoservicio" class="col-sm-2 col-form-label">Id Estado Servicio</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="idestadoservicio" value="{{ $SolicitudServicio->idestadoservicio }}">
                  @if ($errors->has('idestadoservicio'))
                    <span class="error text-danger" for="input-idestadoservicio">{{ $errors->first('idestadoservicio') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="idusuario" class="col-sm-2 col-form-label">Id Usuario</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="idusuario" value="{{ $SolicitudServicio->idusuario }}">
                  @if ($errors->has('idusuario'))
                    <span class="error text-danger" for="input-idusuario">{{ $errors->first('idusuario') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">

                <div class="col-sm-7">
                    <div class="form-group">
                        <div class="tab-content">
                            <div class="tab-pane active">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button><a class="btn btn-danger" href="{{route('SolicitudesServicios.index')}}">
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
