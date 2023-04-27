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
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

			<title>Document</title>
		</head>
		<body >
			<?php
				
				function calcular($valor1,$operacion,$valor2)
				{
					switch($operacion)
					{
                        case 'datos_Usuario': 
                            {
                                header('Location: datos_usuario.php');
                                break;
                            }
                            
						case '+': 
							{
                                
								$resultado = $valor1+$valor2;break;
							}
						case '-': 
							{
								$resultado = $valor1-$valor2;break;
							}
						case '*':
							{
								$resultado = $valor1*$valor2;break;
							}
						case '/':
							{
								$resultado = $valor1/$valor2;break;
							}

						
					}
					return $resultado;
				}
				
				$op1=$_REQUEST['op1'];
				$op2=$_REQUEST['op2'];	
				$opera=$_REQUEST['opera'];
                
				$res=0;
                
				echo 'El resultado es ',calcular($op1,$opera,$op2);
			?>
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
 