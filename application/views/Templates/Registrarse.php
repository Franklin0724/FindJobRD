<?php
//$link = mysqli_connect("localhost","root", "vertrigo","personas") or die("no se pudo conectar".mysql_error());

$mysqli = new mysqli("localhost:3307", "root", "Fs799588", "findjobrd");

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
} else{printf("Franklin Sandoval");}

if(isset($_POST['nombreempresa'])){
  if ($resultado = $mysqli->query("insert into empresa (nombre,rnc,actividad,ubicacion,descripcion) values ('{$_POST['nombreempresa']}',
  '{$_POST['rnc']}','{$_POST['actividad']}','{$_POST['ubicacion']}','{$_POST['descripcion']}') ")){
    printf("Se introdujo\n");

    /* liberar el conjunto de resultados */
   

  }

}
  

?>



</br>
</br>
</br>

<h3 align="center"> <b> Datos de la empresa <b/> </h3>
</br>

<div class="row">

      <form action="" method="post">
        <div  class="col-md-12" >

          <div  class="col-md-6">

            <div  class="form-group input-group">
              <span class="input-group-addon">Nombre:</span>
              <input class="form-control" name="nombreempresa" required="Nombre">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">RNC</span>
              <input type="text"  class="form-control" name="rnc" required="rnc">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Actividad</span>
              <input type="text" class="form-control" name="actividad" required="actividad" >
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Ubicacion</span>
              <input type="text" class="form-control" name="ubicacion" required="ubicacion">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Descripcion</span>
              <input type="text" class="form-control" name="descripcion" required="descripcion">
              <div class="input-group col-sm-3">


            </div>
              </div>

                  </div>
        
<div class="input-group col-sm-3">
 <span class="input-group-addon"><span>Pais</span></span>
 <select class="form-control" name="pais">
 <option>Selecciona un pais</option>
 </select>
 </div>
</br>
<div class="input-group col-sm-3">
 <span class="input-group-addon"><span>Ciudad</span></span>
 <select class="form-control" name="ciudad">
 <option>Selecciona una ciudad</option>
 </select>



 </div>



        </div>
   
      </br>
      <h3 align="center"> <b> Representante <b/> </h3>

   
      </br>


      <form action="" method="post">
        <div  class="col-md-12" >

          <div  class="col-md-6">

            <div  class="form-group input-group">
              <span class="input-group-addon">Nombre</span>
              <input class="form-control" name="nombrerepresentante" required="Nombre">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Apellido</span>
              <input type="text"  class="form-control" name="apellido" required="Apellido">
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Contraseña</span>
              <input type="password" class="form-control" name="contraseña" required="contrasenia" >
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Empresa</span>
              <input type="text" class="form-control" name="empresa" required="empresa">
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon">Email</span>
              <input type="text" class="form-control" name="descripcion" required="email">
            </div>
            
            <div class="form-group input-group">
              <span class="input-group-addon">Username</span>
              <input type="text" class="form-control" name="username" required="username">
            </div>

          <div class="form-group input-group">
              <span class="input-group-addon">Telefono</span>
              <input type="text" class="form-control" name="telefono" required="Telefono">
            </div>
              </div>

                  </div>

      </form>
    
<div class="text-center">
          <button type="submit" class="btn btn-primary hvr-buzz" > Registrarse  </button>
            </div>
    </div>
</br>
</br>
</br>