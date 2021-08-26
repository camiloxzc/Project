@extends('layouts.main', ['activePage' => 'Productos', 'titlePage' => 'Editar Productos'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="/ServiciosProductos/{{$ServicioProducto->idservicioproducto}}" method="post" class="form-horizontal">
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
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" value="{{ $ServicioProducto->nombre }}" autofocus>
                  @if ($errors->has('nombre'))
                    <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="descripcion" placeholder="Ingrese una descripcion" value="{{ $ServicioProducto->descripcion }}">
                  @if ($errors->has('descripcion'))
                    <span class="error text-danger" for="input-descripcion">{{ $errors->first('descripcion') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="precio" placeholder="Ingrese el precio" value="{{ $ServicioProducto->precio }}">
                  @if ($errors->has('precio'))
                    <span class="error text-danger" for="input-precio">{{ $errors->first('precio') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="cantidad" placeholder="Ingrese cantidad" value="{{ $ServicioProducto->cantidad }}">
                  @if ($errors->has('cantidad'))
                    <span class="error text-danger" for="input-cantidad">{{ $errors->first('cantidad') }}</span>
                  @endif
                </div>
              </div>
              <div class="row">
                <label for="estado" class="col-sm-2 col-form-label">estado</label>
                <div class="col-sm-7">
                  <select class="form-control" id="estado" name="estado">
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
                  <input type="text" class="form-control" name="iddetalleserviciousuario" placeholder="Ingrese iddetalleserviciousuario" value="{{ $ServicioProducto->iddetalleserviciousuario }}">
                  @if ($errors->has('iddetalleserviciousuario'))
                    <span class="error text-danger" for="input-iddetalleserviciousuario">{{ $errors->first('iddetalleserviciousuario') }}</span>
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
