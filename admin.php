<?php
require_once('config/koneksi.php');
require_once('models/database.php');

$connection = new Database($host, $user, $pass, $database);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Survei Covid</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">

  <!-- Add custom CSS here -->
  <link href="assets/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>

<body>

  <div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="?page=dashboard">SB Admin</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li><a href="?page=add"><i class="fa fa-edit"></i> Tambah Data</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Monitoring Kasus <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="?page=monitoring">Data Pasien</a></li>
              <li><a href="#">Grafik</a></li>
              <li><a href="#">Report</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

      <?php
      if (@$_GET['page'] == 'dashboard' || @$_GET['page'] == '') {
        include "views/dashboard.php";
      } elseif (@$_GET['page'] == 'monitoring' || @$_GET['page'] == '') {
        include "views/monitoring.php";
      } else {
        include "views/add.php";
      }

      ?>



    </div><!-- /#page-wrapper -->

  </div><!-- /#wrapper -->

  <!-- JavaScript -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <script src="assets/js/bootstrap.js"></script>

</body>

</html>