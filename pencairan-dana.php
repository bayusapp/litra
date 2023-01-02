<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pencairan Dana | Litra</title>
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/css/select2/select2.min.css" rel="stylesheet">
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
      <div class="col-md-6 offset-md-3">
        <h3 style="text-align: center; font-weight: bold">Pencairan Dana</h3>
        <div class="ibox card trans">
          <form method="post" action="#">
            <div class="form-group">
              <label class="font-bold">Nominal Pencairan</label>
              <input type="text" name="nominal" id="nominal" class="form-control" placeholder="500.000">
            </div>
            <div class="form-group">
              <label class="font-bold">Pilih Metode</label>
              <select name="metode" id="metode" class="form-control metode">
                <option></option>
                <option value="bank">Bank</option>
                <option value="e-wallet">E-Wallet</option>
              </select>
            </div>
            <div class="form-group">
              <label class="font-bold">Daftar Bank</label>
              <select name="bank" id="bank" class="form-control bank">
                <option></option>
                <option value="Mandiri">Mandiri</option>
                <option value="BCA">BCA</option>
                <option value="BNI">BNI</option>
                <option value="BRI">BRI</option>
              </select>
            </div>
            <div class="form-group">
              <label class="font-bold">Daftar E-Wallet</label>
              <select name="ewallet" id="ewallet" class="form-control ewallet">
                <option></option>
                <option value="GoPay">GoPay</option>
                <option value="ShopeePay">ShopeePay</option>
              </select>
            </div>
            <div class="form-group">
              <label class="font-bold">Tujuan</label>
              <input type="text" name="tujuan" id="tujuan" class="form-control" placeholder="113xxxx">
            </div>
            <center style="margin-top: 20px;">
              <button type="submit" class="btn btn-light">Submit</button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/js/jquery-3.1.1.min.js"></script>
  <script src="./assets/js/popper.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/select2/select2.full.min.js"></script>
  <script src="./assets/js/jquery.maskMoney.min.js"></script>
  <script>
    $('#tujuan').on('input', function(e) {
      $(this).val(function(i, v) {
        return v.replace(/[^\d]/gi, '');
      });
    });

    $(function() {
      $('#nominal').maskMoney({
        prefix: 'Rp ',
        allowNegative: false,
        thousands: '.',
        decimal: ','
      });
    });

    $(document).ready(function() {
      $(".metode").select2({
        placeholder: "Pilih Metode",
      });

      $(".bank").select2({
        placeholder: "Pilih Bank",
      });

      $(".ewallet").select2({
        placeholder: "Pilih E-Wallet",
      });
    });
  </script>
</body>

</html>