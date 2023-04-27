<!doctype html>
	<html>
		<head>
			<title>Calculadora SENA</title>
			<meta charset="UTF-8">
  			<meta name="description" content="La super calculadora">
  			<meta name="keywords" content="calculadora,funciones,matematicas">
  			<meta name="author" content="Nataly Molano">
  			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href='miestilo.css' type='text/css'/>
			<link rel="icon" href='imagenes/perro.jpg' type='image/png'/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
			<title>Document</title>
		</head>
		<body>
			<form method='post' action='calculo.php'>
				<table >
					<th colspan='2'>
						<h1>Bienvenido al Menu</h1>
					</th>
                    <tr>
						<td>Seleccione una opcion</td>
						<td><button class="btn btn-outline-secondary" type="submit" name="opera" value="datos_Usuario">Datos Usuario</a></button>
                        <button class="btn btn-outline-secondary" type="submit" name="opera" value="+">Sumar</a></button>
                        <button class="btn btn-outline-secondary" type="submit" name="opera" value="-">Restar</a></button>
                        <button class="btn btn-outline-secondary" type="submit" name="opera" value="*">Multiplicar</a></button>
                        <button class="btn btn-outline-secondary" type="submit" name="opera" value="/">Dividir</a></button></td>
					</tr>
                
					<tr>
						<td>Operador 1</td>
						<td><input type='number' name='op1' require></td>
					</tr>
                    
					<tr>
						<td>Operador 2</td>
						<td><input type='number' name='op2' require></td>
					</tr>
					
				</table> 
			</form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		</body>

	</html>
 