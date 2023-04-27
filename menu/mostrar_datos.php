<!doctype html>
	<html>
		<head>
			<title>Caculadora del SENA</title>
			<meta charset="UTF-8">
  			<meta name="description" content="La super calculadora">
  			<meta name="keywords" content="calculadora,funciones,matematicas">
  			<meta name="author" content="Nataly Molano">
  			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href='miestilo.css' type='text/css'/>
			<link rel="icon" href='imagenes/perro.jpg' type='image/png'/>
			<title>Usuario</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		</head>
		<body bgcolor='#002525' text='#ffffff' background='imagenes/calculadora2.png'>
			<?php
				$nombre=$_REQUEST['nomb'];
				$apellido=$_REQUEST['apel'];
                $direccion=$_REQUEST['dire'];
				$email=$_REQUEST['email'];	
                $movil=$_REQUEST['movil'];	
				
                echo "<h1>Datos Usuario</h1>
                <table  class='table table-striped'>
                <thead>
                  <tr>
                    <th scope='col'>Nombre</th>
                    <th scope='col'>Apellido</th>
                    <th scope='col'>Direccion</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Telefono</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope='row'>$nombre</th>
                    <td>$apellido</td>
                    <td>$direccion</td>
                    <td>$email</td>
                    <td>$movil</td>
                  </tr>
                  
                </tbody>
              </table>";
                
			?>
			<form action="datos_usuario.php">
				<table aling="center">
					<tr>
							<td>
								<input type="submit" value="volver">
							</td>				
					</tr>
				</table>

			</from>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		</body>

	</html>
 