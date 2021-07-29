<!DOCTYPE html>
<html lang="en">


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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                 <?php include 'pages/topbar.php';?>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Event</h1>
                    </div>

                  
                    <div class="row">

                      

                            <!-- Default Card Example -->
                        

                            <!-- Basic Card Example -->
                            <div class="card shadow col-md-10">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add New Event</h6>
                                </div>
                                <form action="<?php echo base_url().'index.php/admin/add_event/add'?>" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                    <label>Tittle</label>
                                    <input type="text" class="form-control" name="tittle" required>
                                    <input type="hidden" class="form-control" name="status" value="pending" required>
                                    </div>  
                                    <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select2" name="category" style="width: 100%;" required>
                                    <option value="">-Pilih-</option>
                                    <?php
                                            $no=0;
                                            foreach ($data->result_array() as $i) :
                                            $no++;
                                            
                                            $nama=$i['nama'];
                        
                                            ?>
                                        <option value="<?php echo $nama;?>"><?php echo $nama;?></option>
                                        <?php endforeach;?>
                                </select>
                                    </div>
                                    <div class="form-group row">
                                   <div class="col-md-6">
                                   <label>Location</label>
                                   <input type="text" class="form-control" name="location" required>
                                            </div>
                                            <div class="col-md-6">
                                   <label>Organizer</label>
                                   <input type="text" class="form-control" name="organizer" required>
                                            </div>
                                   </div> 
                                   <div class="form-group row">
                                   <div class="col-md-6">
                                   <label>Date Start</label>
                                   <input type="date" class="form-control" name="date_start" required>
                                            </div>
                                            <div class="col-md-6">
                                   <label>Time Start</label>
                                   <input type="time" class="form-control" name="time_start" required>
                                            </div>
                                   </div> 
                                   
                                   <div class="form-group row">
                                   <div class="col-md-6">
                                   <label>End Date</label>
                                   <input type="date" class="form-control" name="date_end" required>
                                            </div>
                                            <div class="col-md-6">
                                   <label>End Time</label>
                                   <input type="time" class="form-control" name="time_end" required>
                                            </div>
                                   </div>   
                                  <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="filefoto" required>
                                  </div>

                                

                                  <div class="form-group">
                                    <label>Description</label>
                                  <textarea name="description" class="form-control"></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-flat" id="simpan">Save Event</button>
                            </form>
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

 

    <?php include 'pages/footer_add.php';?>

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
                    text: "Event Berhasil disimpan ke database.",
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