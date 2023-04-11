<div class="container-fluid">
    <!-- Cari -->


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Siswa SMP Banyakan</h1>

    <?php echo anchor('siswaindex/tambah/','<div class="btn btn-primary ml-4 mb-2" data-toggle="modal">Tambah Data Siswa</div>')?>
    <a href="export_excel.php" class="btn btn-success ml-4 mb-2"> Export data</a>
    <a href="printdata.php" class="btn btn-secondary ml-4 mb-2"> Print</a>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($profil as $pf) : ?>
                            <tr>
                                <td><?php echo $pf->nama?></td>
                                <td><?php echo $pf->tmp_lahir?></td>
                                <td><?php echo $pf->tgl_lahir?></td>
                                <td>
                                    <?php echo anchor('siswaindex/detail/'.$pf->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search"></i></div>')?>
                                    <?php echo anchor('siswaindex/edit/'.$pf->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
                                    <?php echo anchor('siswaindex/hapus/'.$pf->id,'<div href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </div>')?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                            
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>