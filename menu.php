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
<link rel="stylesheet" href="menu.css" />
     <link rel="stylesheet" href="styles.css" />
    <title>Coffee Club</title>
    <link rel="icon" href="assets/favicon.png" />
  </head>
  <style>
.menu-item img {
    width: 200px;
    height: 200px;
}
 
/* Hero Section */
.hero {
    position: relative;
    text-align: center;
    color: white;
    background: url('banner.jpg') no-repeat center center/cover;
    padding: 80px 20px;
}
.hero h1 {
    font-size: 2.5rem;
    color: #C2A080;
    margin-bottom: 10px;
}
.hero p {
    font-size: 1.2rem;
}

/* Sticky Header */
/* .header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #333;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    z-index: 1000;
}
.header .search-bar {
    flex-grow: 1;
    margin: 0 20px;
}
.header .cart-icon {
    cursor: pointer;
} */
.menu__section_grid{
    /* display: grid;
    grid-template-columns:26% 72%;
    gap: 2%; */
}
/* Sidebar Filter */
.sidebar {
    /* position: fixed;
    left: 0;
    top: 80px; */
    width: 100%;
    margin: 1rem auto;
    max-width: 1170px;
    background: white;
    padding: 20px;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
    /* height: calc(100vh - 80px); */
    overflow-y: auto;
}
.sidebar h3 {
    margin-bottom: 15px;
}
.sidebar input, .sidebar select {
    width: 100%;
    /* margin-bottom: 10px; */
    padding: 5px;
    border-radius: 3px;
}

.sidebar input, .sidebar select:focus{
    outline: 0;
    border: 1px solid #C2A080;
}
.sidebar label {
    margin-bottom: 0;
    color: #000;
    font-weight: 700;
    padding: 0 7px 0 0;
    font-size: 13px;
   
}
/* Grid Layout */

/* @media(min-width:991px){
    .menu {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 10px;
    padding:0 20px 10px 20px;
     
}
}
@media(max-width:991px){
    .menu {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    padding:0 20px 10px 20px;
    
}
} */
.menu-item {
    background: white;
    padding: 15px;
    border-radius: 5px;
    text-align: center;
    /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); */
}
.menu-item img {
    width: 100%;
    /* border-radius: 10px; */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);

}
.menu-item h2 {
    font-size: 1.4rem;
    color: #C2A080;
    margin: 5% auto;
}

.menu-item p {
    font-size: 1rem;
    color: #666;
}
.menu-item span {
    display: block;
    font-size: 1.2rem;
    font-weight: bold;
    margin: 10px 0;
}
.menu-item .add-to-cart {
    background: #ff6600;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 5px;
}

.hero{
    width:100%;
    height: 100%;
    background-image: url('./images/2.JPG');
    background-size: cover;
}

  </style>
<body style="background-color: #F7F6F1;">
     <!-- Hero Section -->
    

     <!-- Sticky Header -->
     <header class="header" style="height:400px">
      <video autoplay muted loop playsinline class="img-bg" loading="lazy">
        <source src="./assets/7.MP4" type="video/mp4">
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
           
            <h1 class="ex_h1">Explore  Menu</h1>
        </div>
      </div>
    </header>
    <!-- Sidebar Filter -->
   

    <section class="menu my-5">
      <aside class="sidebar w-100">
          <div class="row">
              <!-- <div class="side__col col-lg-6">
                  <label for="category" class="price_range">Sort By:</label>
                  <select id="category" class="category-filter w-50">
                      <option value="all">All</option>
                      <option value="burger">Burger</option>
                      <option value="Popular">Popular</option>
                      <option value="Offer">Offer</option>
                  </select>
              </div> -->
              <div class=" col-lg-6">
                  <label for="price" class="price_range">Max Price: BDT <span id="price-value">5000</span></label>
                  <input type="range" id="price" class="price-filter w-50" min="5" max="5000" step="1" value="5000">
              </div>
          </div>
      </aside>
      <div class="flex" id="menuContainer">
          <div class="box"  data-price="300">
              <div class="img-container">
                  <img src="Images/1.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Coffee Espresso</h2>
              <h3>BDT 210</h3>
          </div>
          <div class="box"  data-price="300">
              <div class="img-container">
                  <img src="Images/2.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Hot Malai</h2>
              <h3>BDT 500</h3>
          </div>
          <div class="box"  data-price="100">
              <div class="img-container">
                  <img src="Images/3.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Coffee Espresso</h2>
              <h3>BDT 210</h3>
          </div>
          <div class="box"  data-price="210">
              <div class="img-container">
                  <img src="Images/4.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Coffee Espresso</h2>
              <h3>BDT 210</h3>
          </div>
          <div class="box"  data-price="300">
              <div class="img-container">
                  <img src="Images/1.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Coffee Espresso</h2>
              <h3>BDT 210</h3>
          </div>
          <div class="box"  data-price="300">
              <div class="img-container">
                  <img src="Images/2.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Hot Malai</h2>
              <h3>BDT 500</h3>
          </div>
          <div class="box"  data-price="100">
              <div class="img-container">
                  <img src="Images/3.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Coffee Espresso</h2>
              <h3>BDT 210</h3>
          </div>
          <div class="box"  data-price="210">
              <div class="img-container">
                  <img src="Images/4.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Coffee Espresso</h2>
              <h3>BDT 210</h3>
          </div>
          <div class="box"  data-price="300">
              <div class="img-container">
                  <img src="Images/1.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Coffee Espresso</h2>
              <h3>BDT 210</h3>
          </div>
          <div class="box"  data-price="300">
              <div class="img-container">
                  <img src="Images/2.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Hot Malai</h2>
              <h3>BDT 500</h3>
          </div>
          <div class="box"  data-price="100">
              <div class="img-container">
                  <img src="Images/3.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Coffee Espresso</h2>
              <h3>BDT 210</h3>
          </div>
          <div class="box"  data-price="210">
              <div class="img-container">
                  <img src="Images/4.JPG" alt="Coffee Espresso" />
              </div>
              <h2>Coffee Espresso</h2>
              <h3>BDT 210</h3>
          </div>
          <div id="no-result" class="no-result" style="display: none;width:100%;margin:auto;text-align-center;">
        <p>No results found</p>
    </div>

      </div>
      
    <!-- Show More Button -->
    <div class="container">
        <button id="show-more" class="show-more" style="display: none;">Show More</button>
    </div>
  </section>

    
    <script src="script.js"></script>
   
 

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
  document.addEventListener("DOMContentLoaded", function () {
    const priceInput = document.getElementById("price");
    const priceValue = document.getElementById("price-value");
    const menuContainer = document.getElementById("menuContainer");
    const noResultMessage = document.getElementById("no-result");

    priceInput.addEventListener("input", function () {
        let maxPrice = parseInt(priceInput.value);
        priceValue.textContent = maxPrice;

        let items = document.querySelectorAll(".box");
        let hasResults = false;

        items.forEach(item => {
            let itemPrice = parseInt(item.getAttribute("data-price"));

            if (itemPrice <= maxPrice) {
                item.style.display = "block";
                hasResults = true;
            } else {
                item.style.display = "none";
            }
        });

        // Show or hide "No results found" message
        noResultMessage.style.display = hasResults ? "none" : "block";
    });
});

</script>


</body>
</html>
