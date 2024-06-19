<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styless.css">

    <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />




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



    

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/slide1.jpg) no-repeat">
                    <div class="content">
                        <span>JOBS FILL YOUR POCKETS </span>
                        <h3>ADVENTURE FILLS YOUR SOUL</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>

                </div>

                <div class="swiper-slide slide" style="background:url(images/land2.png) no-repeat">
                    <div class="content">
                        <span>TRAVEL AROUND THE WORLD</span>
                        <h3>AFFORDABLY</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>

                </div>

                <div class="swiper-slide slide" style="background:url(images/slide3.jpg) no-repeat">
                    <div class="content">
                        <span>A JOURNEY OF A THOUSAND MILES</span>
                        <h3>BEGINS WITH A SINGLE STEP</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>

                </div>


            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>






    <section class="services">
        <h1 class="heading-title">OUR SERVICES</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/mountain.png" alt="">
                <h3>ADVENTURE</h3>
            </div>

            <div class="box">
                <img src="images/placeholder.png" alt="">
                <h3>TOUR GUIDE</h3>
            </div>

            <div class="box">
                <img src="images/trekking.png" alt="">
                <h3>TREKKING</h3>
            </div>

            <div class="box">
                <img src="images/bonfire.png" alt="">
                <h3>CAMP FIRE</h3>
            </div>

            <div class="box">
                <img src="images/jeep.png" alt="">
                <h3>OFF ROADING</h3>
            </div>

            <div class="box">
                <img src="images/tent.png" alt="">
                <h3>CAMPING</h3>
            </div>

        </div>


    </section>





    <section class="home-about">

        <div class="image">
            <img src="images/aboutus.jpg" alt="">
        </div>

        <div class="content">
            <h3>ABOUT US</h3>
            <p>Our team is made up of passionate travelers who have a wealth of knowledge and experience in the travel
                industry. From our expert travel advisors to our friendly customer service team, we are all committed to
                making your travel experience unforgettable.</p>
            <a href="about.php" class="btn">read more</a>
        </div>


    </section>



    <section class="home-packages">

        <h1 class="heading-title">OUR PACKAGES</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/taj.jpg" alt="">

                </div>

                <div class="content">
                    <h3>TAJ MAHAL</h3>
                    <P>Hanging out in Agra, capturing some beautiful architecture around the city</P>
                    <a href="book.php" class="btn">BOOK NOW</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/goa.png" alt="">

                </div>

                <div class="content">
                    <h3>GOA</h3>
                    <P>Goa , Where the sun, sea, and serenity come together</P>
                    <a href="book.php" class="btn">BOOK NOW</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/mountainhome.jpg" alt="">

                </div>

                <div class="content">
                    <h3>TREKKING</h3>
                    <P>Its not the mountain we conquer, but ourselves</P>
                    <a href="book.php" class="btn">BOOK NOW</a>
                </div>
            </div>


        </div>

        <div class="load-more"><a href="package.php" class="btn">LOAD MORE</a></div>


    </section>

    <section class="home-offer">
        <div class="content">
            <h3>UPTO 50% OFF</h3>
            <P>Discounts you won t find anywhere else</P>
            <a href="book.php" class="btn">BOOK NOW</a>

        </div>
    </section>

    
    <div id="chatbot-icon">
        <i class="fas fa-headset"></i>
    </div>

    
    <div id="chatbot-window">
        <div class="chat-header">
            <span id="user-greeting">Hello, [User's Name]</span>
            <button id="close-chat">Close</button>
        </div>
        <div class="chat-body" id="chat-body">
            <div class="message-bot">Welcome! How can I assist you today?</div>
        </div>
        <div class="chat-footer">
            <input type="text" id="user-input" placeholder="Type your message...">
            <button id="send-btn">Send</button>
        </div>
    </div>


    

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

    <script src="js/scripttt.js"></script>

</body>

</html>