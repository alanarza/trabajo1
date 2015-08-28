<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    
    <div class="container">
    <div class="row">

      <div class="jumbotron">
        <h1>Bienvenido!</h1>
        <p>Bienvenido al sistema de registro de identidad de personas.</p>
        <p><a class="btn btn-primary btn-lg">Ver registros</a></p>
      </div>

      <div class="col-md-2"></div>
      <div class="col-md-8">
             
          <form class="form-horizontal" action="control.php" method="post">
            <fieldset>
              <legend>Registro</legend>

              <input id="action" type="hidden" name="action" value="insert"/>

              <div class="form-group">
                <label for="apellido" class="col-lg-2 control-label">Apellido/s</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido/s">
                </div>
              </div>

              <div class="form-group">
                <label for="nombre" class="col-lg-2 control-label">Nombre/s</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre/s">
                </div>
              </div>

              <div class="form-group">
                <label for="dni" class="col-lg-2 control-label">D.N.I</label>
                <div class="col-lg-10">
                  <input type="numeric" class="form-control" id="dni" name="dni" placeholder="D.N.I">
                </div>
              </div>
   
              <div class="form-group">
                <label class="col-lg-2 control-label">Sexo</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="sexo" id="sexo" value="masculino">
                        Masculino
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="sexo" id="sexo" value="femenino">
                        Femenino
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Nacionalidad</label>
                <div class="col-lg-10">
                  <select class="form-control" id="select" name="nacionalidad">
                    <option>Argentina</option>
                    <option>Chile</option>
                    <option>Peru</option>
                    <option>Bolivia</option>
                    <option>Paraguay</option>
                    <option>Uruguay</option>
                  </select>
                  <br>
                      
                </div>
              </div>

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>

      </div>
      <div class="col-md-2"></div>
         
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>