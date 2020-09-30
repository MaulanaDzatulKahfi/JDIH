<div class="container">
    <div class="row mt-3">
        <div class="col-md-8">
            <?php foreach ($jdih as $d) : ?>
                <div class="card">
                    <div class="card-header bg-dark">
                        <h2 class="text-white">Detail</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped" border="0">
                            <tr>
                                <h5 class="card-title">
                                    <td style="width : 230px">Judul Peraturan / Keputusan</td>
                                    <td style="width : 15px">:</td>
                                    <td><?= $d->jdihproduk_judul ?></td>
                                </h5>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td><?= $d->tanggal ?></td>
                                </p>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>Tahun Terbit</td>
                                    <td>:</td>
                                    <td><?= $d->jdihproduk_terbit ?></td>
                                </p>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>No Peraturan / Keputusan</td>
                                    <td>:</td>
                                    <td><?= $d->jdihproduk_noperaturan ?></td>
                                </p>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>Jenis</td>
                                    <td>:</td>
                                    <td><?= $d->jdihproduk_jenis ?></td>
                                </p>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>Singkatan</td>
                                    <td>:</td>
                                    <td><?= $d->jdihproduk_singkatan ?></td>
                                </p>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>Tempat Penetapan</td>
                                    <td>:</td>
                                    <td><?= $d->jdihproduk_tempatpenetapan ?></td>
                                </p>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>Sumber Peraturan</td>
                                    <td>:</td>
                                    <td><?= $d->jdihproduk_sumberperaturan ?></td>
                                </p>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>Subjek</td>
                                    <td>:</td>
                                    <td><?= $d->jdihproduk_subjek ?></td>
                                </p>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>Status</td>
                                    <td>:</td>
                                    <td><?= $d->jdihproduk_status ?></td>
                                </p>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>file</td>
                                    <td>:</td>
                                    <td><?= $d->jdihproduk_file ?></td>
                                </p>
                            </tr>
                            <tr>
                                <p class="card-text">
                                    <td>Abstrak</td>
                                    <td>:</td>
                                    <td><?= $d->abstrak ?></td>
                                </p>
                            </tr>
                            <tr>
                                <td>
                                    <a class="btn btn-secondary" href="<?= base_url() ?>">Kembali</a>
                                </td>
                                <td></td>
                                <td>
                                    <a href="<?= base_url('assets/file/' . $d->jdihproduk_file) ?>" class="btn btn-dark">Download file</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>