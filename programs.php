<?php session_start();
include("shared.php");
include("dbconn.inc.php");
echo "$component_HTMLHeader";?>
</head>

<body>

<main>
  <?php echo "$component_Nav";?>

  <div id="programspagepageHeroJumbotron" class="jumbotron d-flex justify-content-center">
      <h1 class="display-4 programs-h1">Our Programs</h1>
    </div>

    <div class="content flow">
      <div class="even-columns">
        <div class="col prg-txt d-flex flex-column align-self-center">
          <h2>The Diamond League</h2>
          <p>Whether you like  parties,  concerts,  sports, rapping, singing,  dancing,  playing  on the computer, or thinking of all the different ways to make money, The DL has got you you covered.</p>
          <p>On every 2nd Saturday of the month, come join us for fun parties all over the metroplex. From concerts, sports, dancing, and computer games; we do it all and more! Each party has its own theme and setting. All proceeds go to helping The G.U.L.F. continue shaping and building its young entreprenuers.</p>
          <button class="btn btn-primary btn-prg login">Join Us Today</button>
        </div>
        <div class="col">
          <img src="img/thedl.jpg" class="dl-img img-fluid tdl rounded" alt="Teens playing basketball">
        </div>
      </div>
      <div class="modal-cont">
        <div class="modal-box">
            <span class="close">&times;</span>
            <form action="" class="login-box">
                <h3>Sign up for The Diamond League </h3>
                <label for="fName" class="label">*First Name</label>
                <input type="text" id="fName_dl" class="input" required>
                <label for="lName" class="label">*Last Name</label>
                <input type="text" id="lName_dl" class="input" required>
                <label for="email" class="label">*Email</label>
                <input type="text" id="email_dl" class="input" required>
                <label for="pNumber" class="label">Phone Number</label>
                <input type="text" id="pNumber_dl" class="input">
                <label for="programs" class="label">Program of Interest</label>
                <select name="programs" id="dl-option" class="input">
                  <option value="diamond-league">Select One</option>
                  <option value="diamond-league">The Diamond League</option>
                </select>
              <button class="join-button">Join</button>
                <div class="close-forgot">
                    <button class="cancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <div class="content flow">
      <div class="even-columns even-columns-responsive">
        <div class="col">
          <img src="img/youthprg.jpg" class="dl-img img-fluid ybp rounded" alt="Business workers smiling for a group photo">
        </div>
        <div class="col prg-txt d-flex flex-column align-self-center">
          <h2>Youth Business Apprenticeship Program</h2>
          <p>Our Youth Business Program and monthly Youth Business Expos will be available to those who believe they are cut out to be their own bosses and learning the ins and outs of entrepreneurship. Through this program, participants will work alongside and learn from real business owners and career professionals.</p>
          <p>In our Youth Apprenticeship Program, participants will be taught invaluable skills, lessons, and business acumen from those who have stayed on path before us, and who are now young successful business men and woman.</p>
          <p>It will also focus on giving sponsors and partner companies access in offering their services, consultation, mentorship, and products to the GULF community by sponsoring and/or partnering with us, allowing youth to learn and earn as an incentive in making and maintaining passing grades and staying on the right path. A win-win for teens and the communities we're a part of.</p>
          <button class="btn btn-primary btn-prg login">Join Us Today</button>
        </div>
      </div>
      <div class="modal-cont">
        <div class="modal-box">
            <span class="close">&times;</span>
            <form action="" class="login-box">
              <h3>Sign up for Youth Business Apprenticeship Program </h3>
                <label for="fName" class="label">*First Name</label>
                <input type="text" id="fName_yba" class="input" required>
                <label for="lName" class="label">*Last Name</label>
                <input type="text" id="lName_yba" class="input" required>
                <label for="email" class="label">*Email</label>
                <input type="text" id="email_yba" class="input" required>
                <label for="pNumber" class="label">Phone Number</label>
                <input type="text" id="pNumber_yba" class="input">
                <label for="programs" class="label">Program of Interest</label>
                <select name="programs" id="yba-option" class="input">
                  <option value="diamond-league">Select One</option>
                  <option value="diamond-league">Youth Business Apprenticehsip Program</option>
                </select>
              <button class="join-button">Join</button>
                <div class="close-forgot">
                    <button class="cancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</main>

<?php echo "$component_Footer";?>
<script src="js/popup.js"></script>
