<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Rapor KTSP</title>

  <!-- Custom fonts for this template-->
  <link href="http://localhost/real1/aset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="http://localhost/real1/aset/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<?php $sekolah = 'SMA al-bashry kalapanunggal';  foreach ($print as $pr ) : ?>
<div class='container'>
	<div class='col-lg'>
    <p style='text-align: left; width:30%; display: inline-block;'>Sekolah : <?= $sekolah ?></p>
    <p style='text-align: right; width: 30%;  display: inline-block;'>Kelas : <?php echo $pr->nama_kelas?></p><br>
    <p style='text-align: left; width:30%; display: inline-block;'>Alamat : </p>
    <p style='text-align: right; width: 30%;  display: inline-block;'>Semester : <?php echo $pr->id_semester?></p>
	<br>
    <p style='text-align: left; width:30%; display: inline-block;'>Nama : <?php echo $pr->nama?></p>
    <p style='text-align: right; width: 30%;  display: inline-block;'>Tahun : <?php echo $pr->tahun_ajar?></p>
    <br>
    <p style='text-align: left; width:30%; display: inline-block;'>NIS : <?php echo $pr->nisn?></p>
    <p style='text-align: right; width: 30%;  display: inline-block;'>Kode Raport :<?php echo $pr->kd_raport?></p>
    </div>
    </div>

<style>
<?php endforeach;?>
.tg {
	border-collapse: collapse;
	border-spacing: 0;
}

.tg td {
	font-family: Arial, sans-serif;
	font-size: 12px;
	padding: 5px 5px;
	border-style: solid;
	border-width: 0px;
	overflow: hidden;
	word-break: normal;
	border-color: black;
}

.tg th {
	font-family: Arial, sans-serif;
	font-size: 12px;
	font-weight: normal;
	padding: 5px 5px;
	border-style: solid;
	border-width: 1px;
	overflow: hidden;
	word-break: normal;
	border-color: black;
}

.tg .tg-s268 {
	text-align: left
}

.tg .tg-0lax {
	text-align: left;
	vertical-align: top
}

.tg .tg-73oq {
	border-color: #000000;
	text-align: left;
	vertical-align: top
}
.no{
    width:-10px;
}
</style>
<div class='container'>
	<table class='tg' style='undefined;table-layout: fixed; width :500px;>
	<colgroup>
        <col style='width: 30px'>
        <col style='width: 40px'>
        <col style='width: 250px'>
        <col style='width: 40px'>
        <col style='width: 50px'>
        <col style='width: 50px'>
        <col style='width: 225px'>
    </colgroup>
	<tr>
	<th class='tg-s268'>No</th>
    <th class='tg-s268'>Mata Pelajaran</th>
	<th class='tg-s268'>KKM</th>
	<th class='tg-s268'>Nilai</th>
	<th class='tg-s268'>Huruf</th>
	<th class='tg-s268'>Deskripsi Kemajuan Belajar</th>
</tr>
<tbody>
<?php $i = 1; $k = 70; foreach ($nilai as $nl ) : ?>

  <tr>
    <td class='tg-s268'><?= $i++ ?></td>
    <td class='tg-s268'><?php echo $nl->nama_mapel?></td>
	<td class='tg-s268'><?= $k ?></td>
	</td><td class='tg-s268'><?php echo $nl->nilai_umum?></td>
	<td class='tg-s268'><?php echo $nl->nilai_huruf?></td>
    <td class='tg-s268'></td>
    </tr>
<?php endforeach;?>
<?php foreach ($print as $pr ) : ?>
<tr><td colspan='3'>Jumlah Nilai </td><td><?php echo $pr->totalnilai?></td><td></td><td></td></tr>
<tr><td colspan='3'>Nilai Rata-rata</td><td></td><td></td><td></td></tr>
<tr><td colspan='6'>Peringkat Ke......dari....siswa</td></tr>
<div class='row'>
</table>
<?php endforeach;?>
<div class='col-md-3'> Kegiatan Pengembangan Diri</div>
<style type='text/css'>
</style>
<table class='tg' style='undefined;table-layout: fixed; width: 655px'>
<colgroup>
<col style='width: 200px'>
<col style='width: 100px'>
<col style='width: 355px'>
</colgroup>
<?php  foreach ($print as $pr ) : ?>
  <tr>
    <th class='tg-c3ow'>Jenis Pengembangan Diri</th>
    <th class='tg-baqh'>Nilai </th>
    <th class='tg-baqh'>Keterangan</th>
  </tr>
  <tr>
    <td class='tg-baqh'><?php echo $pr->ekstra?></td>
    <td class='tg-baqh'><?php echo $pr->nilai_ekstra?></td>
    <td class='tg-baqh'></td>
  </tr>

</table>


</table>
<div class='container'>
<div class='row'>
<div class='col-lg-4'>Non Akademis
<style type='text/css'>
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:12px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
</style>
<table class='tg' style='undefined;table-layout: fixed; width: 230px'>
<colgroup>
<col style='width: 30px'>
<col style='width: 100px'>
<col style='width: 100px'>
</colgroup>
  <tr>
    <th class='tg-c3ow'>No</th>
    <th class='tg-c3ow'>Aspek</th>
    <th class='tg-baqh'>Keterangan</th>
  </tr>
  <tr>
    <td class='tg-baqh'>1</td>
	<td class='tg-baqh'>Akhlak Mulia</td>
	<td class='tg-baqh'><?php echo $pr->akhlak?></td>
	
  </tr>
  <tr>
    <td class='tg-baqh'>2</td>
    <td class='tg-baqh'>Kepribadian</td>
    <td class='tg-baqh'><?php echo $pr->kepribadian?></td>
    
  </tr>
</table>
</div>

<div class='row'>
<div class='col-lg-3'> Ketidakhadiran
<style type='text/css'>
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:12px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:12px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
</style>
<table class='tg' style='undefined;table-layout: fixed; width: 300px; '>
<colgroup>
<col style='width: 30px'>
<col style='width: 100px'>
<col style='width: 60px'>
</colgroup>
  <tr>
    <th class='tg-c3ow'>No</th>
    <th class='tg-c3ow'>Alasan Ketidakhadiran</th>
    <th class='tg-baqh'>Keterangan</th>
  </tr>
  <tr>
    <td class='tg-baqh'>1</td>
	<td class='tg-baqh'>Sakit</td>
	<td class='tg-baqh'><?php echo $pr->sakit?></td>
	
  </tr>
  <tr>
    <td class='tg-baqh'>2</td>
    <td class='tg-baqh'>Izin</td>
    <td class='tg-baqh'><?php echo $pr->izin?></td>
    
  </tr>
  <tr>
    <td class='tg-baqh'>3</td>
    <td class='tg-baqh'>Tanpa Keterangan</td>
    <td class='tg-baqh'><?php echo $pr->alfa?></td>
    
  </tr>
</table>
</div>
</div>
</br>
</div>
</div>
<?php endforeach;?>



<div class='row'>
<div class='col-lg'>

<p>Orang Tua / Wali</p>
</br>  </br>  </br>




....................................
</div>
<div class='col-lg'>

<p>Walikelas</p>
</br>  </br>  </br>




....................................


</div>
  <div class='col-lg'>
  <p>Kepala Sekolah</p>
	</br>  </br>  </br>
	
	
	
	
  ....................................
  
</div>

	<div class='alert alert-warning' role='alert'>
	<center><a href='javascript:if(window.print)window.print()'>
	<button type='button' class='btn btn-success'><span class='glyphicon glyphicon-print' aria-hidden='true'></span>Cetak halaman ini</button></a></center>
	</div>
        </div></div></div>

<!-- Bootstrap core JavaScript-->
<script src="http://localhost/real1/aset/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/real1/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="http://localhost/real1/aset/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="http://localhost/real1/aset/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="http://localhost/real1/aset/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="http://localhost/real1/aset/js/demo/chart-area-demo.js"></script>
<script src="http://localhost/real1/aset/js/demo/chart-pie-demo.js"></script>

</body>

</html>