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

  </style>
<body style="background-color: #F7F6F1;">
     <!-- Hero Section -->
    

    <!-- Sticky Header -->
    <header class="header" style="height:400px">
      <!-- <video autoplay muted loop playsinline class="video-bg">
        <source src="./assets/video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video> -->
      <img src="./Images/5.JPG" alt="" class="img-bg">
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
           
            <h1 class="ex_h1">Our Testimonial</h1>
        </div>
      </div>
    </header>

    <section class="testiomonia py-5">
      <div class="container">
        <form id="reviewForm">
          <div class="row">
            <div class="col-lg-4">
              <input type="text" id="userName" name ="userName" placeholder="Enter Your Name" >
            </div>
            <div class="col-lg-4">
              <input type="email" id="userEmail" name="email" placeholder="Enter Your Email" >
            </div>
            <div class="col-lg-4">
              <textarea id="reviewInput" name="review" placeholder="Write Your Review Here" rows="1"></textarea>
            </div>
            <div class="col-lg-2">
             <button type="submit">Submit Review</button>
            </div>
          </div>
           
           
           
        </form>
           <!-- when submit form this review will go to this  -->
        <div class="testimonial-section">
          <h2>What Our Clients Say</h2>
          <div class="owl-carousel testimonials">
              <div class="testimonial-item">
                  <p>"Amazing service and support. Highly recommended!"</p>
                  <h4>- John Doe</h4>
              </div>
              <div class="testimonial-item">
                  <p>"Great experience! I will definitely come back again."</p>
                  <h4>- Sarah Smith</h4>
              </div>
              <div class="testimonial-item">
                  <p>"Superb quality and customer service. Loved it!"</p>
                  <h4>- Emily Brown</h4>
              </div>
              <div class="testimonial-item">
                  <p>"Fast and reliable. Best experience ever!"</p>
                  <h4>- Mike Johnson</h4>
              </div>
          </div>
        </div>

        <!-- <div class="review-list" id="reviewList">
           
        </div> -->
        <!-- <div class="testimonial-section">
          <h2>What Our Clients Say</h2>
          <div class="owl-carousel testimonials">
              <div class="testimonial-item">
                  <p>"Amazing service and support. Highly recommended!"</p>
                  <h4>- John Doe</h4>
              </div>
              <div class="testimonial-item">
                  <p>"Great experience! I will definitely come back again."</p>
                  <h4>- Sarah Smith</h4>
              </div>
              <div class="testimonial-item">
                  <p>"Superb quality and customer service. Loved it!"</p>
                  <h4>- Emily Brown</h4>
              </div>
              <div class="testimonial-item">
                  <p>"Fast and reliable. Best experience ever!"</p>
                  <h4>- Mike Johnson</h4>
              </div>
          </div>
      </div> -->
      
    </div>

    </section>
    <!-- <script>
          document.getElementById("reviewForm").addEventListener("submit", function(event) {
          event.preventDefault(); 
          

          let userName = document.getElementById("userName").value.trim();
          let userEmail = document.getElementById("userEmail").value.trim();
          let reviewText = document.getElementById("reviewInput").value.trim();

          if (userName === "" || userEmail === "" || reviewText === "") {
              alert("Please fill in all fields before submitting.");
              return;
          }
          
          let reviewList = document.getElementById("reviewList");
          let reviewItem = document.createElement("div");
          reviewItem.classList.add("review-item");
          reviewItem.innerHTML = `
             
              <p>${reviewText}</p>
              <div><h4>${userName}</h4></div>
              <div><small>${userEmail}</small></div>
              
          `;

          reviewList.appendChild(reviewItem);
           
          document.getElementById("userName").value = "";
          document.getElementById("userEmail").value = "";
          document.getElementById("reviewInput").value = "";
          alert("Review will be submit!");
      });
    </script> -->
    
    <script src="script.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.querySelector(".search-bar");
    const categoryFilter = document.querySelector(".category-filter");
    const priceFilter = document.querySelector(".price-filter");
    const priceValue = document.getElementById("price-value");
    const menuItems = document.querySelectorAll(".box");
    
    // Update price value display on range change
    priceFilter.addEventListener("input", function () {
        priceValue.textContent = this.value;
        filterMenu();
    });
    
    // Filter menu items based on search, category, and price
    function filterMenu() {
        const searchText = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value;
        const maxPrice = parseFloat(priceFilter.value);

        menuItems.forEach(item => {
            const itemName = item.querySelector("h2").textContent.toLowerCase();
            const itemCategory = item.getAttribute("data-category");
            const itemPrice = parseFloat(item.getAttribute("data-price"));

            // Apply all filters
            const matchesSearch = itemName.includes(searchText);
            const matchesCategory = (selectedCategory === "all" || itemCategory === selectedCategory);
            const matchesPrice = itemPrice <= maxPrice;

            // Show/hide items based on filters
            if (matchesSearch && matchesCategory && matchesPrice) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    }

    // Event Listeners
    searchInput.addEventListener("input", filterMenu);
    categoryFilter.addEventListener("change", filterMenu);
});

    
    </script>

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
<script>
  $(document).ready(function(){
      // Initialize Owl Carousel
      var owl = $(".testimonials").owlCarousel({
          loop: true,
          margin: 20,
          nav: true,
          dots: true,
          autoplay: true,
          autoplayTimeout: 3000,
          autoplayHoverPause: true,
          responsive:{
              0:{ items: 1 },
              600:{ items: 2 },
              1000:{ items: 3 }
          }
      });
  
      // Form Submission Event
      // $("#reviewForm").submit(function(e){
      //     e.preventDefault(); 
 
      //     let userName = $("#userName").val().trim();
      //     let reviewText = $("#reviewInput").val().trim();
   
      //     if(userName === "" || reviewText === "") {
      //         alert("Please enter both your name and a review.");
      //         return;
      //     }
  
          
      //     let newReview = `
      //         <div class="testimonial-item">
      //             <p>"${reviewText}"</p>
      //             <h4>- ${userName}</h4>
      //         </div>
      //     `;
  
          
      //     $(".testimonials").trigger('add.owl.carousel', [$(newReview)]).trigger('refresh.owl.carousel');
  
      //     $("#userName").val("");
      //     $("#userEmail").val("");
      //     $("#reviewInput").val("");
      // });
  });
  </script>
  
</body>
</html>
