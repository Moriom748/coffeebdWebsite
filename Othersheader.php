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
            <a href="index.html">
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
          <li><a href="index.html">HOME</a></li>
          <li><a href="menu.html">menu</a></li>
          <li><a href="about.html">About</a></li>
          <!-- <li><a href="#menu">Contact</a></li> -->
          <li><a href="review.html">review</a></li>
          <li><a href="contact.html">CONTACT</a></li>
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
