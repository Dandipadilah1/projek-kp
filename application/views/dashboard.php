
<div class="container-fluid text-center">
    <?php foreach ($profil as $pf) : ?>
            <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h3 mb-2 text-gray-800">Selamat Datang di Aplikasi  website Pengolahan Data Nilai (Raport)<h1><img src="<?php echo base_url()?>logo.jpg" alt="" width="200" height="200"> 
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table">
                        
                            <thead>
                            <tbody>
                                <h3> Informasi Sekolah</h3>

                                <tr>
                                    <td>Nama Sekolah</td>
                                    <td><?php echo $pf->nm_sekolah?></td>
                                </tr>
                                <tr>
                                    <td>NPSN</td>
                                    <td><?php echo $pf->npsn?></td>
                                </tr>
                                <tr>
                                    <td>Jenjang Pendidikan</td>
                                    <td><?php echo $pf->jenjang?></td>
                                </tr>
                                <tr>
                                    <td>Akreditasi</td>
                                    <td><?php echo $pf->akreditasi?></td>
                                </tr>
                                <tr>
                                    <td>Alamat Sekolah </td>
                                    <td><?php echo $pf->alamat?></td>
                                </tr>
                            </tbody>
                            <thead>
                            <tbody>


                                <td colspan="2">
                                    <h3>Informasi Kepala Sekolah</h3>
                                </td>


                                <tr>
                                <td>Nama Kepala Sekolah</td>
                                <td><?php echo $pf->kepsek_nama?></td>
                            </tr>
                            <tr>
                                <td>NIP Kepala Sekolah</td>
                                <td><?php echo $pf->kepsek_nip?></td>
                            </tr>
                            <tr>
                                <td>Pangkat</td>
                                <td><?php echo $pf->kepsek_pangkat?></td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td><?php echo $pf->kepsek_jabatan?></td>
                            </tr>
                            <tr>
                                <td>Alamat Kepala Sekolah</td>
                                <td><?php echo $pf->kepsek_alamat?></td>
                            </tr>
                                </thead>
                            </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
