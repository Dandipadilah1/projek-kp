<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Guru</h6>
        </div>
        <?php foreach($guru as $gr) : ?>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Input Form -->
                <form action="<?php echo base_url().'index.php/guru/index/update';?>" method="post">
                    <div class="row">
                       
                            <input type="hidden" name="id" id="id" value="<?php echo $gr->id ?>">
                            
                      
                        <div class="col-md-4">
                            <label for="nama">Nama Guru</label>
                            <input type="text" name="nama_guru" id="nama_guru" value="<?php echo $gr->nama_guru ?>" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="nama">NIP</label>
                            <input type="text" name="nip" id="nip" value="<?php echo $gr->nip ?>" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk_guru" id="jk" value="<?php echo $gr->jk_guru ?>" class="form-control">
                                <option value="L" class="form-control">L</option>
                                <option value="P" class="form-control">P</option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="jk">Guru Status</label>
                            <select name="guru_status" id="guru_status" value="<?php echo $gr->guru_status ?>" class="form-control">
                                <option value="GURU AKTIF" class="form-control">GURU AKTIF</option>
                                <option value="WALI KELAS" class="form-control">WALI KELAS</option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="jk">Status Kepegawaian</label>
                            <select name="status_pegawai" id="status_pegawai" value="<?php echo $gr->status_pegawai ?>" class="form-control">
                                <option value="PNS" class="form-control">PNS</option>
                                <option value="SUKWAN" class="form-control">SUKWAN</option>

                            </select>
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                    <?php echo anchor('guru/index/kembali/','<div href="" class="btn btn-warning">Kembali</div>')?>
                </form>
                <br><br>
            </div>
        </div>
        <?php endforeach;?>
    </div>

</div>