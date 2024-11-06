<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rooms</title>
  <!-- Bootstrap CSS link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/font-awesome.min.css" rel="stylesheet">

  <link href="css/datepicker3.css" rel="stylesheet">
  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!--Custom Font-->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />


</head>
<style>
  .offer {
    background-color: #f4f4f4;
  }

  .container {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .content {
    display: flex;
    align-items: center;
    text-align: center;
    flex-direction: column;
  }


  .box {
    width: 100vw;
    max-width: 600px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }

  .box img {
    width: 100%;
    height: auto;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .box .right {
    padding: 15px;
  }

  .box h4 {
    margin-top: 0;
    font-size: 18px;
  }

  .box p {
    font-size: 14px;
    color: black;
    margin-bottom: 15px;
  }

  .box h5 {
    font-size: 16px;
    color: #007bff;
  }

  ul.nav.menu {
    display: flex;
    flex-direction: column;
  }
</style>
</head>

<body>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

    <div class="container-fluid">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="index.php?dashboard"><span>Hotel Booking </span>Management System</a>
        <ul class="nav navbar-top-links navbar-right">
          <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
              <em class="fa fa-user"></em>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
              <li><a href="logout.php"><i class="fa fa-power-off" style="color:red;"></i>
                  Logout
                </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div><!-- /.container-fluid -->
  </nav>


  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <div class="profile-sidebar">

      <div class="profile-usertitle">

      </div>
      <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
      <?php
      if (isset($_GET['dashboard'])) { ?>
        <li class="active">
          <a href="index.php?dashboard"><em class="fa fa-dashboard">&nbsp;</em>
            Dashboard
          </a>
        </li>
      <?php } else { ?>
        <li>
          <a href="index.php?dashboard"><em class="fa fa-dashboard">&nbsp;</em>
            Dashboard
          </a>
        </li>
      <?php }
      if (isset($_GET['room'])) { ?>
        <li class="active">
          <a href="room.php"><em class="fa fa-bed">&nbsp;</em>
            Rooms
          </a>
        </li>
      <?php } else { ?>
        <li>
          <a href="room.php"><em class="fa fa-bed">&nbsp;</em>
            Rooms
          </a>
        </li>
      <?php }
      if (isset($_GET['reservation'])) { ?>
        <li class="active">
          <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
            Reservation
          </a>
        </li>
      <?php } else { ?>
        <li>
          <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
            Reservation
          </a>
        </li>
      <?php }
      if (isset($_GET['room_mang'])) { ?>
        <li class="active">
          <a href="index.php?room_mang"><em class="fa fa-bed">&nbsp;</em>
            Manage Rooms
          </a>
        </li>
      <?php } else { ?>
        <li>
          <a href="index.php?room_mang"><em class="fa fa-bed">&nbsp;</em>
            Manage Rooms
          </a>
        </li>
      <?php }
      if (isset($_GET['staff_mang'])) { ?>
        <!-- <li class="active">
          <a href="index.php?staff_mang"><em class="fa fa-users">&nbsp;</em>
            Staff Section
          </a>
        </li> -->
      <?php } else { ?>
        <!-- <li>
          <a href="index.php?staff_mang"><em class="fa fa-users">&nbsp;</em>
            Staff Section
          </a>
        </li> -->

      <?php }

      if (isset($_GET['month_sale'])) { ?>

        <li class="active">
          <a href="month.php?month_sale"><em class="fa fa-money">&nbsp;</em>
            Monthly Sales
          </a>
        </li>
      <?php } else { ?>
        <li>
          <a href="month.php?month_sale"><em class="fa fa-money">&nbsp;</em>
            Monthly Sales
          </a>
        </li>
      <?php }

      if (isset($_GET['year_sale'])) { ?>

        <li class="active">
          <a href="year.php?year_sale"><em class="fa fa-money">&nbsp;</em>
            Yearly Sales
          </a>
        </li>
      <?php } else { ?>
        <li>
          <a href="year.php? year_sale"><em class="fa fa-money">&nbsp;</em>
            Yearly Sales
          </a>
        </li>

      <?php }
      if (isset($_GET['complain'])) { ?>
        <!-- <li class="active">
          <a href="index.php?complain"><em class="fa fa-comments">&nbsp;</em>
            Manage Complaints
          </a>
        </li> -->
      <?php } else { ?>
        <!-- <li>
          <a href="index.php?complain"><em class="fa fa-comments">&nbsp;</em>
            Manage Complaints
          </a>
        </li> -->
      <?php }
      ?>

      <?php
      if (isset($_GET['statistics'])) { ?>

      <?php } else { ?>
        <li>


          </a>
        </li>
      <?php } ?>


    </ul>
  </div><!--/.sidebar-->

  <section class="offer mtop" id="services">

    <div class="heading">

      <h5 style="color:black; font-size:30px; font-weight:bolder;">ROOM OFFERS </h5>
    </div>

      <h3>Here is our room </h3>
    <div class="content grid2 mtop">
      <div class="box flex">
        <div class="left">
          <img src="image/single.png" alt="">
        </div>
        <div class="right">
          <h4>Single Room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>This room is located on the top floor of the hotel and has hot / cold air conditioned, a furnished balcony with sun loungers with swimming pool or mountain views and free WI FI. </p>
          <h5>From ₱1000/night</h5>

        </div>
      </div>
      <div class="box flex">
        <div class="left">
          <img src="image/double.png" alt="">
        </div>
        <div class="right">
          <h4>Double Room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p> Room facilities: Furnished balcony with swimming pool views, telephone, flat screen TV with satellite channels, hot/cold air conditioned, desk, wood floor, wardrobe with free safe, mini fridge and kettle with cups. Hair dryer, welcome toiletries, gel / shampoo dispenser and bathtub. Premium Pack with supplement(€): 1 beach bag, bathrobe for use during the stay, slippers, waters, coffee / tea bags and daily replacement amenities.</p>
          <h5>From ₱1500/night</h5>

        </div>
      </div>
      <div class="box flex">
        <div class="left">
          <img src="image/triple.png" alt="">
        </div>
        <div class="right">
          <h4>Triple Room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p> Room facilities: Furnished balcony with swimming pool views, telephone, flat screen TV with satellite channels, hot/cold air conditioned, desk, parquet floor, wardrobe with free safe, mini fridge, kettle. Hairdryer, welcome toiletries, gel / shampoo dispenser and bathtub. Premium Pack with supplement (€): 1 beach bag, bathrobe for use during the stay, slippers, waters, coffee / tea bags and daily replacement amenities.</p>
          <h5>From ₱2000/night</h5>

        </div>
      </div>
      <div class="box flex">
        <div class="left">
          <img src="image/family.png" alt="">
        </div>
        <div class="right">
          <h4>Family Room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p> Room facilities: Furnished balcony with garden pool views, telephone, flat screen TV with satellite channels, hot/cold air conditioned, desk, parquet floor, wardrobe with free safe, mini fridge, kettle. Hair dryer, welcome toiletries, gel / shampoo dispenser and bathtub or shower. Premium Pack with supplement(€): 1 beach bag, bathrobe for use during the stay, slippers, waters, coffee / tea bags and daily replacement amenities.</p>
          <h5>From ₱3000/night</h5>

        </div>
      </div>
      <div class="box flex">

        <div class="left">

          <img src="image/kingsize.png" alt="">
        </div>
        <div class="right">
          <h4>King-Sized Room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Fitted with a king-size bed, this air-conditioned room features a flat-screen cable TV, a chiller, safe and a seating area. The private bathroom includes hot/cold shower facilities and free toiletries.

            Complimentary wifi access
            Coffee and Tea Maker
            Dental Kit
            Safety deposit box
            Toiletries
            Slippers
            Mini-bar
            Pool Access and Sauna (TEMPORARILY CLOSED)
            Gym Access </p>
          <h5>From ₱5500/night</h5>

        </div>
      </div>
      <div class="box flex">
        <div class="left">
          <img src="image/mastersuite.png" alt="">
        </div>
        <div class="right">
          <h4>Master Suite Room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p> Ideal for families and couples, this 105 m2 suite features a master bedroom with a King bed, a second bedroom with a Queen bed and a separate living and dining room. Features include a Jacuzzi tub in the master bedroom, a refrigerator, a microwave, dishes, two TVs and a cordless phone. All suites offer incredible views of the city and the mountains.</p>
          <h5>From ₱6500/night</h5>

        </div>
      </div>
      <div class="box flex">
        <div class="left">
          <img src="image/minisuite.png" alt="">
        </div>
        <div class="right">
          <h4>Mini Suite Room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p> A basic suite or executive suite comes with a separate living space connected to one or more bedrooms. This set up is sometimes also called a master suite. A mini-suite or junior suite refers to a single room with a bed and sitting area. Some suites also come with kitchenettes.</p>
          <h5>From ₱3600/night</h5>

        </div>
      </div>
      <div class="box flex">
        <div class="left">
          <img src="image/connecting.png" alt="">
        </div>
        <div class="right">
          <h4>Connecting Room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p> The room amenities in the connecting rooms are the followings:

            Air conditioning/Heating

            LCD TV

            WIFI for free

            Printing availability at front desk on request

            Laptop sized safe

            Direct dial phone (VoIP)

            Minibar

            Quality Furniture with working desk

            1 en suite bathroom with hydro massage buthtub, 1 en suite bathroom with shower cabin

            Hair dryer, toiletries

            Large soundproof windows
          </p>
          <h5>From ₱8000/night</h5>

        </div>
      </div>
      <div class="box flex">

        <div class="left">

          <img src="image/presidential.png" alt="">
        </div>
        <div class="right">
          <h4>Presedential Suite Room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>Inspired by the perfection of a real luxury experience, the Presidential Suite is a perfect choice for you who always have the winner of its class. This 200sqm room will certainly complete your definition of luxury. Completed with a separate bedroom and expansive working area, luxurious marble bathroom with private Jacuzzi and shower, spacious living room and dining room with well-equipped pantry, yes, a truly unparalleled luxury!</p>
          <h5>From ₱2100/night</h5>

        </div>
      </div>
      <div class="box flex">
        <div class="left">
          <img src="image/murphy.png" alt="">
        </div>
        <div class="right">
          <h4>Murphy Room</h4>
          <div class="rate flex">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p> Murphy beds, also known as wall beds, are becoming increasingly popular in the hospitality industry. These beds are designed to fold up into a wall or cabinet, providing guests with more space during the day. This innovative bed design offers several advantages for hotel owners and benefits for hotel guests.</p>
          <h5>From ₱6900/night</h5>

        </div>
      </div>

    </div>
  </section>