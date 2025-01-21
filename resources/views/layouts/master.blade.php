<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Totpor</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">




    

  </head>
  <body>
    <!-- Navbar -->
    <header class="navbar">
      <div class="container">
        <div class="logo">Totpor</div>
        <nav class="nav-menu">
          <a href="{{ route('/') }}" class="btn-become-tasker">Post a Task</a>
          <ul class="nav-links">
            <li><a href="{{ route('/categories') }}">Categories</a></li>
            <li><a href="{{ route('/how_it_works') }}">How It Works</a></li>
            <li><a href="{{ route('/tasks') }}">Tasks</a></li>
            <li><a href="{{ route('/') }}">Sign Up</a></li>
            <li><a href="{{ route('/') }}">Login</a></li>
          </ul>
 
          <a href="./index.html" class="btn-become-tasker">Become a Tasker</a>
        </nav>
        <!-- Hamburger Menu -->
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>

    <!-- Hero Slider -->
   @yield('content')

    <footer class="footer">
      <div class="footer-container">
        <div class="footer-column">
          <h3>Discover</h3>
          <ul>
            <li><a href="#">How It Works</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Popular Categories</h3>
          <ul>
            <li><a href="#">Handyman Services</a></li>
            <li><a href="#">Cleaning Service</a></li>
            <li><a href="#">Auto Electronics</a></li>
            <li><a href="#">Assembly Services</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h3>Contact</h3>
          <ul>
            <li>1215, Mirpur Dhaka, Bangladesh</li>
            <li>01621467151</li>
            <li>info@totpor.com</li>
          </ul>
          <div class="social-icons">
            <a href="#"
              ><img
                src="./img/twtter.jpg"
                width="50px"
                height="50px"
                alt="Twitter"
            /></a>
            <a href="#"
              ><img
                src="./img/facebook.jpg"
                width="50px"
                height="50px"
                alt="Facebook"
            /></a>
            <a href="#"
              ><img
                src="./img/linkedin.jpg"
                width="50px"
                height="50px"
                alt="LinkedIn"
            /></a>
          </div>
        </div>
      </div>
      <p class="footer-note">
        © Totpor, All Right Reserved. Designed By Ecostructive IT
      </p>
    </footer>
    <script src="{{ asset('script.js') }}"></script>

  </body>
</html>
