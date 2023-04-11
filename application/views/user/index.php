<div class="container-fluid">
    <!-- Cari -->


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar user</h1>

    <?php echo anchor('siswaindex/tambah/','<div class="btn btn-primary ml-4 mb-2" data-toggle="modal">Tambah User</div>')?>
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
                            <th>Nama</th>
                            <th>username</th>
                            <th>password</th>
                            <th>role id</th>
                            <th>aksi</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>username</th>
                            <th>password</th>
                            <th>role id</th>
                            <th>aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($user as $us) : ?>
                            <tr>
                                <td><?php echo $us->nama?></td>
                                <td><?php echo $us->username?></td>
                                <td><?php echo $us->password?></td>
                                <td><?php echo $us->role_id?></td>
                                <td>
                                <?php echo anchor('user/index/edit/'.$us->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
                                    <div href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                            
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>