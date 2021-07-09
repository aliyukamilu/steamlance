<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Steamlance</title>

  <link rel="shortcut icon" href="../main/img/icons/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/dist/css/bootstrap.css">
  <link rel="stylesheet" href="css2/style.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.css">
</head>

<body>

<?php include("components/header.php") ?>

  <main class="container mt-5">
    <div class="business text-center">
      <h1>Hi Micheal,</h1>
      <h5>how do you prefer handling your existing account ?</h5>
      <h6 class="text-muted">You are signed in as michealjohn@gmail.com</h6>
      <div class="row mt-5">
        <div class="col-md-5">
          <div class="card p-3 busiCard">
            <i class="mt-4 fas fa-lock fa-3x"></i>
            <h5 class="mt-2">Keep my personal account seperate from my work activity</h5>
            <p class="text-muted">Manage 2 accounts with 2 sepearate logins, one for my private stuff and one
              for work</p>
            <button class="btn btn-gradient">Continue</button>
            <p class="text-muted mt-4">Your account won't be converted yet</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="stick"></div>
          <p>Or</p>
          <div class="stick"></div>
        </div>
        <div class="col-md-5">
          <div class="card p-3 busiCard">
            <i class="mt-4 fas fa-user-circle fa-3x"></i>
            <h5 class="mt-2">Convert my existing account to Steamlance account</h5>
            <p class="text-muted">Manage 2 accounts with 2 sepearate logins, one for my private stuff and one
              for work</p>
            <button class="btn btn-outline-primary">Continue</button>
            <p class="text-muted mt-4">Your account won't be converted yet</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <div style="margin-top: 100px"></div>
  <?php include("components/footer.php") ?>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>