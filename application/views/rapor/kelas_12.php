<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Rapor Kelas 12</h1>

    <?php echo anchor('rapor/kelas_10/tambah/','<div class="btn btn-primary ml-4 mb-2" data-toggle="modal">Tambah Data Siswa</div>')?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Rapor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>NISN</th>
                            <th>Kelas</th>
                            <th>Semester</th>
                            <th>Tahun Ajar</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($rapor as $rp ) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?php echo $rp->nama?></td>
                                <td><?php echo $rp->nisn?></td>
                                <td><?php echo $rp->nama_kelas?></td>
                                <td><?php echo $rp->id_semester?></td>
                                <td><?php echo $rp->tahun_ajar?></td>

                                <td>
                                    <?php echo anchor('rapor/kelas_10/print/'.$rp->kd_raport,'<div href="" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> </div>')?>
                                    <?php echo anchor('rapor/kelas_12/hapus/'.$rp->kd_raport,'<div href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </div>')?>
                                </td>

                            </tr>
                        <?php endforeach;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>