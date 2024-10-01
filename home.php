<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSN Infintie Trails</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   
</head>
<body>

<!-- Background Video & Header -->

    <div class="banner">
        <video src="./files/bgvid.mp4" type="video/mp4" autoplay muted loop></video>
    
    <!-- Header -->

    <div class="content" id="home"> 
        <nav>
            <img src=".\logo.png" class="logo" alt="Logo" title="NSN INFINITE TRAILS">
            
            <ul class="navbar">
                <li>
                    <a href="#home">Home</a>
                    <a href="#locations">Locations</a>
                    <a href="#package">Packages</a>
                    <a href="./about.html">About Us</a>
                    <a href="./Contact Us.html">Contact Us</a>
                    <a href="https://forms.gle/byYYDWUTS9psyRRv7">Register</a>
                    
                </li>
            </ul>
        </nav>
 
        <div class="title">
        <h3 class="display-4">Hello, <?=$_SESSION['fname']?></h3>
            <h1>NSN INFINITE TRAILS</h1>
            <p>Plan your trip with us and travel around the world with the most affordable packages!</p>
            <a href="#package" class="button">EXPLORE!</a>
        </div>
        </div>
    </div>

<!-- Services -->

<section class="container">
    <div class="text">
        <h2>We have the best services available for you!</h2>
    </div>
    <div class="rowitems">
        <div class="container-box"><a href="flightservices.html">
        <div class="container-image">
           <img src="./files/1a.jpg" alt="Flight Services">
        </div>
            <h4 style="color: black;">Flight Services</h4>
            <p>Arrival and Departure</p></a>
        </div>
    
        <div class="container-box" >
        <a href= "foodservices.html">
        <div class="container-image">
           <img src="./files/2a.jpg" alt="Food Services">
        </div>
            <h4 style="color: black;">Food Services</h4>
            <p>Catering</p></a>
        </div>

        <div class="container-box"><a href="TRANSPORT SERVICE.html">
        <div class="container-image">
            <img src="./files/3a.jpg" alt="Travel Services">
        </div>
            <h4 style="color: black;">Travel Services</h4>
            <p>Pick-up/drop</p></a>
        </div>

        <div class="container-box"><a href="hotelservices.html">
        <div class="container-image">
            <img src="./files/4a.jpg" alt="Hotel Services">
        </div>
            <h4 style="color: black;">Hotel Services</h4>
            <p>Check-in/out</p></a>
        </div>

    </div>

    </div>

</section>

<!-- Locations -->

<section class="locations" id="locations">
    <div class="package-title">
        <h2>Locations</h2>
    </div>

    <div class="location-content">
        
        <a href="./locations.html#kashmir" target="_blank"><div class="col-content">
            <img src="./files/l1.jpg" alt="">
            <h5>India</h5>
            <p>Kashmir</p>
        </div></a>

       

        <a href="./locations.html#istanbul" target="_blank"><div class="col-content">
            <img src="./files/l2.jpg" alt="">
            <h5>Turkey</h5>
            <p>Istanbul</p>
        </div></a>

        <a href="./locations.html#paris" target="_blank"><div class="col-content">
            <img src="./files/l3.jpg" alt="">
            <h5>France</h5>
            <p>Paris</p>
        </div></a>

        <a href="./locations.html#bali" target="_blank"><div class="col-content">
            <img src="./files/l4.jpg" alt="">
            <h5>Indonesia</h5>
            <p>Bali</p>
        </div></a>

        <a href="./locations.html#dubai" target="_blank"><div class="col-content">
            <img src="./files/l5.jpg" alt="">
            <h5>United Arab Emirates</h5>
            <p>Dubai</p>
        </div></a>

        <a href="./locations.html#geneva" target="_blank"><div class="col-content">
            <img src="./files/l6.jpg" alt="">
            <h5>Switzerland</h5>
            <p>Geneva</p>
        </div></a>

        <a href="./locations.html#port-blair" target="_blank"><div class="col-content">
            <img src="./files/l7.jpg" alt="">
            <h5>Andaman & Nicobar</h5>
            <p>Port Blair</p>
        </div></a>

        <a href="./locations.html#rome" target="_blank"><div class="col-content">
            <img src="./files/l8.jpg" alt="">
            <h5>Italy</h5>
            <p>Rome</p>
        </div></a>

    </div>
</section>

<!-- Packages -->

<section class="package" id="package">
    <div class="package-title">
        <h2>Packages</h2>
    </div>

    <div class="package-content">
        
        <div class="box">
            <div class="image">
                <img src="./files/p1.jpg" alt="">
                <h3>Rs.9,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Bronze</h4>
                <ul class="pac-details">
                    <li>2 Star Hotel</li>
                    <li>5 Nights Stay</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="./files/p2.jpg" alt="">
                <h3>Rs.19,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Silver</h4>
                <ul class="pac-details">
                    <li>3 Star Hotel</li>
                    <li>7 Nights Stay</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./files/p3.jpg" alt="">
                <h3>Rs.29,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Gold</h4>
                <ul class="pac-details">
                    <li>4 Star Hotel</li>
                    <li>10 Nights Stay</li>
                    <li>Breakfast and Dinner</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./files/p4.jpg" alt="">
                <h3>Rs.39,999/-</h3>
            </div>
        
        <div class="dest-content">
            <div class="location">
                <h4>Platinum</h4>
                <ul class="pac-details">
                    <li>5 Star Hotel</li>
                    <li>14 Nights Stay</li>
                    <li>Breakfast, Lunch and Dinner</li>
                    <li>Bornfire</li>
                    <li>Free photo Session</li>
                    <li>Friendly Tour Guide</li>
                    <li>24/7 Customer Help Center</li>
                </ul>
            </div>
        </div>
        </div>

    </div>

</section>

<!-- Footer -->

<section class="footer">
    <div class="foot">
        <div class="footer-content">
            
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfFa5DbwbxutXdny4pFggb7_boeBtTwUw8o81xovmKbcGORLA/viewform">Register</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="./Contact Us.html">Contact Us</a></li>
                </ul>
            </div>

            <div class="footlinks">
                <h4>Connect</h4>
                <div class="social">
                    <a href="https://www.instagram.com/xzhil_10" target="_blank"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://www.github.com/ezhil1210" target="_blank"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            
        </div>
    </div>

    <div class="end">
        <p>Copyright © 2023 NSN Infinite Trails All Rights Reserved.<br>Website developed by: Kavin, Prajan, Ezhil</p>
    </div>
</section>


 
</body>
</html>



<?php }else {
	header("Location: index.html");
	exit;
} ?>