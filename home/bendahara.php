<?php
  $data_nama = $_SESSION["ses_nama"];
  $data_level = $_SESSION["ses_level"];
?>

<?php
  $sql = $koneksi->query("SELECT SUM(masuk) as tot_masuk  from tb_kas where jenis='Masuk'");
  while ($data= $sql->fetch_assoc()) {
    $masuk=$data['tot_masuk'];
  }

  $sql = $koneksi->query("SELECT SUM(keluar) as tot_keluar  from tb_kas where jenis='Keluar'");
  while ($data= $sql->fetch_assoc()) {
    $keluar=$data['tot_keluar'];
  }

  $saldo= $masuk-$keluar;
?>

<div class="row">
	<div class="col-lg-12 col-12">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h5>
					<?php echo rupiah($saldo); ?>
				</h5>

				<p>Total Saldo</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="?page=rekap_k" class="small-box-footer">More info
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	