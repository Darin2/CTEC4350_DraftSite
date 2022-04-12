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
    <h1>Welcome back, <?php echo $_SESSION['firstNameOfUser'];?>!</h1>
    <?php echo $ViewEventsBtn ?>
    <?php echo $SuggestEventBtn ?>
  </body>
</main>
<?php echo $footer ?>
