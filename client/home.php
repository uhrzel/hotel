<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Hotel Booking Management System</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/carousel/owl-carousel-theme.min.css">
  <link rel="stylesheet" href="./css/carousel/owl-carousel.css">
  <script src="./js/jquery.js"></script>
  <!-- link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script> -->
</head>

<body>


  <header>
    <div class="content flex_space">
      <div class="logo">
        <h3>Hotel Booking Management System</h3>
      </div>
      <div class="navlinks">
        <ul id="menulist">
          <li><a href="#home"></a> </li>
          <li><a href="#about"></a> </li>
          <li><a href="#rooms"></a> </li>

          <li> <button onclick="window.location.href='logout.php';" class="primary-btn">Log Out</button> </li>
        </ul>
        <span class="fa fa-bars" onclick="menutoggle()"></span>
      </div>
    </div>
  </header>


  <script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight = "0px";

    function menutoggle() {
      if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "100vh";
      } else {
        menulist.style.maxHeight = "0px";
      }
    }
  </script>


  <section class="home">
    <div class="content">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="images/banner-1.png" alt="">
          <div class="text">
            <h1>Beautiful Rooms</h1>
            <hp>At Hotel Booking Management System, we are passionate about simplifying your hotel booking experience.
              With a commitment to efficiency and user-friendly design, we strive to provide a seamless platform that
              caters to all your accommodation needs.
              </p>
              <div class="flex">
                <button class="primary-btn">READ MORE</button>
                <button class="secondary-btn">CONTACT US</button>
              </div>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-2.png" alt="">
          <div class="text">
            <h1>Amazing Rooms</h1>
            <p>At Hotel Booking Management System, we are passionate about simplifying your hotel booking experience.
              With a commitment to efficiency and user-friendly design, we strive to provide a seamless platform that
              caters to all your accommodation needs.
            </p>
            <div class="flex">
              <button class="primary-btn">READ MORE</button>
              <button class="secondary-btn">CONTACT US</button>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-3.png" alt="">
          <div class="text">
            <h1>Relaxing Experience</h1>
            <p>At Hotel Booking Management System, we are passionate about simplifying your hotel booking experience.
              With a commitment to efficiency and user-friendly design, we strive to provide a seamless platform that
              caters to all your accommodation needs.
            </p>
            <div class="flex">
              <button class="primary-btn">READ MORE</button>
              <button class="secondary-btn">CONTACT US</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>







  <section class="about top">
    <div class="container flex">
      <div class="left">
        <div class="heading">
          <h1>WELCOME</h1>
          <h2>Hotel Booking Management System</h2>
        </div>
        <p>At Hotel Booking Management System, we are passionate about simplifying your hotel booking experience. With a
          commitment to efficiency and user-friendly design, we strive to provide a seamless platform that caters to all
          your accommodation needs.</p>
        <button class="primary-btn">ABOUT US</button>
      </div>
      <div class="right">
        <img src="images/seje.png" alt="">
      </div>
    </div>
  </section>



  <section class="rooms">
    <div class="container top">
      <div class="heading">
        <h1>EXPOLRE</h1>
        <h2>Our Rooms</h2>
        <p>Below is our room to offer.
        </p>
      </div>

      <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
          <div class="items">
            <div class="image">
              <img src="images/single.png" alt="">
            </div>
            <div class="text">
              <h2>Single Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Comfortable single rooms for a relaxing stay.</p>
              <div class="button flex">
                <button onclick="window.location.href='book/index.php?reservation';" class="primary-btn">BOOK
                  NOW</button>
                <h3>₱1000 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/double.png" alt="">
            </div>
            <div class="text">
              <h2>Double Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Spacious double rooms perfect for couples or friends.</p>
			  <img src="images/TV.png" alt="TV">
              <div class="button flex">
                <button onclick="window.location.href='book/index.php?reservation';" class="primary-btn">BOOK
                  NOW</button>
                <h3>₱1500 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/triple.png" alt="">
            </div>
            <div class="text">
              <h2>Triple Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Spacious rooms for a group of three, ideal for family or friends.</p>
              <div class="button flex">
                <button onclick="window.location.href='book/index.php?reservation';" class="primary-btn">BOOK
                  NOW</button>
                <h3>₱2000 <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/family.png" alt="">
            </div>
            <div class="text">
              <h2>Family Rooms</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Smartly designed Family rooms for efficient use of space.</p>
              <div class="button flex">
                <button onclick="window.location.href='book/index.php?reservation';" class="primary-btn">BOOK
                  NOW</button>
                <h3>₱3000 <span> <br> Per Night </span> </h3>
              </div>
            </div>
        




        </div>
      </div>
    </div>
  </section>
  <script>
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 40,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2,
          margin: 10,
        },
        1000: {
          items: 3
        }
      }
    })
  </script>




  <section class="services top">
    <div class="container">
      <div class="heading">
        <h1>SERVICES</h1>
        <h2>Our Services</h2>
        <p>We offer a beautiful experience and services.
      </div>


      <div class="content flex_space">
        <div class="left grid2">
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-champagne-glasses"></i>
              <h3>Delious Food</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-person-biking"></i>
              <h3>Fintness</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-utensils"></i>
              <h3>Inhouse Restaurant</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-spa"></i>
              <h3>Beauty Spa</h3>
            </div>
          </div>
        </div>
        <div class="right">
          <img src="images/service.png" alt="">
        </div>
      </div>
    </div>
  </section>





  <div class="legal">
    <p class="container">Copyright (c) 2023 Copyright Hotel Booking Management System Rights Reserved.</p>
  </div>



  <script src="./js/font-awesome.js"></script>
</body>

</html>