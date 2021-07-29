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
      
                                                    
                                    
                        
                        
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                        
                                            
                                            <th>Status</th>
                                            <th>Waktu</th>
                                            <th>note</th>

                                            <th>Action</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Judul</th>
                                            <th>Status</th>
                                            <th>Waktu</th>
                                            <th>notet</th>
                                            <th>Action</th>
                                    </tfoot>
                                    <tbody>
                                    <?php
                      $no=1;
                      foreach ($data->result() as $row):
                    ?>                                        <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $row->tittle;?></td>
                                            <td><?php echo $row->status;?></td>
                                            <td><?php echo $row->time_post;?></td>
                                          <td style="text-align:right;"><a href="<?php echo site_url('admin/my_note/get_file/'.$row->id_note);?>" class="btn btn-info">Download</a></td>
                                            <td>
                                             
                                                <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $row->id_note;?>"><span class="fa fa-trash"></span></a>
                                            </td>
                                          
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
            $id_note=$i['id_note'];
            $tittle =$i['tittle'];
            $note =$i['note'];
            
            ?>

    <div class="modal fade" id="ModalHapus<?php echo $id_note;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Note</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/my_note/hapus_file'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                         
                           <input type="hidden" name="file" value="<?php echo $note;?>">
							<input type="hidden" name="kode" value="<?php echo $id_note;?>"/>
                            <p>Apakah Anda yakin mau menghapus <b><?php echo $tittle;?></b> ?</p>

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
              $id_note=$i['id_note'];
              $tittle=$i['tittle'];
          
            ?>

    <div class="modal fade" id="ModalDownload<?php echo $id_note;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Download</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/my_note/download'?>" >
                    <div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $id_note;?>"/>
                            <p>download note ini  <b><?php echo $tittle;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Download</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  

	<?php endforeach;?>

    <?php foreach ($data->result_array() as $i) :
              $id_note=$i['id_note'];
         
              $status=$i['status'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id_note;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/forum_category/update_forum_category'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label>Name</label>
                                        <div class="col-sm-12">
											<input type="hidden" name="kode" value="<?php echo $id_note;?>"/>
                                            <input type="text" name="nama" class="form-control" id="inputUserName" value="<?php echo $nama;?>" placeholder="Kategori" required>
                                            <input type="hidden" name="status" class="form-control" id="inputUserName" value="<?php echo $status;?>" placeholder="Kategori" required>
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
                    text: "Kategori Berhasil disimpan ke database.",
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
                    text: "Kategori berhasil di update",
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
                    text: "Note Berhasil dihapus.",
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