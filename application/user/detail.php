<?php

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $query = $koneksi->query("SELECT * FROM tb_user INNER JOIN tb_instansi WHERE tb_user.id_instansi=tb_instansi.id_instansi AND id_user=$id");
    $data = mysqli_fetch_array($query);
}

?>
<div class="row pad-botm">
    <div class="col-md-12">
        <h4 class="header-line">Detail User</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <a href="?bat=data-user" class="btn btn-success">
                    <i class="fa fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">



                        <tbody>

                            <tr>
                                <th>Username</th>
                                <td><?= $data['username'] ?></td>

                            </tr>
                            <tr>
                                <th>Password</th>
                                <td><?= $data['password'] ?></td>

                            </tr>
                            <tr>

                                <th>Level</th>
                                <td><?= $data['level'] ?></td>

                            </tr>
                            <tr>

                                <th>Instansi</th>
                                <td><?= $data['nama_instansi'] ?></td>

                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>