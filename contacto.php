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
      <form class="row g-3 col-12 mt-5 pb-5 m-0 justify-content-md-center" method="post" action="show_data.html">
        <div class="bg-primary bg-gradient col-md-8 shadow rounded p-4 pt-3 pb-4 m-0 p-md-5 pt-md-3 p-lg-5 pt-lg-3 pb-lg-4">
          <h2 class="text-center display-4 fw-bold" style="color: white;">Contacto</h2>
          <p class="fs-6 text-center" style="color: white;"><em>
              Si querés contactarte, rellená este
              formulario.
            </em></p>

          <hr class="mb-4" style="color: white;">

          <div class="row">
            <label class="form-label" style="color: white;">Nombre</label>

            <div class="col-6 mb-3">
              <input name="name" type="text" class="form-control" placeholder="Nombre" required>
            </div>

            <div class="col-6 mb-3">
              <input name="lastname" type="text" class="form-control" placeholder="Apellido" required>
            </div>

            <div class="col mb-3">
              <label class="form-label" style="color: white;">Email</label>
              <input name="email" type="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="mb-3">
              <label class="form-label" style="color: white;">Teléfono</label>
              <input name="phone" type="tel" class="form-control" placeholder="Teléfono" required>
            </div>

            <div class="mb-3">
              <label class="form-label" style="color: white;">Mensaje</label>
              <textarea name="msg" class="form-control" rows="2" placeholder="Dejanos tu mensaje" maxlength="140" required
                style="max-height: 8rem; min-height: 4rem;"></textarea>
            </div>

            <div class="col text-center">
              <button name="send" type="submit" class="btn btn-secondary bg-gradient">Envíar</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <?php
        include("funciones/funcionContacto.php");
      ?>
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