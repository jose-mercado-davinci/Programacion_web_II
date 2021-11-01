<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Black Hole Studio - Login</title>

  <!-- BOOSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <?php
    include 'header.php';
  ?>

  <main>
    <form class="row g-3 col-12 p-4 m-0 justify-content-md-center" method="POST">
      <div class="bg-primary bg-gradient col-md-6 shadow px-4 py-3 m-0 p-lg-5 py-lg-3">
        <h2 class="text-center display-4 fw-bold" style="color: white;">Login</h2>
        <hr class="bg-white mb-3">
          <div class="row">
            <label class="form-label" style="color: white;">Email</label>
              <div class="col-12 mb-3">
                <input name="email" type="email" class="form-control" required>
              </div>
              <label class="form-label" style="color: white;">Contraseña</label>
              <div class="col-12 mb-3">
                <input name="password" type="password" class="form-control" required>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheck">
                  <label class="form-check-label" for="flexCheck" style="color: white;">Recordarme</label>
                </div>
                <button name="login" type="submit" class="btn btn-secondary bg-gradient">Iniciar sesión</button>
              </div>
              <div style="color: white;">
                <p>¿No tenes una cuenta? <a href="register.php"><u style="color: white;">Registrarse</u></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </main>
    
  <?php
    include 'footer.php';
  ?>

  <!-- BOOSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>