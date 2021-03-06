@extends('layouts.main', ['activePage' => 'Productos', 'titlePage' => __('Productos')])

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

         {{-- <div class="row">--}}
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Productos
                            {{ Form::open(['route' => 'ServiciosProductos.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                                <div class="form-group">
                                    {{ Form::text('nombre', null, ['class' => 'form-control','wire:model' => 'search', 'placeholder' => 'Buscar']) }}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <span class="material-icons">search</span>
                                    <div class="ripple-container"></div>
                                    </button>
                                </div>
                            {{ Form::close() }}
                  </h4>
                  <p class="card-category">Productos registrados</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('ServiciosProductos.create') }}" class="btn btn-sm btn-facebook">Añadir producto</a>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped" id="products_table">
                      <thead class="text-primary">
                        <th>ID</th>
                        <th>nombre</th>
                        <th>descripcion</th>
                        <th>precio</th>
                        <th>categoría</th>
                        <th>estado</th>
                        <th class="text-right">Acciones</th>
                      </thead>
                      <tbody>
                        @forelse ($ServiciosProductos as $ServicioProducto)
                        <tr>
                          <td>{{ $ServicioProducto->idservicioproducto }}</td>
                          <td>{{ $ServicioProducto->nombre }}</td>
                          <td>{{ $ServicioProducto->descripcion}}</td>
                          <td>{{ $ServicioProducto->precio}}</td>
                            <td>{{ $ServicioProducto->idcategoria}}</td>
                          <td id="resp{{ $ServicioProducto->idservicioproducto }}">
                            @if($ServicioProducto->estado == 1)
                            <button type="button" id="btnActivo" class="btn btn-sm btn-success">Activo</button>
                                @else
                            <button type="button" id='btnInactivo' class="btn btn-sm btn-danger">Inactivo</button>
                            @endif

                        </td>
                          <td class="td-actions text-right">
                          <label class="switch">
                                <input data-id="{{ $ServicioProducto->idservicioproducto }}" class="mi_checkbox" type="checkbox" data-onstyle="success"
                                 data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Inactive"
                                 {{ $ServicioProducto->estado ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                            <a href="{{ route('ServiciosProductos.show', $ServicioProducto->idservicioproducto) }}" class="btn btn-info"><i
                                class="material-icons">person</i></a>
                            <a href="{{ route('ServiciosProductos.edit', $ServicioProducto->idservicioproducto) }}" class="btn btn-warning"><i
                                class="material-icons">edit</i></a>
                            <form action="{{ route('ServiciosProductos.destroy', $ServicioProducto->idservicioproducto) }}" method="POST"
                              style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit" rel="tooltip">
                                <i class="material-icons">close</i>
                              </button>
                            </form>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="2">Sin registros.</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer">
                  {{ $ServiciosProductos->render() }}
                </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

 <script type="text/javascript">
    $(document).ready(function() {
        $('#products_table').Database
        });
        $(function() {
            $('.mi_checkbox').change(function() {
            //Verifico el estado del checkbox, si esta seleccionado sera igual a 1 de lo contrario sera igual a 0
            var estado = $(this).prop('checked') == true ? 1 : 0;
            var idservicioproducto = $(this).attr("data-id");
                console.log(estado);

        $.ajax({
            type: "POST",
            dataType: "json",
            //url: '',
            url: '/changeStatus',
            data: {"_token": "{{ csrf_token() }}",'estado': estado, 'idservicioproducto': idservicioproducto},
            success: function(data){
                $('#resp' + idservicioproducto).html(data.var);
                console.log(data)

            }
        });
    });

});

</script>
@endsection
