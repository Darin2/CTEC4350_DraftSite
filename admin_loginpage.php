<?php session_start();
  include("shared.php");
  include("dbconn.inc.php");
  $conn = dbConnect();

  if ($_SESSION['admin_access'] == true){
  header("Location: admin_controlpanel.php");
  }
  /*This file has two ways of logging in our user: a plain-text login system and a database login system.

  The plain-text login system checks if the user has entered "admin" as their username and "123" as their password. This is for easy login during testing and should be removed at launch.

  The database login system talks to our uta.cloud myPHPAdmin database and verifies the user's credentials when they attempt to log in, and grants admin access if the credentials are correct. We only grant admin access if the credentials are correct.

  The user input being validated in this script comes from the HTML form below.

   */


  /*******************************************/
  /********* Plain-text login system *********/
  /******************************************/

  //Only execute this code if the user has submitted something to the form
  if (array_key_exists('Submit1', $_POST)){

    //If the user gives admin credentials on the form, execute code in this if statement
    if (($_POST['username_string'] == "admin") && ($_POST['password_string']=="123")){
      //start a session
      $_SESSION = array();
      //create a name that we'll use to address the user (e.g. "Welcome back, Administrator.")
      $_SESSION['admin_Name']="Administrator";

      //***Debugging code below:
      //echo "session control panel username = ".$_SESSION['admin_Name'];
      //echo "username = $username";

      //Set admin access to true
      $_SESSION['admin_access'] = true;
      //Redirect the user to the admin control panel. note: you can't echo ANYTHING to the page until we've reached this line, or the whole script will break. That's why our HTML header code is included much further down in the file.
      header("Location: admin_controlpanel.php");
      exit;
    }

  /*******************************************/
  /********** Database login system *********/
  /******************************************/

    /*The test credentials for the database login system are:
    Username: thegulf2022
    Password: thegulf2022

    */

    //Execute this code if the user didn't enter admin/123 as their credentials
    else {
        //Store the username and password entered by the user in variables
          $login_attempt_username = $_POST['username_string'];
          $login_attempt_password = hash('sha256', $_POST['password_string']); //this line encrypts the password string using sha256. Must implement the same encryption on the password entered at registration (registration_page.php) for this to work with registration. Not needed for current implementation because we don't have a password registration system.

        /*Building a sql query that will use bindparam() to deter SQL injection attacks

          This query will go to the credentials table (gulfAdminCredentials) and look for a record that has matching username and password.

          If the database finds a record for this query, we want to give admin access to the user.
        */

        $sql = "SELECT adminUsername, adminPassword FROM `gulfAdminCredentials` WHERE adminUsername = ? AND adminPassword = ?";

        $stmt = $conn->stmt_init();

        //Sending query to database and storing results
        if($stmt->prepare($sql)){
          //echo "Debugging: the statement prepared<br>";

          $stmt->bind_param('ss', $login_attempt_username, $login_attempt_password);

          $stmt->execute();

          $stmt->bind_result($adminUsername,$adminPassword);

          $stmt->store_result();

          if($stmt->num_rows == 1){
            //echo "Debugging:  $stmt->num_rows == 1. there was one record<br>";
            $stmt->fetch();
            //I think I can just give the user access right here because the statement wouldn't return a result if the credentials didn't match

            //***Giving access to the user via session variable
            //Start a session
            $_SESSION = array();
            $_SESSION['admin_Name'] = "Administrator";
            $_SESSION['admin_Username'] = $adminUsername;

            /*Debugging stuff*/
            //echo "Checking what's inside the session welcome page username thing = ".$_SESSION['welcomepageusername'];
            //echo "Debugging: username = $username";

            //Give admin level access
            $_SESSION['admin_access'] = true;

            /*Debugging stuff*/
            //echo "The SQL query returned a result, so the password was correct and you're now logged in";

            $stmt->close();

            //Our user is logged in so we redirect them to the welcome page
            //Note that we can't echo ANYTHING to the page prior to this line or it won't work.
            header("Location: admin_controlpanel.php");
            exit;

          }
          //if stmt->num_rows was not ==1, let the user know their username/password weren't correct
          else{
            $errorMsg ="<div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
            <h3 class='display-4 mx-auto my-5 text-white'>The username and password combination was incorrect.</h3>
            <p class='lead text-white'>Please try again.</p>
            <p class='lead text-white'>To reset your password, click <a class='gulfOrangeText' href='admin_passwordreset.php'>here</a>.</p>
            </div>
            ";
          }
              /*
              Found this at https://www.sitepoint.com/community/t/efficient-way-to-check-if-a-mysql-query-returned-no-results/10514
              Hopefully this will allow me to check whether the statement returned anything */
        }
   }
  }
?>

<!-- Headers-->
<?php
    echo "$component_HTMLHeader";
?>
<!-- Printing Login Form -->
<body class="bg-dark">
<main class="bg-dark">
<?php echo "$component_Nav";?>
  <!-- begin bootstrap container -->
  <div class="container bg-dark my-5">
    <!-- Redirect to home link -->
    <div class="redirect m-3">
      <a href="index.php" class="redirect-link d-flex flex-row align-items-center"><i class="fa solid fa-angle-left fa-2x m-1"></i><h4 class="m-0">Back to Home</h4></a>
    </div>
    <?php
    if ($errorMsg){
      echo $errorMsg;
    }
    else{
      echo '<h1 class="text-white text-center display-4 py-3"> Please Log In to Access the Admin Panel.</h2>';
    }
    ?>
    <!--<h1 class="text-white text-center display-4 py-3"> Please Log In to Access the Admin Panel.</h2>
    -->

    <!-- Form that sends the password string to the authentication page -->
    <form action="" class="container rounded py-1 col-lg-5 col-md-8 col-sm-12 bg-dark bg-gradient" method="post">

    <label for="username" class="text-white" name="Username">Username</label>
    <!-- username field -->
    <input type="text" name="username_string" class="form-control" placeholder="">
    <br>

    <label for="password" class="text-white" name="Password">Password</label>
    <!--Input field that takes the password.-->
    <input type="password" class="form-control" name="password_string" placeholder="">
    <br>

    <!-- submit button. Name of this button will be used in the session script. I have no idea why it has Next as a value. May need to change. -->
    <input type="submit" class="form-control btn-primary" name="Submit1" value="Log In" />

    </form>
  </div>
  <!-- end bootstrap container -->
</main>
<?php echo "$component_Footer";?>
</body>
</html>
