<?php

include('region_pricing.php');
ini_set('display_errors', 0);

?>

<!doctype html>
<html lang="zxx">


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/31-05-2021/secttore-liberty-demo_Free/1583613375/web/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Sep 2025 12:01:44 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IRONCLAD | Contact</title>
  <!--/fonts-->
  <link href="http://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&amp;display=swap"
    rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0 pt-lg-0">
        <!-- <h1> <a class="navbar-brand" href="index.html">
              Sectt<i class="fas fa-hard-hat"></i>re
            </a></h1> -->
        <a class="navbar-brand" href="#index.php">
          <img src="assets/images/logo-bg.png" alt="Your logo" title="Your logo" style="height:35px;" />
        </a>
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-lg-auto ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          <!--/search-right-->
          <!-- <div class="search-right">
                      <div id="wrap">
                        <form action="#" autocomplete="on">
                          <input id="search" name="search" type="text" placeholder="Search here..."><input id="search_submit"
                            value="Rechercher" type="submit">
                        </form>
                      </div>
                  </div> -->
          <!--//search-right-->
          <div class="top-quote mr-lg-3 mt-lg-0 mr-lg-4">
            <a href="tel:+234 703 404 2956" class="btn btn-style btn-white btn-primary">Call Us: +234 703 404 2956</a>
          </div>
        </div>
        <!-- toggle switch for light and dark theme -->

        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--//header-->
  <!--/inner-page-->
  <div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
  <div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

  </div>
  <!-- contact1 -->
  <section class="w3l-contact-1 py-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
      <div class="container">
        <div class="row">
          <div class="contactct-fm-text text-left col-md-4 mt-5">
            <div class="cont-top mt-5">
              <div class="cont-left text-center">
                <span class="fas fa-phone-alt"></span>
              </div>
              <div class="cont-right">
                <h5>Phone number</h5>
                <p><a href="tel:+234 703 404 2956">+234 703 404 2956</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fas fa-envelope-open-text"></span>
              </div>
              <div class="cont-right">
                <h5>Send Email</h5>
                <p><a href="" class="mail"><span class="__cf_email__" data-cfemail="1162747265657e637420517c70787d3f727e7c">info@ironclad.com</span></a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fas fa-map-marker-alt"></span>
              </div>
              <div class="cont-right">
                <h5>Office Address</h5>
                <p class="pr-lg-5">43, Olutoye Crescent, Afra Estate, Adeniyi Jones.<br>Lagos Nigeria.</p>
              </div>
            </div>
          </div>
          <div class="contactct-fm map-content-9 col-md-8">
            <div class="header-title text-center">
              <h6 class="title-subhny"><span>contact Us</span></h6>
              <h3 class="title-w3l mb-2">Get In Touch</h3>
              <p class="mb-sm-5 mb-4">Tomorrow's infrastructure, designed today with precision and a promise of unparalleled.
              </p>
            </div>
            <form action="proc-contact.php" class="pt-lg-4" method="post">


              <div>

                <div>
                  <?php if ($info == 'accepted') { ?>
                    <div class="alert alert-success">Accepted</div>
                </div>
              <?php } ?>

              <div>
                <?php if ($info == 'error') { ?>
                  <div class="alert alert-danger"><?php echo $correction ?></div>
              </div>
            <?php } ?>

              </div>

              <div class="twice-two">
                <input type="text" class="form-control" name="fullname" id="w3lName" placeholder="Name">
                <input type="email" class="form-control" name="email" id="w3lSender" placeholder="Email">
                <input type="number" class="form-control" name="number" id="w3lPhone" placeholder="Phone">
              </div>
              <textarea name="msg" class="form-control" id="w3lMessage" placeholder="Message"></textarea>
              <div class="text-lg-center">
                <button type="submit" class="btn btn-primary btn-style mt-lg-5 mt-4">Send Message</button>
              </div>
            </form>
          </div>

        </div>
      </div>
      <!-- <div class="row contact-view mt-5 pt-lg-5">
          <div class="col-lg-4 col-md-6 cont-details">
            <div class="contactct-fm-text text-left">
              <h6 class="title-subhny"><span>Find Us</span></h6>
              <h3 class="title-w3l mb-5">London
                Office</h3>
              <div class="cont-top">
                <div class="cont-left text-center">
                  <span class="fas fa-phone-alt"></span>
                </div>
                <div class="cont-right">
                  <h5>Phone number</h5>
                  <p><a href="tel:+(21) 255 088 4943">+(21) 255 088 4943</a></p>
                </div>
              </div>
              <div class="cont-top margin-up">
                <div class="cont-left text-center">
                  <span class="fas fa-envelope-open-text"></span>
                </div>
                <div class="cont-right">
                  <h5>Send Email</h5>
                  <p><a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#1c6f797f6868736e792d5c717d7570327f7371" class="mail"><span class="__cf_email__" data-cfemail="1162747265657e637420517c70787d3f727e7c">[email&#160;protected]</span></a></p>
                </div>
              </div>
              <div class="cont-top margin-up">
                <div class="cont-left text-center">
                  <span class="fas fa-map-marker-alt"></span>
                </div>
                <div class="cont-right">
                  <h5>Office Address</h5>
                  <p class="pr-lg-5">Address here, 434 Food Honey street,<br> London, UK - 62617.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 cont-details mt-lg-0 mt-5">
            <div class="contactct-fm-text text-left">
              <h6 class="title-subhny"><span>Find Us</span></h6>
              <h3 class="title-w3l mb-5">Newyork
                Office</h3>
              <div class="cont-top">
                <div class="cont-left text-center">
                  <span class="fas fa-phone-alt"></span>
                </div>
                <div class="cont-right">
                  <h5>Phone number</h5>
                  <p><a href="tel:+(21) 255 088 4943">+(21) 255 088 4943</a></p>
                </div>
              </div>
              <div class="cont-top margin-up">
                <div class="cont-left text-center">
                  <span class="fas fa-envelope-open-text"></span>
                </div>
                <div class="cont-right">
                  <h5>Send Email</h5>
                  <p><a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#dba8beb8afafb4a9bee99bb6bab2b7f5b8b4b6" class="mail"><span class="__cf_email__" data-cfemail="d2a1b7b1a6a6bda0b7e092bfb3bbbefcb1bdbf">[email&#160;protected]</span></a></p>
                </div>
              </div>
              <div class="cont-top margin-up">
                <div class="cont-left text-center">
                  <span class="fas fa-map-marker-alt"></span>
                </div>
                <div class="cont-right">
                  <h5>Office Address</h5>
                  <p class="pr-lg-5">Address here, 434 Food Honey street,<br> London, UK - 62617.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 cont-details mt-lg-0 mt-5">
            <div class="contactct-fm-text text-left">
              <h6 class="title-subhny"><span>Find Us</span></h6>
              <h3 class="title-w3l mb-5">Berlin Office</h3>
              <div class="cont-top">
                <div class="cont-left text-center">
                  <span class="fas fa-phone-alt"></span>
                </div>
                <div class="cont-right">
                  <h5>Phone number</h5>
                  <p><a href="tel:+(21) 255 088 4948">+(21) 255 088 4948</a></p>
                </div>
              </div>
              <div class="cont-top margin-up">
                <div class="cont-left text-center">
                  <span class="fas fa-envelope-open-text"></span>
                </div>
                <div class="cont-right">
                  <h5>Send Email</h5>
                  <p><a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#d2a1b7b1a6a6bda0b7e192bfb3bbbefcb1bdbf" class="mail"><span class="__cf_email__" data-cfemail="7e0d1b1d0a0a110c1b4d3e131f1712501d1113">[email&#160;protected]</span></a></p>
                </div>
              </div>
              <div class="cont-top margin-up">
                <div class="cont-left text-center">
                  <span class="fas fa-map-marker-alt"></span>
                </div>
                <div class="cont-right">
                  <h5>Office Address</h5>
                  <p class="pr-lg-5">Address here, 434 Food Honey street,<br> London, UK - 62617.</p>
                </div>
              </div>
            </div>
          </div>
        </div> -->
  </section>
  <div class="map-content-9">
    <div class="map-iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3359.449150394792!2d3.3418979741327517!3d6.619430222042894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93fcbccb2e75%3A0x54b1b9cd1190f2a2!2sAFRA%20Estate!5e1!3m2!1sen!2sng!4v1758210000355!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <!-- /contact1 -->
  <div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

  </div>
  <!-- footer17 -->
  <footer class="footer-17">
    <div class="footer17_sur py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="row footer17-top">
          <div class="col-lg-4 footer17-top-left2_sur pr-lg-5">
            <h6>About Us</h6>
            <p>At Ironclad Prime Alliance Limited, we lead with purpose and precision. We are a forward-thinking engineering solutions company committed to solving complex infrastructure and systems challenges with innovation, quality, and expertise.</p>
            <a href="#get" class="btn btn-style btn-primary mt-lg-5 mt-4">Contact Us</a>
          </div>
          <div class="col-lg-4 footer17-top-left1_sur mt-lg-0 my-5">
            <h6>Quick Links</h6>
            <div class="footer-listw3-grids">
              <ul class="footer-listw3">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>

              </ul>
              <ul class="footer-listw3">
                <li><a href="#privacy">Privacy Policy</a></li>
                <li><a href="#term">Terms of use</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 footer17-top-left4_sur footerw3-instagram pl-lg-5 ">
            <h6>Social Media</h6>
            <ul class="footers-17_social">
              <li><a href="#url" class="twitter"><span class="fab fa-twitter"></span></a></li>
              <li><a href="#url" class="facebook"><span class="fab fa-facebook-f"></span></a></li>
              <li><a href="#url" class="linkedin"><span class="fab fa-linkedin-in"></span></a></li>
              <li><a href="#url" class="instagram"><span class="fab fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyright text-center">
        <div class="container">
          <div class="container">
            <p class="copy-footer-29">© 2025 IRONCLAD. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <i class="fas fa-long-arrow-alt-up"></i>
      </button>
      <script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->
    </div>
  </footer>
  <!-- //footer17 -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function() {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

  <script>
    (function() {
      function c() {
        var b = a.contentDocument || a.contentWindow.document;
        if (b) {
          var d = b.createElement('script');
          d.innerHTML = "window.__CF$cv$params={r:'97f7fbf49e25ef15',t:'MTc1NzkzNzg0MQ=='};var a=document.createElement('script');a.src='../../../../../../cdn-cgi/challenge-platform/h/g/scripts/jsd/f78657f80e4b/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
          b.getElementsByTagName('head')[0].appendChild(d)
        }
      }
      if (document.body) {
        var a = document.createElement('iframe');
        a.height = 1;
        a.width = 1;
        a.style.position = 'absolute';
        a.style.top = 0;
        a.style.left = 0;
        a.style.border = 'none';
        a.style.visibility = 'hidden';
        document.body.appendChild(a);
        if ('loading' !== document.readyState) c();
        else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
        else {
          var e = document.onreadystatechange || function() {};
          document.onreadystatechange = function(b) {
            e(b);
            'loading' !== document.readyState && (document.onreadystatechange = e, c())
          }
        }
      }
    })();
  </script>
</body>


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/31-05-2021/secttore-liberty-demo_Free/1583613375/web/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Sep 2025 12:01:44 GMT -->

</html>