<?php 

	$conexion=mysqli_connect('localhost','root','','academ');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<link rel="stylesheet" type="text/css" href="tabla.css">
</head>
<script type="text/javascript">


</script>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id cliente</td>
			<td>codCliente</td>
			<td>razon social</td>
			<td>nombre</td>
			<td>cuit </td>	
			

		</tr>

		<?php 
		$sql="SELECT * from cliente";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idcliente'] ?></td>
			<td><?php echo $mostrar['codCliente'] ?></td>
			<td><?php echo $mostrar['razonSocial'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['cuit'] ?></td>
			<
        <input type="button" name="volver" id="boton">
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>