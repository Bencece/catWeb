<!doctype html>
<html lang="hu">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />

  <title>Hímek - Reborn Coon Cattery</title>
</head>

<body>
  <div class="jumbotron text-center">
    <h1>Reborn Coon Cattery</h1>
    <p>Reborn Coon, Maine Coon tenyészet</p>
    <?php include 'menu.php' ?>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="doboz">
          <img class="img-fluid" src="img/himek/1.jpg" alt="Cat1">
          <p class="text-center" id="cica_sz">Cica</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="doboz">
          <img class="img-fluid" src="img/himek/2.jpg" alt="Cat2">
          <p class="text-center" id="cica_sz">Cica</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="doboz">
          <img class="img-fluid" src="img/himek/3.jpg" alt="Cat3">
          <p class="text-center" id="cica_sz">Cica</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="doboz">
          <img class="img-fluid" src="img/himek/4.jpg" alt="Cat4">
          <p class="text-center" id="cica_sz">Cica</p>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  var btn = document.getElementById('2');
  btn.className += " active";
  var btn1 = document.getElementById('22');
  btn1.className += " active";
</script>

</html>