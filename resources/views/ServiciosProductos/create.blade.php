@extends('layouts.main', ['activePage' => 'ServiciosProductos', 'titlePage' => 'Nuevo servicio o producto'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('ServiciosProductos.store')}}" method="post" class="form-horizontal">
          @csrf
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
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" value="{{ old('nombre') }}" autofocus>
                  @if ($errors->has('nombre'))
                    <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="descripcion" placeholder="Ingrese una descripcion" >
                  @if ($errors->has('descripcion'))
                    <span class="error text-danger" for="input-descripcion">{{ $errors->first('descripcion') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="precio" placeholder="Ingrese el precio" >
                  @if ($errors->has('precio'))
                    <span class="error text-danger" for="input-precio">{{ $errors->first('precio') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="cantidad" placeholder="Ingrese cantidad" >
                  @if ($errors->has('cantidad'))
                    <span class="error text-danger" for="input-cantidad">{{ $errors->first('cantidad') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                <div class="col-sm-7 form-group">
                  <select class="form-control selectpicker" data-style="btn btn-link" id="estado">
                      <option>Seleccione el estado del producto o servicio</option>
                      <option value="1">Activo</option>
                      <option value="0">Inactivo</option>
                  </select>
                  @if ($errors->has('estado'))
                    <span class="error text-danger" for="input-estado">{{ $errors->first('estado') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="idcategoria" class="col-sm-2 col-form-label">Categoría</label>
                <div class="col-sm-7 form-group">
                    <select name="idcategoria" id="idcategoria" class="form-control selectpicker">
                        <option class="form-control" value="">Seleccione la categoría</option>
                        @foreach ($categoria as $categoria)
                            <option class="form-control" autofocus value="{{ $categoria['idcategoria'] }}">{{ $categoria['nombre'] }}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="row">
                <label for="iddetalleserviciousuario" class="col-sm-2 col-form-label">iddetalleserviciousuario</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="iddetalleserviciousuario" placeholder="Ingrese iddetalleserviciousuario" >
                  @if ($errors->has('iddetalleserviciousuario'))
                    <span class="error text-danger" for="input-iddetalleserviciousuario">{{ $errors->first('iddetalleserviciousuario') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                {{--<label for="roles" class="col-sm-2 col-form-label">Roles</label>--}}
                <div class="col-sm-7">
                    <div class="form-group">
                        <div class="tab-content">
                            <div class="tab-pane active">
                               {{-- <table class="table">
                                    <tbody>
                                        @foreach ($roles as $id => $role)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                                            value="{{ $id }}"
                                                        >
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $role }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Guardar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="{{route('ServiciosProductos.index')}}">
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
