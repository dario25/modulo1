

<?php 

?>
<?php 

include("connect_db.php");


if (isset($_POST['enviar'])) {
      $name = trim($_POST['idPoliza']);
      $email = trim($_POST['codCliente  ']);
      $fechaInicio = date('d/m/y');
      $fechaFinal = date('d/m/y');
      $alicuota = trim($_POST['tipoDocumento  ']);
            $alicuota = trim($_POST['alicuota']);

      $importe = trim($_POST['importe']);





      $consulta = "INSERT INTO poliza (codCliente,nombre, email, fecha_reg) VALUES ('$name','$email','$fechaInicio',fechaFinal, 
      $tipoDocumentol, $alicuota ,$importe)";
      $resultado = mysqli_query($mysqli,$consulta);
      if ($resultado) {
        ?> 
        <h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
      } else {
        ?> 
        <h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
      }
    }   else {
        ?> 
        <h3 class="bad">¡Por favor complete los campos!</h3>
    }

>?




