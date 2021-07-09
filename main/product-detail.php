<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product | Steamlance</title>

  <link rel="shortcut icon" href="../main/img/icons/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css2/style.css">
  <link rel="stylesheet" href="css/dist/css/bootstrap.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">

  <style>
    p {
      text-align: justify;
    }
  </style>
</head>

<body style="background: #f4f4f4;">

<?php include("components/header.php") ?>

  <main style="margin-top: -35px;">
    <div class="headingTab" style="background: #fff;">
      <div class="container d-flex justify-content-between">
        <div>
          <ul class="nav nav-tabs" id="profileTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a href="#overview" class="nav-link active" data-bs-toggle="tab">Overview</a>
            </li>
            <li class="nav-item" role="presentation">
              <a href="#description" class="nav-link" data-bs-toggle="tab">Description</a>
            </li>
            <li class="nav-item" role="presentation">
              <a href="#seller" class="nav-link" data-bs-toggle="tab">About the Seller</a>
            </li>
            <li class="nav-item" role="presentation">
              <a href="#compare" class="nav-link" data-bs-toggle="tab">Compare Packages</a>
            </li>
            <li class="nav-item" role="presentation">
              <a href="#recommendations" class="nav-link" data-bs-toggle="tab">Recommendations</a>
            </li>
            <li class="nav-item" role="presentation">
              <a href="#faq" class="nav-link" data-bs-toggle="tab">FAQ</a>
            </li>
            <li class="nav-item" role="presentation">
              <a href="#reviews" class="nav-link" data-bs-toggle="tab">Reviews</a>
            </li>
          </ul>
        </div>
        <div>
          <div class="row saveRow">
            <button class="btn col-sm-4"><i class="fas fa-heart" style="color: #858585;"></i> Save</button>
            <button class="btn col-sm-4">138</button>
            <button class="btn col-sm-4" col-sm-4><i class="fas fa-share" style="color: #1cd8d2;"></i> Share</button>
          </div>
        </div>
      </div>
    </div>

    <div class="profileContent container mt-5">
      <div class="row">

        <div class="col-md-8">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#" style="text-decoration: none;">Home</a></li>
              <li class="breadcrumb-item" aria-current="page"><a href="#" style="text-decoration: none;">Library</a>
              </li>
            </ol>
          </nav>
          <section id="overview">
            <h4 style="text-align: justify;">I will do mobile and website and wireframes and prototyping.</h4>
            <p class="userRate">
              <img src="img/icons/profile.png" width="30px" alt="prof">
              <span class="name">Aliyu Kamilu</span>
              <span class="text-muted">Level 1 seller</span> |
              <span class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                5.0
              </span>
              <span class="text-muted">(36)</span> |
              <span class="queue">2 Orders in Queue</span>
            </p>

            <!-- The expanding image container -->
            <div class="theSliderMain">
              <div class="slider slider-for">
                <div>
                  <img id="expandedImg" src="img/img1.jpg" style="width:80%">
                </div>
                <div>
                  <img id="expandedImg" src="img/img2.jpg" style="width:80%">
                </div>
                <div>
                  <img id="expandedImg" src="img/img3.jpg" style="width:80%">
                </div>
                <div>
                  <img id="expandedImg" src="img/img4.jpg" style="width:80%">
                </div>
                <div>
                  <img id="expandedImg" src="img/img5.jpg" style="width:80%">
                </div>
              </div>
              <div class="slider slider-nav row">
                <div>
                  <img id="expandedImg" src="img/img1.jpg" style="width:80%">
                </div>
                <div>
                  <img id="expandedImg" src="img/img2.jpg" style="width:80%">
                </div>
                <div>
                  <img id="expandedImg" src="img/img3.jpg" style="width:80%">
                </div>
                <div>
                  <img id="expandedImg" src="img/img4.jpg" style="width:80%">
                </div>
                <div>
                  <img id="expandedImg" src="img/img5.jpg" style="width:80%">
                </div>
              </div>
            </div>
          </section>
          <section id="description" class="mt-5">
            <h5>About this Gig</h5>

            <p class="text-muted" style="letter-spacing: 1px;">I have a 7+ years of experience in Mobile App & Web
              Wireframing & Mobile app UI.<br><br>
              I will create a Clickable Mobile App Wireframe in the Marvel app. Marvel is the best platform to
              create Mobile App Interactive Wireframes<br><br>
              We specialize in UX Design, UI Design, Usability Testing, Wireframing, and Prototyping. In our work
              we try to transform highly complex concepts into simple, approachable applications. I believe that
              it is important to create things that look and feel great.<br><br>
              It'll help you to demonstrate your idea to your developers or Investors. Why don't we do something
              together?
            </p>
            <hr>
          </section>

          <section id="seller" class="mt-5">
            <h5>About The Seller</h5>
            <div class="card p-3 mt-5">
              <div class="row g-2">
                <div class="col-md-2">
                  <div>
                    <img src="img/icons/profile.png" width="100px" alt="">
                  </div>
                </div>
                <div class="col-md-10">
                  <h6>Aliyu Kamilu</h6>
                  <p class="text-muted small-text">Certified and professional iOS developer</p>
                  <p class="stars" style="line-height: 15px;">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    5.0
                    <span class="text-muted small-text">(36 Reviews)</span>
                  </p>
                  <button class="btn btn-gradient" type="button">Contact me</button>
                </div>
              </div>
            </div>

            <div class="card p-3 mt-4">
              <div class="row">
                <div class="col-sm-4" style="line-height: 10px;">
                  <p class="text-muted">From</p>
                  <p>Nigeria</p>
                </div>
                <div class="col-sm-4" style="line-height: 10px;">
                  <p class="text-muted">Member since</p>
                  <p>Sep 2019</p>
                </div>
                <div class="col-sm-4" style="line-height: 10px;">
                  <p class="text-muted">Avg. Response Time</p>
                  <p>hour</p>
                </div>
              </div>
              <hr>
              <ul style="color: #858585;">
                <li>Wireframes for mobile apps &amp; Website</li>
                <li>Flowcharts for the whole system</li>
                <li>Mobile app prototypes, interactive UI designs</li>
                <li>UI for social media postings</li>
                <li>Design an app to achieve a business objective (web or mobile).</li>
                <li>Design or re-design a website to grow revenue, close more sales and generate more leads.</li>
                <li>Optimize their existing website with a conversion rate audit and strategy.</li>
                <li>Design a high converting landing page.</li><br><br>
                <p>Excellent communication and availability.
                  Reach me any time during our project on Whatsapp, Skype, Text or any other
                  messenger.</p>
              </ul>
            </div>


          </section>

          <section id="compare" class="mt-5">
            <h5>Compare Packages</h5>
            <div class="card">
              <table class="table table-bordered table-striped planTable">
                <thead>
                  <tr>
                    <th>Package</th>
                    <td>
                      <p class="price">$23.00</p>
                      <p class="type">Basic</p>
                      <p style="font-size: 12px;">10 SCREENS</p>
                      <p class="descrip">I will design rough sketches for upto 5 Screens of your website/Mobile app.</p>
                    </td>
                    <td>
                      <p class="price">$30.00</p>
                      <p class="type">Standard</p>
                      <p style="font-size: 12px;">15 SCREENS</p>
                      <p class="descrip">I will design rough sketches for upto 5 Screens of your website/Mobile app.</p>
                    </td>
                    <td>
                      <p class="price">$50.00</p>
                      <p class="type">Premium</p>
                      <p style="font-size: 12px;">40 SCREENS</p>
                      <p class="descrip">I will design rough sketches for upto 5 Screens of your website/Mobile app.</p>
                    </td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Source File</td>
                    <td class="text-center"><i class="fas fa-check fa-1x avai"></i> </td>
                    <td class="text-center"><i class="fas fa-check fa-1x avai"></i></td>
                    <td class="text-center"><i class="fas fa-check fa-1x avai"></i></td>
                  </tr>
                  <tr>
                    <td>Commercial Use</td>
                    <td class="text-center"><i class="fas fa-check fa-1x avai"></i> </td>
                    <td class="text-center"><i class="fas fa-check fa-1x avai"></i></td>
                    <td class="text-center"><i class="fas fa-check fa-1x avai"></i></td>
                  </tr>
                  <tr>
                    <td>Interactive Mockup</td>
                    <td class="text-center"><i class="fas fa-check fa-1x Notavai"></i> </td>
                    <td class="text-center"><i class="fas fa-check fa-1x avai"></i></td>
                    <td class="text-center"><i class="fas fa-check fa-1x avai"></i></td>
                  </tr>
                  <tr>
                    <td># of pages/screens</td>
                    <td class="text-center">10 </td>
                    <td class="text-center">15</td>
                    <td class="text-center">20</td>
                  </tr>
                  <tr>
                    <td>Revisions</td>
                    <td class="text-center">0 </td>
                    <td class="text-center">1</td>
                    <td class="text-center">2</td>
                  </tr>
                  <tr>
                    <td>Delivery Time </td>
                    <td class="text-center">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="3days">
                        <label class="form-check-label" for="3days">
                          3 days
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="mordays">
                        <label class="form-check-label" for="mordays">
                          1 day (+ $237)
                        </label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="7days">
                        <label class="form-check-label" for="7days">
                          7 days
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="4days">
                        <label class="form-check-label" for="4days">
                          4 day (+ $237)
                        </label>
                      </div>
                    </td>
                    <td class="text-center">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="10dayz">
                        <label class="form-check-label" for="10dayz">
                          10 days
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="3dayz">
                        <label class="form-check-label" for="3dayz">
                          3 day (+ $237)
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <td>Total</td>
                    <td style="font-weight: bold;">
                      $230<br>
                      <button class="btn btn-gradient">Select</button>
                    </td>
                    <td style="font-weight: bold;">
                      $300<br>
                      <button class="btn btn-gradient">Select</button>
                    </td>
                    <td style="font-weight: bold;">
                      $5000<br>
                      <button class="btn btn-gradient">Select</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>

          <section id="faq" class="mt-5">
            <h5 class="mt-5">FAQ</h5>
            <div class="card p-3">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
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
                      Accordion Item #2
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
                      Accordion Item #3
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

          <section id="reviews" class="mt-5">
            <div class="d-flex justify-content-between">
              <h6>37 REVIEWS</h6>

              <select class="form-select" style="width: 200px;" id="">
                <option value="">Most Recent</option>
                <option value="">Most Relevant</option>
              </select>
            </div>

            <div class="row theReviews mt-5">
              <div class="col-md-6">

                <div class="d-flex justify-content-between">
                  <p>5 stars</p>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p>(36)</p>
                </div>

                <div class="d-flex justify-content-between">
                  <p>4 stars</p>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p>(30)</p>
                </div>

                <div class="d-flex justify-content-between">
                  <p>3 stars</p>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p>(20)</p>
                </div>

                <div class="d-flex justify-content-between">
                  <p>2 stars</p>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p>(20)</p>
                </div>

                <div class="d-flex justify-content-between">
                  <p>1 stars</p>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 10%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p>(1)</p>
                </div>
              </div>
              <div class="col-md-6">
                <h6>Rating Breakdown</h6>
                <div class="d-flex justify-content-between">
                  <p class="text-muted">Seller Communication level</p>
                  <p class="text-muted">5</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="text-muted">Recommend to a friend</p>
                  <p class="text-muted">5</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="text-muted">Services as described</p>
                  <p class="text-muted">5</p>
                </div>
              </div>
            </div>
            <hr>

            <div class="comments">
              <div class="Acomment">
                <div class="row">
                  <div class="col-sm-2" style="width: 50px;">
                    <img src="img/icons/profile.png" width="30px" alt="">
                  </div>
                  <div class="col-sm-8">
                    <p>Aliyu Kamilu <span class="stars"><i class="fas fa-star"></i> 3.0</span></p>
                    <p style="margin-top: -15px;"><img src="img/icons/nigeria.png" alt=""> Nigeria</p>
                  </div>
                </div>
                <p>The process was smooth, after providing the required info,
                  Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!</p>
                <p class="published small-text text-muted">Published 4 weeks ago</p>

                <p>
                  <span><i class="far fa-thumbs-up"></i> Helpful</span>
                  <span><i class="far fa-thumbs-down"></i> Not Helpful</span>
                </p>
              </div>

              <div class="Acomment" style="margin-left: 50px;">
                <div class="row">
                  <div class="col-sm-2" style="width: 50px;">
                    <img src="img/icons/profile.png" width="30px" alt="">
                  </div>
                  <div class="col-sm-8">
                    <p>Sufyan Yahya <span class="stars"><i class="fas fa-star"></i> 3.0</span></p>
                    <p style="margin-top: -15px;"><img src="img/icons/nigeria.png" alt=""> Nigeria</p>
                  </div>
                </div>
                <p>The process was smooth, after providing the required info,
                  Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!</p>
                <p class="published small-text text-muted">Published 4 weeks ago</p>
              </div>
            </div>

          </section>

        </div>

        <section style="position: fixed; left: 65%;">
          <div class="col-md-4">
            <ul class="nav nav-tabs" id="planTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a href="#overview" class="nav-link active" data-bs-toggle="tab" data-bs-target="#basic">Overview</a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#description" class="nav-link" data-bs-toggle="tab" data-bs-target="#standard">Description</a>
              </li>
              <li class="nav-item" role="presentation">
                <a href="#seller" class="nav-link" data-bs-toggle="tab" data-bs-target="#premium">About the Seller</a>
              </li>

            </ul>

            <div class="tab-content">
              <div class="tab-pane fade show active" id="basic">
                <div class="card p-3 mt-3 planSide">
                  <div class="d-flex justify-content-between">
                    <p class="para">10 Screen</p>
                    <p class="para">$8,029</p>
                  </div>
                  <p class="mt-3">
                    I will design upto 10 screens of mockup for your website/mobile App.
                  </p>
                  <p class="timeRivision">
                    <span>
                      <i class="fas fa-clock"></i> 3 Days Delivery
                    </span>
                    <span>
                      <i class="fas fa-recycle"></i> 1 Revision
                    </span>
                  </p>
                  <ul style="list-style-type: none; margin-left: -30px;">
                    <li><i class="fas fa-check avai"></i> Source File</li>
                    <li><i class="fas fa-check avai"></i> Commercial Use</li>
                    <li class="text-muted"><i class="fas fa-check Notavai"></i> Interactive Mockup</li>
                    <li><i class="fas fa-check avai"></i> 10 pages</li>
                  </ul>

                  <button class="btn btn-gradient">Continue ($8,234)</button>
                </div>
              </div>
              <div class="tab-pane fade" id="standard">
                <div class="card p-3 mt-3 planSide">
                  <div class="d-flex justify-content-between">
                    <p class="para">15 Screen</p>
                    <p class="para">$18,029</p>
                  </div>
                  <p class="mt-3">
                    I will design upto 10 screens of mockup for your website/mobile App.
                  </p>
                  <p class="timeRivision">
                    <span>
                      <i class="fas fa-clock"></i> 3 Days Delivery
                    </span>
                    <span>
                      <i class="fas fa-clocl-o"></i> 1 Revision
                    </span>
                  </p>
                  <ul style="list-style-type: none; margin-left: -30px;">
                    <li><i class="fas fa-check avai"></i> Source File</li>
                    <li><i class="fas fa-check avai"></i> Commercial Use</li>
                    <li><i class="fas fa-check avai"></i> Interactive Mockup</li>
                    <li><i class="fas fa-check avai"></i> 15 pages</li>
                  </ul>

                  <button class="btn btn-gradient">Continue ($23,234)</button>
                </div>
              </div>
              <div class="tab-pane fade" id="premium">
                <div class="card p-3 mt-3 planSide">
                  <div class="d-flex justify-content-between">
                    <p class="para">50 Screen</p>
                    <p class="para">$7,029</p>
                  </div>
                  <p class="mt-3">
                    I will design upto 50 screens of mockup for your website/mobile App.
                  </p>
                  <p class="timeRivision">
                    <span>
                      <i class="fas fa-clock"></i> 8 Days Delivery
                    </span>
                    <span>
                      <i class="fas fa-clocl-o"></i> 1 Revision
                    </span>
                  </p>
                  <ul style="list-style-type: none; margin-left: -30px;">
                    <li><i class="fas fa-check avai"></i> Source File</li>
                    <li><i class="fas fa-check avai"></i> Commercial Use</li>
                    <li class="text-muted"><i class="fas fa-check Notavai"></i> Interactive Mockup</li>
                    <li><i class="fas fa-check avai"></i> 50 pages</li>
                  </ul>

                  <button class="btn btn-gradient">Continue ($28,234)</button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>


  <?php include("components/footer.php") ?>

  <script src="js/jquery.js"></script>
  <script src="css/dist/js/bootstrap.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    $(document).ready(() => {
      let url = location.href.replace(/\/$/, "");

      if (location.hash) {
        const hash = url.split("#");
        $('#profileTab a[href="#' + hash[1] + '"]').tab("show");
        url = location.href.replace(/\/#/, "#");
        history.replaceState(null, null, url);
        setTimeout(() => {
          $(window).scrollTop(0);
        }, 100);
      }

      $('a[data-bs-toggle="tab"]').on("click", function () {
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