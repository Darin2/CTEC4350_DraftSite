<?php session_start();
include("shared.php");
include("dbconn.inc.php");
echo "$component_HTMLHeader";?>
<meta name="keywords" content="Volunteering, Leader, Entrepreneur, Growth Opportunities, Sponsorship">
</head>

<body>

<main>
<?php echo "$component_Nav";?>
<div id="getInvolvedJumbotron" class="jumbotron row mx-0 px-0 ">



  <!-- membership row -->
  <div id="getinvolved-membershipRow" class="row mx-0 px-0 d-flex align-items-center gulfBlueBG">
    <!-- center-aligned section -->
    <section class="col-sm px-5">
      <h1 class="display-2 text-white mt-5">Membership</h1>
      <p class="lead text-white">Join The G.U.L.F. and experience the growth opportunities of a life time.</p>
      <p class="lead w-25 d-flex">
        <a class="btn btn-primary btn-lg bg-white gulfBlueText d-flex" href="membership.php" role="button">Learn More</a>
      </p>
    </section>
    <!-- membership lottie animation. Should show up on right side of text for tablet and desktop. Should show up on top of the text for mobile.  -->
    <section class="col-sm">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player
        src="https://assets2.lottiefiles.com/packages/lf20_VuL7dB.json"
        background="transparent"
        speed="0.8"
        style="width: 100%; height: 80%;"
        loop
        autoplay>
      </lottie-player>
    </section>
  </div>

  <!--sponsorship row -->
  <div id="getinvolved-SponsorshipRow" class="row mx-0 px-0 d-flex align-items-center">
    <!-- sponsorship lottie animation. should show up on left side of text for tablet/desktop. Should show up above text for mobile. -->
    <section class="col-sm">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player
        src="https://assets5.lottiefiles.com/packages/lf20_t0orczaq.json"
        background="transparent"
        speed="0.75"
        style="width: 100%; height: 80%;"
        loop
        autoplay>
      </lottie-player>
    </section>
    <!-- center-aligned text section with CTA button -->
    <section class="col-sm">
      <h1 class="display-2 text-black">Sponsorship</h1>
      <p class="lead text-black">Join The G.U.L.F as a sponsor and help us deliver<br> world-class growth opportunities for DFW youth.</p>
      <p class="lead text-black">
      Interested in becoming a sponsor?
      </p>
      <p class="lead w-25 d-flex">
        <a class="btn btn-primary btn-lg d-flex" href="sponsorship.php" role="button">Learn More</a>
      </p>
    </section>
  </div>

  <!-- volunteer row -->
  <div id="getinvolved-volunteerRow" class="row mx-0 px-0 d-flex align-items-center bg-dark bg-gradient">

    <!-- center-aligned text section with CTA button-->
    <section class="col-sm px-5">
        <h1 class="display-2 text-white mt-5">Volunteering</h1>
        <p class="lead text-white">Help us accomplish our mission to develop the next <br>generation of leaders and entrepreneurs.</p>
        <p class="lead text-white">
        Become a volunteer today.
        </p>
        <p class="lead w-25 d-flex">
          <a class="btn btn-primary btn-lg d-flex" href="volunteer.php" role="button">Learn More</a>
        </p>
    </section>
    <!-- volunteer lottie animation. Should show up on left side of text for tablet and desktop. Should show up on top of the text for mobile.  -->
    <section class="col-sm">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
          src="https://assets1.lottiefiles.com/packages/lf20_t2bpn6yt.json"
          background="transparent"
          speed="1"
          style="width: 80%; height: 30%;"
          loop
          autoplay>
        </lottie-player>
    </section>

  </div>

</div>
</main>

<?php echo "$component_Footer";?>
</body>
</html>
