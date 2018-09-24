<?php 
    date_default_timezone_set('America/New_York');
    include 'comments.inc.php';
 ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>itinere Africa Community</title>

    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" type="text/css" href="css/community.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- custome animations -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->


    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100;
        }
    }
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">

            <a class="navbar-brand navbar-right" href="./index.html">itinere Africa</a>

            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comments.php">Community</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="intro-header">
        <div class="container">
            <div class="intro-message" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <h1>Welcome To The itinere Community</h1>
                <h3 class="text-capitalize">Where your can build relationships. ask questions. and learn from one another.</h3>
                <hr class="intro-divider"> 
            </div>
        </div>
    </header>

      <?php 

    echo"<section class='content-section-b'>
      <div class='container-fluid'>
        <div class='row'>
          
            <div class='col-sm-12'>
              <hr class='section-heading-spacer'>
               <div class='clearfix'></div>
                <h2 class='section-heading text-sm-center' id='tab-title'>Join The Community</h2>
                  <h3 class ='section-heading text-sm-center small' id ='sub-title'> Here you can ask questions & post comments on our products</h3>
              
                  <form class ='text-sm-center' id ='form-box' method='POST' action='".setComments()."'>
                    <input type='hidden' name='uid' value='Anonymous'>
                    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                    
                    <textarea name='message'></textarea>
                   
                    <br>
                    <br>
                    <button type='submit' class='btn btn-light' style='background-color:/*#1DE9B6*/ #C8E6C9;' id='submit-comment' name='commentSubmit'>Submit Your Comment</button>
                  </form>
              </div>
        </div>
     </div>
        <!-- /.container -->

    </section>";

   // "<form>
        
        //<input type='hidden' name='uid' value='Anonymous'>

        //<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        //<textarea name='message'></textarea>
        //<br>

        //<button name ='submit' type='button'>Comment</button>

    //</form>";

     ?>




    <footer>
        <div class="container">
            <ul class="list-inline text-sm-center">
                <li class="list-inline-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="index.html">About</a>
                </li>
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="index.html">Services</a>
                </li>
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="index.html">Contact</a>
                </li>

                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="comments.php">Community</a>
                </li>
            </ul>
            
          <br>
            <p class="copyright text-muted small text-sm-center">Copyright &copy; itinere Africa 2017. All Rights Reserved</p>
            <br>
          
            <p class="copyright text-muted small text-sm-center" id='rob'>Designed & Developed By <a href="https://www.rob-beauchamp.com" target="_blank">Robert Beauchamp</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    


    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> <!-- AOS animatons -->


<!-- custome AOS animations -->
<script type="text/javascript">
    AOS.init({
  duration: 1200,
 })
</script>




 </body>
</html>
