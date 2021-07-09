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

  <main class="container">
    <div class="row mt-5">
      <div class="col-md-6">
        <h3>Ready to start Selling on Steamlance ? Here's the breakdown :</h3>

        <div class="card mt-3 p-3 overviewCards">
          <div class="row">
            <div class="col-md-2">
              <i class="fas fa-book fa-4x"></i>
            </div>
            <div class="col-md-10">
              <h5>Learn what makes a successful profile</h5>
              <p class="text-muted" style="margin: 0; width: 80%;">Discover the do's and don'ts to ensure you are always
                on the right track.</p>
            </div>
          </div>
        </div>
        <div class="card mt-1 p-3 overviewCards">
          <div class="row">
            <div class="col-md-2">
              <i class="fas fa-user-circle fa-4x"></i>
            </div>
            <div class="col-md-10">
              <h5>create your seller profile</h5>
              <p class="text-muted" style="margin: 0; width: 80%;">Add your profile picture, description, and
                professional information.</p>
            </div>
          </div>
        </div>
        <div class="card mt-1 p-3 overviewCards">
          <div class="row">
            <div class="col-md-2">
              <i class="far fa-building fa-4x"></i>
            </div>
            <div class="col-md-10">
              <h5>Publish your Gig</h5>
              <p class="text-muted" style="margin: 0; width: 80%;">Create a Gig of the service you are offering and
                start selling instantly.</p>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-end mt-3">
          <button class="btn btn-gradient">Continue</button>
        </div>


      </div>
      <div class="col-md-6">
        <div class="card mt-5">
          <figure class="video">
            <iframe src="https://www.youtube.com/embed/ezbJwaLmOeM" title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </figure>
        </div>
      </div>
    </div>
  </main>


  <?php include("components/footer.php") ?>

  <script src="js/jquery.js"></script>
  <script src="css/dist/js/bootstrap.bundle.js"></script>
</body>

</html>