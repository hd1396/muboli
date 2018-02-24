<!DOCTYPE html>
<?php
    include("func/functions.php");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Muboli - Love of a techie</title>
        <link rel="stylesheet" href="styles/style.css" media = "all">
    </head>
    <body>
        <!--Main wrapper starts here-->
        <div class="main_wrapper">

            <!--Header wrapper starts here-->
            <div class="header_wrapper">
                <img id="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKrt9Rxgbmis-ugfPjkSHa3M2HhsJyhD_rwGMx-1Uxo-CvLpsU" alt="">
                <img id="banner" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvO7DjmJJcUxoV_g4jd5O4XqXoShRtn3nI9__gDHS9oGgehZEe_A" alt="">

            </div>
            <!--Header wrapper ends here-->

            <!--Navigation bar starts here-->
            <div class="menubar">

                <ul id="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>

                <div id="form">
                    <form method="get" action="results.php" enctype="multipart/form-data">
                        <input type="text" name="user_query" placeholder="Search for a product">
                        <input type="submit" name="search" value="Search">

                    </form>

                </div>
            </div>
            <!--Navigation bar ends here-->

            <!--Content area starts here-->
            <div class="content_wrapper">

                <div id="sidebar">
                    <div id="sidebar_title">Categories</div>

                    <ul id="cats">
                        <?php getCats();?>
                    </ul>

                    <div id="sidebar_title">Brands</div>

                    <ul id="cats">
                        <li><a href="#">HP</a></li>
                        <li><a href="#">DELL</a></li>
                        <li><a href="#">LENOVO</a></li>
                        <li><a href="#">SONY</a></li>
                        <li><a href="#">NIKON</a></li>
                        <li><a href="#">SAMSUNG</a></li>
                    </ul>

                </div>

                <div id="content_area">
                    content
                </div>

            </div>
            <!--Content area starts here-->

            <!--The footer-->
            <div id="footer">
                footer
            </div>

        </div>
        <!--Main wrapper starts here-->
    </body>
</html>
