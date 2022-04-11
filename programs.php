<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>
</head>

<body>

<main>
  <?php echo "$component_Nav";?>

  <div id="homepageHeroJumbotron" class="jumbotron d-flex justify-content-center">
      <h1 class="display-4 programs-h1">Our Programs</h1>
    </div>

    <div class="content flow">
      <div class="even-columns">
        <div class="col prg-txt d-flex flex-column align-self-center">
          <h2>The Diamond League</h2>
          <p>Whether you like  parties,  concerts,  sports, rapping, singing,  dancing,  playing  on the computer, or thinking of all the different ways to make money, The DL has got you you covered.</p>
          <p>On every 2nd Saturday of the month, come join us for fun parties all over the metroplex. From concerts, sports, dancing, and computer games; we do it all and more! Each party has its own theme and setting. All proceeds go to helping The G.U.L.F. continue shaping and building its young entreprenuers.</p>
          <a href="#" class="btn btn-primary btn-prg">Join Us Today</a>
        </div>
        <div class="col">
          <img src="img/thedl.jpg" class="dl-img" alt="">
        </div>
      </div>
    </div>

    <div class="content flow">
      <div class="even-columns">
        <div class="col">
          <img src="img/youthprg.jpg" class="dl-img" alt="">
        </div>
        <div class="col prg-txt d-flex flex-column align-self-center">
          <h2>Youth Business Apprenticeship Program</h2>
          <p>Our Youth Business Program and monthly Youth Business Expos will be available to those who believe they are cut out to be their own bosses and learning the ins and outs of entrepreneurship. Through this program, participants will work alongside and learn from real business owners and career professionals.</p>
          <p>In our Youth Apprenticeship Program, participants will be taught invaluable skills, lessons, and business acumen from those who have stayed on path before us, and who are now young successful business men and woman.</p>
          <p>It will also focus on giving sponsors and partner companies access in offering their services, consultation, mentorship, and products to the GULF community by sponsoring and/or partnering with us, allowing youth to learn and earn as an incentive in making and maintaining passing grades and staying on the right path. A win-win for teens and the communities we're a part of.</p>
          <a href="#" class="btn btn-primary btn-prg">Learn More</a>
        </div>
      </div>
    </div>
</main>

<?php echo "$component_Footer";?>

</body>
</html>
