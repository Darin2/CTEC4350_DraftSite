<?php session_start();

	// connect database
//$conn = mysqli_connect("localhost", "vmt8625_class4350", "theGULF2022", "vmt8625_4350");
// stored shared content
include("dbconn2.inc.php");
include("shared.php");
//echo "$component_HTMLHeader";

// make database connection
 $conn = new PDO("mysql:host=localhost;dbname=vmt8625_4350", "vmt8625_class4350", "theGULF2022");
//$conn = mysqli_connect("localhost", "vmt8625_class4350", "theGULF2022", "vmt8625_4350");
//$conn = dbConnect();

//Preventing a non-admin user from accessing the page by typing the URL into the address bar
if ($_SESSION['admin_access'] != true){
header("Location: admin_loginpage.php");
}

	// check if FAQ existed
	$sql = "SELECT * FROM faqs WHERE id = ?";
	$statement = $conn->prepare($sql);
	$statement->execute([
		$_REQUEST["id"]
	]);
	$faq = $statement->fetch();

	if (!$faq)
	{
		die("FAQ not found");
	}

	// delete from database
	$sql = "DELETE FROM faqs WHERE id = ?";
	$statement = $conn->prepare($sql);
	$statement->execute([
		$_POST["id"]
	]);

	// redirect to previous page
	header("Location: " . $_SERVER["HTTP_REFERER"]);

?>
