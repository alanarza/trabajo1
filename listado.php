<?php
				require_once("PHPPaging.lib.php");
				mysql_connect("localhost","root","udc");
				mysql_select_db("registros");
				$pagina = new PHPPaging;
				$pagina->agregarConsulta("select nombre, apellido, dni, nacimiento, nacionalidad, provincia, domicilio from usuarios");
				$pagina->ejecutar();
?>
			
			<table class="table table-striped table-hover ">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Nombre</th>
			      <th>Apellido</th>
			      <th>Dni</th>
			      <th>Nacimiento</th>
			      <th>Nacionalidad</th>
			      <th>Provincia</th>
			      <th>Domicilio</th>
			      
			    </tr>
			  </thead>
			  <tbody>

			<?php while($res=$pagina->fetchResultado()){    ?>

				<tr>
			      <td>#</td>
			      <td><?php echo $res['nombre']; ?></td>
			      <td><?php echo $res['apellido']; ?></td>
			      <td><?php echo $res['dni']; ?></td>
			      <td><?php echo $res['nacimiento']; ?></td>
			      <td><?php echo $res['nacionalidad']; ?></td>
			      <td><?php echo $res['provincia']; ?></td>
			      <td><?php echo $res['domicilio']; ?></td>
			      
			    </tr>

				
			<?php }	echo 'Paginas: '.$pagina->fetchNavegacion(); ?>


 </tbody>
</table> 




