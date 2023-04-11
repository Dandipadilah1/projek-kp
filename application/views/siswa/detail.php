<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Informasi Siswa</h1>

    <?php foreach ($detail as $dt) : ?>
    <?php echo anchor('siswaindex/kembali/'.$dt->id,'<div href="" class="btn btn-warning ml-4 mb-2">Kembali</div>')?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Tabel Siswa</h6>
        </div>
       
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>Nis</td>
                                <td><?php echo $dt->nis?></td>
                            </tr>
                            <tr>
                                <td>Nisn</td>
                                <td><?php echo $dt->nisn?></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td><?php echo $dt->nama?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><?php echo $dt->jk?></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir </td>
                                <td><?php echo $dt->tmp_lahir?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><?php echo $dt->tgl_lahir?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td><?php echo $dt->agama?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?php echo $dt->alamat?></td>
                            </tr>
                            <tr>
                                <td>Nama Ayah</td>
                                <td><?php echo $dt->namaayah?></td>
                            </tr>
                            <tr>
                                <td>Nama Ibu</td>
                                <td><?php echo $dt->namaibu?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Ayah</td>
                                <td><?php echo $dt->kerjaayah?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Ibu</td>
                                <td><?php echo $dt->kerjaibu?></td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

</div>
