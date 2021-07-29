<!DOCTYPE html>
<html lang="en">

<?php include 'pages/Head_table.php';?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include 'pages/sidebar.php';?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
            <?php include 'pages/topbar_table.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                
                        <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus" aria-hidden="true"></i> Tambah
</button>
                        
                        <br>
                        <br>
                        <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <form action="<?php echo base_url().'index.php/super_admin/list_user/add'?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                        <label>NIP</label>
                        <input type="number" name="nip" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                        <label>Password</label>
                        <input type="text" name="pengguna_password" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                        <label>Level</label>
                     <select name="level" class="form-control" required>
                         <option value="">--Pilih Hak Akses--</option>
                         <option value="admin"> admin </option>
                         <option value="staff"> Staff </option>
                         <option value="super_admin"> Super Admin </option>
                    </select>     
                            </div>
                            <div class="col-md-6">
                        <label>Status</label>
                        <select name="blokir" class="form-control" required>
                         <option value="">--Pilih Status--</option>
                         <option value="N"> Aktif </option>
                         <option value="Y"> Tidak Aktif </option>

                    </select>   
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                    </div>
                </div>
                </div>
                            
                                                    
                                    
                        
                        
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Hak Akses</th>
                                            <th>Status Blokir</th>
                                            <th>Register</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                     
                                       

                                         
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Hak Akses</th>
                                            <th>Status</th>
                                            <th>Register</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                          
</tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                      $no=1;
                      foreach ($data->result() as $row):
                    ?>                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $row->nip;?></td>
                                            <td><?php echo $row->nama;?></td>
                                            <td><?php echo $row->level;?></td>
                                            
                                            <td><?php echo $row->blokir;?></td>
                                            
                                            <td><?php echo $row->register;?></td>

                                          <td style="text-align:right;">    <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $row->id_user;?>"><span class="fa fa-pen"></span></a></td>
                                          <td style="text-align:right;">    <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $row->id_user;?>"><span class="fa fa-trash"></span></a></td>
                                         
                                        
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

            <!-- End of Main Content -->

            <!-- Footer -->
      <?php include 'pages/footer.php';?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
  <?php include 'pages/logout.php';?>



    <?php include 'pages/footer_table.php';?>
    
    <?php foreach ($data->result_array() as $i) :
              $id_user=$i['id_user'];
              $nama=$i['nama'];
          
            ?>

    <div class="modal fade" id="ModalHapus<?php echo $id_user;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/super_admin/list_user/delete'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $id_user;?>"/>
                            <p>Apakah Anda yakin mau menghapus <b><?php echo $nama;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  

	<?php endforeach;?>

    <?php foreach ($data->result_array() as $i) :
              $id_user=$i['id_user'];
         
              $nama=$i['nama'];
               
              $nip=$i['nip'];
               
              $email=$i['email'];
               
              $level=$i['level'];
               
              $blokir=$i['blokir'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id_user;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/super_admin/list_user/update'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                    <div class="form-group">
                                        <label>NIP</label>
                                        <div class="col-sm-12">
										
                                            <input type="text" name="nip" class="form-control" id="inputUserName" value="<?php echo $nip;?>" placeholder="Data User" required>
                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <div class="col-sm-12">
											<input type="hidden" name="kode" value="<?php echo $id_user;?>"/>
                                            <input type="text" name="nama" class="form-control" id="inputUserName" value="<?php echo $nama;?>" placeholder="Data User" required>
                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="col-sm-12">
										
                                            <input type="email" name="email" class="form-control" id="inputUserName" value="<?php echo $email;?>" placeholder="Data User" required>
                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Level</label>
                                        <div class="col-sm-12">
                                                <select name="level" class="form-control" required>
                                                    <option value="<?php echo $level;?>"><?php echo $level;?></option>
                                                    <option value="admin"> admin </option>
                                                    <option value="staff">staff</option>
                                                    <option value="super_admin">Super Admin</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Blokir</label>
                                        <div class="col-sm-12">
                                                <select name="blokir" class="form-control" required>
                                                    <option value="<?php echo $blokir;?>"><?php echo $blokir;?></option>
                                                    <option value="Y"> YA </option>
                                                    <option value="N">Tidak </option>
                                   
                                                </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Reset Password</label>
                                        <div class="col-sm-12">
										
                                            <input type="text" name="pengguna_password" class="form-control" id="inputUserName" value="" placeholder="reset password">
                                        
                                        </div>
                                    </div>
                                 

                    </div>
                    <div class="modal-footer">
                       <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close </button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>
  
</body>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data User Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Data User berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data User Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>

</html>