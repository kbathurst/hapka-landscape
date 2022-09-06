<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Hapka Landscape Design">
    <meta name="keywords" content="Hapka Landscape Design">
	<title>Employment Application - Hapka Landscape Design</title>
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
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
        <h2>Employment Application</h2>
    </section>

    <section id="get-quote-container">
        
        <div class="flex-item" id="get-quote-form">
            <p id="quote-headline">Please provide us with some preliminary information. One of our team members will reach out to you in 1-5 business days. We look forward to meeting you!</p>
            <form action="apply.php" method="post" name="apply_form" id="apply_form">
                <fieldset>
                    <p><strong>Your contact information:</strong></p>
                    <input type="text" name="firstname" class="quote-input" id="firstname" placeholder="First Name">
                    <span>*</span>
                    <input type="text" name="lastname" class="quote-input" id="lastname" placeholder="Last Name"><span>*</span><br>
                    <input type="email" name="email" class="quote-input" id="email" placeholder="Email"><span>*</span><br>
                    <input type="phone" name="phone" class="quote-input" id="phone" placeholder="Phone Number"><span>*</span><br>
                </fieldset>
                <fieldset>
                    <p><strong>What type of work are you interested in?</strong></p>
                        <input type="checkbox" id="seasonal-maintenance" name="seasonal-maintenance" value="Seasonal Maintenance">
                        <label for="seasonal-maintenance">Seasonal Maintenance - mowing, pruning, watering, mulching, etc.</label><br>
                        <input type="checkbox" id="flower-planting" name="flower-planting" value="Flower Planting">
                        <label for="flower-planting">Seasonal Flower Planting</label><br>
                        <input type="checkbox" id="plant-care" name="plant-care" value="Plant Care">
                        <label for="plant-care">Plant Care - organizing and caring for plants in the greenhouse</label><br>
                        <input type="checkbox" id="year-maintenance" name="year-maintenance" value="Year Round Maintenance">
                        <label for="year-maintenance">Year Round Maintenance and/or Construction (Full Time)</label><br>
                        <input type="checkbox" id="management" name="management" value="Management">
                        <label for="management">Project Management (Full Time)</label>
                </fieldset>
                <fieldset>
                    <p><strong>What is your desired pay?</strong></p>
                    <input type="text" name="pay" class="quote-input" id="pay" placeholder="Hourly Wage"><span>*</span><br>
                </fieldset>
                <fieldset>
                    <p><strong>When can you start work?</strong></p>
                    <input type="text" id="datepicker"/><br>
                </fieldset>
                <fieldset>
                    <input type="submit" id="submit" value="Submit">
                </fieldset>
            </form>
    </div>
    </section>
    <div>
        <h2>   
        <?php 
            if (isset($_REQUEST['email'])) {
                $admin_email = "bathursk@gmatc.matc.edu";

                $subject = "Job Application";
                $name = $_REQUEST['firstname'] . "" . $_REQUEST['lastname'];
                $email = $_REQUEST['email'];
                $phone = $_REQUEST['phone'];

                $body = "From: " . $name . "\n";
                $body .= "Email: " . $email . "\n";
                $body .= "Phone: " . $phone . "\n";
                

                $headers = "From: " . $name . " <" . $email . "> \r\n";
                $headers .= "CC: " . $name . " <" . $email . ">";

                mail($admin_email, $subject, $body, $headers);

                echo "Thank you for your information. One of our team members will reach out to you soon!";
                }
                else {
                    echo "There has been an error";
                }
         ?>
         </h2>  
        </div> 
<footer>
    <p>Hapka Landscape Design &copy; 2022</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/getquote.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/apply.js"></script>

</body>
</html>