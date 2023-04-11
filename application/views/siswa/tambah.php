<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Murid</h6>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url().'index.php/siswaindex/tambah_aksi';?>" method="post" enctype="multipart/form-data">
            <div class="table-responsive">
                <!-- Input Form -->
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kode" class="control-label">NIS</label>
                                <input type="text" name="nis" value="" class="form-control" id="nis">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode" class="control-label">NISN</label>
                                <input type="text" name="nisn" value="" class="form-control" id="nisn">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">Nama</label>
                                <input type="text" name="nama" value="" class="form-control" id="nama">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kode" class="control-label">jenis Kelamin</label>
                                <select class="form-control" name="jk" id="jk">
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kode" class="control-label">Tempat Lahir</label>
                                <input type="text" name="tmp_lahir" value="" class="form-control" id="tmp_lahir">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode" class="control-label">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="" class="form-control" id="tgl_lahir">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode" class="control-label">Agama</label>
                                <select class="form-control" name="agama">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Budha</option>
                                    <option>Hindu</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="kode" class="control-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">Nama Ayah</label>
                                <input type="text" name="namaayah" id="namaayah" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">Nama Ibu</label>
                                <input type="text" name="namaibu" id="namaibu" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">Pekerjaan Ayah</label>
                                <input type="text" name="kerjaayah" id="kerjaayah" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">Pekerjaan Ibu</label>
                                <input type="text" name="kerjaibu" id="kerjaibu" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-5">Submit</button>
                    <?php echo anchor('siswaindex/kembali/','<div class="btn btn-warning">cancel</div>')?>
                </form>
                
            </div>
            </form>

        </div>
    </div>

</div>