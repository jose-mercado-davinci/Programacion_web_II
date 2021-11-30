<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Hole Studio</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <div class="container mt-5 text-center">
    <h1 class="mb-4">¡Salió todo bien!</h1>

    <?php
        //USER DATA SANITIZED
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $password1 = filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_STRING);
        $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
        $msg = filter_input(INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
        
        if (isset ($_POST['sendContact'])) {

          //JSON
          $file = file_get_contents("../json/datosContacto.json");
          $data = json_decode($file, TRUE);

          $arr = array("name" => $name, "lastname" => $lastname, "email" => $email, "phone" => $phone, "msg" => $msg);

          array_push($data, $arr);

          $newData = json_encode($data);
          file_put_contents("../json/datosContacto.json", $newData);
          ?>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Email</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Mensaje</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $name;?></td>
          <td><?php echo $lastname;?></td>
          <td><?php echo $email;?></td>
          <td><?php echo $phone;?></td>
          <td><?php echo $msg;?></td>
        </tr>
      </tbody>
    </table>

    <?php
    } elseif (isset ($_POST['login'])) {

    //JSON
    $file = file_get_contents("../json/datosLogin.json");
    $data = json_decode($file, TRUE);

    $arr = array("email" => $email, "password" => $password);

    array_push($data, $arr);

    $newData = json_encode($data);
    file_put_contents("../json/datosLogin.json", $newData);
    ?>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Email</th>
          <th scope="col">Contraseña</th>
          <th scope="col">¿Contraseña correcta?</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $email;?></td>
          <td><?php echo $password;?></td>
          <td><?php
          if ($password == "1234") {
            echo '<span style="color: green;"> SI </span>';
          } else {
            echo '<span style="color: red;"> NO </span>';
          }
          ?></td>
        </tr>
      </tbody>
    </table>

    <?php
    } elseif (isset ($_POST['register'])) {

      //JSON
      $file = file_get_contents("../json/datosRegister.json");
      $data = json_decode($file, TRUE);

      $arr = array("name" => $name, "lastname" => $lastname, "date" => $date, "email" => $email, "password" => $password);

      array_push($data, $arr);

      $newData = json_encode($data);
      file_put_contents("../json/datosRegister.json", $newData);
    ?>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Fecha de nacimiento</th>
          <th scope="col">Email</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Contraseña de repetición</th>
          <th scope="col">¿Contraseñas coinciden?</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $name;?></td>
          <td><?php echo $lastname;?></td>
          <td><?php echo $date;?></td>
          <td><?php echo $email;?></td>
          <td><?php echo $password;?></td>
          <td><?php echo $password1;?></td>
          <td><?php
          if ($password == $password1) {
            echo '<span style="color: green;"> SI </span>';
          } else {
            echo '<span style="color: red;"> NO </span>';
          }
          ?></td>
        </tr>
      </tbody>
    </table>
    <?php
        }
        ?>

    <a href="../login.php"><button type="button" class="btn btn-dark mt-3">Volver</button></a>
  </div>

  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>