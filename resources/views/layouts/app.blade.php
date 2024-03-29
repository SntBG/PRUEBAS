<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (trim($__env->yieldContent('template_title'))) @yield('template_title') | @endif {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel bg-danger">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <!-- Left Side Of Navbar -->
                   <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tablas de Conversion
                            </a>
                            
                    </ul>
                    <ul class="">
                                <li><a class="dropdown-item" href="{{ route('categories.index')}}">categorias</a></li>
                                <li><a class="dropdown-item" href="{{ route('clients.index')}}">Clientes</a></li>
                                <li><a class="dropdown-item" href="{{ route('inventory-inputs.index')}}">Entradas de inventario</a></li>
                                <li><a class="dropdown-item" href="{{ route('inventory-outputs.index')}}">salidas de inventario</a></li>
                                <li><a class="dropdown-item" href="{{ route('packaging-types.index')}}">tipos de empaques</a></li>
                                <li><a class="dropdown-item" href="{{ route('people.index')}}">personas</a></li>
                                <li><a class="dropdown-item" href="{{ route('products.index')}}">productos</a></li>
                                <li><a class="dropdown-item" href="{{ route('products-inputs.index')}}">Entrada de productos</a></li>
                                <li><a class="dropdown-item" href="{{ route('products-outputs.index')}}">Salida de productos</a></li>
                                <li><a class="dropdown-item" href="{{ route('regional-bogota.index')}}">Regional Bogota</a></li>
                                <li><a class="dropdown-item" href="{{ route('regional-medellin.index')}}">Inventario de Medellin</a></li>
                                <li><a class="dropdown-item" href="{{ route('suppliers.index')}}">Proveedores</a></li>
                                
                                
                                
                        </li>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
