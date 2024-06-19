<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />




</head>

<body>

    

    <section class="header">

        <a href="home.php" class="logo">TOUR&TRAVEL<span class="material-symbols-outlined">flightsmode</span><a>

                <nav class="navbar">

                    <a href="home.php">HOME</a>
                    <a href="about.php">ABOUT</a>
                    <a href="package.php">PACKAGE</a>
                    <a href="book.php">BOOK</a>
                    <a href="logout.php">LOGOUT</a>

                </nav>

                <div id="menu-btn" class="fas fa-bars"> </div>



    </section>



    

    <div class="heading" style="background:url(images/bookk.jpg) no-repeat">

        <h1>BOOK WITH US</h1>

    </div>

    <section class="booking">
        <h1 class="heading-title">BOOK YOUR TRIP !</h1>

        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>NAME :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputbox">
                    <span>EMAIL :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>

                <div class="inputbox">
                    <span>PHONE NUMBER :</span>
                    <input type="number" placeholder="enter your phone number" name="phone">
                </div>

                <div class="inputbox">
                    <span>ADDRESS :</span>
                    <input type="text" placeholder="enter your adress" name="address">
                </div>



                <div class="inputbox">
                    <span>HOLIDAY DESTINATION :</span>
                    <input type="text" placeholder="enter place you want to visit" name="location">
                </div>

                <div class="inputbox">
                    <span>GUESTS NUMBER :</span>
                    <input type="number" placeholder="enter number of guests" name="guests">

                </div>

                <div class="inputbox">
                    <span>ARRIVAL DATE :</span>
                    <input type="date" name="arrivals">
                </div>

                <div class="inputbox">
                    <span>LEAVING DATE :</span>
                    <input type="date" name="leaving">
                </div>



            </div>


            <input type="submit" value="submit" class="btn" name="send">



        </form>

    </section>













    

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>HOME</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>ABOUT</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>PACKAGE</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>BOOK</a>

            </div>

            <div class="box">

                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ASK QUESTION</a>
                <a href="#"><i class="fas fa-angle-right"></i>ABOUT US</a>
                <a href="#"><i class="fas fa-angle-right"></i>PRIVACY POLICY</a>
                <a href="#"><i class="fas fa-angle-right"></i>TERMS OF USE</a>

            </div>

            <div class="box">

                <h3>CONTACT INFO</h3>
                <a href="#"><i class="fas fa-phone"></i> +91 7986586768</a>
                <a href="#"><i class="fas fa-phone"></i> +91 8968110580</a>
                <a href="#"><i class="fas fa-envelope"></i> VANSHM510@GMAIL.COM</a>
                <a href="#"><i class="fas fa-map"></i> 3A, VRINDAVAN GARDEN </a>

            </div>

            <div class="box">

                <h3>FOLLOW US</h3>
                <a href="#"><i class="fab fa-facebook"></i> FACEBOOK</a>
                <a href="#"><i class="fab fa-twitter"></i> TWITTER</a>
                <a href="#"><i class="fab fa-instagram"></i> INSTAGRAM</a>
                <a href="#"><i class="fab fa-linkedin"></i> LINKEDIN</a>

            </div>




        </div>
        <div class="credit"> created by <span> vansh mahajan</span> | all rights reserved ! </div>

    </section>





    





    

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



    

    <script src="js/script.js"></script>

</body>

</html>