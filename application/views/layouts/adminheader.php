<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url("public/css/mystyle.css") ?>">
    <link rel="stylesheet" href="<?=base_url("public/css/styles.css") ?>">
    <link rel="shortcut icon" href="bootstrap-icons.svg#heart-fill">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <title>SIWIKODE</title>
  </head>
  <body>

    <!-- loader -->
    <div class="bg-loader">
      <div class="loader">
      
      </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?=base_url("index.php") ?>">SIWIKODE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link" href="<?=base_url("index.php/admin") ?>">Admin <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="<?=base_url("index.php/admin/admin1") ?>">Kelolah Wisata Rekreasi</a>
                <a class="nav-link" href="<?=base_url("index.php/admin/admin2"); ?>">Kelolah Wisata Kuliner</a>
            </div>
            <button type="button" class="btn btn-link" onclick="location.href='<?=base_url("index.php")?>'">sign out</button>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo site_url('login/ceklogin')?>" method="post">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary"
              onclick="login()"
            data-dismiss="modal">Login</button>
            <button type="button" class="btn btn-outline-dark">SignIn</button>
          </div>
        </div>
      </div>
    </div>
   