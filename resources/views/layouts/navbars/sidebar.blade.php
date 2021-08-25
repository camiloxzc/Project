<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('EstilistaWEB') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
  {{--@if(Auth::user()->role == 'admin')--}}
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'inicio' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
          <i class="material-icons">manage_accounts</i>
            <p>{{ __('Permisos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
          <i class="material-icons">manage_accounts</i>
            <p>{{ __('Roles') }}</p>
        </a>
      </li>
      <li class="nav-item {{ $activePage == 'Usuarios' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
            <i class="material-icons">account_box</i>
          <p>{{ __('Usuarios') }}
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'Profesionales' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">arrow_right</i>
                <span class="sidebar-normal">{{ __('Profesionales') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'Clientes' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <i class="material-icons">arrow_right</i>
                <span class="sidebar-normal"> {{ __('Clientes') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'Agenda' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">today</i>
            <p>{{ __('Agenda') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">date_range</i>
            <p>{{ __('Horarios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Servicios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">shopping_bag</i>
            <p>{{ __('Compras') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">assignment_ind</i>
            <p>{{ __('Proveedores') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Solicitud' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('SolicitudesServicios.index') }}">
          <i class="material-icons">post_add</i>
            <p>{{ __('Solicitudes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Productos' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('ServiciosProductos.index')}}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Productos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('Ventas') }}</p>
        </a>
      </li>
      {{--@endif
      @if(Auth::user()->role == 'profesional')
      <ul class="nav">
      <li class="nav-item{{ $activePage == 'inicio' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Agenda' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">today</i>
            <p>{{ __('Agenda') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">date_range</i>
            <p>{{ __('Horarios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Servicios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">post_add</i>
            <p>{{ __('Solicitud') }}</p>
        </a>
      </li>
      @endif
      @if(Auth::user()->role != 'admin' & Auth::user()->role != 'profesional')
      <ul class="nav">
      <li class="nav-item{{ $activePage == 'inicio' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Agenda' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">today</i>
            <p>{{ __('Agenda') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">post_add</i>
            <p>{{ __('Solicitud') }}</p>
        </a>
      </li>
     @endif
     --}}
      {{--<li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="#">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li>--}}
    </ul>
  </div>
</div>
