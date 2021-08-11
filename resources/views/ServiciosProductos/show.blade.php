@extends('layouts.main', ['activePage' => 'Productos', 'titlePage' => 'Productos'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Productos</div>
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
                        {{ $ServicioProducto->precio }} <br>
                        {{ $ServicioProducto->descripcion }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                       Lorem .
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="/ServiciosProductos/{{$ServicioProducto->idservicioproducto}}/edit"><button class="btn btn-sm btn-primary">Editar</button></a>
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
