<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query1 = $koneksi->query("SELECT * FROM tb_instansi WHERE id_instansi=$id");

    if (!$query1) {
        header('Location:?bat=data-instansi');
    }

    $instansi = mysqli_fetch_array($query1);
} else {
    header('Location:?bat=data-instansi');
}

?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Ubah Data Instansi
            </div>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Instansi</label>
                        <input type="text" name="id_instansi" value="<?= $instansi['id_instansi'] ?>" hidden>
                        <input type="text" class="form-control" name="nama_instansi" value="<?= $instansi['nama_instansi'] ?>" placeholder="Nama Instansi" required>
                    </div>
                    <div class="form-group">
                        <label>No Hp Instasi</label>
                        <input type="text" class="form-control" name="no_hp" value="<?= $instansi['no_hp'] ?>" placeholder="No HP Instasi" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat Instasi"><?= $instansi['alamat_instansi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Map</label>
                        <textarea class="form-control" rows="3" name="map" placeholder="Map"><?= $instansi['map_instansi'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto Instasi</label>
                        <input type="file" class="form-control" name="foto" value="<?= $instansi['foto_instansi'] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-info" name="simpan">Simpan </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['simpan'])) {

    $id_instansi = $_POST['id_instansi'];
    $nama_instansi = $_POST['nama_instansi'];
    $no_hp = $_POST['no_hp'];
    $alamat_instansi = $_POST['alamat'];
    $map_instansi = $_POST['map'];

    $foto = $_FILES['foto']['name'];
    $temp_foto = $_FILES['foto']['tmp_name'];

    $folder = "assets/foto/" . $foto;

    $pindahkan = move_uploaded_file($temp_foto, $folder);

    $input = $koneksi->query("UPDATE tb_instansi SET nama_instansi='$nama_instansi', no_hp='$no_hp', alamat_instansi='$alamat_instansi', map_instansi='$map_instansi', foto_instansi='$foto' WHERE id_instansi=$id_instansi");


    if ($input) {
        echo "<script>
                    setTimeout(function() {
                        swal({
                            title: '',
                            text: 'Data Berhasil di ubah!',
                            type: 'success'
                        }, function() {
                            window.location = '?bat=data-instansi';
                        });
                    }, 100);
                </script>";
    }
}
?>