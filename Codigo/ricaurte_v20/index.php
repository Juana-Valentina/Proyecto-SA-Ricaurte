<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuración del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio IED Ricaurte</title>

    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Enlace a la hoja de estilos personalizada -->
    <link rel="stylesheet" href="vista/CSS/index.css">
</head>
<body>
    <!-- Contenedor principal -->
    <div class="background">
        <div class="container-fluid">

            <!-- Encabezado con el nombre del colegio -->
            <div class="row">
                <div class="col-md-12">
                    <h1>Colegio IED Ricaurte</h1>
                </div>
            </div>

            <!-- Sección de Visión y Misión -->
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <h2>Visión</h2>
                        <!-- Descripción de la visión del colegio -->
                        <p>Para el año 2016 el Colegio Ricaurte I.E.D. será reconocido a nivel de la Localidad de Los Mártires, por la calidad de la educación que reciben las personas que en él se forman; su compromiso con la sociedad, su formación en el SER, el SABER, el SABER HACER y el SABER CONVIVIR, desde la acción reflexiva, participativa y crítica, en el marco de una propuesta humanística de organización por ciclos, articulada con la educación superior, de manera dinámica, flexible e innovadora, sustentada sobre las competencias académicas, tecnológicas, científicas, artísticas y sociales.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <h2>Misión</h2>
                        <!-- Descripción de la misión del colegio -->
                        <p>El Colegio Ricaurte I.E.D forma integralmente a sus estudiantes, propiciando el desarrollo de las distintas dimensiones del ser humano y garantizando a través de la reflexión, la apropiación crítica y la participación activa, el acceso a las herramientas necesarias para la construcción de su proyecto de vida que implique el mejoramiento del entorno individual, social y ambiental.</p>
                    </div>
                </div>
            </div>

            <!-- Botón de ingreso -->
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mt-3">
                    <!-- Enlace al controlador para iniciar sesión -->
                    <a href="controlador/controlador.php?accion=iniciar_sesion" class="btn btn-custom">Ingresar</a>
                </div>
            </div>

            <!-- Información de contacto -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Detalles de contacto para SEDE A -->
                                <div class="contact-item">
                                    <strong>Teléfono:</strong> (1)2475199
                                </div>
                                <div class="contact-item">
                                    <strong>DANE:</strong> 111001041459
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Detalles de contacto adicionales para SEDE A -->
                                <div class="contact-item">
                                    <strong>Dirección (SEDE A):</strong> Cra. 27 # 7 - 48
                                </div>
                                <div class="contact-item">
                                    <strong>ICFES:</strong> 216440
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <!-- Detalles de contacto para SEDE B -->
                                <div class="contact-item">
                                    <strong>Dirección (SEDE B):</strong> 
                                    <!-- Enlace al controlador para iniciar sesión en SEDE B -->
                                    <a href="controlador/controlador.php?accion=iniciar_sesion_a" class="black-link">Calle 10 # 29 - 64</a>
                                </div>
                                <div class="contact-item">
                                    <strong>NIT:</strong> 800.243.182-7
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Información adicional -->
                                <div class="contact-item">
                                    <strong>Bogotá D.C.</strong>
                                </div>
                                <div class="contact-item">
                                    <strong>Correo:</strong> cedricaurte14@educacionbogota.edu.co
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="vista/JAVASCRIPT/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
