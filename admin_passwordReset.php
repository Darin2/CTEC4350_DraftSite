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
<!-- Headers-->
<?php
    echo "$component_HTMLHeader";
    echo "$component_Nav";
?>

<?php /* PASSWORD RESET CODE */
  /*This file has two ways of logging in our user: a plain-text login system and a database login system.

  The plain-text login system checks if the user has entered "admin" as their username and "123" as their password. This is for easy login during testing and should be removed at launch.

  The database login system talks to our uta.cloud myPHPAdmin database and verifies the user's credentials when they attempt to log in, and grants admin access if the credentials are correct. We only grant admin access if the credentials are correct.

  The user input being validated in this script comes from the HTML form below.

   */


  //Only execute this code if the user has submitted something to the form
  if (array_key_exists('Submit1', $_POST)){

  /*******************************************/
  /********** Database login system *********/
  /******************************************/

    //Execute this code if the user submits the form

    //Store the username and "Current password" entered by the user in variables
    $currentAdminUsername = $_SESSION['admin_Username'];
    $reset_attempt_password = hash('sha256', $_POST['currentPassword']); //this line encrypts the password string using sha256. Must implement the same encryption on the password entered at registration (registration_page.php) for this to work with registration. Not needed for current implementation because we don't have a password registration system.

    //Convert the input from the "new password" field to a string and store in $newPassword
    $newPassword = strval($_POST['newPassword']);
    //Convert the input from the "new password confirm" field to a string and store in $newPasswordConfirm
    $newPasswordConfirm = strval($_POST['newPasswordConfirm']);

    //Create a hashed version of the new password that we'll store in the database if $newPassword and $newPasswordConFirm are equal
    $newPasswordHashed = hash('sha256', $_POST['newPasswordConfirm']);

    //Check if the two new password fields matched
    if ($newPassword == $newPasswordConfirm){
      $newPasswordsMatched = 1;
    }
    else if ($newPassword != $newPasswordConfirm){
      $newPasswordsMatched = 0;
    }

    //Checking the length of the new password. If it's 8 character or longer, it's long enough.
    if (strlen($newPassword)>=8){
      $newPasswordIsLongEnough = 1;
    }
    //If the new password is less than 8 characters long, it's too short.
    else if (strlen($newPassword)<8){
      $newPasswordIsLongEnough = 0;
    }
    /*Building a sql query that will use bindparam() to deter SQL injection attacks

      This query will go to the credentials table (gulfAdminCredentials) and look for a record that has matching username and password.

      If the database finds a record for this query, we want to allow the user to reset their password (with a SQL update query)
    */

    $sql = "SELECT adminUsername, adminPassword, adminID FROM `gulfAdminCredentials` WHERE adminUsername = ? AND adminPassword = ?";

    $stmt = $conn->stmt_init();

    //Sending query to database and storing results
    if($stmt->prepare($sql)){
      //echo "Debugging: the statement prepared<br>";

      //bind the current admin's username and (hashed)password entered by the user
      $stmt->bind_param('ss', $currentAdminUsername, $reset_attempt_password);

      $stmt->execute();

      //Grab the results of the query
      $stmt->bind_result($adminUsername,$adminPassword, $adminID);

      //Store the query results
      $stmt->store_result();

      //check if there was one record returned
      if($stmt->num_rows == 1){
        //echo "<div class='text-white'>Debugging:  on line 78, stmt->num_rows == 1. there was one record</div><br>";
        $stmt->fetch();
        $stmt->close();
        $credentialsMatched = 1;
      }
      //if stmt->num_rows was not ==1, let the user know their username/password weren't correct
      else{
        $msg ="<div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
              <h3 class='display-4 mx-auto my-5 text-white'>There was an error resetting your password.</h3>
              <p class='lead text-white'>The password you entered for the Current Password field was incorrect. Please try again.</p>
              </div>
              <br>";
      }
          /*
          Found this at https://www.sitepoint.com/community/t/efficient-way-to-check-if-a-mysql-query-returned-no-results/10514
          Hopefully this will allow me to check whether the statement returned anything */
    }
  }

  /* If there was a matching pair of credentials in the database,
    AND the new passwords entered into the form matched,
    AND the new passwords wasn't too short,
    THEN update this particular user's password to equal $newPasswordHashed.
    */
    if((array_key_exists('Submit1', $_POST)) && $credentialsMatched && $newPasswordsMatched &&($newPasswordIsLongEnough)){
      //echo "<div class='text-white'>Debugging: on line 100, the credentials matched and the new passwords matched</div> <br>";
      $sql = "UPDATE `gulfAdminCredentials` SET adminPassword = ? WHERE adminID = ?";

      $stmt = $conn->stmt_init();

      if($stmt->prepare($sql)){
        //echo "<div class='text-white'>Debugging: the SQL statement for updating the password prepared</div><br>";
        //echo "Debugging: the statement prepared<br>";

        //bind the hashed admin password and the adminID (primary key identifying this particular record)
        $stmt->bind_param('si', $newPasswordHashed, $adminID);

        $stmt->execute();
        //$stmt->fetch();
        $stmt->close();

        $msg = "<div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
              <h3 class='display-4 mx-auto my-5 text-white'>Your password has been reset.</h3>
              <p class='lead text-white'>Please remember to store your password in a safe location.</p>
              <p class='text-white'>To reset your password again, you must access this page again from the <a href='admin_controlpanel.php'>admin panel</a>. Refreshing this page will cause an error.</p>
              </div>
              <br>";
        }
        //stmt did not prepare
        else {
          echo "<div class='text-white'>There was an error accessing the database. Please contact the database administrator.</div><br>";
          //$stmt->fetch();
          $stmt->close();
        }
      }
      else if ((array_key_exists('Submit1', $_POST)) && ($newPasswordIsLongEnough == false)){
        $msg = "<div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
            <h3 class='display-4 mx-auto my-5 text-white'>There was an error resetting your password.</h3>
            <p class='lead text-white'>You entered the correct Current Password, but your new password was too short. New passwords must be at least 8 characters in length.</p>
            <p class='lead text-white'>Please try again.</p>
            </div>
            <br>";

      }

      else if ((array_key_exists('Submit1', $_POST)) && ($credentialsMatched) && ($newPasswordsMatched != 1)){
        $msg = "<div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
            <h3 class='display-4 mx-auto my-5 text-white'>There was an error resetting your password.</h3>
            <p class='lead text-white'>You entered the correct Current Password, but your new passwords did not match. Please try again.</p>
            </div>
            <br>";

      }
      else if ((array_key_exists('Submit1', $_POST)) && ($credentialsMatched != 1) && ($newPasswordsMatched)){
        $msg = "<div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
              <h3 class='display-4 mx-auto my-5 text-white'>There was an error resetting your password.</h3>
              <p class='lead text-white'>Your New Passwords matched, but the Current Password you entered was incorrect. Please try again.</p>
              </div>
              <br>";


      }
      else if ((array_key_exists('Submit1', $_POST)) && ($credentialsMatched != 1) && ($newPasswordsMatched != 1)){
        $msg = "<div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
              <h3 class='display-4 mx-auto my-5 text-white'>There was an error resetting your password.</h3>
              <p class='lead text-white'>Your New Passwords did not match, and the Current Password was incorrect. Please try again.</p>
              </div>
              <br>";
      }
      /* Attempting to not allow blank passwords

      else if ((array_key_exists('Submit1', $_POST)) && ($newPasswordHashed == "") && ($newPasswordsMatched)){
        echo "<div class='card-body gulfBlueBG text-center fixed-bottom'>
              <h5 class='card-title text-white'>Error resetting password.</h5>
              <div class='text-white'>Enter a password, Please try again.</div>
              </div>
              <br>";
      } */
?>

<!-- Printing Password Reset Form -->
<body class="bg-dark">
  <main class="bg-dark">
  <!-- begin bootstrap container -->
  <div class="container bg-dark my-5">
    <?php
    if ($msg){
      echo $msg;
    }
    else{
      echo '<h1 class="text-white text-center display-4 py-3">Reset Password</h2>
            <p class="lead text-white text-center">Passwords must be at least 8 characters in length.</p>
      ';
    }
    ?>

    <!-- Form that sends the password string to the authentication page -->
    <form action="" class="container rounded py-1 col-lg-6 col-md-8 col-sm-12 bg-dark bg-gradient" method="post">

      <label for="password" class="text-white" name="Password">Current Password</label>
      <!--Input field that takes the current password.-->
      <input type="password" class="form-control" name="currentPassword" placeholder="">
      <br>

      <label for="password" class="text-white" name="Password">New Password</label>
      <!--Input field that takes the new password.-->
      <input id="newPassword" type="password" class="form-control" name="newPassword" placeholder="">
      <br>

      <label for="password" class="text-white" name="Password">Confirm New Password</label>
      <!--Input field that takes the new password.-->
      <input id="newPasswordConfirm" type="password" class="form-control" name="newPasswordConfirm" placeholder="">
      <br>

      <!-- submit button. Name of this button will be used in the session script. I have no idea why it has Next as a value. May need to change. -->
      <input type="submit" class="form-control btn-primary" name="Submit1" value="Reset Password" />

    </form>
  </div>
  <!-- end bootstrap container -->
  </main>
  <?php echo $component_Footer ?>
</body>
