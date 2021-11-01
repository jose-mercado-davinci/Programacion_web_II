<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Hole Studios - Historia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <?php
    include 'funciones/header.php';
  ?>
  
  <main>
    <section class="bg-light p-5 rounded-lg">
      <div class="container d-flex align-items-center">
        <div class="row">
          <div class="col">
            <h1 class="display-4">Conocé un poco de nuestra historia</h1>
            <p class="lead">También iniciamos este camino en la música tocando la guitarra, la batería, etc. Conviviendo con cables y computadoras el aprendizaje técnico era necesario. Queremos ayudarte en tu camino hacia la producción desde la interpretación porque también lo hemos recorrido.</p>
            <hr class="my-4">
            <p>Conocé nuestros cursos</p>
            <a class="btn btn-danger btn-lg" href="cursos.html" role="button">Ver Cursos</a>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row my-4">
          <div class="col-lg-6 py-4 my-lg-0">
            <img src="../img/cd-player.jpg" class="img-fluid" alt="Alberto Fernandez tocando guitarra">
          </div>
          <div class="col-lg-6 py-4 my-lg-0 d-flex flex-column justify-content-between justify-content-lg-center">
            <h2 class="text-center mb-3 mb-lg-3"> ¡Nos encanta la música desde los tiempo de los cassettes y cds!</h2>
            <p> Todo empezó en aquellos tiempos donde aún no existía plataformas de música, en donde la música se pasaba de pendrive en pendrive en formato mp3. Cuando dimos nuestros primeros pasos en la música no había tanto información como la hay ahora, y hemos recorrido un largo camino... Ahora queremos enseñarte lo que hemos aprendido</p>
          </div>
        </div>
      </div>
      </section>

      <section>
        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-xxl-10 mb-4">
              <h2 class="my-4">Galería</h2>
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../img/banda-tocando.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Primeros ensayos</h3>
                      <p>También empezamos sabiendo nada y ensayando en casa de nuestros padres</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="../img/discos.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Escuchamos un montón de música</h3>
                      <p>Amamos los álbumes y nos gusta pasar el tiempo escuchando mucha música</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="../img/banda-grabando.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h3>Muy temprano entramos a los estudios de grabación</h3>
                      <p>De los ensayos también pasamos mucho tiempo grabando, por lo que sabemos lo que es estar detrás del micrófono</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php
    include 'funciones/footer.php';
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>