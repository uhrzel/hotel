<?php
include_once "db.php";
session_start();

include_once "header.php";
include_once "sidebar.php";


if (isset($_GET['room_mang'])){
    include_once "room_mang.php";
}
elseif (isset($_GET['dashboard'])){
    include_once "dashboard.php";
}
elseif (isset($_GET['room'])){
    include_once "room.php";
}
elseif (isset($_GET['reservation'])){
    include_once "reservation.php";
}
elseif (isset($_GET['staff_mang'])){
    include_once "staff_mang.php";
}
elseif (isset($_GET['add_emp'])){
    include_once "add_emp.php";
}

elseif (isset($_GET['month_sale'])){
    include_once "month.php";
    
}
elseif (isset($_GET['year_sale'])){
    include_once "year.php";
}
elseif (isset($_GET['complain'])){
    include_once "complain.php";
}
elseif (isset($_GET['statistics'])){
    include_once "statistics.php";
}
elseif (isset($_GET['emp_history'])){
    include_once "emp_history.php";
}
else{
    include_once "room_mang.php";
}

include_once "footer.php";