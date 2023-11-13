
    <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestionar reportes 2.5</title>
<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
<!-- Archivo CSS  -->
  <link rel="stylesheet" href="vista/CSS/gestionar_reportes.css">
  
</head>
<body class="background">
  <div class="container mt-5 content">
    <h1>Gestionar Reportes</h1>
    <hr>
<!-- Agregar Profesor -->
  <div class="card">
    FILTROS
  <div class="card-body">
    <form id="formAgregarProfesor">
        <form id="rolForm">
            <div class="form-group">
                <input type="date">           
            </div>
        </form>
<BR>
        <form id="rolForm">
            <div class="form-group">
                <label for="rolSelect">SELECCIONE CURSOS:</label>
                <select class="form-control" id="rolSelect">
                    <option value="profesor">SELECCIONAR CURSOS</option>
                    <option value="601">601</option>
                    <option value="701">701</option>
                    <option value="802">802</option>
                    <option value="901">901</option>
                    <option value="1001">1001</option>
                    <option value="1101">1101 </option>
                </select>
            </div>
        </form>
        <BR>
        <form id="rolForm">
            <div class="form-group">
                <label for="rolSelect">SELECCIONE MATERIAS:</label>
                <select class="form-control" id="rolSelect">
                    <option value="profesor">SELECCIONE MATERIAS</option>
                    <option value="Español">Español</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Matematicas">Matematicas</option>
                    <option value="Filosofia">Filosofia</option>
                    <option value="Quimica">Quimica</option>
                    <option value="Estadistica">estadistica</option>
                </select>
            </div>
        </form>
</form>
</div>
</div>
<!-- Lista de Profesores -->
  <div class="mt-4">
    <h3 style="color: #FF007A;">REPORTES</h3>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th STY>CURSOS</th>
          <th>MATERIAS</th>
          <th>FECHA</th>
          <th>INGRESAR</th>
        </tr>
        <tr>
            <th>601</th>
            <th>Español</th>
            <th>2023/04/31</th>
            <th><button href="controlador/controlador.php?accion=consultar_reporte">Boton</button></th>
          </tr>
          <tr>
            <th>702</th>
            <th>Ingles</th>
            <th>2022/11/20</th>
            <th><button href="controlador/controlador.php?accion=confirmar_correo">Boton</button></th>
          </tr>
          <tr>
            <th>703</th>
            <th>Quimica</th>
            <th>2023/04/31</th>
            <th><button href="controlador/controlador.php?accion=confirmar_correo">Boton</button></th>
          </tr>
          <tr>
            <th>901</th>
            <th>Algebra</th>
            <th>2022/07/16</th>
            <th><button href="controlador/controlador.php?accion=confirmar_correo">Boton</button></th>
          </tr>
          <tr>
            <th>603</th>
            <th>Sociales</th>
            <th>2023/02/10</th>
            <th><button href="controlador/controlador.php?accion=confirmar_correo">Boton</button></th>
          </tr>
          <tr>
            <th>1101</th>
            <th>Biologia</th>
            <th>2021/06/20</th>
            <th><button href="controlador/controlador.php?accion=confirmar_correo">Boton</button></th>
          </tr>
          <tr>
            <th>603</th>
            <th>Ingles</th>
            <th>2023/12/05</th>
            <th><button href="controlador/controlador.php?accion=confirmar_correo">Boton</button></th>
          </tr>
          <tr>
            <th>1103</th>
            <th>Matematicas</th>
            <th>2022/03/19</th>
            <th><button href="controlador/controlador.php?accion=confirmar_correo">Boton</button></th>
          </tr>
          <tr>
            <th>903</th>
            <th>Calculo</th>
            <th>2020/08/23</th>
            <th><button href="controlador/controlador.php?accion=confirmar_correo">Boton</button></th>
          </tr>
          <tr>
            <th>801</th>
            <th>Educacion fisica</th>
            <th>2024/10/10</th>
            <th><button href="controlador/controlador.php?accion=confirmar_correo">Boton</button></th>
          </tr>
      </thead>
      <tbody id="listaProfesores">
<!-- Aquí se cargarán los profesores -->
</tbody>
</table>
</div>
</div>
<!-- Bootstrap JS y jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
  <!--  JavaScript  -->
  <script src="vista/JAVASCRIPT/horario_profes_a_cursos35.js"></script>
</body>
</html>

