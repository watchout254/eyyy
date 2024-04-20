<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRADS | Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/contact.css">
    <style>
        /* Additional custom styles if needed */
    </style>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
        <header><img src="IMAGES/frads.PNG" alt="logo image" class="logo" height="70" width="70"> SPA</header>

         <ul>
           <li><a href="index.html"><i class="fas fa-home"></i>HOME</a></li>
            <li><a href="plans&pricing.html"><i class="fab fa-angellist"></i>PLANS&PRICING</a></li>
           <li><a href="book_online.php"><i class="fas fa-building"></i>BOOK ONLINE</a></li>
           <!-- <li><a href="sign_up.php"><i class="fas fa-sign-in-alt"></i>SIGN UP</a></li>
            <li><a href="log_in.php"><i class="fas fa-arrow-alt-circle-right"></i>LOG IN</a></li>
            <li><a href="admin.php"><i class="fas fa-user-shield"></i>ADMIN</a></li>
            <li><a href="employee.php"><i class="fas fa-address-card"></i>EMPLOYEE</a></li> -->
            <li><a href="faqs.php"><i class="fas fa-question"></i>FAQS</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-volume"></i>CONTACT US</a></li>
        </ul>
    </div>

    <section class="container">
        <br>
        <br>
        <p>
            <img src="IMAGES/frads.PNG" alt="logo image" class="centre" width="150"> <br>
        </p> 

        <section class="mb-4">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>

            <?php
                session_start();
                if(isset($_SESSION['success'])){
                    echo '<p class="success">'.$_SESSION['success'].'</p>';
                    unset($_SESSION['success']);
                }
                if(isset($_SESSION['error'])){
                    echo '<p class="error">'.$_SESSION['error'].'</p>';
                    unset($_SESSION['error']);
                }
            ?>
            
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-text">
                        <h3>Reach out now!</h3>
                        <p>Find me as soon as possible as you inquire and make your bookings</p>
                        <div class="ct-item">
                            <div class="ct-text">
                                <h5>Address</h5>
                                <p>Utawala, Nairobi</p>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>+254115129764</li>
                                </ul>
                            </div>
                        </div>
                        <button id="callButton" class="btn btn-primary">Call Me Now</button>
                        <script type="text/javascript">
                            document.getElementById("callButton").addEventListener("click", function() {
                                window.location.href = "tel:+254115129764"; // Replace +1234567890 with your phone number
                            });
                        </script>
                        <br>
                        <button onclick="openWhatsAppChat()" class="btn btn-success">Click Here to Chat on WhatsApp</button>
                        <script>
                            function openWhatsAppChat() {
                                // Replace '1234567890' with your WhatsApp number
                                var phoneNumber = '+254115129784';
                                // You can modify the message as needed
                                var message = 'Hello, I would like to book a spa massage.';
                                // Construct the WhatsApp API link
                                var whatsappURL = 'https://wa.me/' + phoneNumber + '?text=' + encodeURIComponent(message);
                                // Open the WhatsApp chat window
                                window.open(whatsappURL, '_blank');
                            }
                        </script>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.262844680663!2d36.9623975!3d-1.2845056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f6dd37ab958bd%3A0x44c2d951993bd763!2sQuickmart%20Utawala!5e0!3m2!1sen!2ske!4v1712389298162!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <script src="https://kit.fontawesome.com/1cfb698203.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
