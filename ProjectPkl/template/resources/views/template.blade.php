<!doctype html>
<html>
<head>
    <title>Home</title>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{'css/style.css' }}">
    
</head>
<body>
    <nav class=" container-fluid  col-lg-12 navbar fixed-top navbar-expand-lg navbar-light">
 
        <a class="navbar-brand" href="/" style="margin-left: 50px;">
            <img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" width="50" height="50" alt="#"> Corporation
        </a>
     
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
          <ul id="navigation" class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">Contact</a>
                </li>
          </ul>
     
       </div>
    </nav>
    <!-- Content Part -->
    @yield('content')
    
    <!-- Footer Section -->
<footer id="footer" class="footer-1">
    <div class="main-footer widgets-dark typo-light">
        <div class="container">
            <div class="row">
      
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget subscribe no-box">
                        <h5 class="widget-title">COMPANY NAME<span></span></h5>
                        <p> This company is bla bla Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum sit voluptatibus dignissimos dolores animi error aperiam atque, </p>
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget no-box">
                        <h5 class="widget-title">Quick Links<span></span></h5>
                        <ul class="thumbnail-widget">
                        <li>
                        <div class="thumb-content"><a href="#.">Home</a></div>	
                        </li>
                        <li>
                        <div class="thumb-content"><a href="#.">About</a></div>	
                        </li>
                        <li>
                        <div class="thumb-content"><a href="#.">Products</a></div>	
                        </li>
                        <li>
                        <div class="thumb-content"><a href="#contact">Contact</a></div>	
                        </li>
                        </ul>
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget no-box">
                        <h5 class="widget-title">Get Started<span></span></h5>
                        <p>Get your landing page now.</p>
                        <a class="btn" href="#." target="_blank">Register Now</a>
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-6 col-md-3" id="contact">
                    <div class="widget no-box">
                        <h5 class="widget-title">Contact Us<span></span></h5>
                        <ul class="thumbnail-widget">
                        <li>
                        <div class="thumb-content">Call Us :&nbsp;&nbsp;<a href="tel:0812-2316-7142">+62 8122 3167 142</a></div>	
                        </li>
                        <li>
                        <div class="thumb-content "><a href="mailto:support@company.com">support@company.com</a></div>	
                        </li>
                        </ul>
                    </div>
                </div>
    
            </div>
    </div>
</div>
      
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright Company Name © 2020. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>