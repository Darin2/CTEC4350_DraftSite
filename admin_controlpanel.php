<?php
session_start();
include("shared.php");
include("dbconn.inc.php");
$conn = dbConnect();
?>
<?php
    //include("shared.php");
    echo "$HTMLHeader";
    echo "$header";
?>
<main>
  <body>
    <h1>Welcome to the admin control panel, <?php echo $_SESSION['admin_Name'];?>!</h1>
    <div class="container bg-light bg-gradient">
      <p>Our admin control panel stuff will go here </p>
    </div>
  </body>
</main>
<?php echo $footer ?>
