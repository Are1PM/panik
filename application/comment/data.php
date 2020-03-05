 <?php

    $query = $koneksi->query("SELECT * FROM tb_comment_center INNER JOIN tb_user, tb_instansi WHERE tb_user.id_user=tb_comment_center.id_user AND tb_instansi.id_instansi=tb_user.id_instansi");

    ?>
 <div class="row pad-botm">
     <div class="col-md-12">
         <h4 class="header-line">Data Comment</h4>
     </div>
 </div>
 <div class="row">
     <div class="col-md-12">
         <!-- Advanced Tables -->
         <div class="panel panel-default">
             <div class="panel-heading">
             </div>
             <div class="panel-body">
                 <div class="table-responsive">
                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Instansi</th>
                                 <th>Lokasi</th>
                                 <th>Waktu Laporan</th>
                                 <th>Instansi</th>

                             </tr>
                         </thead>
                         <tbody>
                             <tr class="odd gradeX">
                                 <?php
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) { ?>
                                     <td><?= $i ?></td>
                                     <td><?= $data['nama_instansi'] ?></td>
                                     <td><?= $data['alamat'] ?></td>
                                     <td class="center"><?= $data['waktu'] ?></td>
                                     <td class="center"><?= $data['id_instansi'] ?></td>

                             </tr>
                         <?php $i++;
                                    } ?>
                         </tbody>
                     </table>
                 </div>

             </div>
         </div>
         <!--End Advanced Tables -->
     </div>
 </div>