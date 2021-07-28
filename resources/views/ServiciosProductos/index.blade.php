@extends('layouts.main', ['activePage' => 'Productos', 'titlePage' => __('Productos')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Productos</h4>
                  <p class="card-category">Productos registrados</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('ServiciosProductos.create') }}" class="btn btn-sm btn-facebook">Añadir producto</a>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>ID</th>
                        <th>nombre</th>
                        <th>descripcion</th>
                        <th>precio</th>
                        <th class="text-right">Acciones</th>
                      </thead>
                      <tbody>
                        @forelse ($ServiciosProductos as $ServicioProducto)
                        <tr>
                          <td>{{ $ServicioProducto->idservicioproducto }}</td>
                          <td>{{ $ServicioProducto->nombre }}</td>
                          <td>{{ $ServicioProducto->descripcion}}</td>
                          <td>{{ $ServicioProducto->precio}}</td>
                          <td class="td-actions text-right">
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
                <div class="card-footer mr-auto">
                  {{ $ServiciosProductos->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
