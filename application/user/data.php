 <?php

    $query = $koneksi->query("SELECT * FROM tb_user inner join tb_instansi WHERE tb_instansi.id_instansi=tb_user.id_instansi");

    ?>
 <div class="row pad-botm">
     <div class="col-md-12">
         <h4 class="header-line">Data User</h4>
     </div>
 </div>
 <div class="row">
     <div class="col-md-12">
         <!-- Advanced Tables -->
         <div class="panel panel-default">
             <div class="panel-heading">
                 <a href="?bat=tambah-data-user" class="btn btn-primary">
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
                                 <th>Username</th>
                                 <th>Password</th>
                                 <th>Level</th>
                                 <th>Instansi</th>
                                 <th>Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr class="odd gradeX">
                                 <?php
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($query)) { ?>
                                     <td><?= $i ?></td>
                                     <td><?= $data['username'] ?></td>
                                     <td><?= $data['password'] ?></td>
                                     <td class="center"><?= $data['level'] ?></td>
                                     <td class="center"><?= $data['nama_instansi'] ?></td>
                                     <td class="center">
                                         <a href="?bat=ubah-data-user&id=<?= $data['id_user'] ?>">
                                             <i class="fa fa-pencil"></i>
                                         </a> |
                                         <a href="?bat=detail-data-user&id=<?= $data['id_user'] ?>">
                                             <i class="fa fa-eye"></i>
                                         </a> |
                                         <a href="">
                                             <i class="fa fa-trash-o"></i>
                                         </a>
                                     </td>
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