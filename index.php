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
  <video autoplay loop muted plays-inline class="back-video">
    <source src="img/revamped.mp4" type="video/mp4">
  </video>
</div>
<div class="landing">
  <h1>The G.U.L.F </h1>
  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
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
