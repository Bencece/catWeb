<!doctype html>
<html lang="hu">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />

  <title>Reborn Coon Cattery</title>
</head>

<body>
  <div class="jumbotron text-center">
    <h1>Reborn Coon Cattery</h1>
    <p>Reborn Coon, Maine Coon tenyészet</p>
    <?php include 'menu.php' ?>
  </div>

  <div class="jumbotron text-justify" id="fo">
    <div class="row">
      <div class="col-sm-4" id="foKep">
        <img class="img-fluid" src="img/front/1.jpg" alt="Cat1">
      </div>
      <div class="col-sm-4" id="foKep">
        <img class="img-fluid" src="img/front/2.jpg" id="foKep" alt="Cat2">
      </div>
      <div class="col-sm-4" id="foKep">
        <img class="img-fluid" src="img/front/3.jpg" alt="Cat3">
      </div>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, accusantium eveniet ex quos nesciunt illum cupiditate ut in soluta praesentium amet! Tenetur natus, blanditiis itaque assumenda odit dicta! Quos, ipsum.</p>
  </div>
</body>
<script>
  var btn = document.getElementById('1');
  btn.className += " active";
  var btn1 = document.getElementById('11');
  btn1.className += " active";
</script>

</html>