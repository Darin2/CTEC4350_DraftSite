<?php
session_start();
unset($_SESSION);
session_unset();
session_write_close();
//session_destroy();
$_SESSION = array();
include("shared.php");
echo "$component_HTMLHeader";
?>
  <body>
    <main>
      <h1> You've been logged out.</h2>
    </main>

  <?php echo $component_Footer?>
  </body>
</html>
