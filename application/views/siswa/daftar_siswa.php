<div class="container mt-4">

    <!-- <?php //if ($this->session->flashdata('flash')) :  
            ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Siswa<strong>Berhasil !</strong> <? //$this->session->flashdata('flash');  
                                                            ?> .
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php //endif; 
    ?> -->

    <div class="row mt-3">
        <div class="col-md-3">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Data Siswa.." autocomplete="off" name="cari">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>


    <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <div class="card-header">
            <h5 class="fw-bold" style="margin-left: 20px; margin-top: 6px;">Daftar Siswa SMKN 2 Karanganyar</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nis</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $no = 0;
                    foreach ($siswa as $sis) :
                        $no = $no + 1; ?>
                        <tr class="text-center">
                            <td><?= $no ?></td>
                            <td><?= $sis['nis']; ?></td>
                            <td><?= $sis['nama']; ?></td>
                            <td><?= $sis['kelas'] ?></td>
                            <td>
                                <a href="<?= base_url('siswa/update/'); ?><?= $sis['id']; ?>"><span class="badge bg-success ">Update</span></a>
                                <a href="<?= base_url('siswa/hapus/'); ?><?= $sis['id']; ?>" onclick="return confirm('yakin kah manis?');"><span class="badge text-bg-danger">Delete</span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if (empty($siswa)) : ?>
                <div class="row">
                    <div class="col-md">
                        <div class="alert alert-danger text-center" role="alert">
                            Data Siswa Tidak Ditemukan
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>


</div>