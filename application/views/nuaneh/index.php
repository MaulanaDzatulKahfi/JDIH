<div class="container">
    <h1 class="mt-3"><?= $judul; ?></h1>
    <a href="<?= base_url('Nuaneh/formtambah') ?>" class="btn btn-success mt-3 mb-3">Tambah</a>
    <?php if ($this->session->flashdata()) : ?>
        <div class="alert alert-success mt-3">
            <?= $this->session->flashdata('message'); ?>
        </div>
    <?php endif ?>
    <table class="table mt-3" id="data">
        <thead class="bg-dark text-white">
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Username</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($user as $u) :
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $u->nama_user; ?></td>
                <td><?= $u->username; ?></td>
                <td>
                    <a href="<?= base_url('Nuaneh/formedit/' . $u->id_user) ?>" class="badge badge-primary">Edit</a>
                    <a href="<?= base_url('Nuaneh/hapus/' . $u->id_user) ?>" onclick="return confirm('apa anda yakin? data dihapus?')" class="badge badge-danger">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>