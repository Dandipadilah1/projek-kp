<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Kelas</h6>
        </div>
        <?php foreach($kelas as $ks) : ?>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- Input Form -->
                    <form action="<?php echo base_url().'index.php/kelas/index/update';?>" method="post">
                        <input type="hidden" name="id_kelas" id="id_kelas" value="<?php echo $ks->id_kelas?>" class="form-control">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nama">NAMA KELAS
                                    <input type="text" name="nama_kelas" id="nama_kelas" value="<?php echo $ks->nama_kelas?>" class="form-control">
                                </label>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="jk">Guru Wali Kelas</label>
                                <select name="nama_guru" id="nama_guru" class="form-control">
                                    <?php foreach ($datakategori as $data): ?>
                                    <option name= "id" value="<?php echo $data->nama_guru ?>"><?php echo $data->nama_guru ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                        <?php echo anchor('kelas/index/kembali/','<div href="" class="btn btn-warning">Kembali</div>')?>
                    </form>
                    <br><br>
                </div>
            </div>
        <?php endforeach;?>
    </div>

</div>