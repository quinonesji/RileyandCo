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
    <title>Riley and Company, Inc. - Lift Station Manufacturer - SiteMap</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro:200,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:200,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/hover-min.css">
    <link rel='stylesheet prefetch' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/about.css">
    <!--[if lt IE 9]>
            <script src="scripts/html5shiv.min.js"></script>
        <![endif]-->
</head>

<body>
<div class="main-overlay js-main-overlay"></div>
    <section class="cover-main-sitemap" id="home">
      <!-- header -->
      <?php include('../includes/header.php'); ?>
      <!-- ./header -->
    </section>

    <section id="main-content2">
        <div class="wrapper">
          <h2>SiteMap</h2>
                <ul>
                  <li><a href="/">Home</a></li>
                  <li>
                    <a href="/about">About</a>
                  <ul>
                    <li><a href="/about/history">History</a></li>
                    <li><a href="/about/people">People</a></li>
                    <li><a href="/about/projects">Projects</a></li>
                    <!-- <li><a href="/about/representatives">Representatives</a></li> -->
                  </ul>
                  </li>
                  <li>
                    <a href="/products">Products</a>
                    <ul>
                      <!-- <li>
                        <a href="/products/software">Software</a>
                        <ul>
                          <li><a href="/products/software/software_01">Software 1</a></li>
                        </ul>
                      </li> -->
                      <li>
                        <a href="/products/hardware">Hardware</a>
                        <ul>
                          <li><a href="/products/hardware/hardware_01">Homa Pumps</a></li>
                          <li><a href="/products/hardware/automation">automation</a></li>
                          <li><a href="/products/hardware/guardpro">Guard Pro II</a></li>
                          <li><a href="/products/hardware/hardware_05">LFM Firberglass structures</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="/services">Services</a></li>
                  <li><a href="/resources">Resources</a></li>
                  <li><a href="/contact">Contact</a></li>
                  <li><a href="/account/login">Login Portal</a></li>
                  <li><a href="/privacy-policy">Privacy Policy</a></li>
                </ul>
        </div>
    </section>

      <!-- products promo banner -->
      <?php include('../includes/rep-promo-banner.php'); ?>
      <!-- ./products promo banner -->

      <!-- social-links section -->
      <?php include('../includes/social-links.php'); ?>
      <!-- ./social links section -->

      <!-- footer section -->
    <?php include('../includes/footer.php'); ?>
    <!-- ./footer section -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../scripts/jquery-ui.min.js"></script>
    <script src="../scripts/main.js"></script>
</body>

</html>
