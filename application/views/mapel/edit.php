<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Guru</h6>
        </div>
        <?php foreach($mapel as $mp) : ?>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- Input Form -->
                    <form action="<?php echo base_url().'index.php/mapel/index/update';?>" method="post">
                        <input type="hidden" name="id_mapel" id="id_mapel" value="<?php echo $mp->id_mapel ?>" class="form-control">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nama">Nama Mata Pelajaran</label>
                                <input type="text" name="nama_mapel" id="nama_mapel" value="<?php echo $mp->nama_mapel ?>" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="nama">Kode Mapel</label>
                                <input type="text" name="kode_mapel" id="kode_mapel" value="<?php echo $mp->kode_mapel ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="jk">Semester</label>
                                <select name="id_semester" id="id_semester" value="<?php echo $mp->id_semester ?>" class="form-control">
                                    <option value="">-Pilih</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>

                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="jk">Nama Guru Mapel</label>
                                <select name="nama_guru" id="nama_guru" value="<?php echo $mp->nama_guru ?>"class="form-control">
                                    <?php foreach ($datakategori as $data): ?>
                                    <option name= "id" value="<?php echo $data->nama_guru ?>"><?php echo $data->nama_guru ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <?php echo anchor('mapel/index/kembali/','<div href="" class="btn btn-warning">Kembali</div>')?>
                    </form>
                    <br><br>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>