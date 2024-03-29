<?php
session_start();

if (
  (!isset($_SESSION['idUser']) == true) &&
  (!isset($_SESSION['name']) == true) &&
  (!isset($_SESSION['email']) == true)
) {
  unset($_SESSION['idUser']);
  unset($_SESSION['name']);
  unset($_SESSION['password']);
  header("Location: ../index.html");
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Victus - Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body style="background-color: #066566;">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a style="background-color: white; color: black;" class="nav-link" href="#0">
              <!--  <i class="material-icons">dashboard</i> -->
              <p>Tabela de pontos</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a style="background-color: white; color: black;" class="nav-link" href="#0">
              <!--  <i class="material-icons">dashboard</i> -->
              <p>Pagamento</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a style="background-color: white; color: black;" class="nav-link" href="#0">
              <!--  <i class="material-icons">dashboard</i> -->
              <p>Histórico de eventos</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div style="background-color: #066566;" class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">


        <div class="boas-vindas">
          <div class="row">
            <div class="col-12 .col-md-8">
              <h3 style="color: white;">Bem vindo, <?php echo $_SESSION['name'] ?>!</h3>
            </div>
            <div class="col-6 .col-md-4">
              <h4 style="color: white;">Você tem _____ pontos</h4>
            </div>
          </div>


          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">

                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
        </div>
        <h3 style="margin-top: 15%; margin-left: 5%; color: white;">Promoções</h3>
        <div class="card" style="width: 18rem; margin-top: 3%; margin-left: 5%; background-color: #4cafa0; color: white;">
          <img class="card-img-top" src="assets/img/new_logo.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <h3 style="margin-top: 5%; margin-left: 5%; color: white;">Eventos em alta</h3>
        <div class="card" style="width: 18rem; margin-top: 3%; margin-left: 5%; background-color: #4cafa0; color: white;">
          <img class="card-img-top" src="assets/img/new_logo.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <h3 style="margin-top: 5%; margin-left: 5%; color: white;">Recomendados para você</h3>
        <div class="card" style="width: 18rem; margin-top: 3%; margin-left: 5%; background-color: #4cafa0; color: white;">
          <img class="card-img-top" src="assets/img/new_logo.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>

</html>