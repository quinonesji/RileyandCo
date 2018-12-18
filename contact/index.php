<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--<meta property="og:title" content="" />-->
    <!--<meta property="og:url" content="" />-->
    <!--<meta property="og:image" content="" />-->
    <!--<meta property="og:site_name" content="" />-->
    <!--<meta property="og:description" content="" />-->
    <!--  https://atom.io/packages/platformio-ide-terminal  -->
    <!--  https://atom.io/packages/language-typescript-grammars-only  -->
    <title>Riley and Company, Inc. - Lift Station Manufacturer - Contact</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro:200,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:200,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/hover-min.css">
    <link rel='stylesheet prefetch' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/about.css">
    <!--[if lt IE 9]>
            <script src="scripts/html5shiv.min.js"></script>
        <![endif]-->
        <style media="screen">
          form.cmxform label.custom-error {
            display: none;
          }
        </style>
        <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
  <!-- <div class="div-loader"></div> -->
  <div class="main-overlay js-main-overlay"></div>
    <section class="cover-main-contact" id="home">
      <!-- header -->
      <?php include('../includes/header.php'); ?>
      <!-- ./header -->
    </section>

    <section id="login-content">
        <div class="wrapper">
          <h2 class="login-title">Contact Us</h2>
            <h3 class="lead-in-sentence">Let's Discuss your needs</h3>
            <p class="intro-sentence">No matter how unique your industry or applications may be, we have the answer to all your questions. Fill out the form below and we’ll be in touch with you soon.</p>
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-danger margin-bottom-30" role="alert" id="server-error">
                <strong>Oh snap!</strong>
                <ul id="error-list-items" class="margin-top-20"></ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="alert alert-success margin-bottom-30" role="alert" id="server-success">
                <strong>Thank You!</strong> We really appreciate your information. We are working hard to statify all the needs of our customers.
              </div>
            </div>
            <div class="col-lg-8">
              <form method="post" class="cmxform" id="FormId" autocomplete="off" novalidate="novalidate">
                <div class="form-group">
                            <label class="margin-bottom-10" for="fname">First Name:</label>
                            <input type="text" class="form-control" name="fname" id="fname"> </div>
                        <div class="form-group">
                            <label class="margin-bottom-10" for="lname">Last Name:</label>
                            <input type="text" class="form-control" id="lname" name="lname"> </div>
                        <div class="form-group">
                            <label class="margin-bottom-10" for="Email">Email:</label>
                            <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp"> </div>
                        <div class="form-group">
                            <label class="margin-bottom-10" for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone" id="phone"> </div>
                        <div class="form-group">
                            <label class="margin-bottom-10" for="company">Company:</label>
                            <input type="text" class="form-control" name="company" id="company"> </div>
                        <div class="form-group">
                            <label class="margin-bottom-10" for="country">Country:</label>
                            <select id="country" name="country" class="form-control" required>
                              <option value></option>
                                </select>
                        </div>

                        <div id="Showstate" class="form-group">
                            <label class="margin-bottom-10" for="state">State:</label>
                            <select id="state" name="state" class="form-control" required>
                              <option value></option>
                                </select>
                        </div>
                        <div id="ShowCity" class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="city"> </div>


                        <fieldset class="form-group" >
                            <legend class="margin-bottom-10">Have you ever worked with Us?</legend>
                            <label class="custom-control custom-radio">
                              <input id="yes" type="radio" name="worked" value="Yes" class="custom-control-input" required>
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-description">Yes</span>
                            </label>
                              <label class="custom-control custom-radio">
                              <input id="no" name="worked" type="radio" value="No" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-description">No</span>
                            </label>
                            <label for="worked" class="custom-error">This field is required</label>
                        </fieldset>
                        <fieldset class="margin-bottom-20">
                           <legend class="margin-bottom-10">What describes you best? (Check all that apply)</legend>
                           <label class="custom-error" >This field is required</label>
                            <div class="form-group">
                              <label class="custom-control custom-checkbox" for="engineer">
                                <input type="checkbox" class="custom-control-input" value="engineer" id="engineer" name="desc" required>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Engineer</span>
                              </label>
                            </div>
                            <div class="form-group">
                              <label class="custom-control custom-checkbox" for="contractor">
                                <input type="checkbox" class="custom-control-input" value="contractor" id="contractor" name="desc">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Contractor</span>
                              </label>
                            </div>
                            <div class="form-group">
                              <label class="custom-control custom-checkbox"for="bldg-owner">
                                <input type="checkbox" class="custom-control-input" value="Building owner/Manager" id="bldg-owner" name="desc">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Building Owner/Manager</span>
                              </label>
                            </div>
                            <div class="form-group">
                              <label class="custom-control custom-checkbox" for="developer">
                                <input type="checkbox" class="custom-control-input" value="developer" id="developer" name="desc">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Developer</span>
                              </label>
                            </div>
                            <div class="form-group mb-0">
                              <label class="custom-control custom-checkbox" for="other">
                                <input type="checkbox" class="custom-control-input" value="Other" id="other" name="desc">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Other</span>
                              </label>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label class="margin-bottom-10" for="othertext">If Other, please specify:</label>
                            <input type="text" class="form-control" id="othertext" name="othertext"> </div>
                            <div class="form-group">
                            <label class="margin-bottom-10" for="needs">Tell us about your needs:</label>
                            <input type="text" class="form-control" id="needs" name="needs"> </div>
                            <div class="g-recaptcha" data-sitekey="6Lev14EUAAAAANwrWVUGu34pxWvr4SaS3E40XsoT"></div>
                <input type="submit" id="submit" name="submit" value="Submit" class="btn-sign-up">
                 <input type="hidden" name="generalcontact">
              </form>
            </div>
            <div class="col-lg-4 contact-info">
              <div class="row contact-info-header">
                        <h4>Corporate Headquarters</h4>
                    </div>
                    <div class="row contact-info-body">
                        <p> <strong>Riley and Company, Inc.</strong>
                            <br> 5491 Benchmark Lane
                            <br> Sanford, FL 32773
                            <br> </p>
                        <p> Office: (407) - 265 - 9963
                            <br> Fax: (407) - 265 - 9967
                            <br> 24hr service: 1 - 888 - 317 - 4481</p>
                    </div>
            </div>
          </div>
        </div>
    </section>

      <!-- products promo banner -->
      <?php include('../includes/products-promo-banner.php'); ?>
      <!-- ./products promo banner -->

      <!-- social-links section -->
      <?php include('../includes/social-links.php'); ?>
      <!-- ./social links section -->

      <!-- footer section -->
    <?php include('../includes/footer.php'); ?>
    <!-- ./footer section -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="../scripts/bootstrap.min.js"></script>
    <!-- <script src="../scripts/jquery-ui.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="../scripts/main.js"></script>
    <script src="main.js"></script>
</body>

</html>
