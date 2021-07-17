    <!--CAROUSEL-->
    <div class="full2 bg-gradient">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <img src="<?= base_url('assets/'); ?>pic/siwikode.png" class="img-fluid py-3 my-3"  alt="...">
              </div>
              <div class="carousel-caption full bg-gradient rounded-pill py-3 px-3">
                <h6>Welcome to Sistem Informasi Wisata Kota Depok - SIWIKODE</h6>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <img src="<?= base_url('assets/'); ?>pic/kuliner.png" class="img-fluid py-3 my-3" alt="...">\
              </div>
              <div class="carousel-caption full bg-gradient rounded-pill py-3 px-3">
                <h6>Rekomendasi Wisata Kuliner</h6>
                <hr>
                <center><a class="nav-link text-center w-25 text-white back-blue rounded-3 mx-2 tapungu container" href="#login" onclick="return clicklogin();">Telusuri</a></center>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <img src="<?= base_url('assets/'); ?>pic/rekreasi.png" class="img-fluid py-3 my-3" alt="...">
              </div>
                <div class="carousel-caption full bg-gradient rounded-pill py-3 px-3">
                  <h6>Rekomendasi Wisata Rekreasi</h6>
                  <hr>
                  <center><a class="nav-link text-center w-25 text-white back-blue rounded-3 mx-2 tapungu container" href="#login" onclick="return clicklogin();">Telusuri</a></center>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>
      <br>
      <br> 
      <br>
      <div class="container"><hr></div>  
      <!--THUMBNAILS-->
      
      <div class="container">
        <div class="row mb-2 py-2 my-2">
          <div class="col-12 my-5"><h3 class="text-center"><b>Tempat Terbaru</b></h3></div>
          <div class="col-md-6 mb-4">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static bg-light">
                <strong class="d-inline-block mb-2 text-primary">Depok</strong>
                <h3 class="mb-0">Arung Jeram Sungai Ciliwung</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">Jika pengunjung ingin sesuatu yang menantang dan memacu adrenalin? Arung Jeram Sungai Ciliwung ini 
                  salah satu referensi tepat.</p>
                <a href="" text-decoration="none" class="">Lanjutkan Membaca</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="<?= base_url('assets/'); ?>pic/sungaiciliwung.jpeg" width="200px" height="300px" alt="">
      
              </div>
            </div>
          </div>
        <!--THUMBNAILS 2-->
          <div class="col-md-6 mb-4">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static bg-light">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h3 class="mb-0">Takarajima</h3>
                <div class="mb-1 text-muted">Des 11</div>
                <p class="mb-auto">Desan resto yang kental dengan nuansa jepang, berbalut suasana tenang dan nyaman, membuat 
                  siapapun akan tertarik untuk singgah disini.</p>
                <a href="#login" onclick="return clicklogin();" class="stretched-link">Lanjutkan Membaca</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="<?= base_url('assets/'); ?>pic/takarajima.jpg" width="200px" height="300px" alt="">
      
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="container"><hr></div>
      <!--REVIEW ARTIST-->
      <div class="container">
        <div class="row py-3 my-3 text-center">
          <div class="col-12 my-5 "><h3><b>Review Artist</b></h3></div>
          <!--TEAMS 1-->
          <div class="col-lg-4">
            <img src="<?= base_url('assets/'); ?>pic/arafah.jpg" class="bd-placeholder-img rounded-circle mb-3" width="140px" height="140px" alt="artist">

            <h2>Arafah Rianti</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

          </div>
          <!--TEAMS 2-->
          <div class="col-lg-4">
            <img src="<?= base_url('assets/'); ?>pic/yudha.jpg" class="bd-placeholder-img rounded-circle mb-3" width="140px" height="140px" alt="artist">
            <h2>Yudha Keling</h2>
            <p>parahsi enak banget! pokoknya warga depok wajib banget coba, gaada tapi tapi, mantul!</p>

          </div>
          <!--TEAMS 3-->
          <div class="col-lg-4">
            <img src="<?= base_url('assets/'); ?>pic/fico.jpg" class="bd-placeholder-img rounded-circle mb-3" width="140px" height="140px" alt="artist">
            <h2>Fico Fachriza</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

          </div>
      </div>
      <div class="container"><hr></div>
      <!--TEAMS-->
      <div class="container">
        <div class="row py-3 my-3 text-center">
          <div class="col-12 my-5 "><h3><b>SIWIKODE Teams</b></h3></div>
          <!--TEAMS 1-->
          <div class="col-lg-6">
            <img src="<?= base_url('assets/'); ?>pic/taufiq.jpeg" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="team">
            <h2>Moh Taufiqur Rochman</h2>
            
          </div>
          <!--TEAMS 2-->
          <div class="col-lg-6">
            <img src="<?= base_url('assets/'); ?>pic/azka.jpg" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="team">

            <h2>Muhamad Rayyan <br> Azka Hudaya</h2>
            
          </div>
        </div>
      </div>