<?php session_start();

// stored shared content
include("dbconn2.inc.php");
include("shared.php");
// make database connection
 $conn = new PDO("mysql:host=localhost;dbname=vmt8625_4350", "vmt8625_class4350", "theGULF2022");

 //Preventing a non-admin user from accessing the page by typing the URL into the address bar
 if ($_SESSION['admin_access'] != true){
 header("Location: admin_loginpage.php");
 }
// establishing statement object
//$stmt = $conn->stmt_init();

	// check if FAQ exists
	$sql = "SELECT * FROM faqs WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$_REQUEST["id"]]);
	$faq = $stmt->fetch();


	// check if edit form is submitted
	if (isset($_POST["submit"]))
	{
		// update the FAQ in database
		$sql = "UPDATE faqs SET question = ?, answer = ? WHERE id = ?";
		$stmt = $conn->prepare($sql);
		$stmt->execute([
			$_POST["question"],
			$_POST["answer"],
			$_POST["id"]
		]);

		// redirect back to previous page
		//header("Location: " . $_SERVER["HTTP_REFERER"]);
		  header("Location: add.php");

	}
?>
<?php
echo "$component_HTMLHeader";
echo "$component_Nav";
?>
<!-- include CSS -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="richtext/richtext.min.css" />

<!-- include JS -->
<script src="richtext/jquery.richtext.js"></script>

<!-- layout for form to edit FAQ -->
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			<h1 class="text-center">Edit FAQ</h1>

			<!-- form to edit FAQ -->
			<form method="POST" action="edit.php">

				<!-- hidden ID field of FAQ -->
				<input type="hidden" name="id" value="<?php echo $faq['id']; ?>" required />

				<!-- question, auto-populate -->
				<div class="form-group">
					<label>Enter Question</label>
					<input type="text" name="question" class="form-control" value="<?php echo $faq['question']; ?>" required />
				</div>

				<!-- answer, auto-populate -->
				<div class="form-group">
					<label>Enter Answer</label>
					<textarea name="answer" id="answer" class="form-control" required><?php echo $faq['answer']; ?></textarea>
				</div>

				<!-- submit button -->
				<input type="submit" name="submit" class="btn btn-warning" value="Edit FAQ" />
			</form>
		</div>
	</div>
</div>

<script>
	// initialize rich text library
	window.addEventListener("load", function () {
		$("#answer").richText();
	});
</script>
<?php echo "$component_Footer";?>
