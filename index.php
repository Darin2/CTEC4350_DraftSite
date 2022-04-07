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

<div class="container-fluid">

  <div id="homepageHeroJumbotron" class="jumbotron row mx-auto">
    <h1 class="display-4">Giving Us Leadership And Focus</h1>
    <p class="lead">Delivering fun, positive growth opportunities to DFW's youth since 2007.</p>
    <hr class="my-4">
    <p></p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Get Involved</a>
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
    <!-- counter attempt with code from https://codepen.io/cworsley/pen/LJrdNa -->
    <section id="counter" class="counter">
            <div class="main_counter_area">
                <div class="overlay p-y-3">
                    <div class="container">
                        <div class="row">
                            <div class="main_counter_content text-center white-text wow fadeInUp">
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fa fa-heart m-b-1"></i>
                                        <h2 class="statistic-counter">100</h2>
                                        <p>Side Hustles Started</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fa fa-check m-b-1"></i>
                                        <h2 class="statistic-counter">400</h2>
                                        <p>Volunteering Events</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fa fa-refresh m-b-1"></i>
                                        <h2 class="statistic-counter">312</h2>
                                        <p>Internships Created</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="fa fa-beer m-b-1"></i>
                                        <h2 class="statistic-counter">8</h2>
                                        <p>Schools Involved</p>
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
