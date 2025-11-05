<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Rody</title>
    <!-- Bootstrap CSS desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px; /* Espacio para la barra de navegación fija */
        }
    </style>
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Club Rody</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galería</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido principal -->
<div class="container mt-4">
    <div class="text-center my-5">
        <h1>Bienvenidos al Club Rody</h1>
        <p class="lead">Un espacio para la comunidad, el deporte y la amistad.</p>
    </div>

    <!-- Tarjetas de actividades -->
    <div class="row g-4">
        <!-- Actividad 1: Fútbol Infantil (con foto real) -->
        <div class="col-md-6">
            <div class="card">
                <img src="img/FutbolF.png" class="card-img-top" alt="Fútbol Femenino">
                <div class="card-body">
                    <h5 class="card-title">Fútbol Infantil</h5>
                    <p class="card-text">Entrenamientos los martes y jueves de 17 a 19 hs. Para niñas de 6 a 12 años.</p>
                    <a href="#" class="btn btn-success">Más info</a>
                </div>
            </div>
        </div>

        <!-- Actividad 2: Taekwondo (con foto real) -->
        <div class="col-md-6">
            <div class="card">
                <img src="img/karate.png" class="card-img-top" alt="Taekwondo">
                <div class="card-body">
                    <h5 class="card-title">Taekwondo</h5>
                    <p class="card-text">Clases para todas las edades. Instructores certificados. Sábados y domingos.</p>
                    <a href="#" class="btn btn-success">Más info</a>
                </div>
            </div>
        </div>

        <!-- Actividad 3: Ajedrez (imagen de ejemplo por ahora) -->
        <div class="col-md-6">
            <div class="card">
               <img src="img/ajedrez.png" class="card-img-top" alt="Ajedrez"> 
                <div class="card-body">
                    <h5 class="card-title">Ajedrez para Todos</h5>
                    <p class="card-text">Clases gratuitas los miércoles y sábados. ¡Abierto a niños, jóvenes y adultos!</p>
                    <a href="#" class="btn btn-success">Más info</a>
                </div>
            </div>
        </div>
    </div>
/div>

<!-- Bootstrap JS (necesario para menú móvil) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
