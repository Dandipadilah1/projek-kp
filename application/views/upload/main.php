<div class="container-fluid">
    <!-- Cari -->


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">UPLOAD FILE</h1>


        <div class="card-header py-3">
            <form action="<?=site_url("/main/upload")?>" method="POST" enctype="multipart/form-data">
                <input type="file" name="file" >
                <input type="submit" class="btn btn-primary" value="upload">
            </form>
        </div>

        <div class="card-body">
            <div class="m-0 font-weight-bold text-primary">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($files as $file) : ?>
                        <tr>
                            <td><?=$file?></td>
                            <td>
                                <a href="<?=base_url("index.php/upload/$file")?>" class="btn btn-primary" download >unduh</a>
                                <a href="<?=base_url("index.php/main/delete/$file")?>" class="btn btn-danger">hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>