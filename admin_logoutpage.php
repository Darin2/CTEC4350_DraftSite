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
<body class="bg-dark">
<?php echo $component_Nav?>
  <main class="bg-dark">
  <div class="container bg-dark my-5">
    <h1 class="text-white text-center display-4 py-3">You have been logged out.</h2>
    <p class='lead text-white text-center mx-auto'>To log in again, click <a class="gulfOrangeText" href="admin_loginpage.php">here</a>.</p>

  </div>
    </main>
  <?php echo $component_Footer?>
  </body>
</html>
