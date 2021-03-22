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
    <div class="container is-fluid">

    <h1 class="title">NUEVO CLIENTE</h1>

    <div id="Wrapper">
            <form action="/customer" method="post">
            @csrf
            <div class="field">
              <label class="label">
            Nombres</label>
              <div class="control">
                <input class="input" type="text" placeholder="Nombres" name="names" id="names">
              </div>
            </div>
            <div class="field">
              <label class="label">
            Apellidos</label>
              <div class="control">
                <input class="input" type="text" placeholder="Apellidos" name="lastnames" id="lastnames">
              </div>
            </div>

            <div class="field">
              <label class="label">
            Area</label>
              <div class="control">
                <input class="input" type="text" placeholder="Area" name="area" id="area" value="{{ $customer->area }}">
              </div>
            </div>
            
            
            
            <div class="field">
              <label class="label">Dirección</label>
              <div class="control">
                <textarea class="textarea" placeholder="Dirección Completa" name="address1" id="address1"></textarea>
              </div>
            </div>

            <div class="field">
              <label class="label">Ciudad</label>
              <div class="control">
                <div class="select">
                  <select name="city" id="city">
                    <option>CDMX</option>
                    <option>Estado de México</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Pais</label>
              <div class="control">
                <div class="select">
                  <select name="country" id="country">
                    <option>Mexico</option>
                    <option>Guatemala</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Teléfono</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="telefono" value="" name="phone" id="phone">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>
              </div>
              <p class="help is-success">This username is available</p>
            </div>
            
            <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-left has-icons-right">
                <input class="input is-danger" type="email" placeholder="Email input" value="hello@" name="email" id="email">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
              </div>
              <p class="help is-danger">This email is invalid</p>
            </div>


            <div class="field">
              <label class="label">Anotaciones</label>
              <div class="control">
                <textarea class="textarea" placeholder="Comentarios" name="notes" id="notes"></textarea>
              </div>
            </div>
                  
            
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-text">Guardar</button>
              </div>
              <div class="control">
                <button class="button is-text">Cancelar</button>
              </div>
            </div>
            
            </form>
    </div>
    </didv>
    </body>