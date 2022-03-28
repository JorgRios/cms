<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ValueToDescription('HM01')}} - Dashboard Admin</title>
        <link href="{{asset('vendor\admin_dashboard\css\styles.css')}}" rel="stylesheet" />
        <link href="{{asset('vendor\bootstrap-5.0.0-beta2-dist\css\bootstrap.min.css')}}" rel="stylesheet" rel="stylesheet" >

        <link href="{{asset('vendor\startbootstrap-landing-page-gh-pages\vendor\fontawesome-free\css\all.min.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
        @toastr_css
        @yield('css')
    </head>
    <body class="sb-nav-fixed">
        @include('components.admin.navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        @include('components.admin.sidebar')
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logeado como:</div>
                        {{Auth::user()->username}} ({{implode(',',Auth::user()->roles->pluck('name')->toarray())}})
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; {{ValueToDescription('HM01')}} 2021</div>
                            <div>
                                <a href="#">Politicas de provacidad</a>
                                &middot;
                                <a href="#">Terminos y Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{asset('vendor\bootstrap-5.0.0-beta2-dist\js\bootstrap.min.js')}}"></script>
        @jquery
        <script src="{{asset('vendor\admin_dashboard\js\scripts.js')}}"></script>
        @toastr_js
        @toastr_render
        <script src="{{asset('forms\js\forms-builder.js')}}"></script>
        @yield('scripts')
    </body>
</html>
