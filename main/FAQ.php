<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="shortcut icon" href="../main/img/icons/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css2/bootstrap.css">
  <link rel="stylesheet" href="css2/style.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.css">

  <style>
    .accordionFaq .accordion-item {
      margin: 10px;
    }
    .accordionFaq .accordion-button {
      font-size: 14px;
    }
    .faq-search{
  background-color: black;
  color: white;
  text-align: center;
  padding: 20px;
}
.faq-search p{
font-size: 50px;
padding: 20px;
}
.faq-search small{
  font-size: 14px;
  margin-bottom: 40px;
  }
.faq-search small a{
    color: rgb(142, 201, 228);
    text-decoration: none;
    }
.faq-search small a:hover{
      color: rgb(18, 59, 78);
      text-decoration: none;
      }
  
.faq-search .input-group{
  width: 70%;
  padding: 10px;
 
}
.faq-search .input-group input{
 font-size: 25px;
 
}

.faq-search .input-group-text{
  background-color: white;
  border: none;
}

  </style>
</head>

<body style="background: #f4f4f4;">
<?php include("components/header.php") ?>

  <section class="faq-search">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>How can we <b>help?</b> </p>
          <div class="input-group mx-auto">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search px-2"></i></span>
            <input type="text" class="form-control" placeholder="Ask any question" aria-label="Username"
              aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="col-12 mt-3 mb-5">
          <small>Popular help topics: <a href="#"> pricing,
              <a href="#"> upgrade,</a> <a href="#"> hosting,</a><a href="#"> membership,</a></small>
        </div>
      </div>
    </div>
  </section>
  <section class="faq-content mt-5">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-5">
          <div class="card p-3">
            <div class="row">
              <div class="col-md-4">
                <i class="far fa-envelope fa-5x"></i>
              </div>
              <div class="col-md-8">
                <p class="ml-3" style="text-align: left; font-size: 2em; font-weight: 300;">Help Forum</p>
                <p style="text-align: left; width: 80%;" class="text-muted">Find the answer to any question, from the
                  basics all the way to advanced tips and tricks!...</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-5">
          <div class="card p-3">
            <div class="row">
              <div class="col-md-4">
                <i class="fas fa-lock fa-5x"></i>
              </div>
              <div class="col-md-8">
                <p class="ml-3" style="text-align: left; font-size: 2em; font-weight: 300;">Security Center</p>
                <p style="text-align: left; width: 80%;" class="text-muted">want to learn more about setting up and
                  managing your team? Look no further!...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container accordionFaq mt-5">
    <p style="text-align: left; margin-left: 90px;font-size: 2em; font-weight: 300;">Basics</p>
    <div style=" justify-content: center; display: flex; ">
      <div class="accordion" id="accordionExample" style="width: 85%;">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              What is the best way to start ?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the
              collapse plugin adds the appropriate classes that we use to style each element. These classes
              control the overall appearance, as well as the showing and hiding via CSS transitions. You can
              modify any of this with custom CSS or overriding our default variables. It's also worth noting
              that just about any HTML can go within the <code>.accordion-body</code>, though the transition
              does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              What is the best way to start ?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
              collapse plugin adds the appropriate classes that we use to style each element. These classes
              control the overall appearance, as well as the showing and hiding via CSS transitions. You can
              modify any of this with custom CSS or overriding our default variables. It's also worth noting
              that just about any HTML can go within the <code>.accordion-body</code>, though the transition
              does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              What is the best way to start ?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
              collapse plugin adds the appropriate classes that we use to style each element. These classes
              control the overall appearance, as well as the showing and hiding via CSS transitions. You can
              modify any of this with custom CSS or overriding our default variables. It's also worth noting
              that just about any HTML can go within the <code>.accordion-body</code>, though the transition
              does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include("components/footer.php") ?>

  <script src="js/jquery.js"></script>
  <script src="css/dist/js/bootstrap.bundle.js"></script>
  <script src="js/main.js"></script>
</body>

</html>