<div class="auth-wrapper">
    <div class="auth-content">
        <?= $this->session->flashdata('user') ?>
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <img src="<?= base_url('assets/admin') ?>/images/almuhajirin.png" height="100px" alt="" class="mb-4">
                        <h4 class="mb-3 f-w-400">Sign In</h4>
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label class="floating-label" for="Email">Email address</label>
                                <input type="text" class="form-control" name="email" id="Email" placeholder="">
                                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Password</label>
                                <input type="password" class="form-control" name="password" id="Password" placeholder="">
                                <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mb-4">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>