<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- ------ -->
  <!--aos-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<!-- jQuery -->
<script src="lightbox-plus-jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Bootstrap JS and dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- ------ -->
    <link rel="stylesheet" href="styles.css" />
    <title>Coffee Club</title>
    <link rel="icon" href="assets/favicon.png" />
  </head>
  <body>
       <!-- Sticky Header -->
       <header class="header" style="height:400px">
        <video autoplay muted loop playsinline class="img-bg" loading="lazy">
          <source src="./assets/11.MP4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <!-- <img src="./Images/5.JPG" alt="" class="img-bg"> -->
        <nav>
          <div class="nav__header">
            <div class="nav__logo">
              <a href="index.php">
                <img
                  src="assets/logo.png"
                  alt="logo"
                  class="nav__logo-dark"
                />
                <img
                  src="assets/logo.png"
                  alt="logo"
                  class="nav__logo-white"
                />
              </a>
            </div>
            <div class="nav__menu__btn" id="menu-btn">
              <i class="ri-menu-line"></i>
            </div>
            
          </div>
         
          <ul class="nav__links" id="nav-links">
            <li><a href="index.php">HOME</a></li>
            <li><a href="menu.php">menu</a></li>
            <li><a href="about.php">About</a></li>
            <!-- <li><a href="#menu">Contact</a></li> -->
            <li><a href="review.php">review</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li class="search-icon" id="searchIcon">
              <i class="fa fa-search" aria-hidden="true"></i>
            </li>
          </ul>
          <!-- Search Icon -->
      <!-- Search Popup -->
      <div class="search-popup" id="searchPopup">
          <div class="search-box">
             <div class="input_search">
              <input type="text" placeholder="Search here..." id="searchInput">
              <button id="closePopup">✖</button>
             </div>
           <!-- Predefined Search Results -->
            <ul class="search-results" id="searchResults">
              <li class="search-item">Hot Malai</li>
              <li class="search-item">Burger</li>
              <li class="search-item">Iftari Platter</li>
              <li class="search-item">Pizza</li>
              <li class="search-item">Cold Coffee</li>
              <li class="search-item">Mojijo</li>
              <li class="search-item">Cake</li>
            </ul>
            </div>
  
         
      </div>
    
        
        </nav>
        <div class="section__container header__container" id="home" style=" grid-template-columns: repeat(1, 1fr);
          align-items: center;">
  
          <div class="header__content m-auto text-center">
             
              <h1 class="ex_h1">WHO WE ARE</h1>
          </div>
        </div>
      </header>
      <!-- Sidebar Filter -->
   
    <section class="section__container event__container pt-5" id="event">
        <div class="event__content">
          <div class="event__image">
            <img src="assets/1.jpg" alt="event" />
          </div>
          <div class="event__details">
            <h3>About</h3>
            <h2 class="section__header">Coffee Club</h2>
            <p class="section__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorum atque reprehenderit perspiciatis ipsum laborum, deleniti nam obcaecati laudantium incidunt?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorum atque reprehenderit perspiciatis ipsum laborum, deleniti nam obcaecati laudantium incidunt?
            </p>
          </div>
        </div>
      </section>
      <section class="section__container banner__container" id="special" style="margin: 5% auto;">
        <div class="banner__card" data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="400"
        data-aos-offset="0">
          <p>TRY IT OUT TODAY</p>
          <h4>MOST POPULAR Coffee</h4>
        </div>
        <div class="banner__card" data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="900"
        data-aos-offset="0">
          <p>TRY IT OUT TODAY</p>
          <h4>MORE FUN<br />MORE TASTE</h4>
        </div>
        <div class="banner__card" data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="1400"
        data-aos-offset="0">
          <p>TRY IT OUT TODAY</p>
          <h4>FRESH & CHILI</h4>
        </div>
      </section>
    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__logo">
          <!-- <img src="assets/logo.png" alt="logo" /> -->
         <h3 class="for_footerBg">Coffee Club</h3>
        </div>
        <div class="footer__content">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus exercitationem asperiores rerum neque non perferendis, illo harum? Dignissimos, nostrum obcaecati. neque non perferendis, illo harum? Dignissimos, nostrum obcaecati.
          </p>
          <div>
            <ul class="footer__links">
              <li>
                <span><i class="ri-map-pin-2-fill"></i></span>
                Bir-Bikrom Yamin Complex, 3rd floor, Kumarpara, <br>
                Sylhet, Bangladesh
              </li>
              <li>
                <span><i class="ri-mail-fill"></i></span>
                <a href="mailto:thecoffeeclub.syl@gmail.com" style="color:#fff">
                  thecoffeeclub.syl@gmail.com</a>
              </li>
            </ul>
            <div class="footer__socials">
              <a href="https://www.facebook.com/thecoffeeclubbd"><i class="ri-facebook-circle-fill"></i></a>
              <a href="https://www.instagram.com/thecoffeeclubbd/"><i class="ri-instagram-fill"></i></a>
              <a href="tel:01714-121313"><i class="ri-phone-line"></i></a>
              <a href="#"><i class="ri-whatsapp-fill"></i></a>
            </div>
          </div>

        </div>
      </div>
      <div class="footer__bar">
        <footer class="footer__bd" style="display: flex;flex-direction: column;align-items: center;justify-content: center;">
          <p style="">Design & Developed By <a href="https://smithitbd.com/" style="text-decoration: none;color: #F9C329;font-weight: 700;font-size: 15px;margin-left: 5px;">Smith IT</a></p>
        </footer>
      </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <script>
      // start
      $(document).ready(function() {
        $('.carousel-banner').owlCarousel({
          autoplayHoverPause: true,
    
          autoplay: true,
          autoplayTimeout: 5000,
          smartSpeed: 1000,
          dots: false,
          loop: true,
          margin: 10,
    
          nav: false,
    
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            1000: {
              items: 1
            }
          }
    
        });
        $('.carousel-one').owlCarousel({
          autoplayHoverPause: true,
          autoplay: true,
          dots: false,
          loop: true,
          margin: 10,
          // navText: [$('.owl-prev').php(), $('.owl-next').php()],
          nav: true,
    
          responsive: {
            0: {
              items: 2
            },
            600: {
              items: 2
            },
            1000: {
              items: 4
            }
          }
    
        });
    
        $('.carousel-two').owlCarousel({
          autoplayHoverPause: true,
          autoplay: true,
          loop: true,
          margin: 10,
          nav: true,
          dots: false,
          responsive: {
            0: {
              items: 2
            },
            600: {
              items: 3
            },
            1000: {
              items: 3
            }
          }
        });
        $('.carousel-three').owlCarousel({
          autoplayHoverPause: true,
          autoplay: true,
          loop: true,
          margin: 10,
          nav: true,
          dots: false,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1000: {
              items: 2
            }
          }
        });
        $('.carousel-four').owlCarousel({
          autoplayHoverPause: true,
          autoplay: true,
          loop: true,
          margin: 10,
          nav: true,
          dots: false,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 3
            },
            1000: {
              items: 5
            }
          }
        });
    
        $('.carousel-five').owlCarousel({
          autoplayHoverPause: true,
          autoplay: true,
          loop: true,
          margin: 10,
          nav: true,
          dots: false,
          responsive: {
            0: {
              items: 2
            },
            600: {
              items: 2
            },
            1000: {
              items: 3
            }
          }
        });
        $('.two').owlCarousel({
          autoplayHoverPause: true,
          autoplay: true,
          loop: true,
          margin: 10,
          nav:true,
          dots: false,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            1000: {
              items: 3
            }
          }
        });
    
      });
    </script>
    
    <script>
      const items = document.querySelectorAll(".menu-item");
      let index = 0;
      
      function showNextItem() {
          items.forEach((item, i) => {
              item.style.animation = "none";
              item.style.opacity = "0";
              if (i === index) {
                  item.style.animation = "bounceIn 1s ease-in-out";
                  item.style.opacity = "1";
              }
          });
          index = (index + 1) % items.length;
      }
      
      setInterval(showNextItem, 2000);
  </script>
    <!-- Aos  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- for search -->
    <script>
      $(document).ready(function(){
        var owl = $(".carousel_slide");
        
        owl.owlCarousel({
          loop: false,
          margin: 10,
          nav: true,
          dots: false,
          dotsEach: 3, // Show only 3 dots at a time
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true,
          lazyLoad: true, // Enable lazy loading
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            1000: {
              items: 3
            }
          },
          onInitialized: checkItems, // Check items when initialized
          onChanged: checkItems // Check items whenever the carousel changes
        });
    
        function checkItems() {
          var totalItems = owl.find('.owl-item').length;
          var navButtons = owl.find('.owl-nav button');
    
          // Disable nav buttons if no items
          if (totalItems <= 1) {
            navButtons.prop('disabled', true); // Disable navigation buttons
          } else {
            navButtons.prop('disabled', false); // Enable navigation buttons
          }
        }
      });
    </script>
   
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  
  </body>
</html>
