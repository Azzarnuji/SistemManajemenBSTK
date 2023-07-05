<?= $this->extend('Template/template'); ?>
<?= $this->section('App'); ?>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-flex align-content-center flex-wrap">
                            <img src="<?= base_url('assets/img/kamandaka.png'); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Kamandaka Premium Car BSTK</h1>
                                    <?php if(session('info')):?>
                                        <div class="alert alert-warning" role="alert">
                                            <?= session('info');?>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <form class="user" action="<?= base_url('auth'); ?>" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username Anda...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <label class="" for="customCheck">Username dan Password Hanya Bisa Didapatkan Dari Admin Kamandaka Premium Car</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>