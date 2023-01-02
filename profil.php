<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pencairan Dana | Litra</title>
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>

<body style="background-color: white;">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000;">
    <a class="navbar-brand" href="#">
      <img src="./assets/logo.png" style="max-height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-money"></i> Rp 123.456</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <button class="btn btn-sm btn-primary">Home</button>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="wrapper wrapper-content">
    <div class="row">
      <div class="col-md-12">
        <h3 style="font-weight: bold;">Hallo, {{Nama}} !</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="ibox card" style="background-color: #000; font-weight: bold">
          Update Profil Anda
        </div>
        <div class="row" style="margin-bottom: 10px;">
          <div class="col-md-9 offset-md-3">
            <img src="./assets/user.png" class="rounded-circle">
          </div>
        </div>
        <form method="post" action="#" enctype="multipart/form-data">
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-3">
              <label class="font-bold">Nickname</label><span style="color: red">*</span>
            </div>
            <div class="col-md-9">
              <input type="text" name="nickname" id="nickname" class="form-control">
            </div>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-3">
              <label class="font-bold">Email</label><span style="color: red">*</span>
            </div>
            <div class="col-md-9">
              <input type="email" name="email" id="email" class="form-control">
            </div>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-3">
              <label class="font-bold">Upload Foto</label><span style="color: red">*</span>
            </div>
            <div class="col-md-9">
              <input type="file" name="foto" id="foto" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 offset-md-3">
              <button type="submit" class="btn btn-success btn-block">Simpan Data</button>
            </div>
            <div class="col-md-3">
              <button type="reset" class="btn btn-primary btn-block">Reset</button>
            </div>
            <div class="col-md-3">
              <button class="btn btn-secondary btn-block">Kembali</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div class="ibox card" style="background-color: #000; font-weight: bold">
          Ganti Password
        </div>
        <form>
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-4">
              <label class="font-bold">Password Baru</label><span style="color: red">*</span>
            </div>
            <div class="col-md-8">
              <input type="password" name="password_baru" id="password_baru" class="form-control">
            </div>
          </div>
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-md-4">
              <label class="font-bold">Konfirmasi Password</label><span style="color: red">*</span>
            </div>
            <div class="col-md-8">
              <input type="password" name="konfirmasi_password" id="konfirmasi_password" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <button type="submit" class="btn btn-success btn-block">Ganti Password</button>
            </div>
            <div class="col-md-4">
              <button type="reset" class="btn btn-primary btn-block">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="./assets/js/jquery-3.1.1.min.js"></script>
  <script src="./assets/js/popper.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>