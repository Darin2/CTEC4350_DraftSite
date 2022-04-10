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
