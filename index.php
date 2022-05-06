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
<div class="col-lg-12 col-md-12 col-sm-12 gulfBlueBG mx-0 px-5">
	 <section class="col-lg-6 col-md-8 col-sm-12 mt-0 mx-auto py-5 gulfBlueBG">

        <h1 class="display-2 text-white text-center">Launching DFW Youth Toward Success</h1>

        <img src="img/illustration_success.svg" class="w-50 my-2 py-3 mx-auto d-block"></img>
        <p class="lead text-white">We're a Texas-based <a class="gulfOrangeText" href="https://www.charitynavigator.org/ein/811313299">501(c)(3) organization</a> offering solutions and opportunities to engage underserved teens in staying on the path to their success.</p>

        <img src="img/illustration_mentoring.svg" class="w-50 my-2 py-3 mx-auto d-block"></img>
        <p class="lead text-white">By offering a uniquely combined mentoring program that is fostered and managed by teens in exciting peer to peer settings, teens are encouraged to make successful transitions from high school no matter their surrounding circumstances.</p>

        <img src="img/illustration_inspiration.svg" class="w-25 my-2 py-3 mx-auto d-block"></img>
        <p class="lead text-white">
         Whether they're going to college or entering the workforce, we set G.U.L.F. members up for success with skills such as:
        </p>

        <div class="row my-3">
        <h3 class="lead text-white col-lg-6 col-md-6 col-sm-12 align-items-center d-flex justify-content-center display-4">Project Planning</h3>
        <img src="img/skill_projectplanning.svg" class="w-50 py-3 mx-auto d-block"></img>
        </div>

        <div class="row my-3">
        <img src="img/skill_organization.svg" class="w-50 py-3 mx-auto d-block"></img>
        <h3 class="lead text-white col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-center display-4">Organization</h3>
        </div>

        <div class="row my-3">
        <h3 class="lead text-white col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-center display-4">Business Development</h3>
        <img src="img/skill_businessdevelopment.svg" class="w-50 py-3 mx-auto d-block"></img>
        </div>

        <div class="row my-3">
        <img src="img/skill_entrepreneur.svg" class="w-50 py-3 mx-auto d-block"></img>
        <h3 class="lead text-white col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-center display-4">Entrepreneurial Thinking</h3>
        </div>
      </section>

      <!-- How To Get Involved -->
      <section class="col-lg-6 col-md-8 col-sm-12 mt-0 mx-auto py-5 gulfBlueBG">
        <h2 class="display-2 text-white text-center">Be A Part Of The Action</h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-12">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Join</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-12">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Volunteer</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-12">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Sponsorship</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        </div>
      </section>
</div>
<!-- end Bootstrap container -->

</main>
<div id="homepageGoogleMapsEmbed">
<?php echo "$component_GoogleMapsEmbed"?>
</div>
<?php echo "$component_Footer";?>

</body>
</html>
