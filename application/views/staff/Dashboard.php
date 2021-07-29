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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                  
                    <!-- Content Row -->


                    <!-- Content Row -->
                    <div class="row">



                        <div class="col-mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                <?php foreach ($data->result() as $row) : ?>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">New Thread</h6>
                                    <h6 class="m-0 font-weight-bold text-primary">Post :      <?php echo $row->time_post;?></h6>
                                    <h6 class="m-0 font-weight-bold text-primary">Author :      <?php echo $row->author;?></h6>
                                </div>
                            
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="<?php echo base_url().'assets/images/'.$row->image;?>" alt="...">
                                    </div>
                                    <p>      <?php echo $row->forum;?></p>
                                    <button class="btn btn-primary">   <?php echo $row->status;?></button>
                                
                                </div>
                           
                            </div>
                            <?php endforeach;?>
                            </div>
                        
                            <!-- Approach -->
                    

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

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url().'assets/js/sb-admin-2.min.js'?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url().'assets/vendor/chart.js/Chart.min.js'?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url().'assets/js/demo/chart-area-demo.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/demo/chart-pie-demo.js'?>"></script>

</body>

</html>