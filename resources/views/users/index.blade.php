@extends('layouts.main', ['activePage' => 'Usuarios', 'titlePage' => __('Usuarios')])

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
                  <h4 class="card-title">Usuarios
                            {{ Form::open(['route' => 'users.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
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
                  <p class="card-category">Usuarios registrados</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('users.create') }}" class="btn btn-sm btn-facebook">Añadir producto</a>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped" id="products_table">
                      <thead class="text-primary">
                        <th>ID</th>
                        <th>nombre</th>
                        <th>email</th>
                        <th>rol</th>
                        <th>usuario</th>
                        <th class="text-right">Acciones</th>
                      </thead>
                      <tbody>
                        @forelse ($data as $User)
                        <tr>
                          <td>{{ $User->id }}</td>
                          <td>{{ $User->name }}</td>
                          <td>{{ $User->email}}</td>
                          <td>{{ $User->role}}</td>
                          <td>{{ $User->username}}</td>
                          <td class="td-actions text-right">
                         
                            <a href="{{ route('users.show', $User->id) }}" class="btn btn-info"><i
                                class="material-icons">person</i></a>
                            <a href="{{ route('users.edit', $User->id) }}" class="btn btn-warning"><i
                                class="material-icons">edit</i></a>
                            <form action="{{ route('users.destroy', $User->id) }}" method="POST"
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
                {{--<div class="card-footer flex">
                  {{ $data->render() }}
                </div>--}}
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection
