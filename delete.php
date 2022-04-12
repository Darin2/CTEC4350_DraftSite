<?php session_start();

	// connect database
//$conn = mysqli_connect("localhost", "vmt8625_class4350", "theGULF2022", "vmt8625_4350");
// stored shared content
include("dbconn.inc.php");

// make database connection
  //$conn = new PDO("mysql:host=localhost:3306;dbname=vmt8625_4350", "root", "root");
//$conn = mysqli_connect("localhost", "vmt8625_class4350", "theGULF2022", "vmt8625_4350");
$conn = dbConnect();

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