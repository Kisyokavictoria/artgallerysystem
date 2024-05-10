<?php
include 'lib/sql.php'; // Include the Mysql class file
include 'lib/constants.php';


$mysql = new Mysql();
$art_result_drawing = $mysql->selectwhere('art','category','=',Art_Type::drawing);
$art_result_painting = $mysql->selectwhere('art','category','=',Art_Type::painting);
$art_result_sculpter = $mysql->selectwhere('art','category','=',Art_Type::sculpture);
$art_result_photography = $mysql->selectwhere('art','category','=',Art_Type::photography);
$art_result_printmaking= $mysql->selectwhere('art','category','=',Art_Type::printmaking);



$event_result = $mysql->selectall('exhibit');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>GO DOWN ARTS GALLERY</title>
  <meta name="title" content="GO DOWN ARTS GALLERY">
  <!-- <meta name="description" content="This is an eCommerce html template made by codewithsadee"> -->

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/land.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <button class="nav-toggle-btn" aria-label="toggle manu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" aria-label="true" class="close-icon"></ion-icon>
      </button>

      <a href="#" class="logo">GO DOWN ART</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="./index.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>About</a>
          </li>

          <li class="navbar-item">
            <a href="./artworks.php" class="navbar-link" data-nav-link>Artworks</a>
          </li>

          <li class="navbar-item">
            <a href="./events.php" class="navbar-link" data-nav-link>Events</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Contact</a>
          </li>

        </ul>

        <a href="#" class="navbar-action-btn">Log In</a>
      </nav>

      <div class="header-actions">

        <button class="action-btn" aria-label="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="action-btn user" aria-label="User">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="action-btn" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0
          </span>
        </button>

      </div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home" style="background-image: url('./assets/images/P19.jpg')">
        <div class="container">

          <h1 class="h1 hero-title">
            <span class="span">Immerse Yourself in</span>Artistry
          </h1>

          <p class="hero-text">Where Every Click Unveils a Masterpiece</p>

          <a href="./src/login.php" class="btn">Join us</a>


        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Top</span> categories
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/p30.jpg" width="330" height="300" loading="lazy" alt="photography" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="./photography.php" class="card-title">Photography</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/p12.jpg" width="330" height="300" loading="lazy" alt="Sculptures" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="./sculptures.php" class="card-title">Sculptures</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/P27.jpg" width="330" height="300" loading="lazy" alt="Paintings" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="./paintings.php" class="card-title">Paintings</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/p23.jpg" width="330" height="300" loading="lazy" alt="Drawings" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="./drawings.php" class="card-title">Drawings</a>
                </h3>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="category-card">

                <figure class="card-banner img-holder" style="--width: 330; --height: 300;">
                  <img src="./assets/images/p25.jpg" width="330" height="300" loading="lazy" alt="Printmaking" class="img-cover">
                </figure>

                <h3 class="h3">
                  <a href="./printmaking.php" class="card-title">Printmaking</a>
                </h3>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #OFFERS
      -->

      <section class="section offer" aria-label="offer">
        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Events</span>
          </h2>

          <ul class="grid-list">

            <li>
              <div class="offer-card has-bg-image img-holder" style="background-image: url('./assets/images/p3.jpg'); --width: 540; --height: 374;">

                <p class="card-subtitle">Selected Items. Online Only.</p>

                <h3 class="h3 card-title">
                  Hot Summer <span class="span">Deals</span>
                </h3>

                <a href="#" class="btn">Read More</a>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder" style="background-image: url('./assets/images/p1.jpg'); --width: 540; --height: 374;">

                <p class="card-subtitle">Treats & Grooming</p>

                <h3 class="h3 card-title">
                  Spoil your true <span class="span">love</span>
                </h3>

                <a href="#" class="btn">Read More</a>

              </div>
            </li>

            <li>
              <div class="offer-card has-bg-image img-holder" style="background-image: url('./assets/images/p2.jpg'); --width: 540; --height: 374;">

                <p class="card-subtitle">Our Brand You Will Love</p>

                <h3 class="h3 card-title">
                  New in this <span class="span">year</span>
                </h3>

                <a href="#" class="btn">Read More</a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #PRODUCT
      -->

      <section class="section product" id="shop" aria-label="product">

        <div class="container">

          <h2 class="h2 section-title">
            <span class="span">Best</span> Seller
          </h2>

          <ul class="grid-list">

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                  <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art" class="img-cover default">
                  <!-- <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art" class="img-cover hover"> -->

                  <button class="card-action-btn" aria-label="add to card" title="Add To Cart">
                    <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                  </button>
                </div>

                <div class="card-content">



                  <h3 class="h3">
                    <a href="#" class="card-title">art</a>
                  </h3>

                  <data class="card-price" value="15">$15.00</data>

                </div>

              </div>
            </li>
          </ul>

          <div class="more">
            <a href="#" style="color: #ed6335; text-align: center; font-size: 30px; margin-top: 60px;">Load more</a>
          </div>

        </div>
      </section>












      <!-- 
        - #About us
      -->



      <section class="cta has-bg-image" aria-label="cta" style="background-image: url('./assets/images/cta-bg.jpg')">
        <div class="container">

          <figure class="cta-banner">
            <img src="./assets/images/cta-banner.png" width="900" height="660" loading="lazy" alt="cat" class="w-100">
          </figure>

          <div class="cta-content">

            <img src="./assets/images/cta-icon.png" width="120" height="35" loading="lazy" alt="taste guarantee" class="img">

            <h2 class="h2 section-title"> Discover Our Story: Connecting Art with Hearts</h2>

            <p class="section-text">
              At Go down arts Gallery, we're dedicated to nurturing creativity and fostering community through innovative exhibitions and collaborative projects.
              We strive to ignite inspiration, spark dialogue, and celebrate the transformative power of art
            </p>

            <a href="#" class="btn">Find out more</a>

          </div>

        </div>
      </section>



    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">Go Down ART</a>

          <p class="footer-text">
            If you have any question, please contact us at <a href="mailto:support@gmail.com" class="link">support@gmail.com</a>
          </p>

          <ul class="contact-list">

            <li class="contact-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="address">
                30 Buttonwood St.Pataskala OH 43062
              </address>
            </li>

            <li class="contact-item">
              <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

              <a href="tel:+16234567891011" class="contact-link">(+1)-6234-56-789-1011</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Corporate</p>
          </li>

          <li>
            <a href="#" class="footer-link">Careers</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQs</a>
          </li>

          <li>
            <a href="#" class="footer-link">Vendors</a>
          </li>

          <li>
            <a href="#" class="footer-link">Affiliate Program</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Information</p>
          </li>

          <li>
            <a href="#" class="footer-link">Online Store</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Refund Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Shipping Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms of Service</a>
          </li>

          <li>
            <a href="#" class="footer-link">Track Order</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">Grooming</a>
          </li>

          <li>
            <a href="#" class="footer-link">Positive Dog Training</a>
          </li>

          <li>
            <a href="#" class="footer-link">Veterinary Services</a>
          </li>

          <li>
            <a href="#" class="footer-link">Petco Insurance</a>
          </li>

          <li>
            <a href="#" class="footer-link">Pet Adoption</a>
          </li>

          <li>
            <a href="#" class="footer-link">Resource Center</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 Made with ♥ by <a href="#" class="copyright-link">codewithsadee.</a>
        </p>

        <img src="./assets/images/payment.png" width="397" height="32" loading="lazy" alt="payment method" class="img">

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/script/land.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>