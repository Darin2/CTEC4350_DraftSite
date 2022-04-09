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
</script> <!-- javascript code for the carousel -->
</head>

<body>

<main>
<?php echo "$component_Nav";?>

<div class="container-fluid fullwidthBridgePic px-0">

  <div id="homepageHeroJumbotron" class="jumbotron row mx-auto">
    <h1 class="display-4 text-white">Giving Us Leadership And Focus</h1>
    <p class="lead text-white">Delivering fun, positive growth opportunities to DFW's youth since 2007.</p>
    <hr class="my-4">
    <p></p>
    <p class="lead text-white">
      Want to get involved?
    </p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn More</a>
    </p>
  </div>
  <div id="getInvolvedJumbotron" class="jumbotron row mx-auto">
    <div class="card col-xl-3 mx-2">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Join The G.U.L.F.</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="card col-xl-3 mx-2">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Volunteer With Us</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="card col-xl-3 mx-2">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Invest In Our Youth</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  </div>
  <div id="testimonialsJumbotron" class="jumbotron row mx-auto">
  </div>
  <div id="statisticsJumbotron row">
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


</div>

<!--end container -->
</div>
</main>
<?php echo "$component_Footer";?>

</body>
</html>
