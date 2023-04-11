<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Tabel Murid</h6>
        </div>
        <?php foreach ($update as $up) : ?>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Input Form -->
                <form action="<?php echo base_url().'index.php/user/index/edit';?>" method="post">
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $up->id ?>" class="form-control" id="id">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kode" class="control-label">Nama</label>
                                <input type="text" name="nama" value="<?php echo $up->nama ?>" class="form-control" id="nama">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="kode" class="control-label">username</label>
                                <input type="text" name="username" value="<?php echo $up->username ?>" class="form-control" id="username">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode" class="control-label">password</label>
                                <input type="text" name="password" value="<?php echo $up->password ?>" class="form-control" id="password">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kode" class="control-label">id rol</label>
                                <select class="form-control" name="role_id" id="role_id" value="<?php echo $us->role_id ?>">
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success ml-5" name="submit" id="submit">Update</button>
                    <div href="" class="btn btn-warning">cancel</div>
                    <br>
                </form>
            </div>
        </div>

    <?php endforeach; ?>

    

    </div>

</div>