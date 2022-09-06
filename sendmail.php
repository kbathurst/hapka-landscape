<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Hapka Landscape Design">
    <meta name="keywords" content="Hapka Landscape Design">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="images/logo.png" />
    <!-- Styles -->
	<title>Hapka Landscape Design</title>
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
    
    <div>
        <h2>   
        <?php 
            if (isset($_REQUEST['email'])) {
                $admin_email = "bathursk@gmatc.matc.edu";

                $name = $_REQUEST['name'];
                $email = $_REQUEST['email'];
                $phone = $_REQUEST['phone'];
                $subject = $_REQUEST['subject']; 
                $message = $_REQUEST['message'];

                $body = "From: " . $name . "\n";
                $body .= "Email: " . $email . "\n";
                $body .= "Phone: " . $phone . "\n";
                $body .= "Subject: " . $subject . "\n";
                $body .= "Message: " . $message;
                

                $headers = "From: " . $name . " <" . $email . "> \r\n";
                $headers .= "CC: " . $name . " <" . $email . ">";

                mail($admin_email, $subject, $body, $headers);

                echo "Thank you for contacting us! One of our team members will reach out to you soon.";
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/contact.js"></script>
</body>
</html>
</html>