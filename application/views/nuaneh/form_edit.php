<?php
if (!$user) {
    redirect('User');
} else { ?>
    <div class="container">
        <div class="row">
            <div class="mx-auto mt-3">
                <h3 class="text-center"><?= $judul; ?></h3>
                <br>
                <?php if ($this->session->flashdata()) : ?>
                    <div class="alert alert-danger mt-3">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                <?php endif ?>
                <div class="card bg-light" style="width: 30rem;">
                    <div class="card-body">
                        <form action="<?= base_url('Nuaneh/formedit/' . $user->id_user) ?>" method="post">
                            <div class="mt-2">
                                <label for="Username">Username <span class="text-danger">*</span></label>
                                <input type="text" value="<?= $user->username ?>" placeholder="Username" class="form-control" readonly>
                                <?= form_error('username', '<div class="text-danger">', '</div>') ?>
                            </div>
                            <div class="mt-2">
                                <label for="nama">Nama <span class="text-danger">*</span></label>
                                <input type="text" name="nama" value="<?= $user->nama_user ?>" placeholder="nama" class="form-control">
                                <?= form_error('nama', '<div class="text-danger">', '</div>') ?>
                            </div>
                            <div class="mt-2">
                                <label for="nama">Pasword Lama <span class="text-danger">*</span></label>
                                <input type="password" name="passLama" placeholder="Password Lama" class="form-control">
                                <?= form_error('passLama', '<div class="text-danger">', '</div>') ?>
                            </div>
                            <div class="mt-2">
                                <label for="nama">Pasword Baru <span class="text-danger">*</span></label>
                                <input type="password" name="passBaru" placeholder="Password Baru" class="form-control">
                                <?= form_error('passBaru', '<div class="text-danger">', '</div>') ?>
                            </div>
                            <div class="mt-2">
                                <label for="nama">Konfirmasi Pasword <span class="text-danger">*</span></label>
                                <input type="password" name="passBaru1" placeholder="Password Baru" class="form-control">
                                <?= form_error('passBaru1', '<div class="text-danger">', '</div>') ?>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <a href="<?= base_url('Nuaneh') ?>" class="btn btn-success form-control">Kembali</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary form-control">Edit</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php } ?>