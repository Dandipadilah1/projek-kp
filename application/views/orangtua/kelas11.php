<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Rapor Kelas 12</h1>

    <!-- DataTales Example -->
    <div class="">
        <div class="">
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
                                <?php echo anchor('orangtua/rekapnilai/detail/'.$rp->kd_raport,'<div class="btn btn-primary btn-sm">Lihat Nilai</i></div>')?>
                                </td>
                                </td>

                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


