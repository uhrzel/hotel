<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Total Sales Report</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--Custom Font-->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <style>
        .lead text-center {
            font-weight: bolder;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 50px;
            margin-left: 270px;
        }

        form {
            margin-bottom: 20px;
        }

        button {
            cursor: pointer;
        }

        p {
            margin-top: 20px;
            font-weight: bolder;
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
                    <a href="index.php?room"><em class="fa fa-bed">&nbsp;</em>
                        Rooms
                    </a>
                </li>
            <?php }
            if (isset($_GET['reservation'])) { ?>
                <li class="active">
                    <a href="index.php?room"><em class="fa fa-bed">&nbsp;</em>
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
                    <a href="index.php?room"><em class="fa fa-bed">&nbsp;</em>
                        Rooms
                    </a>
                </li>
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
    <div class="container mt-5">
        <h2 class="text-center">Monthly Sales Report</h2>

        <form method="post" action="">
            <div class="form-group">
                <label for="year">Select Year:</label>
                <select class="form-control" name="year" id="year">
                    <option value="2017" <?php if (isset($_POST['year']) && $_POST['year'] == '2017') echo 'selected'; ?>>2017</option>
                    <option value="2018" <?php if (isset($_POST['year']) && $_POST['year'] == '2018') echo 'selected'; ?>>2018</option>
                    <option value="2019" <?php if (isset($_POST['year']) && $_POST['year'] == '2019') echo 'selected'; ?>>2019</option>
                    <option value="2020" <?php if (isset($_POST['year']) && $_POST['year'] == '2020') echo 'selected'; ?>>2020</option>
                    <option value="2021" <?php if (isset($_POST['year']) && $_POST['year'] == '2021') echo 'selected'; ?>>2021</option>
                    <option value="2022" <?php if (isset($_POST['year']) && $_POST['year'] == '2022') echo 'selected'; ?>>2022</option>
                    <option value="2023" <?php if (isset($_POST['year']) && $_POST['year'] == '2023') echo 'selected'; ?>>2023</option>
                    <option value="2024" <?php if (isset($_POST['year']) && $_POST['year'] == '2024') echo 'selected'; ?>>2024</option>
                    <option value="2025" <?php if (isset($_POST['year']) && $_POST['year'] == '2025') echo 'selected'; ?>>2025</option>
                    <option value="2026" <?php if (isset($_POST['year']) && $_POST['year'] == '2026') echo 'selected'; ?>>2026</option>
                    <!-- Add more years as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="month">Select Month:</label>
                <select class="form-control" name="month" id="month">
                    <option value="01" <?php if (isset($_POST['month']) && $_POST['month'] == '01') echo 'selected'; ?>>January</option>
                    <option value="02" <?php if (isset($_POST['month']) && $_POST['month'] == '02') echo 'selected'; ?>>February</option>
                    <option value="03" <?php if (isset($_POST['month']) && $_POST['month'] == '03') echo 'selected'; ?>>March</option>
                    <option value="04" <?php if (isset($_POST['month']) && $_POST['month'] == '04') echo 'selected'; ?>>April</option>
                    <option value="05" <?php if (isset($_POST['month']) && $_POST['month'] == '05') echo 'selected'; ?>>May</option>
                    <option value="06" <?php if (isset($_POST['month']) && $_POST['month'] == '06') echo 'selected'; ?>>June</option>
                    <option value="07" <?php if (isset($_POST['month']) && $_POST['month'] == '07') echo 'selected'; ?>>July</option>
                    <option value="08" <?php if (isset($_POST['month']) && $_POST['month'] == '08') echo 'selected'; ?>>August</option>
                    <option value="09" <?php if (isset($_POST['month']) && $_POST['month'] == '09') echo 'selected'; ?>>September</option>
                    <option value="10" <?php if (isset($_POST['month']) && $_POST['month'] == '10') echo 'selected'; ?>>October</option>
                    <option value="11" <?php if (isset($_POST['month']) && $_POST['month'] == '11') echo 'selected'; ?>>November
                    <option value="12" <?php if (isset($_POST['month']) && $_POST['month'] == '12') echo 'selected'; ?>>December</option>
                    </option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Show Sales</button>
        </form>

        <?php
        include 'db.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $selectedYear = $_POST['year'];
            $selectedMonth = $_POST['month'];

            $sql = "SELECT SUM(total_price) AS total_sales FROM booking WHERE payment_status = '1' AND YEAR(booking_date) = '$selectedYear' AND MONTH(booking_date) = '$selectedMonth'";

            $amountsum = mysqli_query($connection, $sql) or die(mysqli_error($connection));
            $row_amountsum = mysqli_fetch_assoc($amountsum);

            echo "<p  class='lead text-center'>Total Sales for $selectedMonth/$selectedYear: " . $row_amountsum['total_sales'] . ".00" . "</p>";

            include 'month_list_data.php';
        }
        ?>

    </div>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/foundation-datepicker.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="ajax.js"></script>


</body>

</html>