<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data nilai</h1>

    <!-- DataTales Example -->
    <div class="">
        <div class="">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama mapel</th>
                            <th>nilai umum </th>
                            <th>nilai huruf </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach ($rapor as $rp ) : ?>
                            <tr>
                                <td><?php echo $rp->nama_mapel?></td>
                                <td><?php echo $rp->nilai_umum?></td>
                                <td><?php echo $rp->nilai_huruf?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


