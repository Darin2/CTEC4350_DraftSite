<?php
session_start();
include("shared.php");
include("dbconn.inc.php");
$conn = dbConnect();
/*This section attempts to use the database and verify user's credentials when they attempt to log in, and grant access (the only type of access we need to worry about is "admin" level access). We only grant admin access if the credentials are correct.

The user input being validated in this script comes from the HTML form below.

 */


//Only execute this code if the user has submitted something to the form
if (array_key_exists('Submit1', $_POST)){

  //If the user gives admin credentials, give admin access
  if (($_POST['username_string'] == "thegulf2022") && ($_POST['password_string']=="thegulf2022")){
    //start a session
    $_SESSION = array();
    //create a name that we'll use to address the user (e.g. "Welcome back, Administrator.")
    $_SESSION['welcomepageusername']="Mr Bible";

    //***Debugging code below:
    //echo "session welcome page username thing = ".$_SESSION['welcomepageusername'];
    //echo "username = $username";

    //Set admin access to true
    $_SESSION['admin_access'] = true;
    //Redirect the user to the admin control panel. note: you can't echo ANYTHING to the page until we've reached this line, or the whole script will break. That's why our HTML header code is included much further down in the file.
    header("Location: admin_controlpanel.php");
    exit;
  }
  /*Commented out: this code checks the database for a matching set of credentials (username and password).

  If a matching set of credentials are found, the user is logged in and redirected to the "welcome page" (which does not currently exist in this directory as of 4-12-2022).

  This code is currently unnecessary for our Spring 2022 project but I'm leaving it here for now, on the off chance we need to create a registration/login system.


   - Darin
  */
  //else {
      //If the user doesn't enter admin credentials, store the username and password in their own variables
        //$login_attempt_username = $_POST['username_string'];
        //$login_attempt_password = hash('sha256', $_POST['password_string']); //this line encrypts the password string using sha256. Must implement the same encryption on the password entered at registration (registration_page.php) for this to work.

      /*Building a sql query that will use bindparam() to deter SQL injection attacks

        This query will go to the credentials table (GULFUserTable) and look for a record that has matching username and password.

        If the database finds a record for this query, we want to give access to the user, and grab the username, password and email for that record (email will be used for signup confirmations, password recovery in the future)
      */

      //$sql = "SELECT firstname, username, password, email FROM `GULFUserTable` WHERE username = ? AND password = ?";

      //$stmt = $conn->stmt_init();

      //Sending query to database and storing results
      //if($stmt->prepare($sql)){
        //echo "Debugging: the statement prepared<br>";
        //$stmt->bind_param('ss', $login_attempt_username, $login_attempt_password);

        //$stmt->execute();

        //$stmt->bind_result($firstname,$username,$password,$email);

        //$stmt->store_result();

        //if($stmt->num_rows == 1){
          //echo "Debugging:  $stmt->num_rows == 1. there was one record<br>";
          //$stmt->fetch();
          //I think I can just give the user access right here because the statement wouldn't return a result if the credentials didn't match

          //***Giving access to the user via session variable
          //Start a session
          //$_SESSION = array();
          //Take the $firstname string from our query and store it in a session variable
          //$_SESSION['firstNameOfUser'] = $firstname;
          //Take the $username string from our query and store it in a session variable (this string is printed in the Welcome Page greeting)
          //$_SESSION['welcomepageusername']=$username;
          //Take the $username string from our query and store it in a session variable (this string is printed in the Nav bar as "Hello, $username")
          //$_SESSION['usernameForNav']=$username;
          //create a non-session variable for the username
          //$usernameForNav = $_SESSION['usernameForNav'];

          /*Debugging stuff*/
          //echo "Checking what's inside the session welcome page username thing = ".$_SESSION['welcomepageusername'];
          //echo "Debugging: username = $username";

          //Give user level access
          //$_SESSION['user_access'] = true;

          /*Debugging stuff*/
          //echo "The SQL query returned a result, so the password was correct and you're now logged in";

          //$stmt->close();

          //Our user is logged in so we redirect them to the welcome page
          //Note that we can't echo ANYTHING to the page prior to this line.
          //header("Location: welcomepage.php");
          //exit;

        //}
        //stmt->num_rows was not ==1
        //else{
          //echo "Incorrect username or password. To reset your password, please click <a href='passwordreset.php'>here</a>.";
      //  }
            /*
            Found this at https://www.sitepoint.com/community/t/efficient-way-to-check-if-a-mysql-query-returned-no-results/10514
            Hopefully this will allow me to check whether the statement returned anything */
      //}
// }
}
//Commented out: this is a Login mechanism that uses plain text passwords stored in the file. It does not interface with a database.
/*
  if (array_key_exists('Submit1', $_POST)) { // each page needs a different name for the submit button
    //Clearing any session variables
    /*$_SESSION = array();
    $adminPassword = 123;
    $adminUsername = "admin";
    $userPassword = "4321";
    $userUsername = "ctec";
    //Validating password - was it correct?
    if(($_POST['password_string']) == ($adminPassword) && (($_POST['username_string']) == ($adminUsername))){
      $_SESSION['admin_access'] = true;
      unset($_SESSION['user_access']);
    }
    if (($_POST['password_string']) == ($userPassword) && (($_POST['username_string']) == ($userUsername))){
      $_SESSION['user_access'] = true;
      unset($_SESSION['admin_access']);
    }

    //Form validation - checking for required form input.
    $required = array('password_string','username_string');
    $missing = array();
    foreach ($_POST as $key => $value) {
      // assign to temporary variable and strip whitespace if not an array
      $temp = is_array($value) ? $value : trim($value);
  	// if empty and required, add to $missing array
  	if (empty($temp) && in_array($key, $required)) {
  	  array_push($missing, $key);
  	  }
  	// otherwise, assign to a variable of the same name as $key
  	else {
  	  $_SESSION[$key] = $temp;
  	  }
  	}
    // if no required fields are missing, send user to admin_productList page
    if (!$missing) {
      header('Location: admin_productList.php');
  	exit;
  	}
  }*/
  ?>

<!-- Headers-->
<?php
    echo "$component_HTMLHeader";
?>
<!-- Printing Login Form -->
<body>
  <main>
  <h2 class="text-center">Login</h2>

  <!-- Form that sends the password string to the authentication page -->
  <form action="" class="container col-lg-4 col-md-6 col-sm-12" method="post">

  <label for="username" name="Username">Username</label>
  <!-- username field -->
  <input type="text" name="username_string" class="form-control" placeholder="">
  <br>

  <label for="password" name="Password">Password</label>
  <!--Input field that takes the password.-->
  <input type="password" class="form-control" name="password_string" placeholder="">
  <br>

  <!-- submit button. Name of this button will be used in the session script. I have no idea why it has Next as a value. May need to change. -->
  <input type="submit" class="form-control btn-primary" name="Submit1" value="Log In &gt;" />

  </form>

  </main>
</body>
<?php echo $footer ?>
