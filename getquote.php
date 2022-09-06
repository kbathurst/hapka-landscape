<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Hapka Landscape Design">
    <meta name="keywords" content="Hapka Landscape Design">
	<title>Get A Quote - Hapka Landscape Design</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="images/logo.png" />
    <!-- Styles -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/bootstrap-styles.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/slideshow.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Nanum+Myeongjo&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <h1 class="title"><a href="index.html">Hapka Landscape &amp; Design</a></h1>
        <nav class="navbar navbar-expand-sm navbar-light bg-transparent">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <div class="nav-container collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="main-nav nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="testimonials.html">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="work.html">Work With Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="secondary-page-header">
        <h2>Get A Quote</h2>
    </section>

    <section id="get-quote-container">
        
        <div class="flex-item" id="get-quote-form">
            <p id="quote-headline">We are excited to assess your landscaping needs! Please fill out the form below and one of our team members will be in touch.</p>
            <form action="getquote.php" method="post" name="quote_form" id="quote_form">
                <fieldset>
                    <p><strong>Your contact information:</strong></p>
                    <input type="text" name="firstname" class="quote-input" id="firstname" placeholder="First Name" value="<?php echo $_REQUEST['firstname'] ?>">
                    <input type="text" name="lastname" class="quote-input" id="lastname" placeholder="Last Name" value="<?php echo $_REQUEST['lastname'] ?>"><br>
                    <input type="email" name="email" class="quote-input" id="email" placeholder="Email" value="<?php echo $_REQUEST['email'] ?>"><br>
                    <input type="phone" name="phone" class="quote-input" id="phone" placeholder="Phone Number" value="<?php echo $_REQUEST['phone'] ?>"><br>
                    <input type="zip" name="zip" class="quote-input" id="zip" placeholder="Zip Code" value="<?php echo $_REQUEST['zip'] ?>">
                </fieldset>
                <fieldset>
                    <p><strong>Which services are you interested in?</strong></p>
                        <input type="checkbox" id="season-maintenance" name="season-maintenance" value="Season Maintenance">
                        <label for="season-maintenance">Season-long Residential Maintenance – weekly/ongoing mowing, weeding, pruning, etc.</label><br>
                        <input type="checkbox" id="onetime-maintenance" name="onetime-maintenance" value="One Time Maintenance">
                        <label for="onetime-maintenance">One-time Residential Maintenance – yard cleanup, mulching, pruning, etc.</label><br>
                        <input type="checkbox" id="seasonal-color" name="seasonal-color" value="Seasonal Color">
                        <label for="seasonal-color">Seasonal Color - four seasons containers and planting bed displays</label><br>
                        <input type="checkbox" id="lawn-care" name="lawn-care" value="Lawn Care">
                        <label for="lawn-care">Lawn Care – fertilization, weed control, lawn aeration, insect/disease management</label><br>
                        <input type="checkbox" id="renovation" name="renovation" value="Renovation">
                        <label for="renovation">Construction or Renovation – patios, walls, walkways, landscape lighting, etc.</label>
                </fieldset>
                <fieldset>
                    <p><strong>Please tell us a little bit about your landscaping needs:</strong></p>
                    <input type="text" name="subject" class="quote-input" id="subject" placeholder="subject" value="<?php echo $_REQUEST['subject'] ?>"><br>
                    <textarea id="message" name="message" rows="4"><?php echo $_REQUEST['message'] ?></textarea>
                </fieldset>
                <fieldset>
                    <input type="submit" id="submit" value="Get a quote">
                </fieldset>
            </form>
    </div>
    </section>

    <div>
        <h2>   
        <?php 
            if (isset($_REQUEST['email'])) {
                $admin_email = "bathursk@gmatc.matc.edu";

                $name = $_REQUEST['firstname'] . "" . $_REQUEST['lastname'];
                $email = $_REQUEST['email'];
                $phone = $_REQUEST['phone'];
                $zip = $_REQUEST['zip']; 
                $message = $_REQUEST['message'];

                $body = "From: " . $name . "\n";
                $body .= "Email: " . $email . "\n";
                $body .= "Phone: " . $phone . "\n";
                $body .= "Zip: " . $zip . "\n";
                $body .= "Message: " . $message;
                

                $headers = "From: " . $name . " <" . $email . "> \r\n";
                $headers .= "CC: " . $name . " <" . $email . ">";

                mail($admin_email, $body, $headers);

                echo "Thank you for getting in touch! One of our team members will be in touch shortly.";
                }
                else {
                    echo "There has been an error - please try again.";
                }
         ?>
         </h2>  
        </div>
    
<footer>
    <p>Hapka Landscape Design &copy; 2022</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/getquote.js"></script>
</body>
</html>