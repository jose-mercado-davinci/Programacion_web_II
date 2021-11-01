<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Black Hole Studio - Contacto</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <?php
    include 'funciones/header.php';
  ?>

  <main>
    <section>
      <form class="row g-3 col-12 mt-5 pb-5 m-0 justify-content-md-center" method="POST">
        <div class="bg-white col-md-8 shadow rounded p-4 pt-3 pb-4 m-0 p-md-5 pt-md-3 p-lg-5 pt-lg-3 pb-lg-4">
          <h2 class="text-center display-4 fw-bold">Contacto</h2>
          <p class="fs-6 text-center"><em>
              Si querés contactarte, rellená este
              formulario.
            </em></p>

          <hr class="mb-4">

          <div class="row">
            <label class="form-label">Nombre</label>

            <div class="col-6 mb-3">
              <input name="name1" type="text" class="form-control" placeholder="Nombre" required>
            </div>

            <div class="col-6 mb-3">
              <input name="lastname1" type="text" class="form-control" placeholder="Apellido" required>
            </div>

            <div class="col mb-3">
              <label class="form-label">Email</label>
              <input name="email" type="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Teléfono</label>
              <input name="phone" type="tel" class="form-control" placeholder="Teléfono" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Mensaje</label>
              <textarea name="msg1" class="form-control" rows="2" placeholder="Dejanos tu mensaje" required
                style="max-height: 8rem; min-height: 4rem;"></textarea>
            </div>

            <div class="col text-center">
              <button name="send1" type="submit" class="btn btn-primary">Envíar</button>
            </div>
          </div>
        </div>
      </form>

      <!-- ARREGLAR CENTRADO DE MAPA -->
      <div class="d-flex justify-content-center" style="width: 35%;">
        <div class="ratio ratio-4x3">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.605881222844!2d-58.39642968477006!3d-34.614126280456745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccadd8615fb0f%3A0x28a44c74fe00f4c3!2sAv.%20Belgrano%201974%2C%20C1094%20AAO%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1625364850074!5m2!1ses-419!2sar"
            title="YouTube video" allowfullscreen></iframe>
        </div>
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