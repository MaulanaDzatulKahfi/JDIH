<?php if (!$jdih) {
    redirect('welcome');
} else { ?>
    <div class="container">
        <div class="row">
            <div class="mx-auto mt-3">
                <br>
                <?php if ($this->session->flashdata()) : ?>
                    <div class="alert alert-danger mt-3">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                <?php endif ?>
                <div class="card bg-light" style="width: 40rem;">
                    <div class="card-body">
                        <h3 class="mb-3">Form edit</h3>
                        <?= form_open_multipart('welcome/formedit/' . $jdih->id_jdihproduk); ?>
                        <div class="row">
                            <div class="col-6">
                                <label for="judul">Judul Peraturan / Keputusan <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="judul" value="<?= $jdih->jdihproduk_judul ?>" placeholder="Judul Peraturan / keputusan">
                                <?= form_error('judul', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="col-6">
                                <label for="judul">No Peraturan / Keputusan <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="no_peraturan" value="<?= $jdih->jdihproduk_noperaturan ?>" placeholder="No Peraturan/Keputusan">
                                <?= form_error('no_peraturan', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="tanggal">Tanggal Terbit <span class="text-danger">*</span></label>
                                <input class="form-control" type="date" name="tanggal" value="<?= $jdih->tanggal ?>">
                                <?= form_error('judul', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="col-6">
                                <label for="judul">Tahun Terbit <span class="text-danger">*</span></label>
                                <select name="terbit" class="form-control">
                                    <?php for ($i = date('Y'); $i >= 1990; $i--) : ?>
                                        <?php if ($i == $jdih->jdihproduk_terbit) : ?>
                                            <option value="<?= $i ?>" selected><?= $i ?></option>
                                        <?php else : ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </select>
                                <?= form_error('terbit', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="row mt-2">

                            <div class="col-6">
                                <label for="judul">Singkatan<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="singkatan" value="<?= $jdih->jdihproduk_singkatan ?>" placeholder="singkatan">
                                <?= form_error('singkatan', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="col-6">
                                <label for="judul">Tempat Penetapan <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="tempat_penetapan" value="<?= $jdih->jdihproduk_tempatpenetapan ?>" placeholder="tempat penetapan">
                                <?= form_error('tempat_penetapan', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="jenis">Jenis <span class="text-danger">*</span></label>
                                <select class="form-control" name="jenis">
                                    <?php foreach ($jenis as $j) : ?>
                                        <?php if ($j == $jdih->jdihproduk_jenis) : ?>
                                            <option value="<?= $j ?>" selected><?= $j ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j ?>"><?= $j ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                                <?= form_error('jenis', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="col-6">
                                <label for="judul">Sumber Peraturan / Keputusan <span class="text-danger">*</span></label>
                                <select class="form-control" name="sumber_peraturan">
                                    <?php foreach ($sumber as $j) : ?>
                                        <?php if ($j == $jdih->jdihproduk_sumberperaturan) : ?>
                                            <option value="<?= $j ?>" selected><?= $j ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j ?>"><?= $j ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                                <?= form_error('sumber_peraturan', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <label for="judul">Subjek <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="subjek" value="<?= $jdih->jdihproduk_subjek ?>" placeholder="subjek">
                                <?= form_error('subjek', '<div class="text-danger">', '</div>'); ?>
                            </div>
                            <div class="col-6">
                                <label for="judul">Status <span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <?php foreach ($status as $j) : ?>
                                        <?php if ($j == $jdih->jdihproduk_status) : ?>
                                            <option value="<?= $j ?>" selected><?= $j ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j ?>"><?= $j ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                                <?= form_error('status', '<div class="text-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="mt-2">
                            <label for="judul">Abstrak <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="abstrak"><?= $jdih->abstrak ?> </textarea>
                            <?= form_error('abstrak', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="mt-2">
                            <label for="judul">File<span class="text-danger">*</span></label>
                            <div></div>
                            <span class="mr-2"><?= $jdih->jdihproduk_file ?></span>
                            <input type="file" name="file" placeholder="file">
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <a href="<?= base_url('Welcome') ?>" class="btn btn-primary form-control">Kembali</a>
                            </div>
                            <div class="col-6">
                                <input type="submit" value="Edit" class="btn btn-success form-control">
                            </div>
                        </div>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>