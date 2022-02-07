
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
 @include('template.head')
</head>
<body>
  <!-- /.navbar -->

  @include('template.sidebar')
  <div class="content-wrapper">
    <div class="content">
     <div class="card card-info card-outline">

      <h3><center> Jadwal Kunjungan </center></h3>  
       <div class="card-body">
        <form action="#" method="post">  
               {{ csrf_field() }}
           <div class="form-group">
           <h6>Nama</h6>
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
           </div> 
           <div class="form-group">
           <h6>Jenis Kelamin</h6>
				   <select class="form-control" id="jeniskelamin" name="jeniskelamin" placeholder="Kategori">
              <option hidden>Pilih</option>
              <option>Laki-laki</option>
              <option>Perempuan</option>
           </select> 
           </div> 
           <div class="form-group">
           <h6>Tempat Lahir</h6>
              <input type="text" id="lahir" name="lahir" class="form-control" placeholder="Tempat Lahir">
           </div> 
           <div class="form-group">
           <h6>Tanggal Lahir</h6>
              <input type="date" id="lahir_tgl" name="lahir_tgl" class="form-control" placeholder="Tanggal Lahir">
           </div> 
           <div class="form-group">
           <h6>No Handphone</h6>
              <input type="text" id="nohp" name="nohp" class="form-control" placeholder="No Handphone">
           </div> 
           <div class="form-group">
           <h6>Email</h6>
              <input type="text" id="email" name="email" class="form-control" placeholder="email">
           </div> 
           <div class="form-group">
           <h6>Alamat Asal</h6>
              <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
           </div> 
           <div class="form-group">
           <h6>Alamat Terakhir</h6>
              <input type="text" id="alamatT" name="alamatT" class="form-control" placeholder="Alamat Terakhir">
           </div> 
           <div class="form-group">
                  <h6>Jadwal Kunjungan</h6>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      </span>
                    </div>
                    <input type="date" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
           <div class="form-group">
             <button type="submit" class="btn btn-success">Simpan Data</button>  
           </div>  
         </form>
        </div>  
       </div>
    </div>
   </div>

  <!-- /.content-wrapper -->
<!-- REQUIRED SCRIPTS -->

@include('template.script')
</body>
</html>