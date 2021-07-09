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

  <style>
    body {
      background: #f4f4f4;
    }

    #myTab .nav-link {
      color: #000;
    }

    #myTab .nav-link.active {
      color: #fff;
    }

    p {
      text-align: justify;
    }

    label {
      color: #858585;
    }

    label span {
      color: red;
    }

    input {
      font-size: 14px;
    }
  </style>
</head>

<body>

  <?php include("components/header.php") ?>

  <main class="container mt-5">
    <div class="d-flex justify-content-center">
      <form action="" class="card col-md-8 p-3">
        <h5>Create An Order</h5>
        <label for="description">Describe the service you're looking to purchase - please be as detailed as
          possible :</label>
        <textarea class="p-2 form-control col-sm-12 mt-2" style="font-size: 14px;" name="description" id="" rows="5" placeholder="Im looking for ....."></textarea>

        <label class="mt-4" for="attachFile">Attach Files</label><br>
        <input class="mt-2" style="font-size: 12px;" type="file">
        <hr>
        <label for="category">Choose a category :</label>
        <div class="row mt-3">
          <div class="col-sm-6">
            <select style="font-size: 14px;" class="form-select" name="categ" id="">
              <option value="" selected>select a category</option>
              <option value="">Graphics Design</option>
              <option value="">Web Development</option>
              <option value="">Mobile App Development</option>
              <option value="">UI/UX Design</option>
              <option value="">Back-end Dev</option>
            </select>
          </div>
          <div class="col-sm-6">
            <select style="font-size: 14px;" class="form-select" name="sub-categ" id="">
              <option value="" selected>select a sub-category</option>
              <option value="">Graphics Design</option>
              <option value="">Web Development</option>
              <option value="">Mobile App Development</option>
              <option value="">UI/UX Design</option>
              <option value="">Back-end Dev</option>
            </select>
          </div>
        </div>

        <hr>
        <label for="">Once you place order, when would you like your service delivered ?</label>
        <div class="btn-group col-md-12 mt-3" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
          <label class="btn btn-outline-primary" for="btnradio1">24 hours</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
          <label class="btn btn-outline-primary" for="btnradio2">3 Days</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
          <label class="btn btn-outline-primary" for="btnradio3">7 Days</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
          <label class="btn btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#otherCollapse" for="btnradio4"><i class="fas fa-pencil-alt"></i>
            Others</label>
        </div>
        <div class="col-md-4 collapse mt-3" id="otherCollapse">
          <input type="number" class="form-control" placeholder="number of days">
        </div>
        <label class="mt-5" for="">What is your Budget for this service ?</label>
        <div class="input-group mt-2">
          <div class="input-group-text" id="btnGroupAddon2">$</div>
          <input type="text" class="form-control" placeholder="">
        </div>
        <hr>
        <div class="d-flex justify-content-end">
          <button class="btn btn-primary">Submit Request</button>
        </div>
      </form>
    </div>
  </main>


  <?php include("components/footer.php") ?>

  <script src="js/jquery.js"></script>
  <script src="css/dist/js/bootstrap.bundle.js"></script>
  <script src="js/main.js"></script>

</body>

</html>