<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Steamlance</title>

  <link rel="shortcut icon" href="../main/img/icons/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css2/style.css">
  <link rel="stylesheet" href="css/dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.css">
</head>

<body>

  <?php include("components/header.php") ?>

  <main class="container mt-5">
    <div class="row gy-3">
      <div class="col-md-4">
        <div class="card p-3 theSide">
          <div class="d-flex justify-content-between">
            <p class="userType">ambassador</p>
            <p class="btn status btn-outline-primary"><img src="img/icons/black-circle.png" width="5px" alt=""> online
            </p>
          </div>
          <div class="d-flex justify-content-center">
            <img src="img/icons/profile.png" class="profileImg img-fluid" alt="">
          </div>
          <div class="text-center mt-3" style="line-height:8px">
            <p class="Name">Broski Taichu</p>
            <p class="Bio">Professional iOS developer.</p>
            <p class="rating"><span>5.0</span> (1k+ reviews)</p>
          </div>
          <hr>
          <div class="rate">

            <div class="d-flex no-wrap justify-content-between">
              <p class="infoTags col-sm-6">Response Rate</p>
              <div class="col-sm-4">
                <div class="progress m-0">
                  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" Çaria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <p class="infoTags col-sm-2">100%</p>
            </div>

            <div class="d-flex no-wrap justify-content-between">
              <p class="infoTags col-sm-6">Delivered On time</p>
              <div class="col-sm-4">
                <div class="progress m-0">
                  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" Çaria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <p class="infoTags col-sm-2">100%</p>
            </div>

            <div class="d-flex no-wrap justify-content-between">
              <p class="infoTags col-sm-6">Order Completion</p>
              <div class="col-sm-4">
                <div class="progress m-0">
                  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" Çaria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <p class="infoTags col-sm-2">100%</p>
            </div>

          </div>
          <hr>
          <div class="earning">

            <div class="d-flex justify-content-between">
              <p>Earned in March</p>
              <p class="font-weight-bold">$2345</p>
            </div>
            <div class="d-flex justify-content-between">
              <p>Response Time</p>
              <p class="font-weight-bold">N/A</p>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="theMain">

          <div class="card p-3">
            <div class="d-flex justify-content-between activeOrders">
              <p>Active Orders</p>
              <p class="font-weight-bold">15 ($2345)</p>
            </div>
          </div>

          <div class="card p-3 mt-3">
            <div class="yoursuccess">
              <h5>How to build your primary on Steamlance in 3 steps</h5>
              <p>The key to your primary on Steamlance is the brand you build for yourself through your steamlance
                reputation. We gathered some tips and resources to help you become a leading seller on Steamlance.</p>
            </div>
          </div>

          <div class="card p-3 mt-3">
            <div class="successSteps">
              <h5 class="text-center">Take these steps to become a top seller on Steamlance</h5>

              <div class="row mt-4 theSteps">
                <div class="col-md-4 mt-md-5">
                  <i class="fas fa-volume-up fa-4x" style="color: dodgerblue;"></i>
                  <h5 class="mt-3">Get Noticed</h5>
                  <p class="mt-3">Hone your skills and expand your knowledge with online courses. You'll be able to offer more
                    services and <b>gain more exposure</b> with every course completed.</p>
                  <button type="button" class="btn btn-outline-primary mt-3">Share Your Gigs</button>
                </div>
                <div class="col-md-4 mt-md-5">
                  <i class="fas fa-book fa-4x" style="color: dodgerblue;"></i>
                  <h5 class="mt-3">Get more skills & exposure</h5>
                  <p class="mt-3">Hone your skills and expand your knowledge with online courses. You'll be able to offer more
                    services and <b>gain more exposure</b> with every course completed.</p>
                  <button type="button" class="btn btn-outline-primary mt-3">Explore Learn</button>
                </div>
                <div class="col-md-4 mt-md-5">
                  <i class="fas fa-star fa-4x" style="color: dodgerblue;"></i>
                  <h5 class="mt-3">Become a primaryful seller!</h5>
                  <p class="mt-3">Hone your skills and expand your knowledge with online courses. You'll be able to offer more
                    services and <b>gain more exposure</b> with every course completed.</p>
                  <button type="button" class="btn btn-outline-primary mt-3">watch Free Course</button>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </main>

  <<?php include("components/footer.php") ?> <script src="js/jquery.js">
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>