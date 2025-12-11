<?php
$id = $_REQUEST['id'];
include_once('db_config.php');
// session_start();

// if(!isset($_SESSION['email'])){
//   header('Location:index.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Travelars of Destination</title>
  <!-- Tell the browser to be responsive to screen width -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
  <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
  <meta name="author" content="uxliner" />
  <!-- v4.1.3 -->
  <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/style.css">
  <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
  <link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- summernote -->
  <link rel="stylesheet" href="dist/plugins/summernote/summernote-bs4.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="skin-blue sidebar-mini sidebar-collapse">
  <div class="wrapper boxed-wrapper">
    <?php include_once("inc/header.php") ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include_once("inc/side_bar.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header sty-two">
        <h1 class="text-white">Tour Packages</h1>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><i class="fa fa-angle-right"></i> <a href="#">Update</a></li>
          <li><i class="fa fa-angle-right"></i>Update Packages</li>
        </ol>
      </div>

      <!-- Main content -->
      <div class="content">
        <h2>
             <?php
                $sql = "SELECT * FROM package WHERE package.id = '$id'";
                $record = $db->query($sql);
                $row = $record->fetch_object();
                echo $row->title . ", ". $row->country; ?> Package</h2>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <form action="" enctype="multipart/form-data" method="post">
                <?php
                if (isset($_REQUEST['click'])) {
                  extract($_REQUEST);
                  $name = $_FILES['photo']['name'];
                  $tmp_name = $_FILES['photo']['tmp_name'];
                  $path =  "images/".$name ;
                  move_uploaded_file($tmp_name, $path);
                  $sql = "UPDATE package SET time_length = '$time_length', price = '$price', details = '$details', package_photo = '$path' WHERE package.id = '$id'";
                  $record = $db->query($sql);
                  if($db->affected_rows){
                    echo '<div class="alert alert-success text-center">Update Successfully</div>';
                  }
                  else{
                    echo '<div class="alert alert-danger text-center">Update Decliened</div>';
                  }
                }
                $db->close();
                ?>
                <div style="margin-top : 30px; padding-left : 20px; padding-right : 20px" class="input-group">
                  
                  <div style="padding-left : 20px; padding-right : 20px" class="input-group">
                  <div class="input-group-addon"><i class="fa fa-podcast"></i></div>
                  <input class="form-control" name="time_length" placeholder="Tour Days" type="text" value="">
                </div>
                <br>
                <div style="padding-left : 20px; padding-right : 20px" class="input-group">
                  <div class="input-group-addon"><i class="fa fa-podcast"></i></div>
                  <input class="form-control" name="price" placeholder="Price" type="text">
                </div>
                <br>
                <div class="card-body">
                  <textarea id="summernote" name="details"></textarea>
                </div>
                <div class="card-body">
                  <h4 class="text-black">Upload your photo</h4>
                  <label for="input-file-now"></label>
                  <input type="file" name="photo" id="input-file-now" class="dropify" />
                </div>
                <div class="text-right"><button style="margin-right : 25px; margin-bottom : 20px" class="btn btn-success" name="click" type="submit">UPLOAD</button></div>
              </form>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">Version 1.0</div>
      Copyright © 2018 Yourdomian. All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab"></div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="dist/js/jquery.min.js"></script>
  <script src="dist/plugins/popper/popper.min.js"></script>
  <script src="dist/bootstrap/js/bootstrap.min.js"></script>

  <!-- template -->
  <script src="dist/js/bizadmin.js"></script>

  <!-- for demo purposes -->
  <script src="dist/js/demo.js"></script>

  <!-- summernote -->
  <script src="dist/plugins/summernote/summernote-bs4.js"></script>
  <script>
    $('#summernote').summernote({
      height: 300, // set editor height
      placeholder: 'Hello default Summernote',
      minHeight: null, // set minimum height of editor
      maxHeight: null, // set maximum height of editor
      focus: false // set focus to editable area after initializing summernote
    });
    var edit = function() {
      $('.click2edit').summernote({
        focus: true
      });
    };

    var save = function() {
      var markup = $('.click2edit').summernote('code');
      $('.click2edit').summernote('destroy');
    };
  </script>
  <!--Start of Tawk.to Script-->
  <!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
  <!--End of Tawk.to Script-->
</body>

</html>