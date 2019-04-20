<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Riley Brown Web Developer</title>

  <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content="Riley Brown Web Developer">
  <meta itemprop="description"
    content="Riley Brown FullStack web developer. Need a website made for you or your business? Contact me with the form below.">
  <meta itemprop="image" content="https://riley.gg/img/seo-landing.jpg">

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://riley.gg">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Riley Brown Web Developer">
  <meta property="og:description"
    content="Riley Brown FullStack web developer. Need a website made for you or your business? Contact me with the form below.">
  <meta property="og:image" content="https://riley.gg/img/seo-landing.jpg">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Riley Brown Web Developer">
  <meta name="twitter:description"
    content="Riley Brown FullStack web developer. Need a website made for you or your business? Contact me with the form below.">
  <meta name="twitter:image" content="https://riley.gg/img/seo-landing.jpg">

  <!-- style sheets -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>

  <div class="fullscreen-spinner">
    <img src="spinner.svg" alt="spinner logo">
  </div>

  <!-- nav bar start-->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark pl-5 navbar-top-info">
    <div class="container">
      <a class="navbar-brand" href="#">Riley Brown</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"></li>
        </ul>

        <ul class="nav navbar-nav navbar-right pr-5">
          <li class="nav-item">
            <a class="nav-link" id="about-me" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-me-nav" href="#contact-me">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link my-work-nav" href="#myWork">My Work
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/Riley-Brown" target="_blank">GitHub</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://blog.riley.gg" target="_blank">Blog</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- nav bar end-->

  <header class="fullscreen-landing">
    <div class="landing-content">
      <h1>Welcome to my Portfolio</h1>
      <p> I am studying Web Development and Software Engineering with the goal of becoming a full-stack engineer.
      </p>
      <a class="header-btn" id="see-more" href="#main-content">See more</a>
    </div>
  </header>

  <div id="main-content"></div>
  <br>
  <br>

  <!--fullscreen background container end-->

  <div class="container container-skills sr-top">
    <h1 class="my-skills" id="skills">
      My Skills
      <hr class="design-line">
    </h1>
  </div>

  <!--card grid start-->
  <div class="container pl-1 card-grid-wrap">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="card text-center html-container sr-left">
          <div class="card-body ">
            <h5 class="card-title">Node.js</h5>
            <img src="svg/nodejs.svg" alt="">
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="card text-center css-container sr-bottom">
          <div class="card-body">
            <h5 class="card-title ">React.js</h5>
            <img src="svg/react.svg">
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 ">
        <div class="card text-center javascript-container sr-right">
          <div class="card-body ">
            <h5 class="card-title">JavaScript</h5>
            <i class="fab fa-js code-icon javascript-icon"></i>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="card text-center wordpress-container sr-left">
          <div class="card-body ">
            <h5 class="card-title">SQL</h5>
            <img src="svg/database.svg">
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="card text-center bootstrap-container sr-bottom">
          <div class="card-body ">
            <h5 class="card-title">git</h5>
            <img src="svg/git.svg">
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="card text-center jquery-container sr-right">
          <div class="card-body ">
            <h5 class="card-title">CSS3</h5>
            <i class="fab fa-css3 code-icon css3-icon"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--card grid end-->

 
  <!-- <h1 class="my-work-title">My Work</h1>
  <hr class="design-line"> -->

  <!-- lightbox wrapper -->
  <div class="modal-wrapper" id="myWork">
    <!-- testimon carousel start  -->
    <div class="testimonial-wrapper sr-left">
      <div id="testimonial" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- indicators -->
        <ol class="carousel-indicators">
          <li data-target="#testimonial" data-slide-to="0" class="active"></li>
          <li data-target="#testimonial" data-slide-to="1"></li>
          <li data-target="#testimonial" data-slide-to="2"></li>
          <li data-target="#testimonial" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h1>Build personal website</h1>
            <div class="testimonial-stars">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <p>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Great experience overall working with Riley. Very professional and quality of work exceeded my
              expectation. Will surely use
              again.
            </p>
          </div>
          <div class="carousel-item">
            <h1>One Page website in one Day</h1>
            <div class="testimonial-stars">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <p>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Completed a rush one day development job fast and with a great overall design.
            </p>
          </div>
          <div class="carousel-item">
            <h1>Help dialing-in the JS/CSS/Responsiveness of a simple one-page website.</h1>
            <div class="testimonial-stars">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <p>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Riley was easy to work with, had great communication skills, and excelled at thinking of creative
              solutions to coding problems
              that ensured the finished product was perfect.
            </p>
          </div>
          <div class="carousel-item">
            <h1>Customize a Bootstrap Template</h1>
            <div class="testimonial-stars">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
            </div>
            <p>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              Riley is great to work with. Prompt and easy to communicate with.
            </p>
          </div>

        </div>
        <a class="carousel-control-prev" href="#testimonial" role="button" data-slide="prev">
          <i class="fa fa-chevron-left testi-img" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#testimonial" role="button" data-slide="next">
          <i class="fa fa-chevron-right testi-img" aria-hidden="true"></i>

          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- testimonial end-->

    <!--  image modal  -->
    <div class="image-modal">

      <div class="image-modal-content-wrapper">
        <span>&times;</span>
        <img src="" class="img-fluid" alt="">
        <h1>This is my website</h1>
        <p>This is my great website that I build using cool things</p>
        <a href="#" target="_blank">Visit Site</a>
        <a href="" class="code-link" target="_blank"></a>
      </div>
    </div>
    <!-- image modal end -->

    <!-- lightbox grid start -->
    <div class="container lightbox-container">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <span class="span-1 sr-interval">
            <img data-src="img/learn-locker.jpg" class="lazyload" alt="Learn Locker">
          </span>
        </div>
        <div class="col-md-6 col-lg-4">
          <span class="span-2 sr-interval">
            <img data-src="img/insta-clone.png" class="lazyload" />
          </span>
        </div>
        <div class="col-md-6 col-lg-4">
          <span class="span-3 sr-interval">
            <img data-src="img/upwork-10-case-study.png" class="lazyload" alt="Video Mentum">
          </span>
        </div>
        <div class="col-md-6 col-lg-4">
          <span class="span-4 sr-interval video">
            <!-- <img data-src="img/wb-flashback.jpg" class="lazyload" alt="WB Flashback"> -->
            <img data-src="img/wb-flashback.jpg" class="lazyload" />
          </span>
        </div>
        <div class="col-md-6 col-lg-4">
          <span class="span-5 sr-interval video">
            <img data-src="img/bayshells-landing.jpg" class="lazyload" alt="Bay Shells" />
          </span>
        </div>
        <div class="col-md-6 col-lg-4">
          <span class="span-6 sr-interval">
            <img data-src="img/daniel-landing-page.jpg" class="lazyload" alt="Daniel Landing Page">
          </span>
        </div>
      </div>

    </div>
  </div>

   <!--forum and about me grid start-->
   <div class="container-fluid mt-5" id="contact-me">
    <div class="about-container">
      <div class="row">
        <div class="col-lg-5">
          <div class="form-area">
            <form role="form" method="POST" class="sr-left" id="contactForm" action="contactform.php">
              <br style="clear:both">
              <h3 style="margin-bottom: 25px; text-align: center;" id="contact-me-h3">Contact Me</h3>
              <div class="alert-form">Your message has been sent</div>
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>


              <div class="form-group">
                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message"
                  maxlength="140" rows="7"></textarea>
                <span class="help-block">

                </span>
              </div>

              <button type="submit" id="submit" name="submit"
                class="btn btn-lg btn-block  pull-right form-button mb-5">Submit
                Form</button>
            </form>
          </div>


        </div>
        <div class="col-lg-5">
          <div class="about-me mt-4 sr-right" id="about">
            <h3>About Me</h3>
            <p class="mt-3">I am a 22 year old Web Developer from Boston, Massachusetts. I have had an interest in
              technology since a young
              age, and decided to teach myself how to code. </p>

            <p>I started with HTML on
              <a href="https://www.codecademy.com/catalog/subject/web-development" target="_blank">CodeCademy</a>, then
              CSS and JavaScript. I moved on to
              <a href="http://referrals.trhou.se/rileybrown3" target="_blank">TeamTreeHouse's</a> 60 hour front-end
              development course learning valuable skills such as Bootstrap, VueJS,
              jQuery, AJAX and more. I learn new skills everyday from various platforms such as
              <a href="https://udemy.com" target="_blank">Udemy.com</a>, YouTube, and more.
              <a href="https://teamtreehouse.com/rileybrown3" target="_blank"> Click here to see my progress on
                TreeHouse.</a>
            </p>
            <p class="mb-5"> I am currently attending
              <a href="https://lambdaschool.com/" target="_blank">Lambda School's</a> 30 week coding Bootcamp for
              full-stack Web Development. We will learn many new skills such
              as full-stack JavaScript, Python, C, and Computer Science fundamentals.
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- github repos -->
  <div class="github">
    <a href="https://github.com/Riley-Brown" target="_blank">
      <h1>My Latest Repos</h1>
    </a>
    <hr class="design-line">
    <div class="container">
      <div class="row github-repos">

      </div>
    </div>
  </div>


  <!-- treehouse API -->
  <div class="treehouse-info">
    <h3 class="text-center mt-5 treehouse-h3">My latest achievements on TreeHouse</h3>
      <a href="https://teamtreehouse.com/rileybrown3" class="treehouse-link" target="_blank">See full profile</a>
  </div>

  <div class="container-fluid treehouse-wrapper">
    <div class="row treehouse-api-container">
      <div class="col-lg-3 col-md-6">
        <div class="card treehouse-card card-1 sr-left">
          <img class="card-img-top treehouse-pic-1" src="svg/spinner.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-text text-center treehouse-1"></h4>
            <p class="treehouse-p-1 text-center"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card treehouse-card  card-2 sr-bottom">
          <img class="card-img-top treehouse-pic-2 " src="svg/spinner.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title treehouse-2 text-center"></h4>
            <p class="treehouse-p-2 text-center"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card treehouse-card  card-3 sr-right">
          <img class="card-img-top treehouse-pic-3 " src="svg/spinner.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title treehouse-3 text-center"></h4>
            <p class="treehouse-p-3 text-center"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card treehouse-card  card-4 sr-right">
          <img class="card-img-top treehouse-pic-4 " src="svg/spinner.svg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title treehouse-4 text-center"></h4>
            <p class="treehouse-p-4 text-center"></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-copyright text-center footer">

    Coded by
    <a href="https://twitter.com/rileyB_96" target="_blank"> Riley Brown</a> © 2018
  </div>


  <!--scripts-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"
    integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="js/ls.bgset.min.js"></script>
  <script src="js/lazysizes.min.js"></script>
  <script src="js/smoothScroll.js"></script>
  <script src="js/main.js"></script>

  <script language="javascript" type="text/javascript">
  $(window).on('load', function() {
    $('.fullscreen-spinner').fadeOut();

  });
  </script>
</body>

</html>