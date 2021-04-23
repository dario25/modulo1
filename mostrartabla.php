<?php 

	$conexion=mysqli_connect('localhost','root','','academ');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="tabla.css">
		<link rel="icon"  href="icop.ico">
</head>
<script type="text/javascript">


</script>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id poliza</td>
			<td>codCliente</td>
			<td>tipoDocumento</td>
			<td>Fecha ingreso</td>
			<td>Fecha Salidad</td>	
			<td>alicuota</td>
			<td>importe</td>	

		</tr>

		<?php 
		$sql="SELECT * from poliza";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idPoliza'] ?></td>
			<td><?php echo $mostrar['codCliente'] ?></td>
			<td><?php echo $mostrar['tipoDocumento'] ?></td>
			<td><?php echo $mostrar['FechaIngreso'] ?></td>
			<td><?php echo $mostrar['FechaSalida'] ?></td>
			<td><?php echo $mostrar['alicuota'] ?></td>
			<td><?php echo $mostrar['importe'] ?></td>


		</tr>
	<?php 
	}
	 ?>
	</table>
<footer>
	
			<button> <a href="index.html"> volver</a></button>

</footer>
</body>
</html>