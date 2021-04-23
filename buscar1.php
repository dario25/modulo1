<form roles="form" method="POST">
  <label for="email" class="mr-sm-2">nombre</label> <br>
  <input type="email" class="form-control mb-2 mr-sm-2" placeholder="ingresa el nombre" name="nombre" "> <br>
  <label for="pwd" class="mr-sm-2">Busqueda</label> <br>
  <BUTTON type="submit" class="form-control mb-2 mr-sm-2" placeholder="consultar" id="nombre">
  <div class="form-check mb-2 mr-sm-2">
   
  </div>
  <button type="submit" class="btn btn-primary mb-2">Submit</button> <br>
</form>
<?php
if (_$POST) {
	echo "valor enviado:"._$POST['nombre']
	require('conexion.php')
	 //$con=Conectar();
	 //$idPoliza=('codCliente	')
	// $Sql='SELECT idPoliza,codCliente,fechaIngreso,FechaSalidad,tipoDocumento,alicuota form  FROM poliza  WHERE '
	// $Smt= $con - > prepare($Sql)
	//  $result= $con - > $smt - > execute (  array('idPoliza' => ,'codCliente' ));
  //$row =$smt - >fetchAll(\PDO::FETCH_OBJ);
  //if(count($row)) {echo("si existe")


  //} else {
//"el usuario no ingreso dato"


 // }
//}
    ?>