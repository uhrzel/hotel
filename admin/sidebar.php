<style>
    ul.nav.menu {
        display: flex;
        flex-direction: column;
    }
</style>
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
        <?php } else { ?>
            <li>
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