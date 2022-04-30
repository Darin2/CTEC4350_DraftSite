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
<div class="landing">	
	 <section class="col-sm mt-0 py-0">
        <h1 class="display-6 text-black text-center">Discovering Diamonds</h1>
        <p class="lead text-black text-center mx-5">Giving Us Leadership and Focus (The GULF) is a Texas-based 501(c)(3) Organization that is coming up with solutions and opportunities to re-engage underserved teens in staying on track in school.</p>
        <p class="lead text-black text-center mx-5">By offering a uniquely combined mentoring program that is fostered and managed by teens in exciting peer to peer settings, teens are encouraged to make successful transitions from high school no matter their surrounding circumstances.</p>
        <p class="lead text-black text-center mx-5">
         Whether they are going to college or preparing for life as young adults without college, they are encouraged and inspired by inquiring project planning, organization, business development, volunteering, and career and entrepreneurial skills. Thus giving them a fighting chance on living life beyond mediocrity.
        </p>
      </section>
	
	<!-- OR THE TEXT BELOW  
	  <p> At The G.U.L.F. we are offering youth an opportunity to get involved in things that teens love and parents will appreciate them doing. <br> We are offering exciting programs and events that get youth to appreciate where they are in life, while creating a focus on where they are going. <br> We promote a positive atmosphere, friends, and activities that emphasize the collective and individual growth of everyone involved.</p> -->
</div>

   

<!-- end innerContainer-->
<!--end container-fluid -->

</main>
<div id="homepageGoogleMapsEmbed">
<?php echo "$component_GoogleMapsEmbed"?>
</div>
<?php echo "$component_Footer";?>

</body>
</html>
