<div class="container-fluid">
    <!-- Cari -->


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tahun Pelajaran</h1>

    <?php echo anchor('tahun_ajar/index/tambah/','<div class="btn btn-primary ml-4 mb-2" data-toggle="modal">Tambah tahun pelajaran</div>')?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Tahun</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun Pelajaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ajar as $aj) : ?>
                            <tr>
                                <td><?php echo $aj->id?></td>
                                <td><?php echo $aj->tahun_ajar?></td>
                                <td>
                                <?php echo anchor('tahun_ajar/index/edit/'.$aj->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
                                    <?php echo anchor('tahun_ajar/index/hapus/'.$aj->id,'<div href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </div>')?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>