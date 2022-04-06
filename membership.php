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