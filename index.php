
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
<!-- --themes---- -->

    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Timepicker Addon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">

  
   
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
    <header class="header"  id="head1">
      <video autoplay muted loop playsinline class="video-bg" loading="lazy">
        <source src="./assets/4.MP4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
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
            <li class="search-item"><a href="">Hot Malai</a> </li>
            <li class="search-item"><a href="">Burger</a></li>
            <li class="search-item"><a href="">Iftari Platter</a></li>
            <li class="search-item"><a href="">Pizza</a></li>
            <li class="search-item"><a href="">Cold Coffee</a></li>
           
          </ul>
          </div>

       
      </div>
  
      
      </nav>
      <div class="section__container header__container" id="home" >
        <!-- <div class="header__image" id="item1">
          <img src="assets/bg_header-removebg-preview.png" alt="Pizza">
         
        </div>
        <div class="header__image" id="item2">
          <img src="assets/bg_header-removebg-preview.png" alt="Pizza">
         
        </div>
        <div class="header__image" id="item3">
          <img src="assets/bg_header-removebg-preview.png" alt="Pizza">
         
        </div> -->
        <div class="header__image">
          <img src="assets/beans.png" alt="header" class="header__img_main" loading="lazy"/>
        </div>
        
        <div class="header__content">
            <h2>IT IS GOOD TIME FOR THE GREAT TASTE OF COFFEE AT</h2>
            <h1>Coffee <span>Club</span></h1>
        </div>
      </div>
    </header>
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
        <h4>FRESH & smooth</h4>
      </div>
    </section>
    <section class="section__container order__container" id="menu">
       <!-- coffe menu -->
      <div class="">
          <h3>Endlessly Delicious Coffee</h3>
          <h2 class="section__header">Grab & Indulge</h2>
          <p class="section__description ">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Tempore illo cumque praesentium aperiam molestias deleniti 
            
          </p>
          <div class="owl-carousel owl-theme carousel_slide">
            <div class="item ">
             <a href="category.php">
              <img src="assets/4.jpg" alt="order" />
              <h4>Burger</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minus, accusantium pariatur 
              </p>
              <!-- <button class="btn">ORDER NOW</button> -->
             </a>
            </div>
            <div class="item ">
             <a href="">
              <img src="https://img.freepik.com/free-photo/cup-coffee-with-heart-drawn-foam_1286-70.jpg?t=st=1741761633~exp=1741765233~hmac=7761cd52790043765c31e6cdbea4d694c91e2509a1ae7191f8dc6ac8a13c60aa&w=996" alt="order" />
              <h4>Coffee </h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minus, accusantium pariatur 
              </p>
              <!-- <button class="btn">ORDER NOW</button> -->
             </a>
            </div>
            <div class="item ">
              <a href="">
                <img src="assets/2.jpg" alt="order" />
              <h4>Platter</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minus, accusantium pariatur 
              </p>
              <!-- <button class="btn">ORDER NOW</button> -->
              </a>
            </div>
            <div class="item ">
             <a href="">
              <img src="assets/4.jpg" alt="order" />
              <h4>Burger</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minus, accusantium pariatur 
              </p>
              <!-- <button class="btn">ORDER NOW</button> -->
             </a>
            </div>
            <div class="item ">
             <a href="">
              <img src="https://img.freepik.com/free-photo/cup-coffee-with-heart-drawn-foam_1286-70.jpg?t=st=1741761633~exp=1741765233~hmac=7761cd52790043765c31e6cdbea4d694c91e2509a1ae7191f8dc6ac8a13c60aa&w=996" alt="order" />
              <h4>Coffee </h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minus, accusantium pariatur 
              </p>
              <!-- <button class="btn">ORDER NOW</button> -->
             </a>
            </div>
            <div class="item ">
              <a href="">
                <img src="assets/2.jpg" alt="order" />
              <h4>Platter</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minus, accusantium pariatur 
              </p>
              <!-- <button class="btn">ORDER NOW</button> -->
              </a>
            </div>
          </div>
      </div>
       <!-- coffe menu -->
        
    </section>
   
    <section class="reservation" id="contact">
      <div class="section__container reservation__container">
        <h3  data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1500">RESERVATION</h3>
        <h2 class="section__header"  data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="300"
        data-aos-offset="0">BOOK YOUR TABLE</h2>
        <!-- <form id="formID" action="" > -->
        <form id="formID" action="" method="POST" >
          <input type="text" name="name1" placeholder="NAME" data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="300"
          data-aos-offset="0"/>
          <input type="email" name="email" placeholder="EMAIL" data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="600"
          data-aos-offset="0"/>
          <input type="text" name="date" placeholder="DATE" data-aos="fade-zoom-in" id="datepickerIn"
          data-aos-easing="ease-in-back"
          data-aos-delay="800"
          data-aos-offset="0"/>
          <input type="text" id="timepicker" name="time" placeholder="TIME" data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="1000"
          data-aos-offset="0"/>
          <input type="number" name="number" placeholder="PEOPLE" data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="1200"
          data-aos-offset="0"/>
          <button class="btn" type="submit">book TABLE</button>
        </form>
  
      </div>
      <img
        src="assets/bg_header-removebg-preview.png"
        alt="reservation"
        class="reservation__bg-1"
      />
      <img
        src="./Images/1.JPG"
        alt="reservation"
        class="reservation__bg-2"
      />
    </section>
    <!-- <section class="section__container banner__container" id="special">
      <div class="banner__card">
        <p>TRY IT OUT TODAY</p>
        <h4>MOST POPULAR BURGER</h4>
      </div>
      <div class="banner__card">
        <p>TRY IT OUT TODAY</p>
        <h4>MORE FUN<br />MORE TASTE</h4>
      </div>
      <div class="banner__card">
        <p>TRY IT OUT TODAY</p>
        <h4>FRESH & CHILI</h4>
      </div>
    </section>

    <section class="section__container order__container" id="menu">
      <h3>ALWAYS TASTEY BURGER</h3>
      <h2 class="section__header">CHOOSE & ENJOY</h2>
      <p class="section__description">
        Whether you crave classic flavors or daring combinations, this is where
        your culinary journey begins. Indulge your cravings and savor every bite
        as you create your personalized burger experience with Burger Company.
      </p>
      <div class="order__grid">
        <div class="order__card">
          <img src="assets/order-1.png" alt="order" />
          <h4>Chicken Burger</h4>
          <p>
            Sink your teeth into the timeless perfection of our Chicken Burger,
            an experience that never goes out of style.
          </p>
          <button class="btn">ORDER NOW</button>
        </div>
        <div class="order__card">
          <img src="assets/order-2.png" alt="order" />
          <h4>Veggie Delight Burger</h4>
          <p>
            Embrace the vibrant flavors of our Veggie Delight Burger, a
            celebration of freshness and wholesome goodness.
          </p>
          <button class="btn">ORDER NOW</button>
        </div>
        <div class="order__card">
          <img src="assets/order-3.png" alt="order" />
          <h4>BBQ Bacon Burger</h4>
          <p>
            Indulge in a symphony of smoky, savory flavors with our BBQ Bacon
            Burger, grilled and topped with crispy bacon.
          </p>
          <button class="btn">ORDER NOW</button>
        </div>
      </div>
    </section>

    <section class="section__container event__container" id="event">
      <div class="event__content">
        <div class="event__image">
          <img src="assets/event.png" alt="event" />
        </div>
        <div class="event__details">
          <h3>Discover</h3>
          <h2 class="section__header">UPCOMING EVENTS</h2>
          <p class="section__description">
            From exclusive burger tastings and chef collaborations to community
            outreach initiatives and seasonal celebrations, there's always
            something special on the horizon at Burger Company. Be the first to
            know about our upcoming events, promotions, and gatherings as we
            continue to bring joy and flavor to our cherished customers. Join us
            in creating memorable moments and delicious memories together!
          </p>
        </div>
      </div>
    </section>

    <section class="reservation" id="contact">
      <div class="section__container reservation__container">
        <h3>RESERVATION</h3>
        <h2 class="section__header">BOOK YOUR TABLE</h2>
        <form action="/">
          <input type="text" placeholder="NAME" />
          <input type="email" placeholder="EMAIL" />
          <input type="date" placeholder="DATE" />
          <input type="time" placeholder="TIME" />
          <input type="number" placeholder="PEOPLE" />
          <button class="btn" type="submit">FIND TABLE</button>
        </form>
      </div>
      <img
        src="assets/reservation-bg-1.png"
        alt="reservation"
        class="reservation__bg-1"
      />
      <img
        src="assets/reservation-bg-2.png"
        alt="reservation"
        class="reservation__bg-2"
      />
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__logo">
          <img src="assets/logo-white.png" alt="logo" />
        </div>
        <div class="footer__content">
          <p>
            Welcome to Burger Company, where passion for exceptional food and
            genuine hospitality come together. Our story is one of dedication to
            crafting the perfect burger experience, from sourcing the finest
            ingredients to delivering unparalleled taste in every bite.
          </p>
          <div>
            <ul class="footer__links">
              <li>
                <span><i class="ri-map-pin-2-fill"></i></span>
                MG Road, Bangalore, 500089
              </li>
              <li>
                <span><i class="ri-mail-fill"></i></span>
                info@burgerhouse.com
              </li>
            </ul>
            <div class="footer__socials">
              <a href="#"><i class="ri-facebook-circle-fill"></i></a>
              <a href="#"><i class="ri-instagram-fill"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
              <a href="#"><i class="ri-whatsapp-fill"></i></a>
            </div>
          </div>

        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer> -->
    
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
    <script>
        $('.slider').slick({
    autoplay: true,
    draggable: true,
    arrows: false,
    dots: true,
    fade: true,
    speed: 2000,
    infinite: true,
    cssEase: 'ease',
    touchThreshold: 100
  })
    </script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
   
      
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Timepicker Addon JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
  <script>
      $(document).ready(function () {
          $("#datepickerIn").datepicker({
              dateFormat: 'DD, dd MM'
            
          });
         
          $("#timepicker").timepicker({
            timeFormat: 'hh:mm tt',  // 12-hour format with AM/PM
                interval: 15,            // Time interval of 15 minutes
                minTime: '12:00am',      // Ensure 12:00 is selectable
                maxTime: '11:45pm',      // Last selectable time
                defaultTime: '12:00pm',  // Default time shown
                startTime: '12:00am',
                dynamic: false,
                dropdown: true,          // Enable dropdown list
                scrollbar: true           // Enable scrollable list
          });
         
      });
  </script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const searchIcon = document.getElementById("searchIcon");
    const searchPopup = document.getElementById("searchPopup");
    const closePopup = document.getElementById("closePopup");
    const searchInput = document.getElementById("searchInput");
    const searchResults = document.getElementById("searchResults");
    const searchItems = document.querySelectorAll(".search-item");

    // Initially hide search results
    searchResults.style.display = "none";

    // Open popup
    searchIcon.addEventListener("click", () => {
        searchPopup.classList.add("active");
        searchInput.focus();
        searchResults.style.display = "none"; // Ensure results are hidden when popup opens
    });

    // Close popup
    closePopup.addEventListener("click", () => {
        searchPopup.classList.remove("active");
        searchInput.value = "";
        searchResults.style.display = "none";
        resetSearchResults();
    });

    // Close on ESC key
    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            searchPopup.classList.remove("active");
            searchInput.value = "";
            searchResults.style.display = "none";
            resetSearchResults();
        }
    });

    // Close popup when clicking outside the box
    searchPopup.addEventListener("click", (event) => {
        if (event.target === searchPopup) {
            searchPopup.classList.remove("active");
            searchInput.value = "";
            searchResults.style.display = "none";
            resetSearchResults();
        }
    });

    // Search functionality (Only show results if found)
    searchInput.addEventListener("input", () => {
        const query = searchInput.value.toLowerCase();
        let hasResults = false;

        searchItems.forEach(item => {
            if (item.textContent.toLowerCase().includes(query)) {
                item.style.display = "block";
                hasResults = true;
            } else {
                item.style.display = "none";
            }
        });

        // Only show search results if there's a match
        searchResults.style.display = hasResults ? "block" : "none";
    });

    // Reset search results
    function resetSearchResults() {
        searchItems.forEach(item => item.style.display = "block");
    }
});

</script>
  </body>
</html>
