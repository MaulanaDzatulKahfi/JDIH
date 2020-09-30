  <div class="container">
      <h1 class="mt-3">Jdih DPRD Kota Sukabumi</h1>
      <div class="row">
          <div class="nav-link">
              <a href="<?= base_url('welcome/formtambah') ?>" class="btn btn-dark mb-3">Tambah</a>
          </div>
          <div class="ml-auto mr-0 mr-md-3 my-2 my-md-0">
              <?php if ($this->session->userdata('username')) : ?>
                  <a class="nav-link btn btn-outline-danger " href="<?= base_url('Auth/logout') ?>">
                      Logout
                  </a>
              <?php endif ?>
          </div>
      </div>
      <?php if ($this->session->flashdata()) : ?>
          <div class="alert alert-success">
              <?= $this->session->flashdata('message'); ?>
          </div>
      <?php endif ?>
      <table id="data" class="table table-hover mt-3">
          <thead class="thead-dark">
              <tr>
                  <th scope="col">No</th>
                  <th scope="col" width="300">Judul Produk Hukum</th>
                  <th scope="col">Nomer</th>
                  <th scope="col">Tanggal Terbit</th>
                  <th scope="col">Tahun</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Aksi</th>
              </tr>
          </thead>
          <tbody>
              <?php $no = 1;
                foreach ($jdih as $d) : ?>
                  <tr>
                      <th scope="row"><?= $no++ ?></th>
                      <td><?= $d->jdihproduk_judul ?></td>
                      <td><?= $d->jdihproduk_noperaturan ?></td>
                      <td><?= $d->tanggal ?></td>
                      <td><?= $d->jdihproduk_terbit ?></td>
                      <td><?= $d->jdihproduk_jenis ?></td>
                      <td>
                          <a href="<?= base_url('welcome/detail/' . $d->id_jdihproduk) ?>" class="badge badge-secondary">Detail</a>
                          <a href="<?= base_url('assets/file/' . $d->jdihproduk_file) ?>" class="badge badge-dark">Download file</a>
                          <?php if ($this->session->userdata('username')) : ?>
                              <a href="<?= base_url('welcome/formedit/' . $d->id_jdihproduk) ?>" class="badge badge-primary">Edit</a>
                              <a href="<?= base_url('welcome/hapus/' . $d->id_jdihproduk) ?>" class="badge badge-danger" onclick="return confirm('apa anda yakin? data dihapus?')">Hapus</a>
                          <?php endif ?>
                      </td>
                  </tr>
              <?php endforeach ?>
          </tbody>
      </table>
  </div>