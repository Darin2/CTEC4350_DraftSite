<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";
/*
Link to the wireframes for this project: https://darinhardin550576.invisionapp.com/freehand/Wireframes-YASr5nqZY?projectID=cl09vkvs0jk590132e7033lju
*/
?>
</head>

<body>

<main>

<?php echo "$component_Nav";?>
<div class="container-fluid">
  <div id="homepageHeroJumbotron" class="jumbotron">
    <h1 class="display-4">Headline Text Here</h1>
    <p class="lead">Subheading can go here</p>
    <hr class="my-4">
    <p>background image will be full-width</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Call to action of some sort</a>
    </p>
  </div>
  <div class="jumbotron row mx-auto">
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


<!--end container -->
</div>
</main>
<!--
<footer>

</footer>
-->
<script>
  /*This code ensures our nav bar is able to be toggled closed. */
      $("#navbarSupportedContent a:not(.dropdown-toggle)").click(function() {
        $("#navbarSupportedContent").collapse("hide");
      });
</script>
</body>
</html>
