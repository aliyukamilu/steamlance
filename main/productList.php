<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>


  <link rel="shortcut icon" href="../main/img/icons/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/dist/css/bootstrap.css">
  <link rel="stylesheet" href="css2/style.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.css">
</head>

<body>
  <?php include("components/header.php") ?>


  <section class="find-search" style="margin-top: -50px;">
    <div class="container">
      <div class="row d-flex" style="justify-content: center;">
        <div class="col-10 find-text">
          <h1> Find The Perfect Freelancing Services For Your Business</h1>
          <h6>Millions of people use miver to turn their ideas into reality.</h6>
        </div>
        <div class="col-10 find-btn">
          <div class="row">
            <div class="col-3">
              <select class="form-select" aria-label=".form-select">
                <option type="text" aria-label="Search"> </option>
                <option value="1" selected>All</option>
                <option value="2">Graphic & Design</option>
                <option value="3">Digital Marketing</option>
                <option value="3">Writing & Translation</option>
                <option value="3">Video & Animation</option>
                <option value="3">Music & Audio</option>
                <option value="3">Programming & Tech</option>
                <option value="3">Business</option>
                <option value="3">Lifestyle</option>
                <option value="3">Industries</option>
              </select>
            </div>
            <div class="col-6">
              <input class="form-control" type="search" placeholder="Find Services..." aria-label="Search">
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-danger"><i class="fas fa-search fa-1x"></i></button>
            </div>
            <div class="col-12 small">
              <div>
                <small>E.g. Voice over, translation, logo design, Article, Blog Post & more</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="filter">
    <div class="container">
      <div class="row dropdowns">
        <div class="col-lg-6 col-12 dropdowns-text">
          <div class="row">
            <div class="col-4">
              <div>
                <div class="dropdown">
                  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Seller Details
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div>
                <div class="dropdown">
                  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Budget
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div>
                <div class="dropdown">
                  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Delivery Time
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                          <label class="form-check-label" for="flexRadioDefault1">
                            Express 24H
                          </label>
                        </div>

                      </a></li>
                    <li><a class="dropdown-item" href="#">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                          <label class="form-check-label" for="flexRadioDefault2">
                            Upto 3 days
                          </label>
                        </div>
                      </a></li>
                    <li><a class="dropdown-item" href="#">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Upto 7 days
                          </label>
                        </div>
                      </a></li>
                    <li><a class="dropdown-item" href="#">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Anytime
                          </label>
                        </div>
                      </a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12  dropdowns-check">
          <div class="row">
            <div class="col-4">
              <div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault">Pro Services</label>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault">Local Sellers</label>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault">Online Sellers</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="selling">
    <div class="container">
      <div class="sort">
        <div class="sort-text">
          <small>463 Services Available</small>
        </div>
        <div class="sort-content">
          <div class="drops-text">
            <p>Sortby</p>
          </div>
          <div class="drops">
            <div class="dropdown">
              <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Seller Details
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <h5>Services in Web & Mobile Design</h5>
        </div>
        <div class="row g-3 mt-2 contact-card">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <a class="card" href="product-detail.php">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div>
              <div class="card">
                <img src="images/Jim-Fahad-Digital-About.jpg" class="card-img-top" alt="...">
                <img src="images/FB_IMG_15748949501997899_2 1.png" alt="" class="pic">
                <div class="card-body mt-3">
                  <p class="mt-1" style="font-size: 20px;">Abubakar Bello</p>
                  <p class="small-text text-muted">Level 1 Seller</p>
                  <p class="card-text small-text mt-2">I will create professional audio ads or radio commercials for
                    your project</p>
                  <div class="rating mt-3">
                    <i class="fas fa-star"></i> 5.0 (7)
                  </div>
                </div>
                <div class="card-footer">
                  <div class="footer-icon">
                    <img src="images/heart.png" alt="">
                  </div>
                  <div class="footer-text">
                    <p>STARTING AT &dollar;1.205</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="slide">
          <div class="b1">
            <button href="#" class="btn btn-light"><i class="fas fa-chevron-left fa-1x"></i></button>
          </div>
          <div class="b2"><button href="#" class="btn btn-success">1</button></div>
          <div class="b3"><button href="#" class="btn btn-success">2</button></div>
          <div class="b4"><button href="#" class="btn btn-success">3</button></div>
          <div class="b5"> <button href="#" class="btn btn-success">4</button></div>
          <div class="b6"><button href="#" class="btn btn-success">5</button></div>
          <div class="b7"> <button href="#" class="btn btn-dark"><i class="fas fa-chevron-right fa-1x"></i></button>
          </div>

        </div>
      </div>
    </div>
    <div class="container-fluid">
      <hr class="line">
    </div>
  </section>


  <?php include("components/footer.php") ?>


  <script src="js/jquery.js"></script>
  <script src="css/dist/js/bootstrap.bundle.js"></script>
  <script src="js/main.js"></script>
  <script>
    $(document).ready(() => {
      let url = location.href.replace(/\/$/, "");

      if (location.hash) {
        const hash = url.split("#");
        $('#myTab a[href="#' + hash[1] + '"]').tab("show");
        url = location.href.replace(/\/#/, "#");
        history.replaceState(null, null, url);
        setTimeout(() => {
          $(window).scrollTop(0);
        }, 100);
      }

      $('a[data-toggle="tab"]').on("click", function () {
        let newUrl;
        const hash = $(this).attr("href");
        if (hash == "#overview") {
          newUrl = url.split("#")[0];
        } else {
          newUrl = url.split("#")[0] + hash;
        }
        newUrl += "/";
        history.replaceState(null, null, newUrl);
      });
    });
  </script>
</body>

</html>