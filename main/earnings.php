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
      <h5>Revenue Earned</h5>
      <p class="availableFor">Available for withdrawal: <span>$5.00</span></p>
    </div>
    <hr>

    <section class="card p-3 earningSummary">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-3">
          <p>Withdrawals</p>
          <h1>$12,000</h1>
        </div>
        <div class="col-sm-3">
          <p>Used To Proposals/Services</p>
          <h1>$1,00.50</h1>
        </div>
        <div class="col-sm-3">
          <p>Pending clearance</p>
          <h1>$-1020.40</h1>
        </div>
        <div class="col-sm-3">
          <p>Available Income</p>
          <h1>$5.00</h1>
        </div>
      </div>
    </section>


    <div class="col-sm-10 mt-4 row withdraw">
      <div class="col">
        <p>withdraw to:</p>
      </div>
      <div class="col">
        <button class="btn btn-gradient"><img src="img/icons/paypal.png" alt=""> Paypal Account</button>
      </div>
      <div class="col">
        <button class="btn btn-outline-primary"><i class="fas fa-university"></i> Bank Account</button>
      </div>
      <div class="col">
        <button class="btn btn-outline-primary"><i class="fas fa-money-check"></i> Moneygram</button>
      </div>
      <div class="col">
        <button class="btn btn-outline-primary"><i class="fab fa-bitcoin fa-1x"></i> Bitcoin Wallet</button>
      </div>
    </div>

    <section>
      <div class="card p-2 mt-4">
        <table class="table table-bordered earningTable">
          <thead>
            <tr>
              <th>Date</th>
              <th>For</th>
              <th>Amount</th>
            </tr>
            <tbody>
              <tr>
                <td>March 02, 2021</td>
                <td>Order Revenue (<a href="">View Order</a>)</td>
                <td>+$23.75</td>
              </tr>
              <tr>
                <td>March 02, 2021</td>
                <td>Order Tip Revenue (<a href="">View Order</a>)</td>
                <td>+$23.75</td>
              </tr>
              <tr>
                <td>April 02, 2021</td>
                <td>Order Tip Revenue (<a href="">View Order</a>)</td>
                <td>+$23.75</td>
              </tr>
              <tr>
                <td>November 02, 2019</td>
                <td>Order Revenue (<a href="">View Order</a>)</td>
                <td>+$60.75</td>
              </tr>
              <tr>
                <td>March 02, 2021</td>
                <td>Order Tip Revenue (<a href="">View Order</a>)</td>
                <td>+$23.75</td>
              </tr>
              <tr>
                <td>March 05, 2021</td>
                <td>Order Revenue (<a href="">View Order</a>)</td>
                <td>+$23.75</td>
              </tr>

            </tbody>
          </thead>
        </table>
      </div>
    </section>

  </main>


  <?php include("components/footer.php") ?>

  <script src="js/jquery.js"></script>
  <script src="css/dist/js/bootstrap.bundle.js"></script>
</body>

</html>