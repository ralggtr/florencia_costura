<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clientes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
        <style>body {
            padding-top: 40px;
        }</style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
    <!--
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        -->


        <div class="container is-fluid">
        <div class="notification is-primary">
            

            <div id="CustomerArea">
                <h1 class="title">CLIENTES</h1>

            

                @foreach ($customers as $customer)

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                            ID: {{ $customer->id }}
                            </p>
                            <button class="card-header-icon" aria-label="mas opciones">
                            <span class="icon">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                            </button>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                NOMBRE: {{ $customer->names.' ' }}{{ $customer->lastnames }}<br>
                                DIRECCION: {{ $customer->address1 }}<br>
                                TELEFONO: {{ $customer->phone }}<br>
                                CLIENTE DESDE: {{ $customer->created_at }}<br>
                            <br>
                            </div>
                        </div>
                        <footer class="card-footer" >
                            <a href="/customer/{{ $customer->id }}/edit" class="card-footer-item">Editar</a>
                            <a href="/customer/{{ $customer->id }}/edit" class="card-footer-item">Ordenes</a>

                            <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="card-footer-item" title="Delete">Eliminar</button>
                            </form>


                            <!-- <a href="#" class="card-footer-item">Borrar</a> -->

                        </footer>
                    </div>

                @endforeach  

            </div>
        
            </div>
        </div>

    </body>
</html>
