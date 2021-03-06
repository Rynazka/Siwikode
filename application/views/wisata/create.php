<main class="wisata color-back container">
    <?= form_open_multipart('wisata/store');?>
        <header class="formHeader">
            <h2><i class="fas fa-fw fa-plus mr-3"></i>Tambahkan Wisata</h2>
            <hr><br>
        </header>
        <div class="container-input">
            <div class="form-group inputUploadPhotoProfile">
                <div id="containerImageInForm">
                    <img id="imageToUpload" src="<?=base_url('assets/img/photo_wisata/default.png')?>" alt="" width="80">
                    <div id="iconCamera" class="iconCamera">
                        <i id="camera" class="fas fa-camera"></i>
                    </div>
                </div>
                <div id="inputImageInForm">
                    <label for="image" class="ourLabel">Upload</label>
                    <input id="image" name="image" type="file" class="custom-file-input" value="" required="required">
                </div>
            </div>
            <!------------------>
            <div class="form-group">
                <label for="nama_wisata" class="ourLabel">Nama</label> 
                <input id="nama_wisata" name="nama_wisata" type="text" class="form-control ourInput" value="" required="required">
            </div>
            <!------------------>
            <div class="form-group">
                <label for="deskripsi" class="ourLabel">Deskripsi</label> 
                <textarea id="deskripsi" name="deskripsi" type="text" class="form-control ourInput" value="" cols="10" rows="5" required="required"></textarea>
            </div>
            <!------------------>
            <div class="form-group">
                <label for="wisata" class="ourLabel selectLabel">Jenis Wisata</label> 
                <select id="jenis_wisata" name="jenis_wisata" class="custom-select ourInput" required="required">
                    <option value="">-- Jenis Wisata --</option>
                    <?php foreach($jenis_wisata as $row): ?>
                        <option value="<?=$row->id?>"><?=$row->jenis?></option>
                    <?php endforeach; ?>  
                </select>
            </div>
            <!------------------>
            <div class="form-group">
                <label for="kategori" class="ourLabel selectLabel">Kategori</label> 
                <select id="kategori" name="kategori" class="custom-select ourInput" required="required">
                    <option value="">--- Kategori ---</option>
                    <?php foreach($kategori as $row): ?>
                    <option value="<?= $row->id ?>"><?= $row->nama_kategori ?></option>;
                    <?php endforeach; ?>  
                </select>
            </div>
            <!------------------>
            <div class="form-group">
                <label for="fasilitas" class="ourLabel">Fasilitas</label> 
                <input id="fasilitas" name="fasilitas" type="text" class="form-control ourInput" required="required">
            </div>
            <!------------------>
            <div class="form-group">
                <label for="kontak" class="ourLabel">Kontak</label> 
                <input id="kontak" name="kontak" type="text" class="form-control ourInput" required="required">
            </div>
            <!------------------>
            <div class="form-group">
                <label for="alamat" class="ourLabel">Alamat</label> 
                <input id="alamat" name="alamat" type="text" class="form-control ourInput" required="required">
            </div>
            <!------------------>
            <div class="form-group">
                <label for="latlong" class="ourLabel">Latlong</label> 
                <input id="latlong" name="latlong" type="text" class="form-control ourInput" required="required">
            </div>
            <!------------------>
            <div class="form-group">
                <label for="email" class="ourLabel">Email</label> 
                <input id="email" name="email" type="email" class="form-control ourInput" required="required">
            </div>
            <!------------------>
            <div class="form-group">
                <label for="url" class="ourLabel">URL</label> 
                <input id="url" name="url" type="text" class="form-control ourInput" required="required">
            </div> 
            <!------------------>
            <div class="buttonForm row">
                <center>
                    <input type="submit" href="<?=base_url('admin/wisata')?>" class="col-4 btn btn btn-primary tapungu buttonCancelForm m-2 mb-3" value="Cancel"></a>
                    <input type="submit" class=" col-4 btn btn-primary tapungu buttonYesForm m-2 mb-3" value="Submit">
                </center>
            </div>
        </div>
    </form>
</main>