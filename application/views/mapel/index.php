<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Mata Pelajaran</h1>

    <?php echo anchor('mapel/index/tambah/','<div class="btn btn-primary ml-4 mb-2" data-toggle="modal">Tambah Data mapel</div>')?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Mapel</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Mapel</th>
                            <th>Kode Mapel</th>
                            <th>Semester</th>
                            <th>Guru Pengajar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($mapel as $mp) : ?>
                            
                            <tr>
                                <td><?php echo $mp->nama_mapel?></td>
                                <td><?php echo $mp->kode_mapel?></td>
                                <td><?php echo $mp->id_semester ?></td>
                                <td><?php echo $mp->nama_guru ?></td>
                                <td>
                                    <?php echo anchor('mapel/index/edit/'.$mp->id_mapel,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
                                    <?php echo anchor('mapel/index/hapus/'.$mp->id_mapel,'<div href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </div>')?>
                                </td>

                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>