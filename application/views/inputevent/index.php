<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JZONETECH | Joki Flashsale</title>
    <link href="http://localhost/flashsale/assets/dist/img/AdminLTELogo.png" rel="shortcut icon" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>



            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">


                <li class="nav-item">

                    <a class="btn btn-danger  btn-sm " href="http://localhost/flashsale/auth/logout" role="button"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="http://localhost/flashsale/user" class="brand-link">
                <img src="<?= base_url('assets'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">JZONETECH</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets/dist/img/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $user['name']; ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="http://localhost/flashsale/inputorder" class="nav-link">
                                <i class="nav-icon fas fa-check"></i>
                                <p>
                                    Input Flashsale
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="http://localhost/flashsale/history" class="nav-link">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>
                                    History Order
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://localhost/flashsale/pendapatan" class="nav-link">
                                <i class="nav-icon fas fa-university"></i>
                                <p>
                                    Salary
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://localhost/flashsale/profil" class="nav-link">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Profil
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>
                        i
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Input Orderan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Input Orderan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">


                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->


                    <div class="row">
                        <div class="col-8">




                        </div>
                        <div class="col-4">





                        </div>
                    </div>






                    <form>
                        <div class="form-group ">
                            <label for="exampleInputEmail1">Nama Event</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Event">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Deskripsi</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Fee</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Fee">
                        </div>
                        <label for="custom-file-input">Gambar</label>
                        <div class="custom-file">

                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                </div>
                </br>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>





                <!-- PRODUCT LIST -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Input Orderan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <!-- isi Modal -->

                                <div id="education_fields">
                                    <form>

                                        <div class="row">
                                            <div class="col-5">
                                                <input type="text" class="form-control" id="Idorder" name="Idorder[]" value="" placeholder="Masukan Id Order">
                                            </div>
                                            <div class="col-5">
                                                <input type="text" class="form-control" id="Resi" name="Resi[]" value="" placeholder="Masukan Resi">
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-success" type="button" onclick="education_fields();"> <span class="fa fa-plus" aria-hidden="true"></span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>








                                <div class="clear"></div>





                                <!-- end isi modal -->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Modal -->

                <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>





    </div>
    <!-- /.card -->

    <!-- /.card -->
    </section>
    <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2020 JZONETECH</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-rc
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('assets'); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('assets'); ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url('assets'); ?>/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('assets'); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url('assets'); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url('assets'); ?>/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('assets'); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url('assets'); ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('assets'); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets'); ?>/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets'); ?>/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url('assets'); ?>/dist/js/pages/dashboard.js"></script>

    <script>
        var room = 1;

        function education_fields() {

            room++;
            var objTo = document.getElementById('education_fields')
            var divtest = document.createElement("div");
            divtest.setAttribute("class", "form-group removeclass" + room);
            var rdiv = 'removeclass' + room;
            divtest.innerHTML = '<form><div class="row"><div class="col-5"><input type="text" class="form-control" id="Idorder" name="Idorder[]" value="" placeholder="Masukan Id Order"></div><div class="col-5"><input type="text" class="form-control" id="Resi" name="Resi[]" value=""placeholder="Masukan Resi"></div><div class="col"><div class="col"><button class="btn btn-danger" type="button"  onclick="remove_education_fields(' + room + ');"><span class="fa fa-minus" aria-hidden="true"></span></button></div></div></div></div></form> <div class="clear"></div>';

            objTo.appendChild(divtest)
        }

        function remove_education_fields(rid) {
            $('.removeclass' + rid).remove();
        }
    </script>
</body>

</html>