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
    <div class="container bg-light bg-gradient">

        <h1>Admin Control Panel</h1>
          <!-- admin links will go in this div -->
          <div id="adminLinksContainer">
            <div>
              <p><a href="admin_contactFormLeads.php">View Contact Form submissions</a></p>
              <p><a href="admin_volunteerInterestFormLeads.php">View Volunteer Interest Form submissions</a></p>
              <p><a href="admin_registeredUsersList.php">View registered users</a></p>
              <p><a href="admin_editFaqPage.php">Edit the FAQ Page</a></p>
            </div>
          </div>

          <div class="list-group">
            <a href="admin_contactFormLeads.php" class="list-group-item list-group-item-action">View Contact Form submissions</a>
            <a href="admin_volunteerInterestFormLeads.php" class="list-group-item list-group-item-action">View Volunteer Interest Form submissions</a>
            <a href="admin_registeredUsersList.php" class="list-group-item list-group-item-action">View Registered Users</a>
            <a href="admin_editFaqPage.php" class="list-group-item list-group-item-action">Edit the FAQ Page</a>
          </div>

    </div>
  </body>
</main>
<?php echo $component_Footer; ?>
