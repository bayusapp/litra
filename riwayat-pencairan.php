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
        <h3 style="text-align: center; font-weight: bold">Riwayat Pencairan Dana</h3>
        <div class="ibox card">
          <table>
            <tr>
              <td rowspan="2" style="text-align: center;">
                <img src="./assets/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png" class="img">
              </td>
              <td class="font-bold">BRI</td>
              <td class="font-bold">Rp</td>
              <td rowspan="2" class="font-bold">Status: pending</td>
            </tr>
            <tr>
              <td><?= date('d M Y H:i') ?></td>
              <td>No. Rek: xxx</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/js/jquery-3.1.1.min.js"></script>
  <script src="./assets/js/popper.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>