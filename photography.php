<?php
include 'lib/sql.php'; // Include the Mysql class file
include 'lib/constants.php';


$mysql = new Mysql();
$art_result_photography = $mysql->selectwhere('art','category','=',Art_Type::photography);

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
    <link
        href="https://fonts.googleapis.com/css2?family=Bangers&family=Carter+One&family=Nunito+Sans:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body id="top">


    <header class="header" data-header style="background-color: gray;">
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

                    <span class="btn-badge">0</span>
                </button>

            </div>

        </div>
    </header>






    <!-- 
        - #PRODUCT
      -->


      <section class="product">
    <?php
    // Retrieve data from the 'art' table


    // Check if any artworks were retrieved
    if ($art_result_photography) {
      // Loop through each artwork and generate HTML for product container
      while ($artwork = mysqli_fetch_assoc($art_result_photography)) {
    ?>
        <div class="product-container" style="margin-top:300px;">
          <a href="http://localhost/art/src/login.php">
            <div class="product-image">
              <img src="<?php echo $artwork['art_url']; ?>" alt="<?php echo $artwork['name']; ?>">
            </div>
            <div class="product-details">
              <h2><?php echo $artwork['name']; ?></h2>
              <div class="additional-details">
                <p><i><b>Artist name:</b></i> <?php echo $artwork['artist']; ?></p>
                <p><i><b>Price:</b></i> $<?php echo $artwork['price']; ?></p>
              </div>
              
            </div>
          </a>
        </div>
    <?php
      }
    } else {
      echo "<p>No artworks found.</p>";
    }
    ?>
  </section>
  


  

  <script src="../assets/script/app.js"></script>


































    <!-- <section class="section product" id="shop" aria-label="product">
        <div class="container">


        <div class="title-wrapper">
                <h2 class="h2 section-title">Popular Products</h2>

                <ul class="filter-btn-list">

                    <li class="filter-btn-item">
                        <a href="./artworks.php" class="filter-btn active">All Products</a>
                    </li>

                    <li class="filter-btn-item">
                    <a href="./photography.php" class="filter-btn active">Photography</a>
                    </li>

                    <li class="filter-btn-item">
                    <a href="./sculptures.php" class="filter-btn active">Sculptures</a>
                    </li>

                    <li class="filter-btn-item">
                    <a href="./paintings.php" class="filter-btn active">Paintings</a>
                    </li>

                    <li class="filter-btn-item">
                    <a href="./drawings.php" class="filter-btn active">Drawings</a>
                    </li>
                    <li class="filter-btn-item">
                    <a href="./printmaking.php" class="filter-btn active">Printmaking</a>
                    </li>

                </ul>
            </div>



        <h2 class="h2 section-title" style="margin-top: 100px;">
                <span class="span">Photography</span>
            </h2>
            

            <ul class="grid-list">

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art"
                                class="img-cover default">
                            <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art"
                                class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
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

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P31.jpg" width="360" height="360" loading="lazy"
                                alt="Purus consequat congue sit" class="img-cover default">
                            <img src="./assets/images/product-2_0.jpg" width="360" height="360" loading="lazy"
                                alt="Purus consequat congue sit" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                           

                            <h3 class="h3">
                                <a href="#" class="card-title">Purus consequat congue sit</a>
                            </h3>

                            <data class="card-price" value="45">$45.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P32.jpg" width="360" height="360" loading="lazy"
                                alt="Morbi vel arcu scelerisque" class="img-cover default">
                            <img src="./assets/images/product-3_0.jpg" width="360" height="360" loading="lazy"
                                alt="Morbi vel arcu scelerisque" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                           
                            <h3 class="h3">
                                <a href="#" class="card-title">Morbi vel arcu scelerisque</a>
                            </h3>

                            <data class="card-price" value="45">$45.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art"
                                class="img-cover default">
                            <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art"
                                class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
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

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P33.jpg" width="360" height="360" loading="lazy"
                                alt="Morbi vel arcu scelerisque" class="img-cover default">
                            <img src="./assets/images/product-4_0.jpg" width="360" height="360" loading="lazy"
                                alt="Morbi vel arcu scelerisque" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                           

                            <h3 class="h3">
                                <a href="#" class="card-title">Morbi vel arcu scelerisque</a>
                            </h3>

                            <data class="card-price" value="49">$49.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P34.jpg" width="360" height="360" loading="lazy"
                                alt="Morbi vel arcu scelerisque" class="img-cover default">
                            <img src="./assets/images/product-5_0.jpg" width="360" height="360" loading="lazy"
                                alt="Morbi vel arcu scelerisque" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                            
                            <h3 class="h3">
                                <a href="#" class="card-title">Morbi vel arcu scelerisque</a>
                            </h3>

                            <data class="card-price" value="85">$85.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P35.jpg" width="360" height="360" loading="lazy"
                                alt="Nam justo libero porta ege" class="img-cover default">
                            <img src="./assets/images/product-6_0.jpg" width="360" height="360" loading="lazy"
                                alt="Nam justo libero porta ege" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                          
                            <h3 class="h3">
                                <a href="#" class="card-title">Nam justo libero porta ege</a>
                            </h3>

                            <data class="card-price" value="85">$85.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P40.jpg" width="360" height="360" loading="lazy"
                                alt="Nam justo libero porta ege" class="img-cover default">
                            <img src="./assets/images/product-7_0.jpg" width="360" height="360" loading="lazy"
                                alt="Nam justo libero porta ege" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                           

                            <h3 class="h3">
                                <a href="#" class="card-title">Nam justo libero porta ege</a>
                            </h3>

                            <data class="card-price" value="85">$85.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P41.jpg" width="360" height="360" loading="lazy"
                                alt="Etiam commodo leo sed" class="img-cover default">
                            <img src="./assets/images/product-8_0.jpg" width="360" height="360" loading="lazy"
                                alt="Etiam commodo leo sed" class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
                                <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>
                            </button>
                        </div>

                        <div class="card-content">

                           
                            <h3 class="h3">
                                <a href="#" class="card-title">Etiam commodo leo sed</a>
                            </h3>

                            <data class="card-price" value="55">$55.00</data>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art"
                                class="img-cover default">
                            <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art"
                                class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
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

               
                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art"
                                class="img-cover default">
                            <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art"
                                class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
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

                <li>
                    <div class="product-card">

                        <div class="card-banner img-holder" style="--width: 360; --height: 360;">
                            <img src="./assets/images/P7.jpg" width="360" height="360" loading="lazy" alt="art"
                                class="img-cover default">
                            <img src="./assets/images/P9.jpg" width="360" height="360" loading="lazy" alt="art"
                                class="img-cover hover">

                            <button class="card-action-btn" aria-label="add to card" title="Add To Card">
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


 -->


    <!-- 
    - #FOOTER
  -->

    <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')">

        <div class="footer-top section">
            <div class="container">

                <div class="footer-brand">

                    <a href="#" class="logo">Kitter</a>

                    <p class="footer-text">
                        If you have any question, please contact us at <a href="mailto:support@gmail.com"
                            class="link">support@gmail.com</a>
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

                <img src="./assets/images/payment.png" width="397" height="32" loading="lazy" alt="payment method"
                    class="img">

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