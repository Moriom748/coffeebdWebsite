const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".header__image img", {
  ...scrollRevealOption,
  origin: "right",
});
ScrollReveal().reveal(".header__content h2", {
  ...scrollRevealOption,
  delay: 500,
});
ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOption,
  delay: 1000,
});

ScrollReveal().reveal(".order__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".event__content", {
  duration: 1000,
});



// ______
{/* <style>
.menu-item img {
    width: 200px;
    height: 200px;
}


.hero {
    position: relative;
    text-align: center;
    color: white;
    background: url('banner.jpg') no-repeat center center/cover;
    padding: 80px 20px;
}
.hero h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}
.hero p {
    font-size: 1.2rem;
}

.header {
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
}
.menu__section_grid{
    
}

.sidebar {
   
    width: 100%;
    background: white;
    padding: 20px;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
  
    overflow-y: auto;
}
.sidebar h3 {
    margin-bottom: 15px;
}
.sidebar input, .sidebar select {
    width: 100%;
    margin-bottom: 10px;
    padding: 5px;
}

.menu {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 20px;
    padding:0 20px 10px 20px;
    margin-left: 270px;
}
.menu-item {
    background: white;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.menu-item img {
    width: 100%;
    border-radius: 10px;
}
.menu-item h2 {
    font-size: 1.5rem;
    margin: 10px 0;
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


  </style> */}



  // ---------
  