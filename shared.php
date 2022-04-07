<?php
$component_HTMLHeader =
"<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<!-- Bootstrap CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"styles.css\">
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
<!-- RingCentral embeddable -->
  <script>
    (function() {
      var rcs = document.createElement('script');
      rcs.src = 'https://ringcentral.github.io/ringcentral-embeddable/adapter.js';
      var rcs0 = document.getElementsByTagName('script')[0];
      rcs0.parentNode.insertBefore(rcs, rcs0);
    })();
  </script>
  <!-- FontAwesome icons -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


<title>The G.U.L.F.</title>

</head>";

$component_Nav =
  "<nav class=\"navbar col navbar-expand-lg sticky-top\">
  <a class=\"navbar-brand\" href=\"index.php\">
      <img id=\"navbarLogo\" src=\"img/gulfLogo.png\" width=\"250\" height=\"100%\" alt=\"The logo for Giving Us Leadership and Focus\">
  </a>

  <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"about.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
            About
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href=\"#\">Our Mission</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Our Impact</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Testimonials</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Our Staff</a></li>
          </ul>
        </li>

        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"getinvolved.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
            Get Involved
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href=\"#\">Volunteer</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Membership</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Sponsorship</a></li>
          </ul>
        </li>

        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"programs.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
            Programs
          </a>
          <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href=\"#\">The Diamond League</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Business Apprenticeship</a></li>
          </ul>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
            Donate
          </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"challenge.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
          Monthly Challenge
          </a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"contact.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
          Contact
          </a>
        </li>
      </ul>
    </div>
  </nav>";

$component_Footer = '
<footer>
      <hr>
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="footer-section">
              <h5>Quick Links</h5>
              <ul class="quick-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Sign in/Log in</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Donate</a></li>
                <li><a href="#">Membership</a></li>
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="footer-section">
              <h5>Contact</h5>
              <p>(817) 558 - 4853</p>
            </div>
          </div>
          <div class="col">
            <div class="footer-section">
              <h5>Stay Connected with us!</h5>
              <ul class="sm-icons">
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <p class="footnote">Website by Something Visionary - CTEC 4350 @ UT Arlington - For class use only</p>
      </div>
    </footer>';

$component_GoogleMapsEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.65870968798!2d-97.07813204926569!3d32.748251992665494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e87743d0cf749%3A0x7b63e1df94aafc2!2s602%20Magic%20Mile%20St%2C%20Arlington%2C%20TX%2076011!5e0!3m2!1sen!2sus!4v1649375009229!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
