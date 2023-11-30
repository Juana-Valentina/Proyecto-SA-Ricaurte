  <?php
  require "../controlador/conexionBaseDatos.php";      

  extract ($_REQUEST);

  $Conexion=Conectarse();

  $Documento= $_REQUEST['Identificacion'];

  $sql = "SELECT nombre_rol FROM asignacion_rol where id_documento = '$Documento'";
  $sql1 = "SELECT * FROM registropersona where id_documento = '$Documento'";
  $sql2 = "SELECT correo_instituicional from seguridad where id_documento = '$Documento'";

  $resultado = $Conexion->query($sql);
  $resultado1 = $Conexion->query($sql1);
  $resultado2 = $Conexion->query($sql2);

  $perfilUsuario = $resultado1->fetch_object();
  $correoUsuario = $resultado2->fetch_object();

  $rol = $resultado->fetch_object();
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/perfil.css">
    <title>Perfil de Usuario</title>
  </head>
  <body>
    <div class="container mt-5">
    <div class="row">
    <div class="col-md-4">
    <div class="profile-header text-center">
      <img id="profileImage" src="Logo.png" alt="Foto de perfil" class="img-fluid">
    </div>
  </div>
    <div class="col-md-8">
    <div class="profile-details">
      <h1 class="text-center">
            <h2>Perfil <?php  echo  $rol->nombre_rol;?></h2>
          </h1>
      <form id="FormActualizar" name="FormAc" method="post" action="../controlador/actualizarPerfil.php">
    <div class="form-group">
      <label for="fullname">Nombre completo:</label>
      <input name="fullname" type="text" id="fullname" name="fullname" value="<?php echo $perfilUsuario->nombre_usuario ?>" size="40" />
    </div>
    <div class="form-group">
      <label for="phone">Número de Teléfono:</label>
      <input name="phone" type="text" id="phone" name="phone" value="<?php echo $perfilUsuario->telefono ?>" size="40" />
    </div>
    <label for="Identificacion">Identificacion:</label>
    <input name="Identificacion" type="text" id="Identificacion" name="Identificacion" value="<?php echo $perfilUsuario->id_documento ?>" readonly size="40" />
    <label for="correo">Correo institucional:</label>
    <input name="correo" type="text" id="correo" name="correo" value="<?php echo $correoUsuario->correo_instituicional ?>" readonly size="40" />
    <?php if ($rol->nombre_rol == "Profesor") {
        ?><a href="gestionar_asistencia_profesor22.php?Identificacion=<?php echo $Documento ?>" class="btn btn-danger" id="cancelarBtn">Regresar</a><?php
          }elseif ($rol->nombre_rol == "Coordinacion"){
            ?><a href="gestionar_reportes.php?Identificacion=<?php echo $Documento ?>" class="btn btn-danger" id="cancelarBtn">Regresar</a><?php
          }elseif ($rol->nombre_rol == "Secretaria") {
            ?><a href="elegir_subir_archivos.php?Identificacion=<?php echo $Documento ?>" class="btn btn-danger" id="cancelarBtn">Regresar</a><?php
          }else {
            ?><a href="gestionar_asistencia_estudiante21.php?Documento=<?php echo $Documento ?>" class="btn btn-danger" id="cancelarBtn">Regresar</a><?php
          }
    ?>
    <button type="submit" class="btn btn-primary" id="saveButton" name="saveButton">Guardar Cambios</button>

  </form>
  </div>
  </div>
  </div>
  </div>
    <script src="vista/JAVASCRIPT/perfil.js"></script>
  </body>
  </html>
