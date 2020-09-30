<div class="container">
    <div class="row">
        <div class="mx-auto mt-3">
            <h3 class="text-center"><?= $judul; ?></h3>
            <br>
            <div class="card bg-light" style="width: 30rem;">
                <div class="card-body">
                    <form action="<?= base_url('Nuaneh/formtambah') ?>" method="post">
                        <div class="mt-2">
                            <label for="nama">Nama <span class="text-danger">*</span></label>
                            <input type="text" name="nama" value="<?= set_value('nama') ?>" placeholder="Nama" class="form-control">
                            <?= form_error('nama', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="mt-2">
                            <label for="Username">Username <span class="text-danger">*</span></label>
                            <input type="text" name="username" value="<?= set_value('username') ?>" placeholder="Username" class="form-control">
                            <?= form_error('username', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="mt-2">
                            <label for="password">Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                            <?= form_error('password', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="mt-2">
                            <label for="password1">Konfirmasi Password <span class="text-danger">*</span></label>
                            <input type="password" name="password1" placeholder="Konfirmasi Password" class="form-control">
                            <?= form_error('password1', '<div class="text-danger">', '</div>') ?>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="<?= base_url('Nuaneh') ?>" class="btn btn-success form-control">Kembali</a>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary form-control">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>