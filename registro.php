<!DOCTYPE html>

<html>
<head>

	<title> Poliza</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
        <link rel="ico" href="imagen.ico>">  >

  
    
 

</head>
<style type="text/css">
	legend{
color: #00aae4;
font-size: 20px;
font-family: arial


  }
label{
  display: inline-block;
  width: 80px;
  height: 10px
  margin 40px;
  color:  #FFFFFF ;

font-size: 1em;
	font-family: arial;
}  
body {

}
div {
  border-spacing: 12px;

}
}
	

b {
  font-size: 8px;
  margin: left;
  align-content: center;

}
input{
 width: 300px;
  font-size: 20px;
  padding: 12px;
  border-color: blue;

}
 {
   width: 4px;
   margin: left;


}
option {width: 300px;
  font-size: 20px;
  padding: 12px;




}

h3 {

color: #00aae4;
font-size: 140px;
font-family: arial

}

#boton{
  {

background: #31384A;
color:#fff;
padding:20px;
text-align: center;
}

#boton:hover {

 cursor: pointer;
  }
</style>

<body background="Imagen/fondo1.jpg" style="background-attachment: fixed" >
  
	<form method="post">
    <center>
<form method="post" action="" >
	<header>
  <fieldset> <center></>
    <legend  ><b>Registro  de poliza</b></legend>
   <center>
   </header>
  <span class="12">
    <div class="form-group">
     <br> <label  ><b>Ingresa tu nombre</b></label>
      <input type="number name="nombre" class="form-control" placeholder="Ingresa tu nombre" /> </br>
    </div>
    <div class="form-group">
      <br>
      <label ><b>codCliente/b></label>
      <input type="number" value"<<?php  ?>" name="empresa" class="form-control"  required placeholder="empresa"/>
    </br>
    </div>


    <div class="form-group">
      <br>
      <label ><b>Contructora</b></label>
      <input type="text" name="Contructora" class="form-control"  placeholder="Contructora" />
      <br>
    </div>
    <div class="form-group">
      </br>
      <label ><b>fecha inico  </b></label>
      <input type="date" name="fechaInicio" class="form-control" required placeholder="fechaInicio" />
    </br>
    </div>
    <div class="form-group"> <br>
</br>
      
    </div>
  <div class="form-group">
          <label ><b>fecha final  </b></label>


    <input type="date" name="fechaFinal" class="form-control" required="" placeholder="fechaFinal">
    
  </div>
  <div class="form-group">
      <br>
      <label ><b>alicuota</b></label>
      <input type="number" name="alicuota" min="1" pattern="^[0-9]+"" form-control"  required placeholder="alicuota"/>
    </br>
    </div>
<div class="form-group">
      <br>
      <label ><b>importe</b></label>
      <input type="number" name="importe"" min="1" pattern="^[0-9]+"  form-control" required placeholder="importe"/>
    </br>
    </div>

      
    </div>
    <br>
<input type="button" name="enviar"  value="enviar" id="boton">
	</form>
  <?php 
include ("insertar.php")
  ?>
  </header>
  





	</header>
  

</body>
</html>