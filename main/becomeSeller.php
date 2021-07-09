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

  <main class="mt-5 container">
    <div class="row">
      <div class="col-md-4">
        <div class="card p-3">
          <div class="d-flex justify-content-center">
            <img src="img/icons/profile.png" alt="">
          </div>
          <div class="text-center mt-3">
            <h5>Broski Taichu</h5>
            <p class="text-center">UI/UX Designer</p>
          </div>
          <hr>
          <div class="d-flex justify-content-center">
            <button class="btn btn-primary col m-2 btn-sm" type="button"><i class="fas fa-image"></i> Upload</button>
            <button class="btn btn-danger col m-2 btn-sm" type="button"><i class="fas fa-trash"></i> Delete</button>
          </div>
        </div>
        <div class="card mt-3 p-3">
          <h6>About</h6>
          <p class="text-muted small-text">Tell about yourself</p>
          <hr>
          <label for="">BIO</label>
          <textarea class="form-control" placeholder="I live in Boston, started my career........"></textarea>

          <label for="" class="mt-3">SKILLS</label>
          <div class="d-flex justify-content-around">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" style="color: #000;" for="flexCheckDefault">
                HTML
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" style="color: #000;" for="flexCheckDefault">
                JAVA
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" style="color: #000;" for="flexCheckDefault">
                Javascript
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" style="color: #000;" for="flexCheckDefault">
                Phython
              </label>
            </div>
          </div>
        </div>

        <div class="card mt-3 p-3">
          <h6>Social Profiles</h6>
          <p class="text-muted small-text">Add elsewhere link to your profile</p>
          <div class="input-group mt-4">
            <span style="background: #fff; border-right: none;" class="input-group-text"><i class="fab fa-instagram"></i></span>
            <input type="text" class="form-control" placeholder="Instagram Link" />
          </div>
          <div class="input-group mt-4">
            <span style="background: #fff; border-right: none;" class="input-group-text"><i class="fab fa-twitter"></i></span>
            <input type="text" class="form-control" placeholder="Twitter Link" />
          </div>
          <div class="input-group mt-4">
            <span style="background: #fff; border-right: none;" class="input-group-text"><i class="fab fa-facebook"></i></span>
            <input type="text" class="form-control" placeholder="Facebook Link" />
          </div>
        </div>
      </div>





      <div class="col-md-8">
        <div class="card p-3">
          <h6>Enter Basic Info</h6>
          <hr>
          <form action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Name <span>*</span></label>
                  <input type="text" class="form-control" placeholder="Broski Taichu" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Username <span>*</span></label>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Gender <span>*</span></label>
                  <select name="" class="form-select" id="">
                    <option value="">Select Gender</option>
                    <option value="">Male</option>
                    <option value="">Female</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Date of Birth <span>*</span></label>
                  <input type="date" class="form-control" placeholder="" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Email <span>*</span></label>
                  <input type="email" class="form-control" placeholder="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Location <span>*</span></label>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Organisation <span>*</span></label>
                  <input type="text" class="form-control" placeholder="Broski Taichu Ltd." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>website <span>*</span></label>
                  <input type="text" class="form-control" placeholder="broskitaichu.com" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Phone Number <span>*</span></label>
                  <input type="text" class="form-control" placeholder="+000 000000000" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Preferred Language <span>*</span></label>
                  <select name="" class="form-select" id="">
                    <option value="">English</option>
                    <option value="">Francaise</option>
                    <option value="">Deutch</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="card p-3 mt-5">
          <h6>Experience</h6>
          <p class="text-muted small-text">Tell about your work, job and othe experiences.</p>
          <hr>
          <form action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>FROM</label>
                  <input type="text" class="form-control" placeholder="Broski Taichu" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>TO</label>
                  <input type="text" class="form-control" placeholder="" />
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Company</label>
                  <input type="text" class="form-control" placeholder="Enter your company title" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mt-4">
                  <label>Position</label>
                  <input type="text" class="form-control" placeholder="Enter your position" />
                </div>
              </div>
            </div>

        </div>

        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-outline-primary m-2">Cancel</button>
            <button type="submit" class="btn btn-primary m-2">Save</button>
        </div>
        </form>
      </div>
    </div>
    </div>
  </main>


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

      $('a[data-toggle="tab"]').on("click", function() {
        let newUrl;
        const hash = $(this).attr("href");
        if (hash == "#customer") {
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