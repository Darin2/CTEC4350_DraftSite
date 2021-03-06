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

        <h1 class="display-2 text-white text-center">Launching DFW Youth Toward <u>Success</u></h1>

        <img src="img/illustration_success.svg" class="w-50 my-2 py-3 mx-auto d-block"></img>
        <p class="lead text-white">We're a Texas-based <a class="gulfOrangeText" href="https://www.charitynavigator.org/ein/811313299"><u>501(c)(3) organization</a></u> offering solutions and opportunities to engage underserved teens in staying on the path to their success.</p>

        <img src="img/illustration_mentoring.svg" class="w-25 my-2 py-3 mx-auto d-block"></img>
        <p class="lead text-white">Our unique peer to peer mentoring program encourages members to make successful transitions from high school no matter their surrounding circumstances.</p>

        <img src="img/illustration_inspiration.svg" class="w-50 my-2 py-3 mx-auto d-block"></img>
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
</div>
<div class="col-lg-12 col-md-12 col-sm-12 bg-dark bg-gradient mx-0 px-5">
      <!-- How To Get Involved -->
      <section class="col-lg-10 col-md-10 col-sm-12 mt-0 mx-auto py-5 bg-dark bg-gradient">
        <h2 class="display-2 text-white text-center">Be A Part Of The Action</h2>

        <div class="row mx-auto d-flex justify-content-center">

          <div class="card col-lg-3 col-md-4 col-sm-12 mx-2 my-2 gulfBlueBG">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body gulfBlueBG">
              <h5 class="card-title text-white">Membership</h5>
              <p class="card-text text-white">Build your future with valuable skills and relationships that last a lifetime.</p>
              <a href="membership.php" class="btn btn-primary bg-white gulfBlueText">Learn more</a>
            </div>
          </div>

          <div class="card col-lg-3 col-md-4 col-sm-12 mx-2 my-2 gulfBlueBG">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body gulfBlueBG">
              <h5 class="card-title text-white">Volunteering</h5>
              <p class="card-text text-white">Make positive, impactful contributions to the success of DFW's next generation.</p>
              <a href="volunteer.php" class="btn btn-primary bg-white gulfBlueText">Learn more</a>
            </div>
          </div>

          <div class="card col-lg-3 col-md-4 col-sm-12 mx-2 my-2 gulfBlueBG">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body gulfBlueBG">
              <h5 class="card-title text-white">Sponsorship</h5>
              <p class="card-text text-white">Help us accomplish our mission to launch DFW youth toward success.</p>
              <a href="sponsorship.php" class="btn btn-primary bg-white gulfBlueText">Learn more</a>
            </div>
          </div>

        </div>
      </section>
</div>


</main>
<div id="homepageGoogleMapsEmbed">
<?php echo "$component_GoogleMapsEmbed"?>
</div>
<?php echo "$component_Footer";?>

</body>
</html>
