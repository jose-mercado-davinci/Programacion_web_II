<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Black Hole Studio - Register</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <?php
    include 'funciones/header.php';
  ?>

  <main>
    <form class="row g-3 col-12 p-4 m-0 justify-content-md-center was-validated" method="post" action="show_data.php">
      <div class="bg-primary bg-gradient col-md-6 shadow px-4 py-3 m-0 p-lg-5 py-lg-3">
        <h2 class="text-center display-4 fw-bold" style="color: white;">Registrarse</h2>
        <hr class="bg-white mb-3">
        <div class="row">
          <label class="form-label" style="color: white;" for="name">Nombre</label>
            <div class="col-6 mb-3">
              <input name="name" id="name" type="text" class="form-control" placeholder="Nombre" minlength="3" required>
            </div>
          <div class="col-6 mb-3">
            <input name="lastname" type="text" class="form-control" placeholder="Apellido" minlength="3" required>
          </div>
          <label class="form-label" style="color: white;">Fecha de nacimiento</label>
              <div class="col-12 mb-3">
                <input name="date" type="date" class="form-control" value="2003-12-31" required>
              </div>
            <label class="form-label" style="color: white;">Email</label>
              <div class="col-12 mb-3">
                <input name="email" type="email" class="form-control" required>
              </div>
            <label class="form-label" style="color: white;">Contraseña</label>
              <div class="col mb-3">
            <input name="password" type="password" class="form-control" minlength="8" required>
          </div>
          <label class="form-label" style="color: white;">Repetir contraseña</label>
          <div class="col mb-3">
            <input name="password1" type="password" class="form-control" minlength="8" required>
          </div>
          <div class="text-center mb-3">
            <button name="register" id="register" type="submit" class="btn btn-secondary bg-gradient">Registrarse</button>
          </div>
          <div style="color: white;">
            <p>¿Ya tenes una cuenta? <a href="login.php"><u style="color: white;">Iniciar sesión</u></a></p>
          </div>
        </div>
      </div>
    </form>
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