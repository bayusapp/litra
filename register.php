<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In | Litra</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000B43;">
    <a class="navbar-brand" href="#">
      <img src="./assets/logo.png" style="max-height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Get Involved</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="wrapper wrapper-content">
    <div class="columns">
      <div class="row">
        <div class="col-md-8">
          <div class="box-content" style="border-radius: 20px;">
            <h3 style="text-align: center; margin-bottom: 30px">Register</h3>
            <form method="post" action="#">
              <div class="form-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" name="konfirm_password" id="konfirm_password" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="form-check">
                <input type="checkbox" name="term" id="term" class="form-check-input">
                <label class="form-check-label" for="exampleCheck1">Agree with <b><u>Terms and Condition</u></b> and <b><u>Privacy Statement</u></b></label>
              </div>
              <center style="margin-top: 20px;">
                <button type="submit" class="btn btn-light">Sign In</button>
              </center>
            </form>
          </div>
        </div>
        <div class="col-md-2">
          <img src="./assets/2.png" style="max-height: 350px; padding-left: 50px">
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>