
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">

        <div class="profile-usertitle">

        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
    <?php
        if (isset($_GET['dashboard'])){ ?>
            <li class="active">
                <a href="../home.php"><em class="fa fa-home">&nbsp;</em>
                    Home
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="../home.php"><em class="fa fa-home">&nbsp;</em>
                    Home
                </a>
            </li>


        <?php }
        if (isset($_GET['reservation'])){ ?>
            <li class="active">
            <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php }
        if (isset($_GET['room_mang'])){ ?>
            <!-- <li class="active">
                <a href="index.php?room_mang"><em class="fa fa-bed">&nbsp;</em>
                    Manage Rooms
                </a>
            </li> -->
        <?php } else{?>
            <!-- <li>
            <a href="index.php?room_mang"><em class="fa fa-bed">&nbsp;</em>
                    Manage Rooms
                </a>
            </li> -->

        <?php }
        ?>

        <?php
        if (isset($_GET['statistics'])){ ?>

        <?php } else{?>
        <li>
           

            </a>
        </li>
<?php }?>

        
    </ul>
</div><!--/.sidebar-->