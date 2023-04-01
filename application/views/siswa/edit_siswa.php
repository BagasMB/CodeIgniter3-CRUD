<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-md-10 mx-auto col-lg-6">
            <form action="" method="post" class="row g-3 p-4 p-md-5 border rounded-3 from shadow p-3 mb-5 bg-body-tertiary rounded">
                <h4 class="text-center" style="margin-top: -5px;">Form</h4>
                <p class="text-center text-muted" style="margin-top: -5px; margin-bottom:-5px;">Update Data.</p>
                <hr>
                <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                <div class="col-12 ">
                    <label for="inputAddress2" class="form-label">Nis</label>
                    <input type="text" class="form-control" id="inputPassword4" name="nis" value="<?= $siswa['nis']; ?>" autocomplete="off">
                    <small class="form-text text-danger"><?= form_error('nis'); ?></small>
                </div>
                <div class="col-12">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $siswa['nama']; ?>" autocomplete="off">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="kelas">
                        <?php foreach ($kelas as $k) : ?>

                            <?php if ($k == $siswa['kelas']) : ?>

                                <option value="<?= $k; ?>" selected><?= $k; ?></option>

                            <?php else : ?>

                                <option value="<?= $k; ?>"><?= $k; ?></option>

                            <?php endif; ?>

                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary px-5 py-2" name="update">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>