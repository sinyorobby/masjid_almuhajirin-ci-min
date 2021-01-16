<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <img src="<?= base_url('assets/admin') ?>/images/almuhajirin.png" alt="" height="100px" class="mb-4">
                        <h4 class="mb-3 f-w-400">Sign up</h4>
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label class="floating-label" for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="" autocomplete="OFF">
                                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="Email">Email address</label>
                                <input type="text" class="form-control" name="email" id="Email" placeholder="" autocomplete="OFF">
                                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Password</label>
                                <input type="password" class="form-control" name="password" id="Password" placeholder="">
                                <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password_confirm">Password Confirmation</label>
                                <input type="password" class="form-control" name="password_confirm" id="Password_confirm" placeholder="">
                                <?= form_error('password_confirm', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4">Daftar</button>
                        </form>
                        <p class="mb-2">Already have an account? <a href="<?= base_url('admin/auth') ?>" class="f-w-400">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>