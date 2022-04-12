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
  </body>
</main>
<?php echo $footer ?>
