<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/elegir_subir_archivos.css">
  <title>Subir Archivos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>

    <body>
            <form>
                <div class="container">
                    <h2>Subir archivos</h2>

                    <div class="profile-header">
                        <fieldset enabled>
                        <div class="mb-3">
                                <label for="disabledTextInput" class="entrada">Roles</label>
                                <div class="input-group mb-3">
                                    <a class="btn btn-light" href="../controlador/controlador.php?accion=elegir_rol" style="background-color: #FF007A; color:aliceblue">Subir</a>
                                </div>
                            </div>    
                            <div class="mb-3">
                                <label for="disabledTextInput" class="entrada">Curso</label>
                                <div class="input-group mb-3">
                                    <a class="btn btn-light" href="../controlador/controlador.php?accion=anadir_curso" style="background-color: #FF007A; color:aliceblue">Subir</a>
                                </div>
                            </div>                  
                            <div class="mb-3">
                                <label for="disabledTextInput" class="entrada">Materias</label>
                                <div class="input-group mb-3">
                                    <a class="btn btn-light" href="../controlador/controlador.php?accion=anadir_materia" style="background-color: #FF007A; color:aliceblue">Subir</a>
                            </div> 
                            <div class="mb-3">

                                <label for="disabledTextInput" class="entrada">Horario Profesores</label>
                                <div class="input-group mb-3">
                                    <a class="btn btn-light" href="../controlador/controlador.php?accion=horario_p" style="background-color: #FF007A; color:aliceblue">Subir</a>
                            </div> 
                            <div class="mb-3">

                                <label for="disabledTextInput" class="entrada">Horario Estudiantes</label>
                                <div class="input-group mb-3">
                                    <a class="btn btn-light" href="../controlador/controlador.php?accion=horario_e" style="background-color: #FF007A; color:aliceblue">Subir</a>
                            </div>
                            <a href="../controlador/controlador.php?accion=iniciar_sesion" type="button" class="btn btn-secondary">Salir</a>

                        </fieldset>
                    </div>
                </div>
            </form>

    <script src="vista/JAVASCRIPT/j perfil.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
