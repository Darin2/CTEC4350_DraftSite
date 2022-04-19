<?php session_start();
include("shared.php");
include("dbconn.inc.php");
$conn = dbConnect();
echo "$component_HTMLHeader";?>
<meta name="keywords" content="Volunteering, Mission, Next Generation Leaders, Entrepreneurs, DFW, Dallas-Fort Worth">
</head>

<body>

<main>
  <?php echo "$component_Nav";?>

    <!-- programs intro row -->
    <div id="programs-headerRow" class="row d-flex align-items-center gulfBlueBG">

    <section class="col-sm">
      <!-- membership lottie animation. Should show up on right side of text for tablet and desktop. Should show up on top of the text for mobile.  -->
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <lottie-player
        src="https://assets4.lottiefiles.com/packages/lf20_doyhajlr.json"
        background="transparent"
        speed="1"
        style="width: 100%; height: 70vh;"
        loop
        autoplay>
      </lottie-player>
      <!-- center-aligned section -->
      </section>

      <section class="col-sm">
      <h1 class="display-4 text-white text-center prg-display">Programs</h1>
      <p class="lead text-white text-center prg-display">The G.U.L.F is a non-profit organization dedicated to encouraging team building and individual growth through our both young adult and youth enrichment programs.</p>
      <p class="lead text-white text-center">
      <strong>Come check us out!</strong>
      </p>
      </section>
    </div>

    <div id="programs-DiamondLeagueRow" class="content flow mt-3">
      <div class="even-columns">
        <div class="col prg-txt d-flex flex-column align-self-center">
          <h2>The Diamond League</h2>
          <p>Whether you like  parties,  concerts,  sports, rapping, singing,  dancing,  playing  on the computer, or thinking of all the different ways to make money, The DL has got you you covered.</p>
          <p>On every 2nd Saturday of the month, come join us for fun parties all over the metroplex. From concerts, sports, dancing, and computer games; we do it all and more! Each party has its own theme and setting. All proceeds go to helping The G.U.L.F. continue shaping and building its young entreprenuers.</p>
          <button class="btn btn-primary btn-prg login">Join Us Today</button>
        </div>
        <div class="col">
          <img src="img/thedl.jpg" class="dl-img img-fluid tdl rounded" alt="Teens playing basketball">
        </div>
      </div>

      <div class="modal-cont">
        <div class="modal-box">
            <span class="close">&times;</span>
            <form action="" method="POST" class="login-box">
                <h3>Sign up for The Diamond League </h3>

                <label for="diamondLeagueFirstName" class="label">*First Name</label>
                <input type="name" name="diamondLeagueFirstName" id="fName_dl" class="input" required>

                <label for="diamondLeagueLastName" class="label">*Last Name</label>
                <input type="name" name="diamondLeagueLastName" id="lName_dl" class="input" required>

                <label for="diamondLeagueEmail" class="label">*Email</label>
                <input type="text" name="diamondLeagueEmail" id="email_dl" class="input" required>

                <label for="diamondLeaguePhoneNumber" class="label">Phone Number</label>
                <input type="name" name="diamondLeaguePhoneNumber" id="pNumber_dl" class="input">
                <!-- commenting this part out; we know they're interested in The DL because they've clicked the CTA
                <label for="programs" class="label">Program of Interest</label>
                <select name="programs" id="dl-option" class="input">
                  <option value="diamond-league">Select One</option>
                  <option value="diamond-league">The Diamond League</option>
                </select>
              -->
              <button type="submit" name="SubmitDL" class="join-button">Join</button>
                <div class="close-forgot">
                    <button class="cancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <div id="programs-BusinessApprenticeshipRow" class="content flow">

      <div class="even-columns even-columns-responsive">
        <div class="col">
          <img src="img/youthprg.jpg" class="dl-img img-fluid ybp rounded" alt="Business workers smiling for a group photo">
        </div>
        <div class="col prg-txt d-flex flex-column align-self-center">
          <h2>Youth Business Apprenticeship Program</h2>
          <p>Our Youth Business Program and monthly Youth Business Expos will be available to those who believe they are cut out to be their own bosses and learning the ins and outs of entrepreneurship. Through this program, participants will work alongside and learn from real business owners and career professionals.</p>
          <p>In our Youth Apprenticeship Program, participants will be taught invaluable skills, lessons, and business acumen from those who have stayed on path before us, and who are now young successful business men and woman.</p>
          <p>It will also focus on giving sponsors and partner companies access in offering their services, consultation, mentorship, and products to the GULF community by sponsoring and/or partnering with us, allowing youth to learn and earn as an incentive in making and maintaining passing grades and staying on the right path. A win-win for teens and the communities we're a part of.</p>
          <button class="btn btn-primary btn-prg login">Join Us Today</button>
        </div>
      </div>

      <div class="modal-cont">
        <div class="modal-box">
            <span class="close">&times;</span>
            <form action="" method="POST" class="login-box">

              <h3>Sign up for Youth Business Apprenticeship Program </h3>

                <label for="YBAPFirstName" class="label">*First Name</label>
                <input type="name" name="YBAPFirstName" id="fName_yba" class="input" required>

                <label for="YBAPLastName" class="label">*Last Name</label>
                <input type="name" name="YBAPLastName" id="lName_yba" class="input" required>

                <label for="YBAPEmail" class="label">*Email</label>
                <input type="name" name="YBAPEmail" id="email_yba" class="input" required>

                <label for="YBAPPhoneNumber" class="label">Phone Number</label>
                <input type="text" name="YBAPPhoneNumber" id="pNumber_yba" class="input">

                <!-- commenting this part out; we already know they're interested in the YBAP
                <label for="programs" class="label">Program of Interest</label>
                <select name="programs" id="yba-option" class="input">
                  <option value="diamond-league">Select One</option>
                  <option value="diamond-league">Youth Business Apprenticehsip Program</option>
                </select>
                -->
              <button type="submit" name="SubmitYBAP" class="join-button">Join</button>
              <div class="close-forgot">
                  <button class="cancel">Cancel</button>
              </div>
            </form>
        </div>
    </div>
  </div>
</main>

<?php echo "$component_Footer";?>
<?php /* DIAMOND LEAGUE FORM PROCESSING SCRIPT */


  //This code can insert stuff into the Diamond League database table. It grabs values from the contact form, validates that nothing is missing, and sends it to the database.

    // Process user input if they submit the form
    if (isset($_POST['SubmitDL'])) {
      //echo "debug: the form was successfully submitted<br>";
    	// set up an array of the required user input

    	$required = array("diamondLeagueFirstName", "diamondLeagueLastName", "diamondLeagueEmail"); // note that, in this array, the spelling of each item should match the form field names

    	// set up the expected array (all fields in the form, whether required or not)
    	$expected = array("diamondLeagueFirstName", "diamondLeagueLastName", "diamondLeagueEmail", "diamondLeaguePhoneNumber", "diamondLeagueMessage"); // again, the spelling of each item should match the form field names

      // set up a label array, use the field name as the key and label as the value
      $label = array ("diamondLeagueFirstName"=>'First name', "diamondLeagueLastName"=>"Last name", "diamondLeagueEmail"=>'Email address', "diamondLeaguePhoneNumber"=>'Phone number',"diamondLeagueMessage"=>'Message');

      // set up an empty array where we'll push any required fields that weren't submitted
    	$missing = array();

      //for each item in the expected array (with each item referred to as "field")
    	foreach ($expected as $field){

        // Enable the line below to debug
    		//echo "$field: in_array(): ".in_array($field, $required)." empty(_POST[$field]): ".empty($_POST[$field])."<br>";

        //If you find an item that's in the required array and it's empty, push that item into the missing array.
    		if (in_array($field, $required) && empty($_POST[$field])) {
    			array_push ($missing, $field);

    		} else {
    			// Otherwise, we know that all required fields had input. So set up a variable to carry the user input.

    			// Note the variable set up here uses the $field value as the variable name. Notice the syntax ${$field}.  This is a "variable variable". For example, the first $field in the foreach loop here is "title" (the first one in the $expected array) and a $title variable will be created.  The value of this variable will be either "" or $_POST["title"] depending on whether $_POST["title"] is set up.

          // once we run through the whole $expected array, then these variables, $contactFirstName, $contactLastName, $contactEmail, $contactPhoneNumber, $contactMessage will be generated.

    			if (!isset($_POST[$field])) {
    				//$_POST[$field] is not set, set the value as ""
    				${$field} = "";
    			} else {

    				${$field} = $_POST[$field];
    			}
    		}
    	}

    	//print_r ($missing); // for debugging purpose

    	/* proceed only if there is no required fields missing and all other data validation rules are satisfied */
    	if (empty($missing)){
      //echo "debug: the \$missing array is empty on line 62<br>";
    		$stmt = $conn->stmt_init();

    		// compose a query: Insert a new record

  			$sql = "Insert Into `diamondLeagueInterestFormSubmissions` (diamondLeagueFirstName, diamondLeagueLastName, diamondLeagueEmail, diamondLeaguePhoneNumber, diamondLeagueMessage) values (?, ?, ?, ?, ?)";

    			if($stmt->prepare($sql)){

    				// Note: user input could be an array, the code to deal with array values should be added before the bind_param statment.

    				$stmt->bind_param('sssss',$diamondLeagueFirstName, $diamondLeagueLastName, $diamondLeagueEmail, $diamondLeaguePhoneNumber, $diamondLeagueMessage);
    				$stmt_prepared = 1; // set up a variable to signal that the query statement is successfully prepared.
            //echo "debug: stmt prepared on line 70<br>";
    			}


    		if ($stmt_prepared == 1){
          //echo "debug: stmt prepared ==1 on line 81<br>";
    			if ($stmt->execute()){
            //echo "debug: stmt executed on line 83<br>";

            //  the following code prints a confirmation message at the top of the contact page when the user successfully submits the form.
    				$output = "
            <div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
            <h3 class='display-4 mx-auto my-5 text-white'>Thanks for reaching out, ".$diamondLeagueFirstName."!<p>We'll get back to you soon.</h3>
            <p class='lead text-white'>In the mean time, have you connected with us on social media?</p>
            <div class='col mt-3 mx-auto'>
              <div class='footer-section'>
                <ul class='sm-icons'>
                  <li><a href='#'><i class='fa fa-instagram'></i></a></li>
                  <li><a href='#'><i class='fa fa-linkedin'></i></a></li>
                  <li><a href='#'><i class='fa fa-facebook'></i></a></li>
                  <li><a href='#'><i class='fa fa-twitter'></i></a></li>
                  <li><a href='#'><i class='fa fa-youtube'></i></a></li>
                </ul>
              </div>
            </div>
            </div>
            ";
            //this foreach loop prints everything the user just submitted
    				//foreach($expected as $key){
    					//$output .= "<b>{$label[$key]}</b>: {$_POST[$key]} <br>";
    				//}
    				//$output .= "<p>Back to the <a href='index.php'>Home page</a></p>";
    			} else {
    				//$stmt->execute() failed.
            //stackoverflow error printing code for debugging
            //printf("Error: %s.\n", $stmt->error);
    				$output = "<div>Form submission failed.  Please try again or contact us via phone (817) 558 - 4853). We can also be reached on RingCentral.</div>";
    			}
    		} else {
    			// statement is not successfully prepared (issues with the query).
    			$output = "<div>Database query failed.  Please contact the webmaster.</div>";
    		}

    	} else {
    		// $missing is not empty
    		$output = "<div><p>The following required fields are missing in your submission.  Please fill out all required fields.  <br>Thank you.<br>\n<ul>\n";
    		foreach($missing as $m){
    			$output .= "<li>{$label[$m]}\n";
    		}
    		$output .= "</ul></div>\n";
    	}
  }

  //printing the $output message
  echo "$output";?>
<?php /* YBAP FORM PROCESSING SCRIPT */


  //This code can insert stuff into the YBAP database table. It grabs values from the contact form, validates that nothing is missing, and sends it to the database.

    // Process user input if they submit the form
    if (isset($_POST['SubmitYBAP'])) {
      //echo "debug: the form was successfully submitted<br>";
    	// set up an array of the required user input

    	$required = array("YBAPFirstName", "YBAPLastName", "YBAPEmail"); // note that, in this array, the spelling of each item should match the form field names

    	// set up the expected array (all fields in the form, whether required or not)
    	$expected = array("YBAPFirstName", "YBAPLastName", "YBAPEmail", "YBAPPhoneNumber", "YBAPMessage"); // again, the spelling of each item should match the form field names

      // set up a label array, use the field name as the key and label as the value
      $label = array ("YBAPFirstName"=>'First name', "YBAPLastName"=>"Last name", "YBAPEmail"=>'Email address', "YBAPPhoneNumber"=>'Phone number',"YBAPMessage"=>'Message');

      // set up an empty array where we'll push any required fields that weren't submitted
    	$missing = array();

      //for each item in the expected array (with each item referred to as "field")
    	foreach ($expected as $field){

        // Enable the line below to debug
    		//echo "$field: in_array(): ".in_array($field, $required)." empty(_POST[$field]): ".empty($_POST[$field])."<br>";

        //If you find an item that's in the required array and it's empty, push that item into the missing array.
    		if (in_array($field, $required) && empty($_POST[$field])) {
    			array_push ($missing, $field);

    		} else {
    			// Otherwise, we know that all required fields had input. So set up a variable to carry the user input.

    			// Note the variable set up here uses the $field value as the variable name. Notice the syntax ${$field}.  This is a "variable variable". For example, the first $field in the foreach loop here is "title" (the first one in the $expected array) and a $title variable will be created.  The value of this variable will be either "" or $_POST["title"] depending on whether $_POST["title"] is set up.

          // once we run through the whole $expected array, then these variables, $contactFirstName, $contactLastName, $contactEmail, $contactPhoneNumber, $contactMessage will be generated.

    			if (!isset($_POST[$field])) {
    				//$_POST[$field] is not set, set the value as ""
    				${$field} = "";
    			} else {

    				${$field} = $_POST[$field];
    			}
    		}
    	}

    	//print_r ($missing); // for debugging purpose

    	/* proceed only if there is no required fields missing and all other data validation rules are satisfied */
    	if (empty($missing)){
      //echo "debug: the \$missing array is empty on line 62<br>";
    		$stmt = $conn->stmt_init();

    		// compose a query: Insert a new record

  			$sql = "Insert Into `YBAPInterestFormSubmissions` (YBAPFirstName, YBAPLastName, YBAPLeagueEmail, YBAPPhoneNumber, YBAPMessage) values (?, ?, ?, ?, ?)";

    			if($stmt->prepare($sql)){

    				// Note: user input could be an array, the code to deal with array values should be added before the bind_param statment.

    				$stmt->bind_param('sssss',$YBAPFirstName, $YBAPLastName, $YBAPEmail, $YBAPPhoneNumber, $YBAPMessage);
    				$stmt_prepared = 1; // set up a variable to signal that the query statement is successfully prepared.
            //echo "debug: stmt prepared on line 70<br>";
    			}


    		if ($stmt_prepared == 1){
          //echo "debug: stmt prepared ==1 on line 81<br>";
    			if ($stmt->execute()){
            //echo "debug: stmt executed on line 83<br>";

            //  the following code prints a confirmation message at the top of the contact page when the user successfully submits the form.
    				$output = "
            <div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
            <h3 class='display-4 mx-auto my-5 text-white'>Thanks for reaching out, ".$YBAPFirstName."!<p>We'll get back to you soon.</h3>
            <p class='lead text-white'>In the mean time, have you connected with us on social media?</p>
            <div class='col mt-3 mx-auto'>
              <div class='footer-section'>
                <ul class='sm-icons'>
                  <li><a href='#'><i class='fa fa-instagram'></i></a></li>
                  <li><a href='#'><i class='fa fa-linkedin'></i></a></li>
                  <li><a href='#'><i class='fa fa-facebook'></i></a></li>
                  <li><a href='#'><i class='fa fa-twitter'></i></a></li>
                  <li><a href='#'><i class='fa fa-youtube'></i></a></li>
                </ul>
              </div>
            </div>
            </div>
            ";
            //this foreach loop prints everything the user just submitted
    				//foreach($expected as $key){
    					//$output .= "<b>{$label[$key]}</b>: {$_POST[$key]} <br>";
    				//}
    				//$output .= "<p>Back to the <a href='index.php'>Home page</a></p>";
    			} else {
    				//$stmt->execute() failed.
            //stackoverflow error printing code for debugging
            //printf("Error: %s.\n", $stmt->error);
    				$output = "<div>Form submission failed.  Please try again or contact us via phone (817) 558 - 4853). We can also be reached on RingCentral.</div>";
    			}
    		} else {
    			// statement is not successfully prepared (issues with the query).
    			$output = "<div>Database query failed.  Please contact the webmaster.</div>";
    		}

    	} else {
    		// $missing is not empty
    		$output = "<div><p>The following required fields are missing in your submission.  Please fill out all required fields.  <br>Thank you.<br>\n<ul>\n";
    		foreach($missing as $m){
    			$output .= "<li>{$label[$m]}\n";
    		}
    		$output .= "</ul></div>\n";
    	}
  }

  //printing the $output message
  echo "$output";?>
<script src="js/popup.js"></script>
