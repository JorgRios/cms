<div class="nav">
    <div class="sb-sidenav-menu-heading">Navegacion</div>
    <a class="nav-link" href="/admin">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Inicio
    </a>
    @if (\Auth::user()->hasAnyPermission([
        'propertys.index',
        'querys.index',
        'survey.index',
        'parametrics.index',
        'attributes.index',
        'city.index',
        'zone.index',
    ]))
        <div class="sb-sidenav-menu-heading">Sistema Principal</div>
    @endif
    @can('products.index')
    <a class="nav-link" href="{{route('products.index')}}">
        <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
        Productos
    </a>
    @endcan
    @can('querys.index')
    <a class="nav-link" href="{{route('questions.index')}}">
        <div class="sb-nav-link-icon"><i class="fa fa-info"></i></div>
        Consultas
    </a>
    @endcan
    @if (\Auth::user()->hasAnyPermission([
        'parametrics.index',
        'page.setings'
    ]))
        <div class="sb-sidenav-menu-heading">Página</div>
    @endif
    @can('parametrics.index')
    <a class="nav-link" href="{{route('parametric.index')}}">
        <div class="sb-nav-link-icon"><i class="fa fa-gears"></i></div>
        Parametros
    </a>
    @endcan
    @can('configs.index')
    <a class="nav-link" href="{{route('configs.index')}}">
        <div class="sb-nav-link-icon"><i class="fas fa-sliders-h"></i></div>
        Ajustes de Página
    </a>
    @endcan

    @if (\Auth::user()->hasAnyPermission([
        'user.index',
        'role.index',
        'permission.index',
        'parametrics.index',
    ]))
        <div class="sb-sidenav-menu-heading">Seguridad</div>
    @endif
    @can('user.index')
    <a class="nav-link" href="{{route('user.index')}}">
        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
        Usuarios
    </a>
    @endcan
    @can('role.index')
    <a class="nav-link" href="{{route('role.index')}}">
        <div class="sb-nav-link-icon"><i class="fa fa-key"></i></div>
        Roles
    </a>
    @endcan
    @can('permission.index')
    <a class="nav-link" href="{{route('permission.index')}}">
        <div class="sb-nav-link-icon"><i class="fa fa-lock"></i></div>
        Permisos
    </a>
    @endcan
    @can('parametrics.index')
    <a class="nav-link" href="/logs213452we345wer24ert45234yui354245" target="_blank">
        <div class="sb-nav-link-icon"><i class="fa fa-lock"></i></div>
        Logs
    </a>
    @endcan
</div>
