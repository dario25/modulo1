<?php
$inc = include 'connect_db.php';
if($inc)  {
$consulta="SELECT * FROM poliza";
$resultado = mysqli_query($mysqli,$consulta);
if ($resultado) {
  while ($rows=$resultado->fetch_array ()) {

  $id=$rows['idPoliza']
  $cliente=$rows['codCliente']
  $Fechainicio=$rows['fechaingreso']
  $Fechafinal=$rows['fechaSalida']
  $tipoD=$rows['tipoDocumento']
  $alicuota=$rows['alicuota']
  $importe=$rows['importe']


?> <div>

  
  <h2> <?php echo $idPoliza;?></h2>
  <div>
    <p>
      <b>codigocliente: <?php echo $codCliente;?></b>
      <b>fecha ingreso: <?php echo $Fechainicio;?></b>

      <b>Fecha Salida: <?php echo $Fechafinal;?></b>

      <b>topo Documento: <?php echo $tipoD;?></b>
      <b>alicuota: <?php echo $alicuota;?></b>



}
}
}

    </p>
    </b>
  </div>
</div>
</div>
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
          <h2><?php echo $id; ?></h2>
          <div>
            <p>
              <b>Codigo: </b>  <?php  echo $codigo;?><br>
                <b>Tipo: </b> <?php echo$documento; ?><br>
                <b>Fecha Registro: </b> <?php echo $fechainicio; ?><br>
                <b>Fecha Registro: </b> <?php echo $fechafin; ?><br>

                <b>Impuesto: </b> <?php echo $impuesto; ?><br>

            </p>
          </div>
        </div> 
      <?php
      }
  }
}
?>