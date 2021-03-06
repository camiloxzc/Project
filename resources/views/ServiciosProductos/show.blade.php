@extends('layouts.main', ['activePage' => 'Productos', 'titlePage' => 'Productos'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Productos o Servicios</div>
            <p class="card-category">Vista detallada del producto {{ $ServicioProducto->nombre }}</p>
          </div>
          <!--body-->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#">
                          <img src="{{ asset('/img/mask.png') }}" alt="image" class="avatar">
                          <h5 class="title mt-3">Producto: {{ $ServicioProducto->nombre }}</h5>
                        </a>
                        <p class="description">
                        Precio: {{ $ServicioProducto->precio }} <br>
                        Descripción:{{ $ServicioProducto->descripcion }}<br>
                            Cantidad: {{ $ServicioProducto->cantidad}} <br>
                            Estado: @if($ServicioProducto->estado == 1)
                                <button type="button" id="btnActivo" class="btn btn-sm btn-success">Activo</button>
                            @else
                                <button type="button" id='btnInactivo' class="btn btn-sm btn-danger">Inactivo</button>
                            @endif

                        </p>
                      </div>
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="/ServiciosProductos/{{$ServicioProducto->idservicioproducto}}/edit"><button class="btn btn-sm btn-primary">Editar</button></a>&nbsp;&nbsp;&nbsp;<a class="btn btn-sm btn-danger" href="{{route('ServiciosProductos.index')}}">
                  <i class="material-icons">close</i>Cancelar</a>
                    </div>
                  </div>
                </div>
              </div><!--end card user-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
