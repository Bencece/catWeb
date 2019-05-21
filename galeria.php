<!doctype html>
<html lang="hu">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />

  <title>Galéria - Reborn Coon Cattery</title>
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
          <img class="img-fluid" src="img/korabbi/1.jpg" alt="Cat1">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="doboz">
          <img class="img-fluid" src="img/korabbi/2.jpg" alt="Cat2">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="doboz">
          <img class="img-fluid" src="img/korabbi/3.jpg" alt="Cat3">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="doboz">
          <img class="img-fluid" src="img/korabbi/4.jpg" alt="Cat4">
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  var btn = document.getElementById('5');
  btn.className += " active";
</script>
</html>