<?php

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $query = $koneksi->query("SELECT * FROM tb_instansi WHERE id_instansi=$id");
    $data = mysqli_fetch_array($query);
}

?>
<div class="row pad-botm">
    <div class="col-md-12">
        <h4 class="header-line">Detail Instansi</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <a href="?bat=data-instansi" class="btn btn-success">
                    <i class="fa fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">



                        <tbody>

                            <tr>
                                <th>Foto</th>
                                <td><?= $data['foto_instansi'] ?></td>

                            </tr>
                            <tr>
                                <th>Nama Instansi</th>
                                <td><?= $data['nama_instansi'] ?></td>

                            </tr>
                            <tr>

                                <th>No HP</th>
                                <td><?= $data['no_hp'] ?></td>

                            </tr>
                            <tr>

                                <th>Alamat Instansi</th>
                                <td><?= $data['alamat_instansi'] ?></td>

                            </tr>
                            <tr>

                                <th>Map</th>
                                <td><?= $data['map_instansi'] ?></td>
                            </tr>



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>