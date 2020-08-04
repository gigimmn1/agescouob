<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UOB &mdash;Université Omar Bongo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link href="{{ asset('bienvenue/fonts/icomoon/style.css') }}" rel="stylesheet">

    <link href="{{ asset('bienvenue/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bienvenue/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('bienvenue/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bienvenue/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bienvenue/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bienvenue/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bienvenue/css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('bienvenue/fonts/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('bienvenue/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('bienvenue/css/style.css') }}" rel="stylesheet">
  

    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" cx>
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><img src="img/UOB2.png" width="120" ></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
              @if (Route::has('login'))
              @auth
                <li><a  href="{{ url('/home') }}" class="nav-link">Home</a></li>
                @else
                <li><a href="{{ route('login') }}" class="nav-link">s'identifier</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="nav-link">S'inscrire</a></li>
                @endif
             @endauth
             @endif
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0    p-0">
                        <li class="cta"><a href="#contact-section" class="nav-link"><span>Documentation</span></a></li>
                    </ul>
                </nav>
                  <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
         </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('img/UOB.jpg');"  >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Université Omar Bongo</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Bienvennue à l'Université Omar Bongo.</p>
                  

       
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
   

    

   


    



   
    
     
    

  
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>