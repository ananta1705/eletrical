<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin| tambah data</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">
</head>

      <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID PELANGGAN</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">BULANAN</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="no kwh">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">TAHUNAN</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">METER AWAL</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="meter awal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">METER AKHIR</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="meter akhir">
                  </div>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('admin')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin')}}/dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>