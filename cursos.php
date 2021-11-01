<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Hole Studios - Cursos</title>
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
            <h1 class="display-4">Elegí el curso indicado para vos</h1>
            <p class="lead">Hemos diseñado cursos para las distinta etapas de una producción completa. Si quieres llegar lejos, todos son para vos. </p>
          </div>
        </div>
      </div>
    </section>

    <section class="container">
      <?php
        require_once ('funciones/arrayCursos.php');
          foreach($cursos as $item) { 
            echo '
              <div class="row my-4">
                <div class="col col-lg-6 col-xxl-3">
                  <div class="card mx-auto mx-lg-0 my-2" style="width: 18rem;">
                    <img src="' .$item["src"]. '" class="card-img-top" alt="' .$item["alt"]. '">
                    <div class="card-body">
                      <h5 class="card-title">' .$item["title"]. '</h5>
                      <p class="card-text">' .$item["txt"]. '</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">' .$item["lvl"]. '</li>
                      <li class="list-group-item">' .$item["hrs"]. '</li>
                      <li class="list-group-item">' .$item["desc"]. '</li>
                    </ul>
                  </div>
                </div>';
                }
                ?>
    </section>

    <section class="container my-4">
      <div class="row">
        <div class="col">
          <h2 class="mb-4">Preguntas frecuentes</h2>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">¿Cuánto tiempo tengo para completar el curso?</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">Podés completar el curso en el tiempo que quieras y que puedas. Puedes completarlo en un par de días, o bien en unos cuántos meses. Lo importante es que practiques en tu estudio constantemente los conceptos que vas aprendiendo. Recuerda, en la práctica es donde termina el aprendizaje de estos cursos.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">¿Que necesito para realizar los cursos?</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">Para realizar los cursos necesitas cómo mínimo una computadora o dispositivo para ver los videos. Sin embargo, para una experiencia óptima te recomendamos también una <strong>interfaz de audio</strong> y un <strong>micrófono</strong>. Respecto a programas de audio <strong>(Daws)</strong>, puedes usar cualquiera ya que los conceptos recogidos aquí te serán útiles en todos los programas para producción de música.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">¿Que pasa si alguno de los cursos no cumple mis expectativas?</button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">Tu satisfacción es primordial para nosotros, y realizamos los cursos para que sean lo más útiles posible. Sin embargo, si después de ver el curso te das cuenta que no era lo que buscabas o necesitabas, comunícate con nosotros y veremos como compensarte.
                </div>
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