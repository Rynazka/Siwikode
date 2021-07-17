<hr>
      <div class="container">
        <footer class="text-black-50 pb-3">
          SIWIKODE TI03. Kelompok 8. Proyek Tugas Akhir. Pemrograman Web 2021.
        </footer>
      </div>
      <form action="<?= base_url("auth/index") ?>" method="POST">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header back-blue">
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="container rounded">
                  <br>
                  <img class="mb-2 rounded mx-auto d-block pt-2" src="<?= base_url('assets/'); ?>pic/stt-nf.png" alt="enep" width="90" height="90">
                  <h1 class="h3 mb-3 text-center fw-normal">Silahkan Login</h1>
                  <br>
                  <input type="email"  name="email" id="email" class="form-control mb-2" placeholder="E-Mail" required="required" autofocus="">

                  <label for="inputPassword" class="visually-hidden mb-2">Password</label>
                  <input type="password" name="password"  id="password" class="form-control mb-2" placeholder="Password" required="required">
                  <br>
                  <div class="checkbox mb-6">
                    <label>
                      <input type="checkbox" class="" value="ingat-sandi"> Ingat Sandi
                    </label>
                  </div>
                <div class="modal-footer mt-1">
                
                <a href="http://localhost/siwikodeazka/register" class="btn btn-primary tapungu">Register</a>
                <button type="submit" class="btn btn-primary tapungu">Login</button>
                </div>
            </div>
          </div>
        </div>
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </body>
</html>
              