<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Black Hole Studio - Contacto</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <?php
    include 'funciones/header.php';
  ?>

  <main>
    <section class="bg-light p-3 rounded-lg">
      <div class="container d-flex align-items-center">
        <div class="row">
          <div class="col">
            <h1 class="display-4">Contáctate con nosotros</h1>
            <p class="lead">Tus dudas y comentarios son muy importantes para nosotros para poder seguir creciendo.</p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container p-3">
        <div class="row">
          <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Dirección de E-mail</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Escriba sus preguntas acá"></textarea>
            </div>
            <div>
              <button type="button" class="btn btn-primary">Enviar mensaje</button>
            </div>
          </div>
          <div class="col-12 my-4 my-lg-0 col-lg-6">
            <div class="ratio ratio-4x3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.605881222844!2d-58.39642968477006!3d-34.614126280456745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccadd8615fb0f%3A0x28a44c74fe00f4c3!2sAv.%20Belgrano%201974%2C%20C1094%20AAO%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1625364850074!5m2!1ses-419!2sar" title="YouTube video" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
    
  <?php
    include 'funciones/footer.php';
  ?>

  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>