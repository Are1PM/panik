<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="panel panel-info">
            <div class="panel-heading">
               Tambah Data Instansi
            </div>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Instansi</label>
                        <input type="text" class="form-control" name="nama_instansi" placeholder="Nama Instansi" required>
                    </div>
                    <div class="form-group">
                        <label>No Hp Instasi</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="No HP Instasi" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat Instansi"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Map</label>
                        <textarea class="form-control" rows="3" name="map" placeholder="Map"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Instasi</label>
                        <input type="file" class="form-control" name="foto" required>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-info">Simpan </button>
                </form>
            </div>
         </div>
    </div>
</div>

<?php

if (isset($_POST['simpan'])) {

    $nama_instansi=$_POST['nama_instansi'];
    $no_hp=$_POST['no_hp'];
    $alamat_instansi=$_POST['alamat'];
    $map_instansi=$_POST['map'];

    $foto=$_FILES['foto']['name'];
    $temp_foto=$_FILES['foto']['tmp_name'];

    $folder="assets/foto/".$foto;

    $pindahkan=move_uploaded_file($temp_foto, $folder);

    $input=$koneksi->query("INSERT into tb_instansi values (NULL,'$foto','$nama_instansi','$no_hp','$alamat_instansi','$map_instansi')");

    if ($input) {
         echo "<script>
                    setTimeout(function() {
                        swal({
                            title: '',
                            text: 'Data Berhasil di simpan!',
                            type: 'success'
                        }, function() {
                            window.location = '?bat=data-instansi';
                        });
                    }, 100);
                </script>";
    }
}



?>