<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <br><br><br>
            <h1 class="text-center"><img src='https://dprd.sukabumikota.go.id/wp-content/uploads/LOGO-DPRD-KOTA-SUKABUMI-min.png' width='90' height='90' title='JDIH DPRD Kota Sukabumi' alt='JDIH' border='none' />
            </h1>
            <h6 class="text-center">Imput Data JDIH DPRD Kota Sukabumi</h6>
            <br>
            <?php if ($this->session->flashdata()) : ?>
                <div class="alert alert-danger">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            <?php endif ?>
            <div class="card bg-light">
                <div class="card-body">
                    <form action="<?= base_url('Auth') ?>" method="post">
                        <div class="form-group">
                            <label for="Username">Username <span class="text-danger">*</span></label>
                            <input type="text" name="username" placeholder="Masukkan Username" class="form-control">
                            <?= form_error('username', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="form-group">
                            <label for="password">password <span class="text-danger">*</span></label>
                            <input type="password" name="password" placeholder="Masukkan Password" class="form-control">
                            <?= form_error('password', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="<?= base_url() ?>" class="btn btn-secondary form-control">Kembali</a>
                            </div>
                            <div class="col-6">
                                <button name="submit" type="submit" class="btn btn-dark btn-block">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>