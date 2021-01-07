<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav"></ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3"></form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#"></a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media"></div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media"></div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item"></a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown"></li>
        <li class="nav-item"></li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Penduduk
              </p>
            </a>
            
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
                <h1>Tabel Data</h1>
              </div>
              <div class="col-sm-6">
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!-- /.card -->

                <div class="card">
                  <div class="card-header">
                    <a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Tambah Data</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Tanggal Input</th>
                          <th>User Input</th>
                          <th>Tanggal Update</th>
                          <th>User Update</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
  


                        include "koneksi.php";
                        $no = 0;
                        $modal=mysqli_query($koneksi,"SELECT * FROM penduduk");
                        while($r=mysqli_fetch_array($modal)){
                          $no++;

                          ?>
                          <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo  $r['id']; ?></td>
                            <td><?php echo  $r['nik']; ?></td>
                            <td><?php echo  $r['nama']; ?></td>
                            <td><?php if ($r['jenis_kelamin']=='P'){
                                        echo "Pria";
                                      }else{
                                        echo "Wanita";} ?></td>
                            <td><?php echo  $r['alamat']; ?></td>
                            <td><?php echo  $r['tanggalinput']; ?></td>
                            <td><?php echo  $r['userinput']; ?></td>
                            <td><?php if ($r['tanggalupdate']==''){
                                        echo "-";
                                      }else{echo $r['tanggalupdate'];}?>
                            <td><?php if ($r['userupdate']==''){
                                        echo "-";
                                      }else{echo $r['userupdate'];}?>
                            <td>
                             <a href="#" class='open_modal' id='<?php echo  $r['id']; ?>'>Edit</a>
                             <a href="">|</a>
                             <a href="#" onclick="confirm_modal('proses_delete.php?&id=<?php echo  $r['id']; ?>');">Hapus</a>
                           </td>
                         </tr>
                       <?php } ?>
                     </tbody>
                     
                  </table>
                </div>
                <!-- /.card-body -->
                <!-- Modal Popup untuk Add--> 
                <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Add Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      </div>

                      <div class="modal-body">
                        <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                          <div class="form-group">
                            <label for="NIK">NIK</label>
                            <input type="number" name="nik"  class="form-control" placeholder="NIK" required/>
                          </div>
                          <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" name="nama"  class="form-control" placeholder="Nama" required/>
                          </div>
                          <div class="form-group">
                            <label>Jenis Kelamin</label><br>
                            <div class="radio-inline">
                              <label><input type="radio" name="jenis_kelamin" value="P" required>Pria</label>
                            </div>
                            <div class="radio-inline">
                              <label><input type="radio" name="jenis_kelamin" value="W" required>Wanita</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <textarea name="alamat"  class="form-control" placeholder="Alamat" required/></textarea>
                          </div>
                          <div class="form-group">
                            <label for="User Input">User Input</label>
                            <input type="text" name="userinput"  class="form-control" placeholder="User Input" required/>
                          </div>
                          <div class="modal-footer">
                            <button class="btn btn-success" type="submit">
                              Confirm
                            </button>
                            <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                              Cancel
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal Popup untuk Edit--> 
                <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                </div>

                <!-- Modal Popup untuk delete--> 
                <div class="modal fade" id="modal_delete">
                  <div class="modal-dialog">
                    <div class="modal-content" style="margin-top:100px;">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="text-align:left;">Apa anda yakin akan menghapusnya?</h4>
                      </div>

                      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                        <a href="#" class="btn btn-danger" id="delete_link">YA</a>
                        <button type="button" class="btn btn-success" data-dismiss="modal">TIDAK</button>
                      </div>
                    </div>
                  </div>
                </div>



                <!-- Javascript untuk popup modal Delete--> 
                <script type="text/javascript">
                  function confirm_modal(delete_url)
                  {
                    $('#modal_delete').modal('show', {backdrop: 'static'});
                    document.getElementById('delete_link').setAttribute('href' , delete_url);
                  }
                </script>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <!-- Javascript untuk popup modal Edit--> 
  <script type="text/javascript">
   $(document).ready(function () {
     $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
      $.ajax({
       url: "modal_edit.php",
       type: "GET",
       data : {id: m,},
       success: function (ajaxData){
         $("#ModalEdit").html(ajaxData);
         $("#ModalEdit").modal('show',{backdrop: 'true'});
       }
     });
    });
   });
 </script>
</body>
</html>
