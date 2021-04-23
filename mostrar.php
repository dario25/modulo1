



<?php 
$inc = include("connect_db.php");
if ($inc) {
	$consulta = "SELECT * FROM poliza";
	$resultado = mysqli_query($mysqli,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id= $row['idPoliza'];
	    $codigo = $row['codCliente'];
	    $documento = $row['tipoDocumento'];
	    $fechainicio = $row['FechaIngreso'];
	    $fechafin= $row['FechaSalida'];
	     $impuesto = $row['alicuota'];
	     $importe= $row['importe'];



	    ?>

        <div>
        	<script type="text/javascript">
        		

        	
}
        	</script>
        	<h2><?php echo $id; ?></h2>
        	<div>
        		<p>
        			<label><b>Codigo: </b>  <?php  echo $codigo;?><br> </label>
        		    <b>Tipo: </b> <?php echo$documento; ?><br>
        		    <b>Fecha Registro: </b> <?php echo $fechainicio; ?><br>
        		    <b>Fecha Registro: </b> <?php echo $fechafin; ?><br>

        		    <b>Impuesto: </b> <?php echo $impuesto; ?><br>

        		</p>
        	<button type="button"  name="volver"> <a href="index.html"> <font color="black" > Volver  </font></a> </button>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>