<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <form  action="<?= base_url('auth/index') ?>" method="post">
                    <div class="container rounded">
                        <br>
                        <img class="mb-2 rounded mx-auto d-block pt-2" src="<?= base_url('assets/'); ?>pic/stt-nf.png" alt="enep" width="90" height="90">
                        <h1 class="h3 mb-3 text-center fw-normal">Register</h1>
                        <br>
                        <div class=" container">
                            <div class="row align-items-center">
                                <div class="col-md-4 offset-md-4 align-self-center">
                                        <div class="form-group pb-2">
                                            <input type="text" class="form-control form-control-user" id="username" name="name" placeholder="Full Name" value="<?= set_value('username'); ?>">
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group pb-2">
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group row ">
                                            <div class="col-sm-6 mb-3 mb-sm-0 pb-1">
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="col-sm-6 pb-1">
                                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                            </div>
                                        </div>
                                        
                                        <br>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-user btn-primary" style="color: #ffffff; background-color: #73C2FB;">
                                                    Register
                                            </button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        


      
      
        </form>
    </div>
</div>