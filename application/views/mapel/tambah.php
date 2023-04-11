<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Guru</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Input Form -->
                <form action="<?php echo base_url().'index.php/mapel/index/tambah_aksi';?>" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nama">Nama Mata Pelajaran</label>
                            <input type="text" name="nama_mapel" id="nama_mapel" value="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="nama">Kode Mapel</label>
                            <input type="text" name="kode_mapel" id="kode_mapel" value="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="jk">Semester</label>
                            <select name="id_semester" id="id_semester" class="form-control">
                                <option value="">-Pilih</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="jk">Nama Guru Mapel</label>
                            <select name="nama_guru" id="nama_guru" class="form-control">
                                <?php foreach ($datakategori as $dt): ?>
                                <option name= "id" value="<?php echo $dt->nama_guru ?>"><?php echo $dt->nama_guru ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <?php echo anchor('mapel/index/kembali/','<div class="btn btn-warning">cancel</div>')?>
                </form>
                <br><br>
            </div>
        </div>
    </div>

</div>