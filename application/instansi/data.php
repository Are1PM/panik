<?php

$query = $koneksi->query("SELECT * FROM tb_instansi");

?>
<div class="row pad-botm">
    <div class="col-md-12">
        <h4 class="header-line">Data Instansi</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="?bat=tambah-data-instansi" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Tambah
                </a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama Instansi</th>
                                <th>No HP</th>
                                <th>Alamat Instansi</th>
                                <th>Map</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            // print_r($data = mysqli_fetch_array($query));
                            // die;
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr class="odd gradeX">
                                    <td><?= $i ?></td>
                                    <td><?= $data['foto_instansi'] ?></td>
                                    <td><?= $data['nama_instansi'] ?></td>
                                    <td class="center"><?= $data['no_hp'] ?></td>
                                    <td class="center"><?= $data['alamat_instansi'] ?></td>
                                    <td class="center"><?= $data['map_instansi'] ?></td>
                                    <td class="center">
                                        <a href="?bat=ubah-data-instansi&id=<?= $data['id_instansi'] ?>">
                                            <i class="fa fa-pencil"></i>
                                        </a> |
                                        <a href="?bat=detail-data-instansi">
                                            <i class="fa fa-eye"></i>
                                        </a> |
                                        <a href="?bat=hapus-instansi&hapus=<?= $data['id_instansi'] ?>">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>