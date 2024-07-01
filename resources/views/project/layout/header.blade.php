<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('/asset/./assets/css/swiper-bundle.min.css')}}">

<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: bahijTiter;
  }

  :root {
    --primary: #1c2530;
    --secondary: #f7b661;
    --white: #eee;
    --black: #111;
    --gradient: linear-gradient(to right, var(--primary), var(--secondary));
  }
  @font-face {
    font-family: "bahijTiter";
    src: url('Bahij Badr-Bold.ttf');
  }

  nav .dropdown {
    display: inline-block;
    font-family: bahijTiter;
    margin: 0 1em;
  }

  nav .dropdown button {
    background-color: var(--secondary);
    color: black;
    font-weight: bold;
    font-size: 1em;
    padding: 10px 15px;
    width: 6.3rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  nav .dropdown a {
    display: block;
    color: black;
    text-decoration: none;
    padding: 10px 15px;
    font-family: baba;

  }

  nav .dropdown .content {
    display: none;
    position: absolute;
    background-color: var(--secondary);
    min-width: 100px;
    box-shadow: 2px 2px 5px hsla(0, 0%, 0%, 0.8);
  }

  nav .dropdown:hover .content {
    display: block;
  }

  nav .dropdown:hover button {
    background-color: var(--secondary)
  }

  nav .dropdown a:hover {
    background-color: white;
  }

  nav .logo {
    width: 100px;
    height: 70px;
  }

  /* Design Laptop navbar  */
  nav.navbar {
    width: 100%;
    height: 80px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding-inline: 2rem;
    /* background-color:burlywood; */
    background-color: #9bb6b9;
  }

  nav.navbar a.logo {
    text-decoration: none;
    color: var(--secondary);
    font-size: 1.3rem;
    text-transform: uppercase;
    font-weight: 300;
  }

  nav.navbar a.logo span {
    font-weight: 900;
    font-family: sans-serif;
    font-size: 0.9rem;
  }

  nav.navbar ul {
    list-style: none;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 3rem;
  }

  nav.navbar ul a {
    text-decoration: none;
    color: var(--white);
    font-size: 1rem;
    font-family: sans-serif;
    transition: 500ms;
  }

  nav.navbar ul a:hover {
    color: var(--secondary);
  }

  nav form .logout {
    padding: 8px 10px;
    font-weight: bold;
    border-radius: 5px;
    font-size: 0.9em;
    background-color: none;
    background-color: var(--secondary);
    border: none;
  }

  nav.navbar .socials {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
  }

  nav.navbar .socials a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 35px;
    height: 35px;
    background-color: var(--secondary);
    text-decoration: none;
    border-radius: 5px;
  }

  nav.navbar .socials a i {
    color: var(--primary);
    font-size: 1.1rem;
  }

  /* Hiding the hamburger on laptop  */
  nav.navbar .hamburger {
    color: var(--white);
    font-size: 1.5rem;
    transition: 200ms;
    cursor: pointer;
    display: none;
  }

  nav.navbar .hamburger:hover {
    color: var(--secondary);
  }

  /* Hiding Mobile Navbar on laptop view  */
  .mobile-navbar {
    display: none;
  }

  @keyframes blink {

    0%,
    100% {
      color: var(--black);
      outline-color: var(--black);
      background-color: var(--secondary);
    }

    50% {
      color: var(--white);
      outline-color: var(--white);
      background-color: var(--black);
    }
  }


  /* Design for Mobile View  */
  @media screen and (max-width:767px) {
    nav.navbar {
      padding-inline: 1rem;
    }

    nav.navbar ul {
      display: none;
    }

    nav.navbar .socials {
      display: none;
    }

    nav.navbar .hamburger {
      display: block;
    }

    /* styling the mobile nav  */
    .mobile-navbar {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: flex-start;
      width: 50%;
      height: 100vh;
      background-color: var(--primary);
      position: fixed;
      top: 0;
      left: -100%;
      z-index: 999;
      padding-inline: 2rem;
      transition: 0.5s ease-out all;
    }

    .mobile-navbar header {
      display: flex;
      flex-direction: column;
      gap: 2rem;
      width: 100%;
      padding-top: 1rem;
    }

    .mobile-navbar header .top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 70px;
      width: 100%;
    }

    .mobile-navbar header .top a {
      text-decoration: none;
      color: var(--secondary);
      font-size: 1.3rem;
      text-transform: uppercase;
      font-weight: 300;
    }

    .mobile-navbar header .top a span {
      font-weight: 900;
      font-family: sans-serif;
      font-size: 0.9rem;
    }

    .mobile-navbar header .top .hamburger {
      color: var(--white);
      font-size: 1.5rem;
      transition: 200ms;
    }

    .mobile-navbar header .top .hamburger:hover {
      color: var(--secondary);
    }

    .mobile-navbar header ul {
      list-style: none;
      display: flex;
      flex-direction: column;
    }

    .mobile-navbar header ul li {
      margin-bottom: 1.5rem;
    }

    .mobile-navbar header ul li a {
      text-decoration: none;
      color: var(--white);
      font-size: 1rem;
      font-family: sans-serif;
      transition: 200ms;
    }

    .mobile-navbar header ul li a:hover {
      color: var(--secondary);
      margin-left: 10px;
    }

    .mobile-navbar .socials {
      align-self: center;
      padding-bottom: 2rem;
      display: flex;
      justify-content: center;
      gap: 1rem;
      align-items: center;
    }

    .mobile-navbar .socials a {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 35px;
      height: 35px;
      background-color: var(--secondary);
      text-decoration: none;
      border-radius: 5px;
    }

    .mobile-navbar .socials a i {
      color: var(--primary);
      font-size: 1.1rem;
    }

    /* Hero Section  */
    main.hero {
      height: 650px;
      grid-template-columns: repeat(1, 1fr);
      grid-template-rows: repeat(2, 1fr);
    }

    main.hero::before {
      display: none;
    }

    .hero .heroImg .imgHolder {
      width: 300px;
      height: 90%;
    }

    .hero .heroImg .imgHolder::before {
      width: 280px;
      height: 280px;
    }

    .hero .heroText {
      align-items: center;
      gap: 0.6rem;
      padding-inline: 0.5rem;
    }

    .hero .heroText h1 {
      font-size: 0.8cm;
    }

    .hero .heroText a {
      align-self: flex-start;
    }

    .blink {
      right: 0.5rem;
      top: 0.5rem;
    }
  }

  /* Design for iPad View  */
  @media screen and (min-width:768px) and (max-width:1024px) {
    nav.navbar {
      padding-inline: 1rem;
    }

    nav.navbar ul {
      display: none;
    }

    nav.navbar .socials {
      display: none;
    }

    nav.navbar .hamburger {
      display: block;
    }

    /* styling the mobile nav  */
    .mobile-navbar {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: flex-start;
      width: 40%;
      height: 100vh;
      background-color: var(--primary);
      position: fixed;
      top: 0;
      left: -100%;
      z-index: 999;
      padding-inline: 2rem;
      transition: 0.5s ease-out all;
    }

    .mobile-navbar header {
      display: flex;
      flex-direction: column;
      gap: 2rem;
      width: 100%;
      padding-top: 1rem;
    }

    .mobile-navbar header .top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 70px;
      width: 100%;
    }

    .mobile-navbar header .top a {
      text-decoration: none;
      color: var(--secondary);
      font-size: 1.3rem;
      text-transform: uppercase;
      font-weight: 300;
    }

    .mobile-navbar header .top a span {
      font-weight: 900;
      font-family: sans-serif;
      font-size: 0.9rem;
    }

    .mobile-navbar header .top .hamburger {
      color: var(--white);
      font-size: 1.5rem;
      transition: 200ms;
    }

    .mobile-navbar header .top .hamburger:hover {
      color: var(--secondary);
    }

    .mobile-navbar header ul {
      list-style: none;
      display: flex;
      flex-direction: column;
    }

    .mobile-navbar header ul li {
      margin-bottom: 1.5rem;
    }

    .mobile-navbar header ul li a {
      text-decoration: none;
      color: var(--white);
      font-size: 1rem;
      font-family: sans-serif;
      transition: 200ms;
    }

    .mobile-navbar header ul li a:hover {
      color: var(--secondary);
      margin-left: 10px;
    }

    .mobile-navbar .socials {
      align-self: center;
      padding-bottom: 2rem;
      display: flex;
      justify-content: center;
      gap: 1rem;
      align-items: center;
    }

    .mobile-navbar .socials a {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 35px;
      height: 35px;
      background-color: var(--secondary);
      text-decoration: none;
      border-radius: 5px;
    }

    .mobile-navbar .socials a i {
      color: var(--primary);
      font-size: 1.1rem;
    }
  }
</style>
</head>
<body>
<nav class="navbar">
        <div class="dropdown">
            <button class="button">Language</button>
            <div class="content">
                <a href="#">Pashto</a>
                <a href="#">Dari</a>
                <a href="#">English</a>
            </div>
        </div>
        <img src="logo1.png" alt="" class="logo">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Staff</a></li>
            <li><a href="#">Feedback</a></li>
            <form action="">
                <input type="submit" class="logout">
            </form>
            
            
        </ul>
        <div class="socials">
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
            <a href="#"><i class="ri-linkedin-fill"></i></a>
            <a href="#"><i class="ri-whatsapp-fill"></i></a>
        </div>
        <div class="hamburger" id="show">
            <i class="ri-menu-3-fill"></i>
        </div>
    </nav>

    <!-- Mobile Nav  -->
    <nav class="mobile-navbar">
        <header>
            <div class="top">
                <a href="#" class="logo">Pay<span>Day</span></a>
                <div class="hamburger" id="hide">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">contact</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Feedback</a></li>
                <form action="">
                    <input type="submit" class="logout">
                </form>
                
            </ul>
        </header>
        <div class="socials">
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
            <a href="#"><i class="ri-linkedin-fill"></i></a>
            <a href="#"><i class="ri-whatsapp-fill"></i></a>
        </div>
    </nav>

</body>
</html>






<script>
  // DOM Selection
const menuShowBtn = document.getElementById("show"),
  menuCloseBtn = document.getElementById("hide"),
  mobileNav = document.querySelector(".mobile-navbar");

const navlinks = document.querySelectorAll(".mobile-navbar header ul a");

// Click Events
// Showing Mobile Nav
menuShowBtn.addEventListener("click", () => {
  mobileNav.style.left = "0";
});

const closeNav = () => {
  mobileNav.style.left = "-100%";
};
// Hiding Mobile Nav
menuCloseBtn.addEventListener("click", closeNav);

navlinks.forEach((navlink) => {
  navlink.addEventListener("click", closeNav);
});

</script>