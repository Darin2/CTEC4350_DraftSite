<?php
session_start();
include("shared.php");
include("dbconn.inc.php");
$conn = dbConnect();

//Preventing a user from accessing this page by simply typing the URL into the address bar
if ($_SESSION['admin_access'] != true){
header("Location: admin_loginpage.php");
}
//If they do have admin access, print each record from the contactFormSubmissions table (will style the page to look better later)
else if (($_SESSION['admin_access'] == true)){

  //The code below this line is from fall 2021 and needs to be edited to work with our database
  $sql = "SELECT memberID, memberFirstName, memberLastName, memberEmail, memberPhoneNumber, memberMessage FROM `memberFormSubmissions`";

	$stmt = $conn->stmt_init();

	if ($stmt->prepare($sql)){

		$stmt->execute();
		//Once we retrieve stuff from the database, we want to bind those results to variables (in the same order that we retrieved it):
		$stmt->bind_result($memberID, $memberFirstName, $memberLastName, $memberEmail, $memberPhoneNumber, $memberMessage);

		$tblRows = "";

    $rowcounter=1;
		while($stmt->fetch()){
			//Creating rows in the browser, printing the data we've just retrieved from the database.
      //This will take some polishing to make it actually look nice

			$tblRows = $tblRows."
        <tr>
        <th scope='row'>$rowcounter</th>
          <td>$memberFirstName</a></td>
          <td>$memberLastName</td>
          <td>$memberEmail</td>
          <td>$memberPhoneNumber</td>
          <td>$memberMessage</td>
        </tr>";

        $rowcounter++;
		}
		//Creating a string containing our database query results in  big table, with the <th> below as our headings
		$output = "
    <div class='col bg-dark my-0 py-0'>
    <h1 class='display-4 text-white py-4 my-4'>Membership Leads</h1>
    </div>
    <table class='table table-dark'>
    <thead>
      <tr>
        <th scope='col'>#</th>
        <th scope='col'>First</th>
        <th scope='col'>Last</th>
        <th scope='col'>Email</th>
        <th scope='col'>Phone</th>
        <th scope='col'>Message:</th>
      </tr>
    </thead>
    <tbody>".$tblRows."</tbody></table>\n";
		//close the sql statement
		$stmt->close();

		}
		else {
		//If the statement didn't prepare correctly
		$output = "Query to retrieve product information failed. (the SQL statement didn't prepare)";

		}
	//close the database connection
		$conn->close();

}

?>

<?php
    echo "$component_HTMLHeader";
    echo "$component_Nav";

?>

<main class="bg-dark px-3">

  <body class="bg-dark">
    <!-- breadcrumbs for navigation/usability -->
    <nav class="bg-dark mt-3 px-3" aria-label="breadcrumb">
      <ol class="breadcrumb bg-dark">
        <li class="breadcrumb-item bg-dark"><a href="admin_controlpanel.php">Admin Controls</a></li>
        <li class="breadcrumb-item active bg-dark" aria-current="page">Membership Leads</li>
      </ol>
    </nav>
    <?php echo "$output"; ?>
  </body>
</main>
<?php echo $component_Footer; ?>
