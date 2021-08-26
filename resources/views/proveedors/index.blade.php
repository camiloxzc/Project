@extends('layouts.main', ['activePage' => 'Proveedores', 'titlePage' => __('Proveedores')])

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
                  <h4 class="card-title">Proveedores
                            {{ Form::open(['route' => 'proveedors.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
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
                  <p class="card-category">Proveedores registrados</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('proveedors.create') }}" class="btn btn-sm btn-facebook">Añadir proveedor</a>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover " id="products_table">
                      <thead class="text-primary">
                        <th>ID</th>
                        <th>NIT</th>
                        <th>Proveedor</th>
                        <th>Contacto</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th class="text-center">Acciones</th>
                      </thead>
                      <tbody>
                        @forelse ($proveedors as $proveedor)
                        <tr>
                          <td>{{ $proveedor->idproveedor }}</td>
                          <td>{{ $proveedor->nit }}</td>
                          <td>{{ $proveedor->proveedor}}</td>
                          <td>{{ $proveedor->personacontacto}}</td>
                          <td>{{ $proveedor->correo}}</td>
                          <td>{{ $proveedor->telefono}}</td>
                          <td>{{ $proveedor->direccion}}</td>
                          <td class="td-actions text-right">
                            <a href="{{ route('proveedors.show', $proveedor->idproveedor) }}" class="btn btn-info"><i
                                class="material-icons">person</i></a>
                            <a href="{{ route('proveedors.edit', $proveedor->idproveedor) }}" class="btn btn-warning"><i
                                class="material-icons">edit</i></a>
                            <form action="{{ route('proveedors.destroy', $proveedor->idproveedor) }}" method="POST"
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
                  {{ $proveedors->render() }}
                </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
