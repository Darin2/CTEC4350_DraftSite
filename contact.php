<?php session_start();
include("shared.php");
include("dbconn.inc.php");
$conn = dbConnect();
echo "$component_HTMLHeader";?>
</head>

<body class="mb-0 pb-0 bg-dark">

<main class="bg-dark">

<?php echo "$component_Nav"; ?>

<?php
//This code can insert stuff into the database. it needs to be trimmed and revised to where it grabs values from the contact form, validates that nothing is missing, and sends it to the database. The database table for this data also still needs to be created.

  // Process user input if they submit the form
  if (isset($_POST['Submit'])) {
    //echo "debug: the form was successfully submitted<br>";
  	// set up an array of the required user input

  	$required = array("contactFirstName", "contactLastName", "contactEmail"); // note that, in this array, the spelling of each item should match the form field names

  	// set up the expected array (all fields in the form, whether required or not)
  	$expected = array("contactFirstName", "contactLastName", "contactEmail", "contactPhoneNumber", "contactMessage"); // again, the spelling of each item should match the form field names

    // set up a label array, use the field name as the key and label as the value
    $label = array ("contactFirstName"=>'First name', "contactLastName"=>"Last name", "contactEmail"=>'Email address', "contactPhoneNumber"=>'Phone number',"contactMessage"=>'Message');

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

			$sql = "Insert Into `contactFormSubmissions` (contactFirstName, contactLastName, contactEmail, contactPhoneNumber, contactMessage) values (?, ?, ?, ?, ?)";

  			if($stmt->prepare($sql)){

  				// Note: user input could be an array, the code to deal with array values should be added before the bind_param statment.

  				$stmt->bind_param('sssss',$contactFirstName, $contactLastName, $contactEmail, $contactPhoneNumber, $contactMessage);
  				$stmt_prepared = 1; // set up a variable to signal that the query statement is successfully prepared.
          //echo "debug: stmt prepared on line 70<br>";
  			}


  		if ($stmt_prepared == 1){
        //echo "debug: stmt prepared ==1 on line 81<br>";
  			if ($stmt->execute()){
          //echo "debug: stmt executed on line 83<br>";

          //  the following code does not produce most user-friendly message.  Particularly the category information is presented as an number which the user will have no idea about.  Can you fix it?

  				$output = "
          <div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
          <h3 class='display-4 mx-auto my-5 text-white'>Thanks for reaching out, ".$contactFirstName."!<p>We'll get back to you soon.</h3>
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
echo "$output";
?>

<!-- bootstrap form example -->
<div class="container-fluid bg-dark mb-5">
  <!-- the actual form begins here

  It takes up 4 columns of a 12-column grid on large screens, 6 on a medium screen, and all 12 on a small screen.
  -->
    <form class="container col-lg-4 col-md-6 col-sm-12 my-3 px-5 pt-5 bg-light bg-gradient rounded" method="POST" action="">
      <h1 class="text-center text-black">Let's Stay In Touch!</h1>
      <h5 class="text-center text-black">Send us a message and we'll get back to you ASAP.</h5>
      <div class="mb-3">
        <p class="text-center text-black">* Required field</p>

        <label for="contactEmail" class="form-label text-black">* Email address</label>
        <input type="email" name="contactEmail" class="form-control" id="contact-input-Email" aria-describedby="emailHelp">
        <!-- * we don't need this part right now, but leaving the code here as an example of the form-text class*
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        -->
      </div>

      <!-- Get user's first name -->
      <div class="mb-3">
        <label for="contactFirstName" class="form-label text-black">* First Name</label>
        <input type="name" name="contactFirstName" class="form-control" id="contact-input-FirstName">
      </div>

      <!-- Get user's last name -->
      <div class="mb-3">
        <label for="contactLastName" class="form-label text-black">* Last Name</label>
        <input type="name" name="contactLastName" class="form-control" id="contact-input-LastName">
      </div>

      <!-- Get user's phone number -->
      <div class="mb-3">
        <label for="contactPhoneNumber" class="form-label text-black">Phone Number</label>
        <input type="name" name="contactPhoneNumber" class="form-control" id="contact-input-PhoneNumber" placeholder="123-456-7890">
      </div>
      <!-- dropdown menu for "I am interested in.."

      ***not including this dropdown right now - it will require a lot more database/SQL work on the back end and we may not have time **

      <div class="mb-3">
        <select class="form-select" name="contactInterestedIn" id="contact-input-InterestedIn" aria-label="Default select example">
          <option selected>I am interested in...</option>
          <option value="1">Joining The G.U.L.F. as a participant</option>
          <option value="2">Volunteering with The G.U.L.F.</option>
          <option value="3">Sponsorship of The G.U.L.F.</option>
          <option value="4">Other</option>
        </select>
      </div>
      -->
      <!--Optional message from user -->
      <div class="input-group">
        <span class="input-group-text">Message</span>
        <label for="contactMessage" class="form-label text-black"></label>
        <textarea class="form-control" name="contactMessage" aria-label="With textarea" id="contact-input-textArea"></textarea>
      </div>
      <!--Checkbox input
      ***Commenting this part out for now, don't think it's necessary.

      <div class="mb-3 form-check">
        <input type="checkbox" name="contactOptIn" class="form-check-input" id="contact-input-OptIn">
        <label class="form-check-label text-black" for="exampleCheck1">I'd like to receive occasional updates and announcements from The G.U.L.F.</label>
      </div>
      -->
      <!--submit form -->
      <button type="submit" name="Submit" class="btn btn-primary my-3">Submit</button>
    </form>

</div>
<!-- end bootstrap form example -->

</main>

<?php echo "$component_Footer";?>
</body>
</html>
