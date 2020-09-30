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
                    <h3 class="mb-3">Form Tambah</h3>
                    <?= form_open_multipart('welcome/formtambah'); ?>
                    <div class="row">
                        <div class="col-6">
                            <label for="judul">Judul Peraturan / Keputusan <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="judul" value="<?= set_value('judul') ?>" placeholder="Judul Peraturan / keputusan">
                            <?= form_error('judul', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="col-6">
                            <label for="judul">No Peraturan / Keputusan <span class="text-danger">*</span></label>
                            <input class="form-control" type="number" name="no_peraturan" value="<?= set_value('no_peraturan') ?>" placeholder="No Peraturan/Keputusan">
                            <?= form_error('no_peraturan', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="tanggal">Tanggal Terbit <span class="text-danger">*</span></label>
                            <input class="form-control" type="date" name="tanggal" value="<?= set_value('tanggal') ?>">
                            <?= form_error('judul', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="col-6">
                            <label for="judul">Tahun Terbit <span class="text-danger">*</span></label>
                            <select name="terbit" class="form-control">
                                <?php
                                for ($i = date('Y'); $i >= 1990; $i--) : ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php endfor; ?>
                            </select>
                            <?= form_error('terbit', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="row mt-2">

                        <div class="col-6">
                            <label for="judul">Singkatan<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="singkatan" value="<?= set_value('singkatan') ?>" placeholder="singkatan">
                            <?= form_error('singkatan', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="col-6">
                            <label for="judul">Tempat Penetapan <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="tempat_penetapan" value="<?= set_value('tempat_penetapan') ?>" placeholder="tempat penetapan">
                            <?= form_error('tempat_penetapan', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="jenis">Jenis <span class="text-danger">*</span></label>
                            <select class="form-control" name="jenis">
                                <option value="Peraturan Dprd">Peraturan Dprd</option>
                                <option value="Keputusan Dprd">Keputusan Dprd</option>
                                <option value="Keputusan Pimpinan">Keputusan Pimpinan</option>
                            </select>
                            <?= form_error('jenis', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="col-6">
                            <label for="judul">Sumber Peraturan / Keputusan <span class="text-danger">*</span></label>
                            <select class="form-control" name="sumber_peraturan">
                                <option value="Pimpinan">Pimpinan</option>
                                <option value="Dprd">Dprd</option>
                            </select>
                            <?= form_error('sumber_peraturan', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="judul">Subjek <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="subjek" value="<?= set_value('subjek') ?>" placeholder="subjek">
                            <?= form_error('subjek', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="col-6">
                            <label for="judul">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control">
                                <option value="Aktif">Aktif</option>
                                <option value="Non-Aktif">Non-Aktif</option>
                                <option value="Dicabut">Dicabut</option>
                            </select>
                            <?= form_error('status', '<div class="text-danger">', '</div>'); ?>
                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="judul">Abstrak <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="abstrak"><?= set_value('abstrak') ?> </textarea>
                        <?= form_error('abstrak', '<div class="text-danger">', '</div>'); ?>
                    </div>
                    <div class="mt-2">
                        <label for="judul">File<span class="text-danger">*</span></label>
                        <input class="form-control" type="file" name="file" placeholder="file">
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="<?= base_url('Welcome') ?>" class="btn btn-primary form-control">Kembali</a>
                        </div>
                        <div class="col-6">
                            <input type="submit" value="Tambah" class="btn btn-success form-control">
                        </div>
                    </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>