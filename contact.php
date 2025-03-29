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


.review-carousel {
  position: relative;
  overflow: hidden;
  width: 100%; /* Adjust as needed */
}

.carousel-track {
  display: flex;
  transition: transform 0.5s ease;
}

.carousel-slide {
  flex: 0 0 100%; /* Each slide takes full width */
  min-width: 100%; /* ensure no shrinking */
  box-sizing: border-box; /* Include padding/border in width */
  padding: 20px; /*optional padding*/
}

.carousel-button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  z-index: 1;
}

.carousel-button.prev {
  left: 10px;
}

.carousel-button.next {
  right: 10px;
}

.review-item {
  border: 1px solid #ddd;
  padding: 15px;
  margin: 5px;
  border-radius: 5px;
}
  </style>
<body style="background-color: #F7F6F1;">
     <!-- Hero Section -->
    

    <!-- Sticky Header -->
    <header class="header" style="height:400px">
      <video autoplay muted loop playsinline class="img-bg" loading="lazy">
        <source src="./assets/contact.MP4" type="video/mp4">
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
            <div class="header__content m-auto text-center">
           
                <h1 class="mb-3 mx-auto text-center">Contact Us</h1> 
                <p class="m-auto text-center">Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
            </div>
        </div>
      </div>
    </header>

    
    <section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contact_inner">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="contact_form_inner">
                                    <div class="contact_field">
                                        <!-- <h3>Contatc Us</h3> -->
                                        <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                                        <form id="reviewForm">
                                            <input type="text" class="form-control form-group" placeholder="Name" id="userNameInput" required />
                                            <input type="email" class="form-control form-group" placeholder="Email" id="userEmailInput" required />
                                            <textarea class="form-control form-group" placeholder="Message" id="reviewTextInput" required></textarea>
                                            <button type="submit" class="contact_form_submit">Send</button>
                                        </form>
                                          
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-4 m-auto">
                                <div class="contact_info_sec">
                                    <h4>Contact Info</h4>
                                    <div class="d-flex info_single align-items-center">
                                        <i class="fas fa-headset"></i>
                                        <span><a href="tel:01714-121313">+880 1714-121313</a></span>
                                    </div>
                                    <div class="d-flex info_single align-items-center">
                                        <i class="fas fa-envelope-open-text"></i>
                                        <span> 
                                            <a href="mailto:thecoffeeclub.syl@gmail.com">
                                                thecoffeeclub.syl@gmail.com
                                            </a>
                                        </span>
                                    </div>
                                    <div class="d-flex info_single align-items-center">
                                        <i class="fas fa-map-marked-alt"></i>
                                        <span>Bir-Bikrom Yamin Complex, 3rd floor, Kumarpara,
                                            Sylhet, Bangladesh</span>
                                    </div>
                    
                     <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.037297441179!2d91.87570697537207!3d24.896709377905598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055d00bb20edd%3A0xf9b729405726bc79!2sThe%20Coffee%20Club!5e0!3m2!1sen!2sbd!4v1742719638067!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="map_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="map_inner">
                        <h4>Find Us on Google Map</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quo beatae quasi assumenda, expedita aliquam minima tenetur maiores neque incidunt repellat aut voluptas hic dolorem sequi ab porro, quia error.</p>
                        <div class="map_bind">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.037297441179!2d91.87570697537207!3d24.896709377905598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055d00bb20edd%3A0xf9b729405726bc79!2sThe%20Coffee%20Club!5e0!3m2!1sen!2sbd!4v1742719638067!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
          document.getElementById("reviewForm").addEventListener("submit", function(event) {
          event.preventDefault(); // Prevent form submission

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
          // Clear input fields after submission
          document.getElementById("userName").value = "";
          document.getElementById("userEmail").value = "";
          document.getElementById("reviewInput").value = "";
          alert("Review will be submit!");
      });
    </script>
    
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
</body>
</html>

</body>
</html>
