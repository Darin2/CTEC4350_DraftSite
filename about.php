<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>
</head>

<body>

<main>
<?php echo "$component_Nav";?>
<div class="container-fluid px-0 mx-auto">
  <div id="aboutJumbotron" class="jumbotron row ml-0">

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
        <p class="lead text-white text-center">We're here to develop the next generation of leaders and entrepreneurs and launch them toward success.</p>
        <!-- commenting this part out for right now. Not sure if we want a CTA in every single section. Might get repetitive.
        <p class="lead text-white text-center">
        Become a volunteer today.
        </p>
        <p class="lead w-25 d-flex justify-content-center mx-auto">
          <a class="btn btn-primary btn-lg d-flex justify-content-center" href="#" role="button">Learn More</a>
        </p>
        -->
      </section>
    </div>

    <!-- Our Impact row -->
    <div id="about-OurImpactRow"class="row d-flex align-items-center gulfBlueBG">
      <!-- center-aligned section -->
      <section class="col-sm py-0">
        <h1 class="display-4 text-white text-center">Our Impact</h1>
        <p class="lead text-white text-center">We've led over 100 volunteering events impacting over 20,000 people in 5 cities.</p>
        <p class="lead text-white text-center">
        Want to be a part of the action?
        </p>
        <p class="lead w-25 d-flex justify-content-center mx-auto">
          <a class="btn btn-primary btn-lg d-flex justify-content-center" href="#" role="button">Get Involved</a>
        </p>
      </section>
      <section class="col-sm py-0">
        <!-- Our Impact lottie animation. Should show up on right side of text for tablet and desktop. Should show up on top of the text for mobile.  -->
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_dews3j6m.json"
          background="transparent"
          speed="1"
          style="width: 100%; height: 80%;"
          loop
          autoplay>
        </lottie-player>

      </section>
    </div>

    <!--Our Story row -->
    <div id="about-OurStoryRow" class="row d-flex align-items-center mt-0 py-0">
      <!-- Our Story lottie animation. should show up on left side of text for tablet/desktop. Should show up above text for mobile. -->
      <section class="col-sm mt-0 py-0">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_qct0ydor.json"  background="#1A5EBB"  speed="1"  style="width: 100%; height: 80%;"  loop  autoplay></lottie-player>
      </section>
      <!-- center-aligned text section with CTA button -->
      <section class="col-sm mt-0 py-0">
        <h1 class="display-4 text-black text-center">Our Story</h1>
        <p class="lead text-black text-center">Since 2016, we've been driving positive change in DFW's youth.</p>
        <p class="lead text-black text-center">
        Interested in getting involved?
        </p>
        <p class="lead w-25 d-flex justify-content-center mx-auto">
          <a class="btn btn-primary btn-lg d-flex justify-content-center" href="#" role="button">Learn More</a>
        </p>
      </section>
    </div>

    <div id="about-QuotesRow" class="row d-flex align-items-center bg-dark bg-gradient">

      <h1 class="display-4 text-white text-center pt-3">
        Testimonials
      </h1>
      <p class="text-white text-center pt-3">Hear what people are saying:</p>

      <blockquote class="blockquote text-center text-white py-3">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer py-3">John Doe, <cite title="Source Title">Dallas Morning News</cite></footer>
      </blockquote>

      <blockquote class="blockquote text-center text-white py-3">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer py-3">Jane Doe, <cite title="Source Title">Fort Worth Star Telegram</cite></footer>
      </blockquote>

      <blockquote class="blockquote text-center text-white py-3">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer py-3">John Doe, <cite title="Source Title">Dallas Cowboys</cite></footer>
      </blockquote>
    </div>

    <!-- Our Staff row -->
    <div id="about-OurStaffRow" class="row d-flex align-items-center">
      <!-- center-aligned text section with CTA button -->
      <section class="col-12">

        <!-- begin codepen for headshots  (credits: https://codepen.io/thenahidul/pen/WXKONJ)-->
          <section>
          <div class="container">
            <div class="row flex-center sm-no-flex">
              <!-- note: headshot images used in this component must have a transparent background -->
              <div class="pull-right sm-no-float col-md-8">
                <ul class="team-members list-unstyled">
                  <!-- single member row starts -->
                  <li class="clearfix">
                    <div class="member-details">
                      <div>
                        <img src="img/testStaffImg.png" alt="UI Designer">
                        <div class="member-info">
                          <h3>John Doe</h3>
                          <p>UI Designer</p>
                        </div>
                      </div>
                    </div>

                    <div class="member-details">
                      <div>
                        <img src="img/testStaffImg.png" alt="UI Designer">
                        <div class="member-info">
                          <h3>John Doe</h3>
                          <p>UI Designer</p>
                        </div>
                      </div>
                    </div>

                    <div class="member-details">
                      <div>
                        <img src="img/testStaffImg.png" alt="UI Designer">
                        <div class="member-info">
                          <h3>John Doe</h3>
                          <p>UI Designer</p>
                        </div>
                      </div>
                    </div>
                  </li><!-- /single member row ends -->

                  <!-- single member row starts -->
                  <li class="clearfix">
                    <div class="member-details">
                      <div>
                        <img src="img/testStaffImg.png" alt="UI Designer">
                        <div class="member-info">
                          <h3>John Doe</h3>
                          <p>UI Designer</p>
                        </div>
                      </div>
                    </div>

                    <div class="member-details">
                      <div>
                        <img src="img/testStaffImg.png" alt="UI Designer">
                        <div class="member-info">
                          <h3>John Doe</h3>
                          <p>UI Designer</p>
                        </div>
                      </div>
                    </div>

                    <div class="member-details">
                      <div>
                        <img src="img/testStaffImg.png" alt="UI Designer">
                        <div class="member-info">
                          <h3>John Doe</h3>
                          <p>UI Designer</p>
                        </div>
                      </div>
                    </div>
                  </li><!-- /single member row ends -->

                  <!-- single member row starts -->
                  <li class="clearfix">
                    <div class="member-details">
                      <div>
                        <img src="img/testStaffImg.png" alt="UI Designer">
                        <div class="member-info">
                          <h3>John Doe</h3>
                          <p>UI Designer</p>
                        </div>
                      </div>
                    </div>

                    <div class="member-details">
                      <div>
                        <img src="img/testStaffImg.png" alt="UI Designer">
                        <div class="member-info">
                          <h3>John Doe</h3>
                          <p>UI Designer</p>
                        </div>
                      </div>
                    </div>

                    <div class="member-details">
                      <div>
                        <img src="img/testStaffImg.png" alt="UI Designer">
                        <div class="member-info">
                          <h3>John Doe</h3>
                          <p>UI Designer</p>
                        </div>
                      </div>
                    </div>
                  </li><!-- /single member row ends -->

                </ul><!-- /end team-photos -->
              </div><!-- /end col-md-8 -->

              <div class="pull-left col-md-4 sm-text-center">
                <div class="team-overview">
                  <h2>Who Are We?</h2>
                  <p><div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci quae nesciunt officia! Autem, nam eum voluptatem, esse voluptatibus deleniti tempora laboriosam sequi pariatur, explicabo itaque. Fuga, deserunt? Repudiandae, neque qui.</div></p>
                </div>
              </div><!-- /end col-md-4 -->
            </div><!-- /end row -->
          </div><!-- /end container -->
          </section>
        <!-- end codepen for headshots -->

      </section>
    </div>
</div>
<!-- end fluid container -->
</div>


</main>

<?php echo "$component_Footer";?>
</body>
</html>
