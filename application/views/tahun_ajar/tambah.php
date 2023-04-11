<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Tahun</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <form action="<?php echo base_url().'index.php/tahun_ajar/index/tambah_aksi';?>" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="hidden" name="id" value="">
                            <label for="nama">Tahun Pelajaran
                                <input type="text" name="tahun_ajar" id="tahun_ajar" value="" class="form-control">
                            </label>

                        </div>
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                    <?php echo anchor('tahun_ajar/index/kembali/','<div href="" class="btn btn-warning">Kembali</div>')?>
                </form>
                <br><br>
            </div>
        </div>
    </div>