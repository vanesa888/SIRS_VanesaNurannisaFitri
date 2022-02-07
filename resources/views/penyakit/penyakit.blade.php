
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
 @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">



  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{asset('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Jawaban</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
     <h3>Jawaban</h3>
     <div class="card card-info card-outline">
       <div class="card-header">
         <div class="card-tools">
           <a href="#" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>  
         </div>
       </div> 
       <div class="card-body">
         <table class="table table-bordered">
         <tr>
            <th>No</th>
            <th>Jawaban</th>
            <th>Keterangan</th>
         </tr>
         <tr>
            <td></td>
            <td></td>  
            <td><a href="#">Edit</a></td>
         </tr>
         </table>   
       </div>
    </div>
    </div>
    </div>
    <!-- /.content-header >
    < /.content -->
    </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

</div>

@include('template.script')
</body>
</html>
