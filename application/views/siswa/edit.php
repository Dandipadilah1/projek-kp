<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Tabel Murid</h6>
        </div>
        <?php foreach($profil as $pf) : ?>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Input Form -->
                <form action="<?php echo base_url().'index.php/siswaindex/update';?>" method="post">
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $pf->id ?>" class="form-control" id="id">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kode" class="control-label">NIS</label>
                                <input type="text" name="nis" value="<?php echo $pf->nis ?>" class="form-control" id="nis">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode" class="control-label">NISN</label>
                                <input type="text" name="nisn" value="<?php echo $pf->nisn ?>" class="form-control" id="nisn">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">Nama</label>
                                <input type="text" name="nama" value="<?php echo $pf->nama ?>" class="form-control" id="nama">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kode" class="control-label">Jenis Kelamin</label>
                                <select class="form-control" name="jk" id="jk" value="<?php echo $pf->jk ?>">
                                    <option>L</option>
                                    <option>P</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kode" class="control-label">Tempat Lahir</label>
                                <input type="text" name="tmp_lahir" value="<?php echo $pf->tmp_lahir ?>" class="form-control" id="tmp_lahir">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode" class="control-label">Tgl Lahir</label>
                                <input type="date" name="tgl_lahir" value="<?php echo $pf->tgl_lahir ?>" class="form-control" id="tgl_lahir">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode" class="control-label">Agama</label>
                                <select class="form-control" name="agama" value="<?php echo $pf->agama ?>">
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
                                <input type="text" name="alamat" id="alamat" value="<?php echo $pf->alamat ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">Nama Ayah</label>
                                <input type="text" name="namaayah" id="namaayah" value="<?php echo $pf->namaayah ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">Nama Ibu</label>
                                <input type="text" name="namaibu" id="namaibu" value="<?php echo $pf->namaibu ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">Pekerjaan Ayah</label>
                                <input type="text" name="kerjaayah" id="kerjayah" value="<?php echo $pf->kerjaayah ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">Pekerjaan Ibu</label>
                                <input type="text" name="kerjaibu" id="kerjaibu" value="<?php echo $pf->kerjaibu ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br><br>

                    <button type="submit" class="btn btn-success ml-5" name="submit" id="submit">Update</button>
                    <?php echo anchor('siswaindex/kembali/'.$pf->id,'<div href="" class="btn btn-warning">cancel</div>')?>
                    <br>
                </form>
            </div>
        </div>

    <?php endforeach; ?>

    </div>

</div>