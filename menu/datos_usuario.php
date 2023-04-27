<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
            <form method='post' action='mostrar_datos.php'>
				<table >
					<th colspan='2'>
						<h1>Datos Usuario</h1>
					</th>
					<tr>
                    <td>Nombres</td>
                    <td><input type='text' name='nomb' size='10' maxleang='50'></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type='text' name='apel' size='10' maxleang='50'></td>
                </tr>
                <tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type='' name='dire' size='10' maxleang='50' minlength='5'></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type='email' name='email' size='10' maxleang='3'> 
                    </td>
                </tr>
                <tr>
                    <td>Movil</td>
                    <td><input type='text' name='movil' size='10' maxleang='10'> 
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-outline-primary">Enviar</button></td>
                </tr>
					
				</table> 
			</form>
            <form action="calculadora.php">
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