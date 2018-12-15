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
    <title>Riley and Company, Inc. - Lift Station Manufacturer - Resources</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro:200,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:200,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap4.min.css">
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
<div class="main-overlay js-main-overlay"></div>
    <section class="cover-main-resources" id="home">
      <!-- header -->
      <?php include('../includes/header.php'); ?>
      <!-- ./header -->
    </section>

    <section id="main-content">
        <div class="wrapper">
          <h2>Resources</h2>
          <p>
            We've created quick and easy access to all of our Educational materials. With a wide range of product descriptions and specifications, you'll find everything you need for your new or existing Riley and Company products.
          </p>
          <!-- <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p> -->
        </div>
    </section>

      <section id="about-links">
      <div class="wrapper">
        <div class="tabs">
          <div class="row">
            <div class="col-md-3">
              <a data-tab="tab-1" class="tab-link btn btn-about-section hvr-rectangle-in margin-right-10">Download Content</a>
            </div>
            <div class="col-md-3">
              <a data-tab="tab-2" class="tab-link btn btn-about-section hvr-rectangle-in margin-right-10">Design Application</a>
            </div>
            <div class="col-md-3">
              <a data-tab="tab-3" class="tab-link btn btn-about-section hvr-rectangle-in margin-left-10">Frequently asked questions</a>
            </div>
            <div class="col-md-3">
              <a data-tab="tab-4" class="tab-link btn btn-primary hvr-rectangle-in margin-left-10">Video</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="wrapper">
      <div id="tab-1" class="tab-content current">
        <div class="row">
          <div class="col-md-6">
            <h2 class="rbrochure margin-bottom-10 margin-top-20">Fiberglass Wetwells</h2>
            <p class="pbrochure">Our Riley and Company Fiberglass Wetwells Brochure offers information about Lift Station Fiber glass details. Click below to download the PDF version of this brochure.</p>
            <a class="btn btn-primary margin-bottom-30" href="Fiberglass Wetwells.pdf" target="_blank">Download Now<i class="fa fa-download fa-2x margin-left-10"></i></a>
          </div>
          <div class="col-md-6">
            <h2 class="rbrochure margin-bottom-10 margin-top-20">GUARD PRO II Spec</h2>
            <p class="pbrochure">Our Riley and Company Brochure offers the latest in product details. Click below to download the PDF version of this brochure.</p>
            <a class="btn btn-primary margin-bottom-30" href="GUARD PRO II Spec.pdf" target="_blank">Download Now<i class="fa fa-download fa-2x margin-left-10"></i></a>
          </div>
        </div>
      </div>
      <div id="tab-2" class="tab-content">
        <h2 class="margin-bottom-30 design-title">Design Application</h2>
        <div class="col-lg-12">
          <div class="alert alert-danger margin-bottom-30" role="alert" id="server-error">
            <strong>Oh snap!</strong>
            <ul id="error-list-items" class="margin-top-20"></ul>
          </div>
          <div class="col-lg-12">
            <div class="alert alert-success margin-bottom-30" role="alert" id="server-success">
              <strong>Thank You!</strong> We really appreciate your information. We are working hard to statify all the needs of our customers.
            </div>
          </div>
        </div>
        <form method="post" class="cmxform" id="FormId" autocomplete="off" novalidate="novalidate">
          <div class="form-row">
            <div class="col">
              <label class="margin-bottom-10" for="fname">First Name:</label>
              <input type="text" class="form-control" name="fname" placeholder="First name">
            </div>
            <div class="col">
              <label class="margin-bottom-10" for="lname">Last Name:</label>
              <input type="text" class="form-control" name="lname" placeholder="Last name">
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label class="margin-bottom-10 margin-top-20" for="Email">Email:</label>
              <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="col">
              <label class="margin-bottom-10 margin-top-20" for="phone">Phone:</label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
            </div>
          </div>
          <div class="form-group">
              <label class="margin-bottom-10 margin-top-20" for="company">Company:</label>
              <input type="text" class="form-control" name="company" id="company" placeholder="Company"> </div>
          <fieldset>
            <legend class="margin-bottom-10">What describes you best?</legend>
              <label for="worked" class="custom-error">This field is required</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="worked" id="Engineer" value="Engineer" required>
                  <label class="form-check-label" for="Engineer">
                    Engineer
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="worked" id="Contractor" value="Contractor" required>
                  <label class="form-check-label" for="Contractor">
                    Contractor
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="worked" id="Building Owner/Manager" value="Building Owner/Manager" required>
                  <label class="form-check-label" for="Building Owner/Manager">
                      Building Owner/Manager
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="worked" id="Developer" value="Developer" required>
                  <label class="form-check-label" for="Developer">
                      Developer
                  </label>
                </div>
          </fieldset>
          <div class="form-group">
              <label class="margin-bottom-10 margin-top-20" for="pname">Project Name:</label>
              <input type="text" class="form-control" name="pname" id="pname" placeholder="Project Name"> </div>
          <div class="form-group">
              <label class="margin-bottom-10 margin-top-10" for="plocation">Project Location:</label>
              <input type="text" class="form-control" name="plocation" id="plocation" placeholder="Project Location"> </div>
              <small class="form-text text-muted margin-top-20">
                Could you please supply the following information? With this Information we can design the packaged fiberglass Lift Station.
              </small>
              <div class="form-row">
                <div class="col">
                  <label class="margin-bottom-10 margin-top-20" for="epc">Elevation at point of Connection:</label>
                  <input type="text" class="form-control" name="pdetails1" id="epc">
                </div>
                <div class="col">
                  <label class="margin-bottom-10 margin-top-20" for="adf">Average Daily Flows:</label>
                  <input type="text" class="form-control" name="pdetails2" id="adf">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label class="margin-bottom-10 margin-top-20" for="tew">Top Elevation Of Wetwell:</label>
                  <input type="text" class="form-control" name="pdetails3" id="tew">
                </div>
                <div class="col">
                  <label class="margin-bottom-10 margin-top-20" for="ipe">Inlet Pipe Elevation:</label>
                  <input type="text" class="form-control" name="pdetails4">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label class="margin-bottom-10 margin-top-20" for="tew">Feet Of Force Main On Private Property / Size:</label>
                  <input type="text" class="form-control" name="pdetails5">
                </div>
                <div class="col">
                  <label class="margin-bottom-10 margin-top-20" for="ipe">Size of Force Main On Private Property:</label>
                  <input type="text" class="form-control" name="pdetails6">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label class="margin-bottom-10 margin-top-20" for="tew">Feet Of Force Main In Right Of Way/Size:</label>
                  <input type="text" class="form-control" name="pdetails7">
                </div>
                <div class="col">
                  <label class="margin-bottom-10 margin-top-20" for="ipe">Size of Force Main In Right Of Way:</label>
                  <input type="text" class="form-control" name="pdetails8">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label class="margin-bottom-10 margin-top-20" for="tew">Back Pressure In Existing Force Main:</label>
                  <input type="text" class="form-control" name="pdetails9">
                </div>
                <div class="col">
                  <label class="margin-bottom-10 margin-top-20" for="ipe">Connecting To What City or County:</label>
                  <input type="text" class="form-control" name="pdetails10">
                </div>
              </div>
              <small class="form-text text-muted margin-bottom-10 margin-top-20">
                Any questions, give me a call at 407-265-9963</small>
                <div class="g-recaptcha" data-sitekey="6Lev14EUAAAAANwrWVUGu34pxWvr4SaS3E40XsoT"></div>
    <input type="submit" id="submit" name="submit" value="Submit" class="btn-sign-up">
     <input type="hidden" name="designapplication" value="designform">
        </form>

      </div>
      <div id="tab-3" class="tab-content">
        <!-- <h2>FAQ</h2> -->
        <?php include('../includes/faq-accordian.php'); ?>
      </div>
      <div id="tab-4" class="tab-content">
        <div class="col-sm-6 video-container">
          <!-- <h3 class="text-center">An Exponential Leap in Lift station Technology</h3> -->
          <div class="row">
            <div class="col-md-6">
              <small class="form-text text-muted margin-bottom-10 margin-top-20">
                Please enable Flash in browser to view Lift Station System animation</small>
              <a class="btn btn-primary margin-bottom-30" href="LiftStation.html" target="_blank">Click to View Lift Station System</a>
            </div>
            <div class="vid">
              <iframe class="youtube-video" src="https://www.youtube.com/embed/KCEp8y7bs-Q?enablejsapi=1" width="640" height="360" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <!-- <h2>Video</h2> -->
        <!-- Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. -->
      </div>
    </div>



      <!-- products promo banner -->
      <?php include('../includes/design-system-promo-banner.php'); ?>
      <!-- ./products promo banner -->

      <!-- social-links section -->
      <?php include('../includes/social-links.php'); ?>
      <!-- ./social links section -->

      <!-- footer section -->
      <?php include('../includes/footer.php'); ?>
      <!-- ./footer section -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- <script src="../scripts/bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="../scripts/bootstrap4.min.js"></script>
    <!-- <script src="/scripts/jquery-ui.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="../scripts/main.js"></script>
    <script src="../scripts/script-validate.js">

    </script>
</body>

</html>
