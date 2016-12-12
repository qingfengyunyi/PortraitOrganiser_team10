<?php
session_start();
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/profile.css">
<link href="css/menu.css" rel="stylesheet" type="text/css"/>
<div class="container">


    <h1>User Profile</h1>

    <div class="row">
        <div class="search">
            <ul class="nav1">

                <li id="options">
                    <a href="#" >Menu</a>
                    <ul class="subnav">
                        <li><a href="logout.php">Log out</a></li>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="gallery1.html">Profile</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Contenedor -->
        <ul id="accordion" class="accordion">
            <li>
                <div class="iamgurdeep-pic">
                    <img class="image" src="img/default-user-icon-profile.png" alt=" Photo Unavailable"/>

                    <div class="username">
                        <h2><?php echo $_SESSION['fname']; ?></h2>
                        <form style="float: right">
                            <input type="submit" name="upload" value="Upload" class="btn-o">
                            <input type="submit" name="remove" value="Remove" class="btn-o">
                            <!--<a href="https://web.facebook.com/iamgurdeeposahan" target="_blank" class="btn-o"> <i class="fa fa-user-plus"></i> Upload </a>-->
                            <!--<a href="https://www.instagram.com/gurdeeposahan/" target="_blank"  class="btn-o"> <i class="fa fa-minus"></i> Remove</a>-->
                        </form>

                    </div>

                </div>

            </li>
            <li>
                <div class="link"><i class="fa fa-globe"></i>About</div>
                <ul class="submenu">
                    <li>Date of Birth: <input type="text" name="dob" value="" class="btn-o fa fa-calendar left-none "></li>
                    <li>Address: <input type="text" name="add" value="" class="btn-o fa fa-calendar left-none "></li>
                    <li>Phone: <input type="text" name="ph" value="" class="btn-o fa fa-calendar left-none "></li>
                    <li>Nickname: <input type="text" name="nname" value="" class="btn-o fa fa-calendar left-none "></li>
                    <li style="text-align: center">Description about me: <textarea rows="10" cols="37"></textarea></li>
                    <div style="text-align:center;">
                        <input type="submit" name="save" value="SAVE"  class="btn-o fa fa-calendar left-none "></li>
                        <input type="submit" name="edit" value="EDIT"  class="btn-o fa fa-calendar left-none ">
                    </div>
                </ul>
            </li>

        </ul>
    </div>





</div>