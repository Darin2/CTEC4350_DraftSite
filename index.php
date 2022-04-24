<?php session_start();
include("shared.php");
include("dbconn.inc.php");
echo "$component_HTMLHeader";
/*
Link to the wireframes for this project: https://darinhardin550576.invisionapp.com/freehand/Wireframes-YASr5nqZY?projectID=cl09vkvs0jk590132e7033lju
*/
?>

<body>

<main>
<?php echo "$component_Nav";?>

<div class="container-fluid fullwidthBridgePic px-0 mx-auto">
    <!--

    full width video. hidden on small screens.  not using it right now.

    <div id="videoContainer" class="video-container d-none d-md-block">
      <iframe src="https://www.youtube.com/embed/p3XeN3K_3IQ?controls=0&amp;start=10&playlist=p3XeN3K_3IQ&loop=1&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <div id="text">
        <h1 id="videoH1" class="display-1 text-center">Leadership & Focus For DFW Youth</h1>
      </div>
    </div>

     -->

     <!--

     huge bridge pic hero section. hidden on big screens.  not using it right now.

    <div id="homepageHeroJumbotron" class="d-lg-none d-md-none jumbotron row mx-4">
      <h1 id="bridgePicH1" class="display-1 text-white text-center">Leadership & Focus For DFW Youth</h1>
      <p class="lead text-white my-0 py-0">Delivering fun, positive growth opportunities to DFW's youth since 2016.</p>
      <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn More</a>
      </p>
    </div>

    -->

  <!-- end innerContainer-->
</div>
<!--end container-fluid -->
</div>
</main>
<div id="homepageGoogleMapsEmbed">
<?php echo "$component_GoogleMapsEmbed"?>
</div>
<?php echo "$component_Footer";?>

</body>
</html>
