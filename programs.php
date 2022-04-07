<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>
</head>

<body>

<main>
  <?php echo "$component_Nav";?>
  
  <div class="container-fluid our-programs">
      <div id="homepageHeroJumbotron" class="jumbotron">
        <h1 class="display-4 programs-h1">Our Programs</h1>
      </div>
      <div class="jumbotron row mx-auto d-flex justify-content-center">
        <div class="card col-xl-3 mx-2">
          <img class="card-img-top" src="img/thedl.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">The Diamond League</h5>
            <p class="card-text">On every 2nd Saturday of the month, come join us for fun parties all over the metroplex. From concerts, sports, dancing, and computer games; we do it all and more! Each party has its own theme and setting. All proceeds go to helping The G.U.L.F. continue shaping and building its young entreprenuers. </p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
        <div class="card col-xl-3 mx-2">
          <img class="card-img-top" src="img/youthprog.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Youth Business Apprenticeship Program</h5>
            <p class="card-text">Our Youth Business Apprenticeship Program and monthly Youth Business Expos will be available to those who believe they are cut out to be their own bosses and learning the ins and outs of entrepreneurship. Through this program, participants will work alongside and learn from real business owners and career professionals.</p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    <!--end container -->
    </div>
</main>

<?php echo "$component_Footer";?>
<script>
  /*This code ensures our nav bar is able to be toggled closed. */
      $("#navbarSupportedContent a:not(.dropdown-toggle)").click(function() {
        $("#navbarSupportedContent").collapse("hide");
      });
</script>
</body>
</html>
