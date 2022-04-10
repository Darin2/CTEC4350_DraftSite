<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";
/*
Link to the wireframes for this project: https://darinhardin550576.invisionapp.com/freehand/Wireframes-YASr5nqZY?projectID=cl09vkvs0jk590132e7033lju
*/
?>
<script type="text/javascript">
  // Counter code imported from https://codepen.io/xpeed/pen/YpWKLW
           jQuery('.statistic-counter').counterUp({
               delay: 10,
               time: 2000
           });
</script>
</head>

<body>

<main>
<?php echo "$component_Nav";?>

<div class="container-fluid fullwidthBridgePic px-0 mx-auto">

    <div id="homepageHeroJumbotron" class="jumbotron row mx-4">
      <h1 class="display-4 text-white pt-5">Giving Us Leadership And Focus</h1>
      <p class="lead text-white my-0 py-0">Delivering fun, positive growth opportunities to DFW's youth since 2016.</p>
      <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn More</a>
      </p>
    </div>
    <div id="getInvolvedJumbotron" class="jumbotron row ml-0">

      <!-- volunteer row -->
      <div id="homepage-volunteerRow" class="row d-flex align-items-center bg-dark bg-gradient">
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
      <div id="homepage-membershipRow"class="row d-flex align-items-center gulfBlueBG">
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
      <div id="homepage-SponsorshipRow" class="row d-flex align-items-center">
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
    <div id="testimonialsJumbotron" class="jumbotron row mx-4">
    </div>
    <div id="statisticsJumbotron" class="row gulfBlueBG">
      <!-- counter attempt with code from codepen -->
      <section id="counter" class="counter">
          <div class="col">
              <div class="overlay p-y-3">
                  <div class="container">
                      <div class="row">
                          <div class="main_counter_content flexStatisticBoxes text-center white-text wow fadeInUp mx-auto">
                              <div class="col-md-3">
                                  <div class="single_counter p-y-2 m-t-1 mx-4 gulfBlueBG">
                                      <i class="fa fa-heart m-b-1 gulfBlueBG text-white"></i>
                                      <h2 class="statistic-counter gulfBlueBG text-white">100</h2>
                                      <p class="gulfBlueBG text-white">Side Hustles Started</p>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="single_counter p-y-2 m-t-1 mx-4 gulfBlueBG">
                                      <i class="fa fa-check m-b-1 gulfBlueBG text-white"></i>
                                      <h2 class="statistic-counter gulfBlueBG text-white">400</h2>
                                      <p class="gulfBlueBG text-white">Volunteering Events</p>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="single_counter p-y-2 m-t-1 mx-4 gulfBlueBG">
                                      <i class="fa fa-refresh m-b-1 gulfBlueBG text-white"></i>
                                      <h2 class="statistic-counter gulfBlueBG text-white">312</h2>
                                      <p class="gulfBlueBG text-white">Internships Created</p>
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="single_counter p-y-2 m-t-1 mx-4 gulfBlueBG">
                                      <i class="fa fa-check m-b-1 gulfBlueBG text-white"></i>
                                      <h2 class="statistic-counter gulfBlueBG text-white">8</h2>
                                      <p class="gulfBlueBG text-white">Schools Involved</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section><!-- End of counter Section -->
    </div>
    <div id="homepageGoogleMapsEmbed">
    <?php echo "$component_GoogleMapsEmbed"?>
    </div>
  <!-- end innerContainer-->
</div>
<!--end container-fluid -->
</div>
</main>
<?php echo "$component_Footer";?>

</body>
</html>
