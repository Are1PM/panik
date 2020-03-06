<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query1 = $koneksi->query("SELECT * FROM tb_user WHERE id_user=$id");

    if (!$query1) {
        header('Location:?bat=data-user');
    }

    $user = mysqli_fetch_array($query1);
} else {
    header('Location:?bat=data-user');
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
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $user['username'] ?>"
                            placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" value="<?= $user['password'] ?>"
                            placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>level</label>
                        <select class="form-control select2" name="level">
                            <option value="1" <?= ($user['password'] == 1) ? "Selected" : "" ?>>Admin</option>
                            <option value="2" <?= ($user['password'] == 2) ? "Selected" : "" ?>>Instansi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id_instansi" value="<?= $user['id_instansi'] ?>">
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

    $input = $koneksi->query("UPDATE tb_user SET username='$username', password='$password', level='$level' WHERE id_instansi=$id_instansi");

    if ($input) {
        echo "<script>
                    setTimeout(function() {
                        swal({
                            title: '',
                            text: 'Data Berhasil di ubah!',
                            type: 'success'
                        }, function() {
                            window.location = '?bat=data-user';
                        });
                    }, 100);
                </script>";
    }
}
?>