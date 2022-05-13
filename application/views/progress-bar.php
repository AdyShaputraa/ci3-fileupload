<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Advanced form elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('/node_modules/admin-lte/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('/node_modules/admin-lte/'); ?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url('/node_modules/admin-lte/'); ?>index3.html" class="brand-link">
            <img src="<?= base_url('/node_modules/admin-lte/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="<?= base_url('/node_modules/admin-lte/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Forms
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General Elements</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Advanced Elements</p>
                        </a>
                    </li>
                    </ul>
                </li>
                </ul>
            </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Advanced Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Advanced Form</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Custom Images Files</h3>
                        </div>
                        <div class="card-body">
                            <form id="upload-form" class="upload-form" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="InputFile">File input</label>
                                        </div>
                                        <div class="col-lg-10 align-items-center">
                                            <div class="w-100">
                                                <div class="progress progress-striped active">
                                                    <div id="file-progress-bar" class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="InputFile" role="progressbar" name="file" accept="image/png, image/gif, image/jpeg" >
                                            <label class="custom-file-label" for="InputFile">Silahkan Pilih File</label>
                                        </div>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary" id="upload-file">Upload</button>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">  
                                        <div class="col">
                                            <div id="uploaded-file-message"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Custom Excel Files</h3>
                        </div>
                        <div class="card-body">
                            <form id="upload-form-excel" class="upload-form-excel" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="InputFileExcel">File input</label>
                                        </div>
                                        <div class="col-lg-10 align-items-center">
                                            <div class="w-100">
                                                <div class="progress progress-striped active">
                                                    <div id="file-progress-bar-excel" role="progressbar" class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="InputFile" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                            <label class="custom-file-label" for="InputFileExcel">Silahkan Pilih File</label>
                                        </div>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary" id="upload-file-excel">Upload</button>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">  
                                        <div class="col">
                                            <div id="uploaded-file-excel-message"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('/node_modules/admin-lte/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('/node_modules/admin-lte/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/node_modules/admin-lte/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('/node_modules/admin-lte/'); ?>dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(document).ready(function() {
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        $("#upload-form").submit(function(e) {
            e.preventDefault();
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();         
                    xhr.upload.addEventListener("progress", function(element) {
                        if (element.lengthComputable) {
                            var percentComplete = ((element.loaded / element.total) * 100);
                            $("#file-progress-bar").width(percentComplete + '%');
                            $("#file-progress-bar").html(percentComplete +'%');
                        }
                    }, false);
                    return xhr;
                },
                type: 'POST',
                url: '<?= base_url('Upload/fileUpload'); ?>',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                beforeSend: function() {
                    $("#file-progress-bar").width('0%');
                },
                success: function(json) {
                    if(json == 'Success') {
                        $('#upload-form')[0].reset();
                        $('#uploaded-file-message').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                        console.log('Success');
                    } else {
                        $('#uploaded-file-message').html('<p style="color:#EA4335;">' + json +'</p>');
                        console.log('Failed');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });

        $("#upload-form-excel").submit(function(e) {
            e.preventDefault();
            $.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();         
                    xhr.upload.addEventListener("progress", function(element) {
                        if (element.lengthComputable) {
                            var percentComplete = ((element.loaded / element.total) * 100);
                            $("#file-progress-bar-excel").width(percentComplete + '%');
                            $("#file-progress-bar-excel").html(percentComplete +'%');
                        }
                    }, false);
                    return xhr;
                },
                type: 'POST',
                url: '<?= base_url('Upload/fileUploadExcel'); ?>',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                beforeSend: function() {
                    $("#file-progress-bar-excel").width('0%');
                },
                success: function(json) {
                    if(json == 'Success') {
                        $('#upload-form-excel')[0].reset();
                        $('#uploaded-file-excel-message').html('<p style="color:#28A74B;">File has uploaded successfully!</p>');
                        console.log('Success');
                    } else {
                        $('#uploaded-file-excel-message').html('<p style="color:#EA4335;">' + json +'</p>');
                        console.log('Failed');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });
    });
</script>
</body>
</html>