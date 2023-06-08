<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kas WHERE id='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title"><i class="fa fa-edit"></i> Ubah Pengeluaran</h3>
  </div>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="card-body">

    <input type='hidden' class="form-control" name="id" value="<?php echo $data_cek['id']; ?>" readonly/>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Uraian</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="uraian" name="uraian" value="<?php echo $data_cek['uraian']; ?>"/>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Pengeluaran</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="keluar" name="keluar" value="<?php echo $data_cek['keluar']; ?>"/>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-4">
          <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data_cek['tanggal']; ?>"/>
        </div>
      </div>

    </div>
    <div class="card-footer">
      <input type="submit" name="Ubah" value="Simpan" class="btn btn-success" >
      <a href="?page=o_data_k" title="Kembali" class="btn btn-secondary">Batal</a>
    </div>
  </form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_kas SET
        uraian='".$_POST['uraian']."',
        keluar='".$_POST['keluar']."',
        tanggal='".$_POST['tanggal']."'
        WHERE id='".$_POST['id']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=o_data_k';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=o_data_k';
        }
      })</script>";
    }}
?>
