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
    #myTab .nav-link{
      color: #000;
    }
    #myTab .nav-link.active{
      color: #fff;
    }
    p {
      text-align: justify;
    }
  </style>
</head>

<body>

  <?php include("components/header.php") ?>

  <main class="container mt-5">
    <div class="row">
      <aside class="col-md-4">

        <div class="card overviewSideTabs">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a href="overviewTab.html" style="color: #000;" class="nav-link">Overview</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#editAccount">Edit Account</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#editSecurity">Edit Security</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#editNotification">Edit Notification</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#editBilling">Edit Billing</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#editPayment">Edit Payment</a>
            </li>
          </ul>

        </div>

      </aside>

      <section class="col-md-8">
        <div class="card p-3">

          <div class="tab-content OverviewTabContent" id="myTabContent">
            <div class="tab-pane fade" id="overview" role="tabpanel"></div>
            <div class="tab-pane fade show active" id="editAccount" role="tabpanel">
              <div class="editAccount">
                <div class="d-flex justify-content-end">
                  <p>Need to update your profile ? <a style="color: #1cd8d2; text-decoration: none;" href="">Go to My
                      Profile</a></p>
                </div>
                <hr>

                <form action="">
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">Full Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="Fname" value="Micheal John">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" value="michealjohn@gmail.com">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email" class="col-sm-4 col-form-label">Online Status <i style="color: #1cd8d2;" class="fas fa-circle"></i><br>
                      <span class="text-muted" style="font-size: 12px;">When online, your Gigs are available under the
                        search filter</span>
                    </label>
                    <div class="col-sm-8">
                      <select style="font-size: 14px;" class="form-select" name="onlinestatus" id="staus">
                        <option selected>Go offline For.....</option>
                        <option value="">1 hour</option>
                        <option value="">1 week</option>
                        <option value="">1 month</option>
                        <option value="">Till off</option>
                      </select>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end">
                    <button class="btn btn-gradient">Save Changes</button>
                  </div>
                  <hr>
                </form>

                <form action="">
                  <div class="row mb-3">
                    <label for="deactivation" class="col-sm-4 col-form-label">ACCOUNT DEACTIVATION</label>
                    <div class="col-sm-8">
                      <p>What happens if you deactivate your account</p>
                      <ul>
                        <li>your profile and Gigs wont be shown on Steamlance anymore</li>
                        <li>Active orders will be cancelled</li>
                        <li>You won't be ableto re-activate your Gigs</li>
                      </ul>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="deactivation" class="col-sm-4 col-form-label">I'm leaving because.....</label>
                    <div class="col-sm-8">
                      <select style="font-size: 14px;" class="form-select" name="onlinestatus" id="staus">
                        <option selected>Choose a reason</option>
                        <option value="">Unsubscribe from Steamlance emails</option>
                        <option value="">I want to change my username</option>
                        <option value="">Other</option>
                        <h5>Buying</h5>
                        <option value="">I can't find what i need on Steamlance</option>
                        <option value="">Steamlance is complicated or hard to use</option>
                        <option value="">I'm unhappy with Steamlance's policies</option>
                        <option value="">Other</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="deactivation" class="col-sm-4 col-form-label">Tell us more (optional)</label>
                    <div class="col-sm-8">
                      <textarea name="" id="" cols="20" class="col-md-12 form-control"></textarea>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end">
                    <button class="btn btn-gradient">Deactivate Account</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="editSecurity" role="tabpanel">
              <h6 class="text-muted">CHANGE PASSWORD</h6>
              <div class="editSecurity">
                <form action="">
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">Current Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="password">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email" class="col-sm-4 col-form-label">New Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="passwordNe">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email" class="col-sm-4 col-form-label">Comfirm Password</label>
                    <div class="col-sm-8">
                      <input type="password" class="form-control" id="passwordNe">
                      <div class="valid-feedback">
                        8 Characters or longer, Combine upper case and lowercase letters and numbers.
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end">
                    <button class="btn btn-gradient">Save Changes</button>
                  </div>
                  <hr>
                </form>
                <hr>
                <form action="">
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">PHONE VERIFICATION</label>
                    <div class="col-sm-8">
                      <p class="text-muted">Your phone is not verified with Steamlance. Click Verify Now to complete
                        phone verification.
                      </p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button class="btn btn-gradient">Verify Now</button>
                  </div>
                  <hr>
                </form>
                <hr>
                <form action="">
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">SECURITY QUESTIONS</label>
                    <div class="col-sm-8">
                      <p class="text-muted">To help keep your account secure, we'll ask you to submit a when using a new
                        device to log in.
                        We'll send the code via email or Steamlance notification. <a href="" style="color: #1cd8d2; text-decoration: none;">Verify your mobile phone</a> to be able to
                        receive the code via SMS.
                      </p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button class="btn btn-gradient">Set</button>
                  </div>
                  <hr>
                </form>
                <hr>
                <h6 class="text-muted">CONNECTED DEVICES</h6>
                <div class="d-flex justify-content-between p-3 mt-3" style="border: 1px solid #e3e3e3; border-radius: 10px;">
                  <div>
                    <div class="row">
                      <div class="col-sm-2">
                        <i class="fas fa-laptop fa-3x"></i>
                      </div>
                      <div class="col-sm-10">
                        <h6>CHROME 85, Windows <a style="color: #1cd8d2; font-size: 16px !important;">THIS DEVICE</a>
                        </h6>
                        <p class="text-muted" style="font-size: 12px;">Last activity 49 minutes ago <i class="fas fa-circle" style="font-size: 8px;"></i> Kano, Nigeria.</p>
                      </div>
                    </div>
                  </div>
                  <div>
                    <h5 style="color: #1cd8d2;">Sign Out</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="editNotification" role="tabpanel">
              <div class="editNotification">
                <div class="row notificationsInfo">
                  <div class="col-md-4">
                    <h6 class="text-muted">NOTIFICATIONS</h6>
                    <p style="font-size: 12px;">For important updates regarding your Steamlance activity, certained
                      notifications cannot be disabled.</p>
                  </div>
                  <div class="col-md-4">
                    <h6 class="text-muted">TYPE</h6>
                    <p>Inbox Messages</p>
                    <p>Order Messages</p>
                    <p>Order Updates</p>
                  </div>
                  <div class="col-md-4">
                    <h6 class="text-muted">EMAIL</h6>
                    <p><input type="checkbox"></p>
                    <p><input type="checkbox"></p>
                    <p><input type="checkbox"></p>
                  </div>
                </div>
                <hr>
                <h6 class="text-muted" style="font-size: 14px;">REAL-TIME NOTIFICATIONS</h6>
                <form action="">

                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-6 col-form-label">Enable/disable real-time notifications</label>
                    <div class="col-sm-4">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" style="color: #1cd8d2;" for="flexSwitchCheckDefault">Try
                          me!</label>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-6 col-form-label">Enable/disable sound</label>
                    <div class="col-sm-4">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault"><i class="fas fa-volume-up"></i></label>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end">
                    <button class="btn btn-gradient">Save Changes</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="editBilling" role="tabpanel">
              <div class="editBilling">
                <h6 class="text-muted">BILLING INFORMATION</h6>
                <p>The following information will be displayed on your invoices :</p>
                <hr>

                <form action="">
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">COMPANY NAME</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="companyname">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">FULL NAME</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="fullname">
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">COUNTRY</label>
                    <div class="col-sm-8">
                      <select style="font-size: 14px;" class="form-select" id="country">
                        <option value="">Nigeria</option>
                        <option value="">United state</option>
                        <option value="">Morocco</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">REGION/STATE/PROVICE</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="state">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">ADDRESS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="address">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">ZIP CODE</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="zipCode">
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">VAT ID for European countries</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="address">
                    </div>
                  </div>
                  <hr>
                  <div class="row mb-3">
                    <label for="Fname" class="col-sm-4 col-form-label">INVOICES</label>
                    <div class="col-sm-8">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" style="color: #000;" for="flexCheckDefault">
                          send me invoice via mail
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-end">
                    <button class="btn btn-gradient">Save Changes</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane fade" id="editPayment" role="tabpanel">
              <div class="editPayment">
                <h6 class="text-muted">Your Account Balance</h6>
                <p>When available, we useyour funds and credits as your primary primary payment method for new orders.
                </p>

                <table class="table table-bordered paymentTable">
                  <tbody>
                    <tr>
                      <th class="text-muted">STEAMLANCE BALANCE</th>
                      <th class="text-muted">Total $25.00</th>
                    </tr>
                    <tr>
                      <td class="text-muted" style="font-weight: bold;">Your Earnings</td>
                      <td>$0.00</td>
                    </tr>
                    <tr>
                      <td>
                        <p class="text-muted" style="font-weight: bold;">Your Reimbursements</p>
                        <p class="text-muted" style="line-height: normal;font-size: 12px;">Funds that were credited back
                          to your account or cancelled orders.</p>
                      </td>
                      <td>
                        $0.00
                      </td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered paymentTable mt-3">
                  <thead></thead>
                  <tbody>
                    <tr>
                      <th class="text-muted">STEAMLANCE CREDITS</th>
                      <th class="text-muted">Total $25.00</th>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding: 30px; margin-bottom: 30px;">
                        <div class="text-center">
                          <h6>No Credits Yet</h6>
                          <p class="text-muted" style="font-size: 12px;">Refer a friend to Steamlance and get creditsto
                            buy the freelance services you need.</p>
                          <button class="btn btn-gradient">Get Steamlance Credit</button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <p style="font-size: 12px;" class="text-muted">Please note it may take a few minutes to update a New
                  Steamlance Credits in your account balance.</p>
              </div>
            </div>
          </div>

        </div>
      </section>

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
        if (hash == "#editAccount") {
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