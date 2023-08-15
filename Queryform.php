<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Section</title>
	<link rel="stylesheet" type="text/css" href="queryform.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">	
	<script src="i.js"></script>
    <!-- <script src=""></script> -->
	
</head>
<body>

	<!-- nav-bar code -->
	<nav class="navbar">
        <div class="logo">
            <a href="index.html">
            <img src="img/hopco1.png" alt=""></a>
        </div>
        <a href="#" class="toggle-btn">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>

        </a>
        <div class="navbar-links">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="..#destination">Destinations</a></li>
                <li><a href="Services/services.html">What we do?</a></li>
                <li><a href="about/about.html">About</a></li>
                <li><a href="Queryform.php">Contact Us</a></li>
				<!-- <li><a href="/Booking/booking.html">Request Booking</a></li> -->
            </ul>
        </div>
        
    </nav>

	<!-- contact section -->
	<div id="contact">
		<div class="container">
			<div class="row">
				<div class="contact-left">
					<h1 class="sub-tittle">Contact Us</h1>
					<p><i class="fa-solid fa-envelope"></i>info@hopcotravels.com</p>
          <!-- <p><i class="fa-solid fa-ticket"></i>Tickets - enquiry@hopcotravels.com</p>
          <p><i class="fa-brands fa-cc-visa"></i>Visa - visa@hopcotravels.com</p>
          <p><i class="fa-solid fa-children"></i>Holidays - holidays@hopcotravels.com</p>
            <p><i class="fa-solid fa-envelope"></i>Accounts - accounts@hopcotravels.com </p> -->
					<p><i class="fa-solid fa-phone"></i>+91-22-22642244/0022</p>
					<p><i class="fa-solid fa-location-dot"></i><span>202,Madhuban, 23,Cochin Street, 323,<br>Shahid BhagatSingh Road,Fort, Mumbai 400001.</span></p>
					<div class="socail-icons">
						<a href=""><i class="fa-brands fa-facebook"></i></a>
						<a href=""><i class="fa-brands fa-instagram"></i></a>
						<a href=""><i class="fa-brands fa-linkedin"></i></a>
					</div>
				</div>
				<div class="contact-right">
					<form  action="" method="POST">
						<input type="text" name="name" placeholder="Name" required>
						<input type="email" name="email" placeholder="Email" required>
						<textarea name="message" rows="6" placeholder="Message"></textarea>
						<!-- <button type="submit" class="btn btn2" value="submit">Submit</button> -->
                        <input type="submit" class="btn btn-2" name="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>	
	</div>
	

	<!-- google-maps code -->
	<div class="container-1">
		<h2>Find Us Here</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.9205605094094!2d72.83467707390933!3d18.934910056389235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1da56f4638d%3A0x8cfdf161de97cdd9!2sAligns%20International!5e0!3m2!1sen!2sin!4v1690449844810!5m2!1sen!2sin"
		 width="600" height="450" style="border:0;" 
		 allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

	<!-- footer code  -->
    <section>
        <footer>
            <div class="footer-container">
            <div class="footer-section">
                <h3><a href="/extra/about.html">About Us</a></h3>
                <ul>
                <li>HOPCO Travell</li>
                <li>About Our Mission</li>
                <li><a href="..#team-1">Meet the Team</a></li>
                <li>Testimonials</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Destinations</h3>
                <ul>
                <li>Popular Destinations</li>
                <li>Explore by Region</li>
                <li>Travel Guides</li>
                <li>Travel Tips</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3><a href="/extra/servicess1.html">Services</a></h3>
                <ul>
                <li><a href="/extra/servicess1.html">Flights</a></li>
                <li>Hotels</li>
                <li>Vacation Packages</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Customer Support</h3>
                <ul>
                <li><a href="extra/cont.html">Contact Us</a></li>
                <li>FAQs</li>
                <li>Terms  &amp; Conditions</li>
                <li>Privacy Policy</li>
                </ul>
            </div>
            
            </div>
            <p>All right Reserved&copy 2023 @ HOPCO TRAVELLS </p>
        </footer>
        
    </section>
	
	</body>
</html>



<?php


	error_reporting(E_ALL);
	ini_set('display_errors', 1);
    //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $message= $_POST['message'];
        $header = 'From: shubhamtiwari2043@gmail.com';



//Load Composer's autoloader
require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'shubhamtiwari2043@gmail.com';                     //SMTP username
    $mail->Password   = 'mcrafqjbkszmklcm';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('shubhamtiwari2043@gmail.com', 'Query Form');
    $mail->addAddress('shubhamtiwari2043@gmail.com', 'HOPCO');     //Add a recipient
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'HOPCO test ';
    $mail->Body    = " Sender name-> $name<br> Sender email-> $email<br> sender message->$message";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    }

?>




