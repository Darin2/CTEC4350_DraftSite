<?php session_start();
include("shared.php");
include("dbconn.inc.php");
$conn = dbConnect();
echo "$component_HTMLHeader";?>

<script>
  function init(){
    document.getElementById('member-input-Email').onchange = process;
  }

  function process(evt){

    // data validation
    var err = 0;

    // Store the input from the email field in a variable
    var emailText = document.getElementById('member-input-Email').value;

    //Create a regular expression for validating the email
    var emailPattern = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

    //Test whether or not this email passes the regular expression.
    if (emailPattern.test(emailText)) {
      //if it passes, remove the error message for the username.
      removeErrorMessage('email');
    } else {
      //if it doesn't pass, add the error message to the username.
      addErrorMessage('email', 'Please type a valid email.');
      err ++;
      var emailDiv = document.getElementById("emailDiv");
      emailDiv.style.borderLeft = "1px solid red";
    }

    // prevent form submission
    if (evt.preventDefault)
    {
      evt.preventDefault();
    } else {
      evt.returnValue = false;
    }

  }

  function addErrorMessage(fieldId, msg){
      //console.log(msg);

      // for the label element of this field, change the text color to red.
      document.getElementById(fieldId+"Label").style.color = "red";

      // check if an error message span is available
      if (document.getElementById(fieldId + "ErrMsg"))
      {
        // an error message span is already available, use it
        document.getElementById(fieldId + "ErrMsg").innerHTML = msg;
        document.getElementById(fieldId + "ErrMsg").style.display = "block";
      } else {

        // otherwise, create the error message span
        var messageSpan = document.createElement("span");
        messageSpan.className = "errMsg"; // set the CSS class to use
        messageSpan.id = fieldId + "ErrMsg"; // set the id
        messageSpan.innerHTML = msg;

        var inputLabel = document.getElementById(fieldId+'Label');
        inputLabel.parentNode.appendChild(messageSpan);

      }

  }

  function removeErrorMessage (fieldId){
    if (document.getElementById(fieldId + "ErrMsg"))
    {
      document.getElementById(fieldId+"Label").style.color = "black";
      document.getElementById(fieldId + "ErrMsg").style.display = "none";
    }

  }

  window.onload = init;
</script>
</head>

<body class="mb-0 pb-0 bg-dark">

<main class="bg-dark">

<?php echo "$component_Nav"; ?>

<?php
  //This code can insert stuff into the database. It grabs values from the contact form, validates that nothing is missing, and sends it to the database.

    // Process user input if they submit the form
    if (isset($_POST['SubmitMembershipForm'])) {
      //echo "debug: the form was successfully submitted<br>";
    	// set up an array of the required user input

    	$required = array("memberFirstName", "memberLastName", "memberEmail"); // note that, in this array, the spelling of each item should match the form field names

    	// set up the expected array (all fields in the form, whether required or not)
    	$expected = array("memberFirstName", "memberLastName", "memberEmail", "memberPhoneNumber", "memberMessage"); // again, the spelling of each item should match the form field names

      // set up a label array, use the field name as the key and label as the value
      $label = array ("memberFirstName"=>'First name', "memberLastName"=>"Last name", "memberEmail"=>'Email address', "memberPhoneNumber"=>'Phone number',"memberMessage"=>'Message');

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

  			$sql = "Insert Into `memberFormSubmissions` (memberID, memberFirstName, memberLastName, memberEmail, memberPhoneNumber, memberMessage) values (?, ?, ?, ?, ?,?)";

    			if($stmt->prepare($sql)){

    				// Note: user input could be an array, the code to deal with array values should be added before the bind_param statment.

    				$stmt->bind_param('isssss',$memberID,$memberFirstName, $memberLastName, $memberEmail, $memberPhoneNumber, $memberMessage);
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
            <h3 class='display-4 mx-auto my-5 text-white'>We're so glad you're inquiring about membership, ".$memberFirstName."!</h3>
            <p class='lead text-white'>We'll reach out with your next steps within 48 hours.</p>
            <p class='lead text-white'>In the mean time, have you completed our
              <a class='gulfOrangeText' href='challenge.php'> monthly challenge?</a>
            </p>
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
            $output = "
            <div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
            <h3 class='display-4 mx-auto my-5 text-white'>We were unable to submit your information to our database.</h3>
            <p class='lead text-white'>Please try again or contact us via phone (817) 558 - 4853).</p>
            <p class='lead text-white'>We can also be reached on RingCentral.</p>
            </div>
            ";
    			}
    		} else {
    			// statement is not successfully prepared (issues with the query).
          $output = "
          <div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
          <h3 class='display-4 mx-auto my-5 text-white'>We were unable to submit your information to our database.</h3>
          <p class='lead text-white'>Please try again or contact us via phone (817) 558 - 4853).</p>
          <p class='lead text-white'>We can also be reached on RingCentral.</p>
          </div>
          ";
    		}

    	} else {
        // $missing is not empty
    		$output = "<div class='col-lg-6 col-md-8 col-sm-12 bg-dark mx-auto my-5'>
        <h3 class='display-4 mx-auto my-5 text-white'>Please fill out all required fields.</h3>
        <p class='lead text-white'>The following required fields are missing in your submission:</p>
        <br>\n<ul>\n";
    		foreach($missing as $m){
    			$output .= "<li class='text-white'>{$label[$m]}\n";
    		}
    		$output .= "</ul></div>\n";
    	}
  }

  //printing the $output message
  echo "$output";
?>


<div class="container-fluid bg-dark mb-5">
  <form class="container col-lg-6 col-md-8 col-sm-12 my-3 px-5 pt-5 bg-light bg-gradient rounded" method="POST" action="">
      <h1 class="text-center text-black">Interested In Membership?</h1>
      <p class="lead text-center text-black">Fill out the form below to get started on your journey to success.</p>
      <div class="mb-3">
        <p class="text-black">* Required field</p>

        <label for="memberEmail" class="form-label text-black">* Email address</label>
        <input type="email" name="memberEmail" class="form-control" id="member-input-Email" aria-describedby="emailHelp">
      </div>

      <!-- Get user's first name -->
      <div class="mb-3">
        <label for="memberFirstName" class="form-label text-black">* First Name</label>
        <input type="name" name="memberFirstName" class="form-control" id="member-input-FirstName">
      </div>

      <!-- Get user's last name -->
      <div class="mb-3">
        <label for="memberLastName" class="form-label text-black">* Last Name</label>
        <input type="name" name="memberLastName" class="form-control" id="member-input-LastName">
      </div>

      <!-- Get user's phone number -->
      <div class="mb-3">
        <label for="memberPhoneNumber" class="form-label text-black">Phone Number</label>
        <input type="name" name="memberPhoneNumber" class="form-control" id="member-input-PhoneNumber" placeholder="123-456-7890">
      </div>

      <!--Optional message from user -->
      <div class="input-group">
        <span class="input-group-text">What is the best way to contact you?</span>
        <label for="memberMessage" class="form-label text-black"></label>
        <textarea class="form-control" name="memberMessage" aria-label="With textarea" id="member-input-textArea"></textarea>
      </div>

      <button type="submit" name="SubmitMembershipForm" class="btn btn-primary my-3">Submit</button>
    </form>

</div>


</main>

<?php echo "$component_Footer";?>
</body>
</html>
