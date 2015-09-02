<?php 

if(!isset($_SESSION)){
  session_start();
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido!</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>  

    <style type="text/css">
      body {
        min-height: 2000px;
        padding-top: 70px;
      }
    </style>

  </head>

  <body>

    <?php if ($_SESSION['id'] == ''): ?>

      <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Registro Nacional de Personas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
             
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Iniciar Sesion <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <fieldset>

                <div class="form-group">

                  <form action="control.php" method="post">
                    
                    <div class="form-group">
                      <div class="col-lg-12">
                        <input type="text" class="form-control input-sm" id="user" name="user" placeholder="Usuario" required>
                      </div>
                    </div>

                    <div class="form-group" >
                      <div class="col-lg-12" style="margin-top: 5px;">
                        <input type="password" class="form-control input-sm" id="pass" name="pass" placeholder="Contraseña" required>
                      </div>
                    </div>

                    <input id="action" type="hidden" name="action" value="login"/>

                    <div class="col-sm-12" align="center"  style="margin-top: 10px;">         
                      <button type="submit" class="btn btn-success btn-sm">Ingresar</button>
                    </div>

                  </form>
                </div>
              </fieldset>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <?php else: ?>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Registro Nacional de Personas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $_SESSION['nombre']?> <span class="caret"></span></a>
              <ul class="dropdown-menu">

                <li><a href="#" data-toggle="modal" data-target="#myModal">Agregar Registro</a></li>
                
                <li class="divider"></li>
                <li><a href="control.php?action=salir">Cerrar Sesion</a></li>

              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <?php endif; ?>

  <div class="container">
    <div class="row">
     
      <div class="jumbotron">
        <h1>Bienvenido!</h1>
        <p>Bienvenido al sistema de registro nacional de identidad de personas.</p>
        <p><a class="btn btn-primary btn-lg">Ver registros</a></p>
      </div>
    
      <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registrar Persona</h4>
              </div>
              <div class="modal-body">
               

          <form class="form-horizontal" action="control.php" method="post">
            <fieldset>
             

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
                <label for="fecha" class="col-lg-2 control-label">Fecha Nacimiento</label>
                <div class="col-lg-10">
                  <input type="date" class="form-control" id="fecha" name="fecha">
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
                <label for="provincia" class="col-lg-2 control-label">Provincia</label>
                <div class="col-lg-10">
                  <select class="form-control" id="provincia" name="provincia">
                    <option>Buenos Aires</option>
                    <option>Catamarca</option>
                    <option>Chaco</option>
                    <option>Chubut</option>
                    <option>Córdoba</option>
                    <option>Corrientes</option>
                    <option>Entre Ríos</option>
                    <option>Formosa</option>
                    <option>Jujuy</option>
                    <option>La Pampa</option>
                    <option>La Rioja</option>
                    <option>Mendoza</option>
                    <option>Misiones</option>
                    <option>Neuquén</option>
                    <option>Río Negro</option>
                    <option>Salta</option>
                    <option>San Juan</option>
                    <option>San Luis</option>
                    <option>Santa Cruz</option>
                    <option>Santa Fe</option>
                    <option>Santiago del Estero</option>
                    <option>Tierra del Fuego, Antártida e Isla del Atlántico Sur</option>
                    <option>Tucumán</option>
                  </select>
                  <br> 
                </div>
              </div>     

              <div class="form-group">
                <label for="domicilio" class="col-lg-2 control-label">Domicilio</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio">
                </div>
              </div>

              <div class="form-group">
                <label for="fecha_exp" class="col-lg-2 control-label">Fecha expedición</label>
                <div class="col-lg-10">
                <input type="date" class="form-control" name="exp" id="fecha_exp" value="<?php echo date('Y-m-d'); ?>" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="fecha_ven" class="col-lg-2 control-label">Fecha vencimiento</label>
                <div class="col-lg-10">
                <input type="text" class="form-control" name="ven" id="fecha_ven" value="<?php echo date('Y-m-d', strtotime("+15 Years")); ?>" disabled>
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-2 control-label">Donante?</label>
                <div class="col-lg-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="donante" id="donante" value="si">
                        Si
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="donante" id="donante" value="no">
                        No
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="tramite" class="col-lg-2 control-label">Num de Tramite</label>
                <div class="col-lg-10">
                  <input type="numeric" class="form-control" id="tramite" name="tramite" placeholder="Numero de Tramite">
                </div>
              </div>

              <input id="action" type="hidden" name="action" value="insert"/>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

              </fieldset>
          </form> 

            </div>


            </div>

          </div>
        </div>

    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>