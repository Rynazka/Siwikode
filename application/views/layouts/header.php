<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap CSS & Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>css/stylelanding.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>SIWIKODE</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>pic/logotab.png" width="40px" height="40px">
  </head>
  <body>
      
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-xl navbar-light bg-warning" aria-label="Fifth navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="<?= base_url('assets/'); ?>pic/logonavbar.png" height="50px" width="50px" alt="Logo Depok">&nbsp;<b>Sistem Informasi Wisata Kota Depok - SIWIKODE</b></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="navbar-collapse collapse" id="navbarsExample05">
            
                <ul class="navbar-nav me-auto mb-lg-1 rounded-3">
                            <li class="nav-item col-7">
                                <a class="nav-link border-right text-center text-white back-blue rounded-3 mx-2 tapungu" href="rekreasi/wisatarekreasi.html" onclick="return clicklogin();">Wisata Rekreasi</a>
                            </li>
                        
                        
                            <li class="nav-item col-6">
                                <a class="nav-link border-right text-center text-white back-blue rounded-3 mx-2 tapungu" href="kuliner/wisatakuliner.html" >Wisata Kuliner</a>
                            </li>
                        

                    
              </ul>
    
              <button type="button" class="btn btn-primary tapungu" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Login
              </button>

          </div>
        </div>
      </nav>