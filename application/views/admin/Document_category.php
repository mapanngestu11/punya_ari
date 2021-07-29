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
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <form action="<?php echo base_url().'index.php/admin/document_category/add_document_category'?>" method="POST">
                    <div class="modal-body">
                        <label>Name</label>
                        <input type="text" name="nama" class="form-control" required>
                        <input type="hidden" name="status" value="document" class="form-control" required>

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
                                            <th>Name</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                    </tfoot>
                                    <tbody>
                                    <?php
					$no=0;
					foreach ($data->result_array() as $i) :
					   $no++;
                       $id_kategori=$i['id_kategori'];
                       $nama=$i['nama'];

                    ?>
                                        <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $nama;?></td>
                                            <td>
                                                <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id_kategori;?>"><span class="fa fa-pen"></span></a>
                                                <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id_kategori;?>"><span class="fa fa-trash"></span></a>
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
              $id_kategori=$i['id_kategori'];
              $nama=$i['nama'];
            ?>

    <div class="modal fade" id="ModalHapus<?php echo $id_kategori;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/document_category/delete_document_category'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $id_kategori;?>"/>
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
              $id_kategori=$i['id_kategori'];
              $nama=$i['nama'];
              $status=$i['status'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id_kategori;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/document_category/update_document_category'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label>Name</label>
                                        <div class="col-sm-12">
											<input type="hidden" name="kode" value="<?php echo $id_kategori;?>"/>
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
                    text: "Kategori Berhasil dihapus.",
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