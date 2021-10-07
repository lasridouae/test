<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
  <!-- CSS
================================================== -->
<link rel="stylesheet" href="./assets/plugin/slick/slick.css">
<link rel="stylesheet" href="./assets/plugin/slick/slick-theme.css">
  <link rel="stylesheet" href="./css/style.css">
  <link href="./assets/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/color/default.css" rel="stylesheet" id="color_theme">

</head>
<body>
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>


    <section class="section page-title bg-fixed bg-cover" style="background-image: url(./assets/img/home-banner.jpg);">
      <div class="container">
          <div class="row align-items-center justify-content-center">
              <div class="col-md-6">
                  <div class="service-banner">
                      <h3>Contactez-nous</h3>
                      <ul>
                      <li><a href="index.php">Accueil</a></li>
                      <li>Contactez-nous</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <header class="header">
        <div class="top-bar theme-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8 text-center text-md-left">
                        <div class="mail">ledonemaroc@gmail.com | Tél: +212 5 24 05 24 04</div>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-right">
                        <div class="social-icons-light">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                
                <a class="navbar-brand" href="index.php">
                    <img src="./assets/img/logo.png" /> 
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCropar" aria-controls="navbarCropar" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarCropar">
                    <ul class="navbar-nav align-items-start align-items-lg-center">
                        <li><a class="nav-link  active " href="index.php">Accueil</a></li>
                        <li><a class="nav-link " href="about.php">Qui sommes-nous</a></li>
                        <li><a class="nav-link " href="https://www.shop.ledonemaroc.com/">Produits et services</a></li>
                        <li><a class="nav-link " href="blog.php">Blog</a></li>
                        <li><a class="nav-link " href="contact.php">Contactez-nous</a></li>
                        <li><a class="nav-link nav-link-btn m-btn m-btn-theme" href="rejoindre.php">Nous rejoindre</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">
              <div class="wow fadeInUp col-md-6 col-sm-12" data-aos-delay="0.4s">
                   <div id="google-map">
 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13586.236714149129!2d-8.0646159!3d31.645918!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x85942268c0d19e2b!2sLED%20ONE%20MAROC!5e0!3m2!1sfr!2sma!4v1633336487210!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                   </div>
                   
              </div>    
  
              <div class="col-md-6 col-sm-12">
                        <div class="row text-center">
                         <div class="col-lg-12">
                           <h1 class="section-sub-title">Contactez nous</h1>
                         </div>
                     </div><!--/ Title row end -->
               
  
                   <!-- CONTACT FORM -->
                   <form action="mail.php" method="post" class="wow fadeInUp" id="contact-form" role="form" data-aos-delay="0.8s">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                           <input type="nom" class="form-control" id="cf-nom" name="nom" placeholder="Nom" required data-error="Please enter your name">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="prenom" class="form-control" id="cf-prenom" name="prenom" placeholder="Prenom"  >
                      </div>
                      </div>
                        <div class="col-md-6 col-sm-6">
                             <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                        </div>
  
                        <div class="col-md-12 col-sm-12">
                             <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">
  
                             <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="write your message "></textarea>
  
                             <button type="submit" class="form-control" 
                             name="submit"
                            id="cf-submit" >Send Message</button>
                            <?php 
                            $Message = "";
                            if(isset($_GET['error']))
                            {
                              $Message = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Message.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                              $Message = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Message.'</div>';
                            }
                        
                        ?>
                        </div>
                       
                   </form>
              </div>
  
         </div>
    </div>
  </section> 
 
  <!--------------------- Contact Footer Section --------------------->
  
  <section id="footer">

    <footer>
      <div class="content">
        <div class="top">
          </div>
        <div class="link-boxes">
          <ul class="box  initial">
              <div class="logo-details">
                  <div class="d-flex align-items-center"><a class="navbar-brand py-1" href="#"><img src="./assets/img/fav.png" alt="Directory logo" style="    width: 6em;
                    margin-left: 1em;
                    margin-top: -3em;"></a>
                </div>
                </div>
                <p>LedOne Maroc est une entreprise spécialisée dans l’importation et la distribution de solutions d’éclairage et de tout matériel électrique. 
                </p>
                <div class="social"><span class="body2">Suivez-nous sur</span> <i class="module-icon socials-footer"> 
                  <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
                  <a href="" target="_blank"><i class="fa fa-instagram"></i></a> 
                  
                  <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> 

                  <a href="#" target="_blank"><i class="fab fa-twitter"></i></a></i>
                </div>
  
          </ul>
          <ul class="box">
            <li class="link_name">Services</li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Lorem ipsum</a></li>
  
          </ul>
      <ul class="box">
            <li class="link_name"> Juridique</li>
            <li><a href="#">Condition d'utilisation</a></li>
            <li><a href="#">Politique de confidentialité</a></li>
            <li><a href="#">Politique de cookies</a></li>
            <li><a href="#">Politique de qualité</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Contact</li>
            <li><a href="#">ledonemaroc@gmail.com</a></li>
            <li><a href="#">+212 5 25 28 74 26</a></li>
            <li><a href="#">+212 5 24 05 24 04</a></li>
            <li><p href="#"> 
            N°67, Cité Mohammedia, Unité 5, Rue Ben Driss, Marrakech, Maroc </p></li>
          </ul>
        </div>
        
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
          <a href="#" class="scroll-up" style=" color: white;
          font-size: 298%;
          margin-left: 1594%;"><i class="fa fa-angle-up"></i></a>
        </div>

      </div>
          <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">Copyright © 2021 - LedOne Maroc by <a href="https://rigel-network.com/" target="_https://rigel-network.com/">Rigel Network</a></span>
          </div>
        </div>
    </footer>

  </section>

   <!-- FontAwesome -->
   <script src="https://kit.fontawesome.com/21508b4b05.js" crossorigin="anonymous"></script> 
</body>
</php>