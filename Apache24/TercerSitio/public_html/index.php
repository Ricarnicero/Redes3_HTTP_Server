<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <script src="index.php"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="">

        <h1 class="my-4">Casos de exito</h1>
        <?php
        $página_inicio = file_get_contents('C:\Users\Ricardo\Downloads\httpd-2.4.41-o102s-x86-vc14-r2\Apache24\logs\access.log');
        $porciones = explode("\n", $página_inicio);
        $i=1;
        while ($i <= 16):
            echo $porciones[count($porciones)-$i];
            echo '<br>';
            $i++;

        endwhile;
          
        ?>
      </div>
      <div class="">

        <h1 class="my-4">Casos de error</h1>
        <?php
        $página_inicio = file_get_contents('C:\Users\Ricardo\Downloads\httpd-2.4.41-o102s-x86-vc14-r2\Apache24\logs\error.log');
        $porciones = explode("\n", $página_inicio);
        $i=1;
        $b=16;
        while ($i <= 16):
            echo $porciones[count($porciones)-$i];
            echo '<br>';
            $i++;

        endwhile;
          
        ?>
      </div>
      <!-- /.col-lg-3 -->


      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
