<?php
$component_HTMLHeader =
"<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"keywords\" content=\"Entrepreneur, Success, Entrepreneur Challenge, Trade-Up, Invention, Flipping, Mentoring, Creative, Business Ideas, Product, Business Pitch, Investors, Profit\">
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

/*********************************************/
/* Building a nav for un-authenticated users */
/*********************************************/

//If the user doesn't have admin access, show them the regular nav:
if ($_SESSION['admin_access'] !== true){
  $component_Nav =
    "<nav class=\"navbar col navbar-expand-lg sticky-top bg-dark\">
    <a class=\"navbar-brand px-3\" href=\"index.php\">
        <img id=\"navbarLogo\" src=\"img/gulf_minimal_white.png\" width=\"250\" height=\"100%\" alt=\"The logo for Giving Us Leadership and Focus\">
    </a>

    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>


      <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav\">

          <li class=\"nav-item\">
            <a class=\"nav-link text-nowrap text-white\" href=\"index.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
            Home
            </a>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle text-white\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
              About
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"about.php#about-OurMissionRow\">Our Mission</a></li>
              <li><a class=\"dropdown-item\" href=\"about.php#about-OurImpactRow\">Our Impact</a></li>
              <li><a class=\"dropdown-item\" href=\"about.php#about-OurStoryRow\">Our Story</a></li>
              <li><a class=\"dropdown-item\" href=\"faq.php\">FAQ</a></li>
            </ul>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle text-white\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
              Get Involved
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"getinvolved.php#getinvolved-volunteerRow\">Volunteer</a></li>
              <li><a class=\"dropdown-item\" href=\"getinvolved.php#getinvolved-membershipRow\">Membership</a></li>
              <li><a class=\"dropdown-item\" href=\"getinvolved.php#getinvolved-SponsorshipRow\">Sponsorship</a></li>
            </ul>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle text-white\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
              Programs
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"programs.php#programs-DiamondLeagueRow\">The Diamond League</a></li>
              <li><a class=\"dropdown-item\" href=\"programs.php#programs-BusinessApprenticeshipRow\">Business Apprenticeship</a></li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link text-nowrap text-white\" href=\"challenge.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
            Monthly Challenge
            </a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link text-white\" href=\"contact.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
            Contact
            </a>
          </li>

          <li class=\"nav-item donate-nav-btn\">
            <a class=\"nav-link donate-nav-link text-white\" href=\"https://www.paypal.com/donate?token=IBOjFEeD8bISqsVxcBPs5cCCrkQHjIDONXWEYSOJuwcFzJFgmhW8Nu8u7Xqld370PTE-0aJtzZRBmQIr\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
              Donate
            </a>
          </li>
        </ul>
      </div>
    </nav>";
}

//If the user does have admin access, show them a nav that would be helpful for admins.
if ($_SESSION['admin_access'] == true){
  $component_Nav =
    "<nav class=\"navbar col navbar-expand-lg sticky-top bg-dark\">
    <a class=\"navbar-brand px-3\" href=\"index.php\">
        <img id=\"navbarLogo\" src=\"img/gulf_minimal_white.png\" width=\"250\" height=\"100%\" alt=\"The logo for Giving Us Leadership and Focus\">
    </a>

    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle text-white\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
              About
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"about.php#about-OurMissionRow\">Our Mission</a></li>
              <li><a class=\"dropdown-item\" href=\"about.php#about-OurImpactRow\">Our Impact</a></li>
              <li><a class=\"dropdown-item\" href=\"about.php#about-OurStoryRow\">Our Story</a></li>
              <li><a class=\"dropdown-item\" href=\"faq.php\">FAQ</a></li>
            </ul>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle text-white\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
              Get Involved
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"getinvolved.php#getinvolved-volunteerRow\">Volunteer</a></li>
              <li><a class=\"dropdown-item\" href=\"getinvolved.php#getinvolved-membershipRow\">Membership</a></li>
              <li><a class=\"dropdown-item\" href=\"getinvolved.php#getinvolved-SponsorshipRow\">Sponsorship</a></li>
            </ul>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle text-white\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
              Programs
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"programs.php#programs-DiamondLeagueRow\">The Diamond League</a></li>
              <li><a class=\"dropdown-item\" href=\"programs.php#programs-BusinessApprenticeshipRow\">Business Apprenticeship</a></li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link text-nowrap text-white\" href=\"challenge.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
            Monthly Challenge
            </a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link text-white\" href=\"contact.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
            Contact
            </a>
          </li>


          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle text-white bg-danger bg-gradient border border-danger\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
              Admin Controls
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"admin_controlpanel.php\">View Control Panel</a></li>
              <li><a class=\"dropdown-item\" href=\"admin_contactFormLeads.php\">Contact Form Messages</a></li>
              <li><a class=\"dropdown-item\" href=\"admin_volunteerInterestFormLeads.php\">Volunteer Leads</a></li>
              <li><a class=\"dropdown-item\" href=\"admin_memberFormLeads.php\">Membership Leads</a></li>
              <li><a class=\"dropdown-item\" href=\"admin_sponsorFormLeads.php\">Sponsorship Leads</a></li>
              <li><a class=\"dropdown-item\" href=\"admin_diamondLeagueInterestFormLeads.php\">DL Leads</a></li>
              <li><a class=\"dropdown-item\" href=\"admin_YBAPInterestFormLeads.php\">YBAP Leads</a></li>
            </ul>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link bg-danger text-white text-nowrap bg-gradient\" href=\"admin_logoutpage.php\" id=\"navbarDropdownMenuLink\" role=\"button\" aria-expanded=\"false\">
            Log Out
            </a>
          </li>
        </ul>
      </div>
    </nav>";
}

$component_Footer = '
  <footer>
      <div class="container-fluid bg-dark">
        <div class="row">
          <div class="col mt-4">
            <div class="footer-section">
              <h5 class="text-white">Quick Links</h5>
              <ul class="quick-links text-white">
                <li><a class="gulfOrangeText" href="index.php">Home</a></li>
                <li><a class="gulfOrangeText" href="admin_loginpage.php">Log in (Admin)</a></li>
                <li><a class="gulfOrangeText" href="about.php">About</a></li>
                <li><a class="gulfOrangeText" href="faq.php">FAQ</a></li>
                <li><a class="gulfOrangeText" href="membership.php">Membership</a></li>
                <li><a class="gulfOrangeText" href="contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col mt-4">
            <div class="footer-section">
              <h5 class="text-white">Contact</h5>
              <p><a class="gulfOrangeText" href="tel:817-558-4853">(817) 558 - 4853</a></p>
            </div>
          </div>
          <div class="col mt-4">
            <div class="footer-section">
              <h5 class="text-white">Social Media</h5>
              <ul class="sm-icons">
                <li><a class="gulfOrangeText" href="https://www.instagram.com/thegulf_tx/"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <p class="footnote text-white text-center">Website by Something Visionary - CTEC 4350 @ UT Arlington - For class use only</p>
      </div>
    </footer>';

$component_GoogleMapsEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.65870968798!2d-97.07813204926569!3d32.748251992665494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e87743d0cf749%3A0x7b63e1df94aafc2!2s602%20Magic%20Mile%20St%2C%20Arlington%2C%20TX%2076011!5e0!3m2!1sen!2sus!4v1649375009229!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
