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
    <title>Riley and Company, Inc. - Lift Station Manufacturer</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro:200,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:200,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/hover-min.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel='stylesheet prefetch' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <!--[if lt IE 9]>
            <script src="scripts/html5shiv.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- <div id='bizzbar'>
      <p class='bizztext'>Drive more attention to your most important website content with Bizz Bar.
      <button class='bizzbutton'>Click me</button></p>
      <close></close>
    </div> -->
    <div class="main-overlay js-main-overlay"></div>
    <section class="cover-main" id="home">
      <div class="video-container">
        <video id="bgvid" playsinline autoplay muted loop>
          <source src="images/Top_Highway.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
      </div>
      <!-- header -->
      <?php include('includes/header.php'); ?>
      <!-- ./header -->
        <div class="wrapper">
          <ul id="scene"
              data-invert-x="false"
              data-invert-y="false"
              data-scalar-x="7"
              data-scalar-y="7"
              data-friction-x="0.1"
              data-friction-y="0.1"
              data-origin-x="0.5"
              data-origin-y="0.5">



              <li class="layer name" data-depth="0.90">Riley and Company Inc.</li>
              <li class="layer title" data-depth="0.50">Lift Station Manufacturers</li>
              <li class="layer btn btn-main" data-depth="0.30">
                <a href="/products" class="portfolio-btn hvr-rectangle-out">Learn More</a>
                <a href="/account/login" class="contact-btn hvr-rectangle-out">Start Designing</a>
              </li>




          </ul>
        </div>


    </section>

    <!-- Products section -->
    <section class="products" id="advanced-solutions">
      <div class="wrapper">
        <h2 class="products-h2">Advanced Products</h2>
        <p class="products-sub-para">Our custom and pre-packages lift station packages are top notch and well known in the industry.</p>
        <div class="row">
          <div class="col-4-app">
              <img src="images/wastewater-treatment-recycle-use-app1.png">
              <h3>Water/Wastewater Products</h3>
              <p>Wetwells, valve boxes, piping, pumps and supplies, and complete lift station packages</p>
              <a class="btn-login hvr-rectangle-out" href="/products/hardware/hardware_01">Learn More</a>
          </div>
          <div class="col-4-app">
            <img src="images/systems_automation_rgb.png">
            <h3>Automation</h3>
            <p>Lift Station Control panels and automation supplies</p>
            <a class="btn-login hvr-rectangle-out" href="/products/hardware/automation">Learn More</a>
          </div>
          <div class="col-4-app">
            <img src="images/znhnzbflvsvibpbsnctw.png" class="remote-monitor">
            <h3>Remote Monitoring for Lift Stations</h3>
            <p>Offering packages ranging from economical to wireless full.</p>
            <a class="btn-login hvr-rectangle-out" href="/products/hardware/guardpro">Learn More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- ./Products section -->

    <!-- some intro video -->
    <section id="intro-video">
        <div class="wrapper">
          <h2>Introduction Video coming soon.</h2>
          <p>Riley and Company is proud to soon release our introduction video providing a brief description about the company</p>
        </div>
    </section>
    <!-- ./some intro video -->

    <!-- design system app banner promo -->
    <?php include('includes/design-system-promo-banner.php') ?>
    <!-- ./design system app banner promo -->


      <!-- News and events section -->
      <section id="news-events">
          <div class="wrapper">
              <h2>Latest News &amp; Upcoming Events</h2>
              <p class="date">02/01/2018</p>
              <p class="event">Riley and Company launch's there brand new website.
              </p>
              <p class="date">12/09/2017</p>
              <p class="event">Riley and Company will be at the next Expo in Georgia.
              </p>
              <p class="date">12/09/2017</p>
              <p class="event">Do not forget to follow us on linkedIn for the latest and greatest news about the Industry.
              </p>
          </div>
      </section>
      <!-- ./News and events section -->

      <!-- social-links section -->
      <?php include('includes/social-links.php'); ?>
      <!-- ./social links section -->


      <!-- footer section -->
    <?php include('includes/footer.php'); ?>
    <!-- ./footer section -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="scripts/jquery-ui.min.js"></script>
    <!-- Magnific Popup core JS file -->
    <script src="scripts/jquery.magnific-popup.min.js"></script>
    <script src="scripts/video.js"></script>
    <script src="scripts/parallax.min.js"></script>
    <script src="scripts/main.js"></script>
    <script>

        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);



    </script>
</body>

</html>
