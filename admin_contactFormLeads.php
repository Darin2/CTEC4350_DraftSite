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
  </body>
</main>
<?php echo $component_Footer; ?>
