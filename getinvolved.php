<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>
</head>

<body>

<main>
<?php echo "$component_Nav";?>
<div id="getInvolvedJumbotron" class="jumbotron row ml-0">

  <!-- volunteer row -->
  <div id="getinvolved-volunteerRow" class="row d-flex align-items-center bg-dark bg-gradient">
    <!-- volunteer lottie animation. Should show up on left side of text for tablet and desktop. Should show up on top of the text for mobile.  -->
    <section class="col-sm">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player
          src="https://assets1.lottiefiles.com/packages/lf20_t2bpn6yt.json"
          background="transparent"
          speed="1"
          style="width: 100%; height: 80%;"
          loop
          autoplay>
        </lottie-player>
    </section>
    <!-- center-aligned text section with CTA button-->
    <section class="col-sm">
      <h1 class="display-4 text-white text-center">Volunteering</h1>
      <p class="lead text-white text-center">Help us accomplish our mission to develop the next generation of leaders and entrepreneurs.</p>
      <p class="lead text-white text-center">
      Become a volunteer today.
      </p>
      <p class="lead w-25 d-flex justify-content-center mx-auto">
        <a class="btn btn-primary btn-lg d-flex justify-content-center" href="#" role="button">Learn More</a>
      </p>
    </section>
  </div>

  <!-- membership row -->
  <div id="getinvolved-membershipRow" class="row d-flex align-items-center gulfBlueBG">
    <!-- center-aligned section -->
    <section class="col-sm">
    <h1 class="display-4 text-white text-center">Membership</h1>
    <p class="lead text-white text-center">Join The G.U.L.F. and experience the growth opportunities of a life time.</p>
    <p class="lead text-white text-center">
    Ready to join?
    </p>
    <p class="lead w-25 d-flex justify-content-center mx-auto">
      <a class="btn btn-primary btn-lg d-flex justify-content-center" href="#" role="button">Learn More</a>
    </p>
    </section>
    <section class="col-sm">
      <!-- membership lottie animation. Should show up on right side of text for tablet and desktop. Should show up on top of the text for mobile.  -->
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player
        src="https://assets2.lottiefiles.com/packages/lf20_VuL7dB.json"
        background="transparent"
        speed="1"
        style="width: 100%; height: 80%;"
        loop
        autoplay>
      </lottie-player>
    </section>
  </div>

  <!--sponsorship row -->
  <div id="getinvolved-SponsorshipRow" class="row d-flex align-items-center">
    <!-- sponsorship lottie animation. should show up on left side of text for tablet/desktop. Should show up above text for mobile. -->
    <section class="col-sm">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player
        src="https://assets5.lottiefiles.com/packages/lf20_t0orczaq.json"
        background="transparent"
        speed="1"
        style="width: 100%; height: 80%;"
        loop
        autoplay>
      </lottie-player>
    </section>
    <!-- center-aligned text section with CTA button -->
    <section class="col-sm">
      <h1 class="display-4 text-black text-center">Sponsorship</h1>
      <p class="lead text-black text-center">Join The G.U.L.F as a sponsor and help us deliver world-class growth opportunities for DFW youth.</p>
      <p class="lead text-black text-center">
      Interested in becoming a sponsor?
      </p>
      <p class="lead w-25 d-flex justify-content-center mx-auto">
        <a class="btn btn-primary btn-lg d-flex justify-content-center" href="#" role="button">Learn More</a>
      </p>
    </section>
  </div>

</div>
</main>

<?php echo "$component_Footer";?>
</body>
</html>
