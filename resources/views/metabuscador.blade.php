<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form  method="POST"
    action="{{ url('buscar_termino')}}"
    class="form-horizontal">
    @csrf
        <fieldset>

        <!-- Form Name -->
        <legend><h1>Realizar búsqueda en varios Motores</h1></legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Ingrese termino de busquedad</label>
          <div class="col-md-4">
          <input id="buscar_termino" name="buscar_termino" type="text" placeholder="Ingrese busqueda" class="form-control input-md">

          </div>
        </div>




        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios">Seleccione motor de búsqueda</label>
          <div class="col-md-4">
            <label class="radio-inline" for="radios-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              Google
            </label>
            <br>
            <label class="radio-inline" for="radios-1">
              <input type="radio" name="motores" id="motores-1" value="2">
              Bing
            </label>
            <br>
            <label class="radio-inline" for="radios-2">
                <input type="radio" name="motores" id="motores-2" value="3">
                yahoo
              </label>
              <br>
              <label class="radio-inline" for="radios-3">
                <input type="radio" name="motores" id="motores-3" value="4">
                yandex
              </label>
              <br>
              <label class="radio-inline" for="radios-4">
                <input type="radio" name="motores" id="motores-4" value="5">
                duckduckgo
              </label>
              <br>
              <label class="radio-inline" for="radios-5">
                <input type="radio" name="motores" id="motores-5" value="6">
                Aol
              </label>
              <br>
              <label class="radio-inline" for="radios-6">
                <input type="radio" name="motores" id="motores-6" value="7">
                Seznam
              </label>
              <br>
              <label class="radio-inline" for="radios-7">
                <input type="radio" name="motores" id="motores-7" value="8">
                youtube
              </label>
          </div>
        </div>
    <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button id="termino" name="termino" class="btn btn-primary">Buscar</button>
            </div>
          </div>
        </fieldset>
        </form>

</body>
</html>
