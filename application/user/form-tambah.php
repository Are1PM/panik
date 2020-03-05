<?php

$query = $koneksi->query('SELECT id_instansi, nama_instansi FROM tb_instansi');


?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Tambah Data User
            </div>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>level</label>
                        <select class="form-control" name="level">
                            <option value="Admin">Admin</option>
                            <option value="Instansi">Instansi</option>
                            <option value="Operator">Operator</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Instansi</label>
                        <select class="form-control" name="id_instansi">
                            <?php
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?= $data['id_instansi'] ?>"><?= $data['nama_instansi'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-info">Simpan </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['simpan'])) {

    $username = $_POST['username'];
    // $password = md5($_POST['password']);
    $password = $_POST['password'];
    $level = $_POST['level'];
    $id_instansi = $_POST['id_instansi'];

    $input = $koneksi->query("INSERT into tb_user values (NULL,'$username','$password','$level','$id_instansi')");

    if ($input) {
        echo "<script>
                    setTimeout(function() {
                        swal({
                            title: '',
                            text: 'Data Berhasil di simpan!',
                            type: 'success'
                        }, function() {
                            window.location = '?bat=data-user';
                        });
                    }, 100);
                </script>";
    }
}



?>