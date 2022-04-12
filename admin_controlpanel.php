<?php
session_start();
include("shared.php");
include("dbconn.inc.php");
$conn = dbConnect();
?>
<?php
    echo "$component_HTMLHeader";
    echo "$component_Nav";
?>
<main>
  <body>
    <!-- control panel container -->
    <div class="container bg-light bg-gradient">
        <h1>Welcome to the admin control panel, <?php echo $_SESSION['admin_Name'];?>!</h1>
          <!-- admin links will go in this div -->
          <div id="adminLinksContainer">
            <div>
              <a href="admin_contactFormLeads.php">View Contact Form submissions</a>
              <a href="admin_registeredUsersList.php">View registered users</a>
            </div>
            <div>
              <a href="admin_editFaqPage.php">Edit the FAQ Page</a>
            </div>
          </div>

    </div>
  </body>
</main>
<?php echo $component_Footer; ?>
