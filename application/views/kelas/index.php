<div class="container-fluid">
    <!-- Cari -->


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Kelas SMP Banyakan</h1>

    <?php echo anchor('kelas/index/tambah/','<div class="btn btn-primary ml-4 mb-2" data-toggle="modal">Tambah Data Kelas</div>')?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Kelas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Nama Wali Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kelas as $ks) : ?>
                            <tr>
                                <td><?php echo $ks->id_kelas?></td>
                                <td><?php echo $ks->nama_kelas?></td>
                                <td><?php echo $ks->nama_guru?></td>
                                <td>
                                    <?php echo anchor('kelas/index/edit/'.$ks->id_kelas,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
                                    <?php echo anchor('kelas/index/hapus/'.$ks->id_kelas,'<div href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </div>')?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>