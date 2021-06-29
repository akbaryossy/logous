<?php 
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link href="style-responsive.css" rel="stylesheet">
    <!-- Latest minified bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
   <!-- Latest minified bootstrap js -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="../index.php" class="logo"><b>Halaman<span>Admin</span></b></a>
            <!--logo end-->
            <div class="top-menu">

                <ul class="nav pull-right top-menu">
                    
                    <li><a class="logout" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" class="img-circle"
                                width="80"></a></p>
                    <h5 class="centered"><?php echo $_SESSION['username']; ?></h5>
                    <li class="mt">
                        <a class="active" href="Admin">
                            <i class="fa fa-dashboard"></i>
                            <span>Authors</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="product/upload.php">
                            <i class="fa fa-cogs"></i>
                            <span>Product</span>
                        </a>
</li>
</li>
                    <li class="sub-menu">
                        <a href="user.php">
                            <i class="fa fa-cogs"></i>
                            <span>User</span>
                        </a>
</li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="content-panel">
                            <table class="table table-striped table-advance table-hover">
                                <h4><i class="fa fa-angle-right"></i> Admin</h4>

                                <!-- start tombol tambah  -->
                                <button><a href="tambah.php">Tambah admin</a></button>

                                    <!-- <div id="tambah" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Tambah Berita</h4>
                                            </div>
                                            <form action="" method="post" enctype="multipart/from-data">
                                                <div class="modal-body">
                                                    <div class="from-group">
                                                        <label class="control-label" for="nm_brg"> Nama Author</label>
                                                        <input type="text" name="nm_brg" class="from-control"
                                                            id="nm_brg" required>
                                                    </div>
                                                    <div class="from-group">
                                                        <label class="control-label" for="hrg_brg"> Title</label>
                                                        <input type="text" name="hrg_brg" class="from-control"
                                                            id="hrg_brg" required>
                                                    </div>
                                                    <div class="from-group">
                                                        <label class="control-label" for="stok_brg"> Content</label>
                                                        <input type="text" name="stok_brg" class="from-control"
                                                            id="stok_brg" required>
                                                    </div>
                                                    <div class="from-group">
                                                        <label class="control-label" for="gbr_brg"> Picture</label>
                                                        <input type="file" name="gbr_brg" class="from-control"
                                                            id="gbr_brg" required>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-danger">Reset</button>
                                                        <input type="submit" class="btn btn-success" name="tambah"
                                                            value="Simpan">
                                                    </div>
                                            </form>
                           
                                        </div>
                                    </div> -->
                                    <!-- end tombol tambah -->

                                    <hr>
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-bullhorn"></i>id</th>
                                            <th class="/"><i class="/"></i> nama</th>
                                            <th class="/"><i class="/"></i> email</th>
                                            <th class="/"><i class="/"></i> alamat</th>
                                            <!-- <th class="hidden-phone"><i class="fa fa-question-circle"></i> Total Published News</th> -->
                                            <!-- <th><i class="fa fa-bookmark"></i> Terakhir Dirubah</th> -->
                                            <th><i class=" fa fa-edit"></i> Action</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    require '../koneksi.php';
                                $select = mysqli_query($koneksi, "SELECT * FROM admin");
                                if($select->num_rows>0){
                                    $no=1;
                                while ($row = $select->fetch_array()) {
                                   
                                ?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $row['username']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['alamat']?></td>
                                       
                                        <td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit </a> 
                                        <a href="hapusadmin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <?php }} ?>
                                    </tbody>
                            </table>
                        </div>
                        <!-- /content-panel -->
                    </div>
                    <!-- /col-md-12 -->
                </div>
                <!-- /row -->
            </section>
        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->

              <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
        <!--main content end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>

    <!--common script for all pages-->
    <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script type="text/javascript">
    // $(document).ready(function() {
    //     var unique_id = $.gritter.add({
    //         // (string | mandatory) the heading of the notification
    //         title: 'Welcome to KAMAR KODING!',
    //         // (string | mandatory) the text inside the notification
    //         text: 'Ambil Laptop mu dan kopi mu, mari ngoding bersama kami.',
    //         // (string | optional) the image to display on the left
    //         image: 'img/ui-sam.jpg',
    //         // (bool | optional) if you want it to fade out on its own or just sit there
    //         sticky: false,
    //         // (int | optional) the time you want it to be alive for before fading out
    //         time: 8000,
    //         // (string | optional) the class name you want to apply to that specific message
    //         class_name: 'my-sticky-class'
    //     });

    //     return false;
    // });
    // </script>
    // </script>
</body>

</html>

