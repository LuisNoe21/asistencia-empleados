<?php
?>

<link rel="stylesheet" href="css/styles.css">
<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
    <a class="navbar-brand" href="#">
         <img class="img-fluid" style="max-width: 200px" " loading="lazy"> <!--aqui va el src -->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" id="botonMenu" aria-label="Mostrar u ocultar menú">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="practicantes.php">Empleados <i class="fa fa-users"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="attendance_register.php">Registro de Asistencia <i class="fa fa-check-double"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="attendance_report.php">Reporte de Asistencia <i class="fa fa-file-alt"></i></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="logout.php">Cerrar Sesion<i class="fa fa-file-alt"></i></a>
            </li>
         
        </ul>
    </div>
</nav>