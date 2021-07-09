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
    <div class="d-flex justify-content-between">
      <h5>Gigs</h5>
      <button class="btn btn-gradient">Create a new Gig</button>
    </div>
    <hr>
    <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button"
          role="tab" aria-controls="home" aria-selected="true">Pending Approval</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#remodification" type="button"
          role="tab" aria-controls="profile" aria-selected="false">Requires Modification</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#draft" type="button" role="tab"
          aria-controls="contact" aria-selected="false">Draft</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#denied" type="button" role="tab"
          aria-controls="contact" aria-selected="false">Denied</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#paused" type="button" role="tab"
          aria-controls="contact" aria-selected="false">Paused <span class="badge bg-primary">30</span></button>
      </li>
    </ul>

    <div class="tab-content orderTabContent p-3" id="myTabContent">
      <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="home-tab">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Order Summary</th>
              <th scope="col">Order Date</th>
              <th scope="col">Due On</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Logo Design
              </td>
              <td>March 23, 2021</td>
              <td>March 24, 2021</td>
              <td>$15.00</td>
              <td><button class="btn statusBtn">Progress</button></td>
            </tr>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Web Design
              </td>
              <td>November 23, 2021</td>
              <td>December 24, 2021</td>
              <td>$25.00</td>
              <td><button class="btn statusBtn">Cancelled</button></td>
            </tr>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Learning management system
              </td>
              <td>November 23, 2021</td>
              <td>December 24, 2021</td>
              <td>$25.00</td>
              <td><button class="btn statusBtn">Cancelled</button></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="remodification" role="tabpanel" aria-labelledby="profile-tab">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Order Summary</th>
              <th scope="col">Order Date</th>
              <th scope="col">Due On</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Logo Design
              </td>
              <td>March 23, 2021</td>
              <td>March 24, 2021</td>
              <td>$15.00</td>
              <td><button class="btn statusBtn">Cancelled</button></td>
            </tr>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Web Design
              </td>
              <td>November 23, 2021</td>
              <td>December 24, 2021</td>
              <td>$25.00</td>
              <td><button class="btn statusBtn">Cancelled</button></td>
            </tr>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Learning management system
              </td>
              <td>November 23, 2021</td>
              <td>December 24, 2021</td>
              <td>$25.00</td>
              <td><button class="btn statusBtn">Cancelled</button></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="draft" role="tabpanel" aria-labelledby="contact-tab">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Order Summary</th>
              <th scope="col">Order Date</th>
              <th scope="col">Due On</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Logo Design
              </td>
              <td>March 23, 2021</td>
              <td>March 24, 2021</td>
              <td>$15.00</td>
              <td><button class="btn statusBtn">Done</button></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="denied" role="tabpanel" aria-labelledby="contact-tab">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Order Summary</th>
              <th scope="col">Order Date</th>
              <th scope="col">Due On</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Logo Design
              </td>
              <td>March 23, 2021</td>
              <td>March 24, 2021</td>
              <td>$15.00</td>
              <td><button class="btn statusBtn">Cancelled</button></td>
            </tr>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Web Design
              </td>
              <td>November 23, 2021</td>
              <td>December 24, 2021</td>
              <td>$25.00</td>
              <td><button class="btn statusBtn">Cancelled</button></td>
            </tr>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Learning management system
              </td>
              <td>November 23, 2021</td>
              <td>December 24, 2021</td>
              <td>$25.00</td>
              <td><button class="btn statusBtn">Cancelled</button></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="paused" role="tabpanel" aria-labelledby="contact-tab">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Order Summary</th>
              <th scope="col">Order Date</th>
              <th scope="col">Due On</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="img/icons/profile.png" class="workImg" alt="logoFo">
                Logo Design
              </td>
              <td>March 23, 2021</td>
              <td>March 24, 2021</td>
              <td>$15.00</td>
              <td><button class="btn statusBtn">Active</button></td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </main>


  <?php include("components/footer.php") ?>

  <script src="js/jquery.js"></script>
  <script src="css/dist/js/bootstrap.bundle.js"></script>
</body>

</html>