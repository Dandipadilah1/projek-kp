<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Tahun</h6>
        </div>
        <?php foreach ($ajar as $aj) : ?>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Input Form -->
                <form action="<?php echo base_url().'index.php/tahun_ajar/index/update';?>" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="hidden" name="id" value="<?php echo $aj->id?>">
                            <label for="nama">Tahun Pelajaran
                                <input type="text" name="tahun_ajar" id="tahun_ajar" value="<?php echo $aj->tahun_ajar ?>" class="form-control">
                            </label>
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                    <?php echo anchor('tahun_ajar/index/kembali/','<div href="" class="btn btn-warning">Kembali</div>')?>
                </form>
                <br><br>
            </div>
        </div>
        <?php endforeach; ?>
    </div>