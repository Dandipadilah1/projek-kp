<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Guru</h6>
        </div>
        <div class="card-body">
        <form action="<?php echo base_url().'index.php/guru/index/tambah_aksi';?>" method="post" enctype="multipart/form-data">
            <div class="table-responsive">
                <!-- Input Form -->
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nama">Nama Guru</label>
                            <input type="text" name="nama_guru" id="nama_guru" value="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="nama">NIP</label>
                            <input type="text" name="nip" id="nip" value="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk_guru" id="jk_guru" class="form-control">
                                <option value="L" class="form-control">L</option>
                                <option value="P" class="form-control">P</option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="jk">Guru Status</label>
                            <select name="guru_status" id="guru_status" class="form-control">
                                <option value="GURU AKTIF" class="form-control">GURU AKTIF</option>
                                <option value="WALI KELAS" class="form-control">WALI KELAS</option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="jk">Status Kepegawaian</label>
                            <select name="status_pegawai" id="status_pegawai" class="form-control">
                                <option value="PNS" class="form-control">PNS</option>
                                <option value="SUKWAN" class="form-control">SUKWAN</option>

                            </select>
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                    <?php echo anchor('guru/index/kembali/','<div class="btn btn-warning">cancel</div>')?>
                </form>
                <br><br>
            </div>
        </div>
    </div>

</div>