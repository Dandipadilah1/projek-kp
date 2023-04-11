<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Guru SMP Banyakan</h1>

    <?php echo anchor('guru/index/tambah/','<div class="btn btn-primary ml-4 mb-2" data-toggle="modal">Tambah Data Guru</div>')?>
    <a href="export_excel.php" class="btn btn-success ml-4 mb-2"> Export data</a>
    <a href="printdata.php" class="btn btn-secondary ml-4 mb-2">Print</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Guru</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jenis Kelamin</th>
                            <th>Status Guru</th>
                            <th>Status Kepegawaian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($guru as $gr) : ?>
                            <tr>
                                <td><?php echo $gr->nama_guru?></td>
                                <td><?php echo $gr->nip?></td>
                                <td><?php echo $gr->jk_guru?></td>
                                <td><?php echo $gr->guru_status?></td>
                                <td><?php echo $gr->status_pegawai?></td>
                                <td>
                                    <?php echo anchor('guru/index/edit/'.$gr->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
                                    <?php echo anchor('guru/index/hapus/'.$gr->id,'<div href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </div>')?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>