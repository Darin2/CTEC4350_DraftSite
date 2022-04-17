<?php session_start();
include("shared.php");
include("dbconn.inc.php");
echo "$component_HTMLHeader";?>
</head>

<body>

<main>
<?php echo "$component_Nav";?>
<div class="container-fluid px-0 mx-auto">
  <div id="aboutJumbotron" class="jumbotron row ml-0">

    <!--Our Story row -->
    <div id="about-OurStoryRow" class="row d-flex align-items-center mt-0 py-0">

      <!-- center-aligned text section with CTA button. Should show up on the left side for tablet/desktop -->
      <section class="col-sm mt-0 py-0">
        <h1 class="display-4 text-black text-center">About Us</h1>
        <p class="lead text-black text-center mx-5">Since 2016, we've been driving positive change in DFW's youth.</p>
        <p class="lead text-black text-center mx-5">Whether they're volunteering at AT&T Stadium, learning about the business world or growing their leadership skills, G.U.L.F. participants are pushed to be their absolute best.</p>
        <p class="lead w-25 d-flex justify-content-center mx-auto">
          <a class="btn btn-primary btn-lg d-flex justify-content-center" href="getinvolved.php" role="button">Get Involved</a>
        </p>
      </section>

      <!-- Our Story lottie animation. should show up on right side of text for tablet/desktop.-->
      <section class="col-sm mt-0 py-0">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_1ixgi8rs.json"
          background="transparent"
          speed="1"
          style="width: 100%; height: 100%;"
          loop
          autoplay>
        </lottie-player>
      </section>
    </div>

    <!-- Our Mission row -->
    <div id="about-OurMissionRow" class="row d-flex align-items-center bg-dark bg-gradient">
      <!-- Our Mission animation. Should show up on left side of text for tablet and desktop. Should show up on top of the text for mobile.  -->
      <section class="col-sm">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
          src="https://assets3.lottiefiles.com/packages/lf20_xiussssy.json"
          background="transparent"
          speed="1"
          style="width: 80%; height: 80%;"
          loop
          autoplay>
        </lottie-player>
      </section>
      <!-- center-aligned text section with CTA button-->
      <section class="col-sm">
        <h1 class="display-4 text-white text-center">Our Mission</h1>
        <p class="lead text-white text-center mx-5">We're launching Texas teens and young adults toward success via volunteering, mentoring programs and leadership.</p>
        <p class="lead text-white text-center">Want to help?</p>
        <p class="lead w-25 d-flex justify-content-center mx-auto">
          <a class="btn btn-primary btn-lg d-flex justify-content-center" href="getinvolved.php" role="button">Get Involved</a>
        </p>
      </section>
    </div>

    <!-- Our Impact row -->
    <div id="about-OurImpactRow"class="row d-flex align-items-center offwhiteBG">
      <!-- center-aligned section -->
      <section class="col-sm py-0">
        <h1 class="display-4 text-black text-center">Our Impact</h1>
        <p class="lead text-black text-center mx-5">We've led over 100 volunteering events and 46 youth leadership programs impacting over 6,000 people in 5 cities.</p>
        <p class="lead text-black text-center">
        Want to be a part of the action?
        </p>
        <p class="lead w-25 d-flex justify-content-center mx-auto">
          <a class="btn btn-primary btn-lg d-flex justify-content-center" href="volunteer.php" role="button">Get Involved</a>
        </p>
      </section>
      <section class="col-sm py-0">
        <!-- Our Impact lottie animation. Should show up on right side of text for tablet and desktop. Should show up on top of the text for mobile.  -->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_3u3ztlkh.json"
          background="transparent"
          speed="1"
          style="width: 80%; height: 100%;"
          loop
          autoplay>
        </lottie-player>

      </section>
    </div>

    <div id="about-QuotesRow" class="row d-flex align-items-center bg-dark bg-gradient">
      <!-- lottie animation for this section -->
      <section class="col-sm py-0">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ydeuqme7.json"
          background="transparent"
          speed="1"
          style="width: 100%; height: 100%;"
          loop
          autoplay>
        </lottie-player>
      </section>

      <!-- testimonial section -->
      <section class="col-sm py-0">
        <h1 class="display-4 text-white text-center">What People Are Saying</h1>
        <blockquote class="blockquote text-center text-white py-3">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer py-3">John Doe, <cite title="Source Title">Dallas Morning News</cite></footer>
        </blockquote>
        <blockquote class="blockquote text-center text-white py-3">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer py-3">John Doe, <cite title="Source Title">Dallas Morning News</cite></footer>
        </blockquote>
      </section>

    </div>

  </div>
</div>
<!-- end fluid container -->
</div>


</main>

<?php echo "$component_Footer";?>
</body>
</html>
