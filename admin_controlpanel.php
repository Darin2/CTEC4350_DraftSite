<?php
session_start();
include("shared.php");
include("dbconn.inc.php");
$conn = dbConnect();
//Redirect users without admin access to the home page.
if ($_SESSION['admin_access'] != true){
header("Location: admin_loginpage.php");
}
?>
<?php
    echo "$component_HTMLHeader";
    echo "$component_Nav";
?>
<main class="bg-dark">
  <body class="bg-dark">
    <!-- control panel container -->
    <div id="controlPanelContainer" class="container bg-light bg-gradient mx-auto col-lg-4 col-md-6 col-sm-12 pb-5 rounded">

          <!-- admin links will go in this div -->
          <div class="mx-auto col-lg-6 col-md-8 col-sm-12 my-3 px-0 pt-5 bg-light bg-gradient rounded">

            <h1 class="text-center display-4 py-1">Admin Controls</h1>

            <!-- card attempt -->
            <div class="card mb-4 pb-4">
              <div class="card-header bg-primary text-white text-center">
                My Messages
              </div>
              <ul class="list-group list-group-flush mb-0">
                <li class="list-group-item"><a href="admin_contactFormLeads.php" class="list-group-item list-group-item-action">View Messages</a></li>
              </ul>
            </div>

            <div class="card mb-4 pb-4">
              <div class="card-header bg-primary text-white text-center">
                Volunteers
              </div>
              <ul class="list-group list-group-flush mb-0">
                <li class="list-group-item"><a href="admin_volunteerInterestFormLeads.php" class="list-group-item list-group-item-action">View Volunteer Interest Form submissions</a></li>
              </ul>
            </div>

          </div>

    </div>
  </body>
</main>
<?php echo $component_Footer; ?>
