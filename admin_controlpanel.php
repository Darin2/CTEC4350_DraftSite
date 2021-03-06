<?php
session_start();
include("shared.php");
include("dbconn.inc.php");
$conn = dbConnect();

//Preventing a user from accessing this page by simply typing the URL into the address bar
if ($_SESSION['admin_access'] != true){
header("Location: admin_loginpage.php");
}
?>
<?php
    echo "$component_HTMLHeader";
    echo "$component_Nav";
?>
<body class="bg-dark">
  <main class="bg-dark">

    <!-- control panel container -->
    <div id="controlPanelContainer" class="container bg-dark bg-gradient mx-auto col-lg-10 col-md-12 col-sm-12 pb-5 rounded">

          <!-- admin links will go in this div . card are vertical, not in rows.-->
          <div class="mx-auto col-lg-6 col-md-8 col-sm-12 my-3 px-0 pt-5 bg-dark bg-gradient rounded">

            <h1 class="text-center text-white display-4 py-1">Admin Controls</h1>

            <!-- Begin my messages card.-->
            <div class="card mb-4 pb-0">
              <div class="card-header bg-primary text-white text-left pl-4">
                Messages
              </div>
              <ul class="list-group list-group-flush mb-0 px-0">
                <li class="list-group-item px-0 py-0 border-0"><a href="admin_contactFormLeads.php" class="list-group-item list-group-item-action">"Contact Us" Messages</a></li>

              </ul>
            </div>
            <!-- End my messages card.-->

            <!-- Begin Applicants card -->
            <div class="card mb-4 pb-0">
              <div class="card-header bg-primary text-white text-left pl-4">
                Applicants
              </div>
              <ul class="list-group list-group-flush mb-0 px-0">
                <li class="list-group-item px-0 py-0 border-0"><a href="admin_memberFormLeads.php" class="list-group-item list-group-item-action">Membership Applicants</a></li>
                <li class="list-group-item px-0 py-0 border-0"><a href="admin_volunteerInterestFormLeads.php" class="list-group-item list-group-item-action">Volunteer Applicants</a></li>
                <li class="list-group-item px-0 py-0 border-0"><a href="admin_diamondLeagueInterestFormLeads.php" class="list-group-item list-group-item-action">The Diamond League Applicants</a></li>
                <li class="list-group-item px-0 py-0 border-0"><a href="admin_YBAPInterestFormLeads.php" class="list-group-item list-group-item-action">Youth Business Apprenticeship Applicants</a></li>
                <li class="list-group-item px-0 py-0 border-0"><a href="admin_sponsorFormLeads.php" class="list-group-item list-group-item-action">Sponsorship Applicants</a></li>
              </ul>
            </div>
            <!-- end Applicants Card -->

            <!-- Begin Edit Site card.-->
            <div class="card mb-4 pb-0">
              <div class="card-header bg-primary text-white text-left pl-4">
                Edit Website
              </div>
              <ul class="list-group list-group-flush mb-0 px-0">
                <li class="list-group-item px-0 py-0 border-0"><a href="add.php" class="list-group-item list-group-item-action">Modify FAQ Page</a></li>
              </ul>
            </div>
            <!-- End Edit Site card.-->

            <!-- Begin Account Settings Card.-->
            <div class="card mb-4 pb-0">
              <div class="card-header bg-primary text-white text-left pl-4">
                My Account
              </div>
              <ul class="list-group list-group-flush mb-0 px-0">
                <li class="list-group-item px-0 py-0 border-0"><a href="admin_passwordReset.php" class="list-group-item list-group-item-action">Change Password</a></li>
              </ul>
            </div>
            <!-- End Account settings card.-->


          </div>
          <!-- end admin links section-->


    </div>
  </main>
</body>
<?php echo $component_Footer; ?>
