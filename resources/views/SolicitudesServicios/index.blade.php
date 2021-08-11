@extends('layouts.main', ['activePage' => 'Solicitud', 'titlePage' => __('Solicitudes')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Solicitudes</h4>
                  <p class="card-category">Solicitudes Servicios</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('SolicitudesServicios.create') }}" class="btn btn-sm btn-facebook">Añadir solicitud</a>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary">
                        <th>ID</th>
                        <th>Fecha Solicitud</th>
                        <th>Fecha Servicio</th>
                        <th>Precio</th>
                        <th>Modalidad</th>
                        <th>Dirección</th>
                        <th class="text-right">Acciones</th>
                      </thead>
                      <tbody>
                        @forelse ($SolicitudesServicios as $SolicitudServicio)
                        <tr>
                          <td>{{ $SolicitudServicio->idsolicitudservicio }}</td>
                          <td>{{ $SolicitudServicio->fechasolicitud }}</td>
                          <td>{{ $SolicitudServicio->fechaservicio}}</td>
                          <td>{{ $SolicitudServicio->precio}}</td>
                          <td>{{ $SolicitudServicio->modalidad}}</td>
                          <td>{{ $SolicitudServicio->direccion}}</td>

                          <td class="td-actions text-right">
                            <a href="{{ route('SolicitudesServicios.show', $SolicitudServicio->idsolicitudservicio) }}" class="btn btn-info"><i
                                class="material-icons">person</i></a>
                            <a href="{{ route('SolicitudesServicios.edit', $SolicitudServicio->idsolicitudservicio) }}" class="btn btn-warning"><i
                                class="material-icons">edit</i></a>
                            <form action="{{ route('SolicitudesServicios.destroy', $SolicitudServicio->idsolicitudservicio) }}" method="POST"
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
                  {{ $SolicitudesServicios->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
