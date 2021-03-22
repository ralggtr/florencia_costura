@extends('layouts.app')

@section('content')
<html>
    <head>
        <title>Clientes</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/107c56b88c.js" crossorigin="anonymous"></script>
        

        <!--@livewireAssets-->
        @livewireStyles
    </head>
    <body>
        <div class="container pt-4">
            @livewire('dt')
        </div>
        @livewireScripts
    </body>
</html>
@endsection