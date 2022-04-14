<?php session_start();
include("shared.php");
include("dbconn.inc.php");
echo "$component_HTMLHeader";
/*
Link to the wireframes for this project: https://darinhardin550576.invisionapp.com/freehand/Wireframes-YASr5nqZY?projectID=cl09vkvs0jk590132e7033lju
*/
?>
</head>

<body>

<main>
<div class="container-fluid">
  <div id="volunteerJumbotron" class="jumbotron">
    <h1 class="display-4">Fun-Filled Volunteering</h1>
    <p class="lead">Come out and Volunteer with us at...</p>
  </div>
  <div class="volunteer-places d-flex justify-content-center align-items-center">
    <img src="img/rangerstadium.jpg" class="volunteer-img" alt="Responsive image">
    <img src="img/attstadium.jpeg" class="volunteer-img" alt="Responsive image">
    <img src="img/aacenter.jpeg" class="volunteer-img" alt="Responsive image">
  </div>
    <hr class="my-4">
    <p>background image will be full-width</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Call to action of some sort</a>
    </p>



<!--end container -->
</div>
</main>
<?php echo "$component_Footer";?>
</body>
</html>
