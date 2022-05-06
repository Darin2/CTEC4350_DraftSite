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
<div class="col-lg-12 col-md-12 col-sm-12 gulfBlueBG mx-0 px-5 bg-gradient">
	 <section class="col-lg-6 col-md-8 col-sm-12 mt-0 mx-auto py-5 gulfBlueBG bg-gradient">
        <h1 class="display-2 text-white text-center">Launching DFW Youth Toward Success</h1>
        <img src="img/illustration_success.svg" class="w-25 py-3 mx-auto d-block"></img>
        <p class="lead text-white">We're a Texas-based 501(c)(3) Organization offering solutions and opportunities to engage underserved teens in staying on the path to their success.</p>
        <img src="img/illustration_mentoring.svg" class="w-25 py-3 mx-auto d-block"></img>

        <p class="lead text-white">By offering a uniquely combined mentoring program that is fostered and managed by teens in exciting peer to peer settings, teens are encouraged to make successful transitions from high school no matter their surrounding circumstances.</p>
        <img src="img/illustration_inspiration.svg" class="w-25 py-3 mx-auto d-block"></img>
        <p class="lead text-white">
         Whether they're going to college or entering the workforce, we set G.U.L.F. members up for success with skills such as:
         <ul>
           <li>project planning</li>
           <li>organization</li>
           <li>business development</li>
           <li>entrepreneurial thinking</li>
         </ul>
        </p>
        <div class="row">
        <h3 class="lead text-white col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">Project Planning</h3>
        <img src="img/illustration_mentoring.svg" class="w-25 py-3 mx-auto d-block"></img>
        </div>

        <div class="row">
        <img src="img/illustration_mentoring.svg" class="w-25 py-3 mx-auto d-block"></img>
        <h3 class="lead text-white col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">Organization</h3>
        </div>

        <div class="row">
        <h3 class="lead text-white col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">Business Development</h3>
        <img src="img/illustration_mentoring.svg" class="w-25 py-3 mx-auto d-block"></img>
        </div>

        <div class="row">
        <img src="img/illustration_mentoring.svg" class="w-25 py-3 mx-auto d-block"></img>
        <h3 class="lead text-white col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">Entrepreneurial Thinking</h3>
        </div>
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
