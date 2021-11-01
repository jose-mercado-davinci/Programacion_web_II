<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Black Hole Studio - Home</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <h1 class="display-4">Cursos de Producción Musical para músicos</h1>
            <p class="lead">Cursos de audio y producción musical para el Home Studio especialmente creado para músicos
            </p>
            <hr class="my-4">
            <p>Conocé nuestros cursos</p>
            <a class="btn btn-danger btn-lg" href="cursos.php" role="button">Ver Cursos</a>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container p-3">
        <article>
          <div class="row">
            <div class="col-lg-6 p-lg-2 d-flex align-items-center">
              <img src="img/banda.jpg" class="img-fluid" alt="Banda tocando">
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 d-flex flex-column justify-content-around">
              <h2 class="text-center mb-4">¿Para quiénes son estos cursos?</h2>
              <p class="lh-lg">Estos cursos están dirigidos a instrumentistas, cantantes, cantautores, compositores y
                bandas que necesiten bases sólidas para desenvolverse con la tecnología que está a disposición de la
                música. En los últimos años las herramientas de producción se han vuelto cada vez más accesibles y
                versátiles, haciéndose a menudo necesario trabajar con micrófonos, placas de audio, programas de edición
                de audio, etc. Si eres músico/a, pero no te llevas muy bien con los cables y micrófonos y quieres
                alcanzar el sonido que deseas para tus canciones, estos cursos son para vos</p>
            </div>
          </div>
        </article>
        
        <article>
          <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-6 mt-5 mt-lg-0 d-flex flex-column justify-content-around">
              <h2 class="text-center mb-4">De músicos para músicos</h2>
              <p class="lh-lg">También somos músicos, y sabemos lo que es estar detrás del micrófono. En estos cursos
                aprenderás lo que hay desde el punto de vista técnico de una producción musical y cómo integrarlo con el
                rol de intérprete musical para estar preparado para una buena grabación. La comunicación entre el mundo
                técnico del audio y el mundo musical es vital para alcanzar una buena producción musical.</p>
            </div>
            <div class="col-lg-6 p-lg-2 d-flex align-items-center">
              <img src="img/musicos_estudio.jpg" class="img-fluid" alt="Banda tocando">
            </div>
          </div>
        </article>
      </div>
    </section>
  </main>

  <?php
    include 'funciones/footer.php';
  ?>

  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>