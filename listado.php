<?php
				require_once("PHPPaging.lib.php");
				mysql_connect("localhost","root","udc");
				mysql_select_db("registros");
				$pagina = new PHPPaging;
				$pagina->agregarConsulta("select nombre, apellido from usuarios");
				$pagina->ejecutar();
				while($res=$pagina->fetchResultado()){
				echo $res['nombre']. " " . $res['apellido'] . '<br>';
				}
				echo 'Paginas '.$pagina->fetchNavegacion();
?>