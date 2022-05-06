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

<div class="hero">
  <video width="100%" autoplay loop muted plays-inline class="back-video">
    <source src="img/revamped.mp4" type="video/mp4">
  </video>
</div>
<!-- begin bootstrap container -->
<div class="col-lg-12 col-md-12 col-sm-12 gulfBlueBG mx-0 px-0">
	 <section class="col-lg-6 col-md-8 col-sm-12 mt-0 mx-auto py-5 gulfBlueBG">
        <h1 class="display-4 text-white">Launching DFW Youth Toward Success</h1>
        <img src="img/illustration_success.svg" class="w-50 py-3 mx-auto d-block"></img>
        <p class="lead text-white">We're a Texas-based 501(c)(3) Organization offering solutions and opportunities to engage underserved teens in staying on the path to their success.</p>
        <img src="img/illustration_mentoring.svg" class="w-50 py-3 mx-auto d-block"></img>
        <p class="lead text-white">By offering a uniquely combined mentoring program that is fostered and managed by teens in exciting peer to peer settings, teens are encouraged to make successful transitions from high school no matter their surrounding circumstances.</p>
        <img src="img/illustration_inspiration.svg" class="w-50 py-3 mx-auto d-block"></img>
        <p class="lead text-white">
         Whether they are going to college or preparing for life as young adults without college, they are encouraged and inspired by inquiring project planning, organization, business development, volunteering, and career and entrepreneurial skills. Thus giving them a fighting chance on living life beyond mediocrity.
        </p>
      </section>

	<!-- OR THE TEXT BELOW
	  <p> At The G.U.L.F. we are offering youth an opportunity to get involved in things that teens love and parents will appreciate them doing. <br> We are offering exciting programs and events that get youth to appreciate where they are in life, while creating a focus on where they are going. <br> We promote a positive atmosphere, friends, and activities that emphasize the collective and individual growth of everyone involved.</p> -->
</div>
<!-- end Bootstrap container -->

</main>
<div id="homepageGoogleMapsEmbed">
<?php echo "$component_GoogleMapsEmbed"?>
</div>
<?php echo "$component_Footer";?>

</body>
</html>
