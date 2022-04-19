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

<div class="container-fluid px-0 mx-auto">

  <div class="video-container">
    <iframe
      src="https://www.youtube-nocookie.com/embed/CGYUh6xWKTg?controls=0&autoplay=1&mute=1&playlist=CGYUh6xWKTg&loop=1"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen>
    </iframe>
  </div>

    <!-- Commenting out hero jumbotron to replace with video
    <div id="homepageHeroJumbotron" class="jumbotron row mx-4">
      <h1 class="display-4 text-white pt-5">Giving Us Leadership And Focus</h1>
      <p class="lead text-white my-0 py-0">Delivering fun, positive growth opportunities to DFW's youth since 2016.</p>
      <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn More</a>
      </p>
    </div>
    -->


    <div id="testimonialsJumbotron" class="jumbotron row mx-4">
    </div>
    <!--
    <div id="homepageGoogleMapsEmbed">
      <?php //echo "$component_GoogleMapsEmbed"?>
    </div>
    -->
  <!-- end innerContainer-->
</div>
<!--end container-fluid -->
</div>
</main>
<?php echo "$component_Footer";?>

</body>
</html>
