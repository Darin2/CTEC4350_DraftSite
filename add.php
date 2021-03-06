<?php
session_start();

	// include shared content
include("dbconn2.inc.php");
include("shared.php");

if ($_SESSION['admin_access'] != true){
header("Location: admin_loginpage.php");
}
echo "$component_HTMLHeader";

// make database connection
  //$conn = new PDO("mysql:host=localhost:3306;dbname=vmt8625_4350", "root", "root");
//$conn = mysqli_connect("localhost", "vmt8625_class4350", "theGULF2022", "vmt8625_4350");
$conn = dbConnect();

	// check if insert form is submitted]
	$stmt = $conn->stmt_init();

	if (isset($_POST["submit"]))
	{

		// insert in faqs table
		$sql = "INSERT INTO faqs (question, answer) VALUES (?, ?)";
		$stmt->prepare($sql);

		// add in bind parameter statement
		$stmt ->bind_param("ss",$_POST["question"], $_POST["answer"]);

		$stmt->execute();
	}


	// get all faqs from latest to oldest
	$sql = "SELECT question, answer, id FROM faqs ORDER BY id DESC";
	$stmt->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($question, $answer, $id);
	//$faqs = $statement->fetchAll(); //change this to bind result statement
?>
<?php echo "$component_Nav";?>

<!-- includefont awesome and rich text library CSS -->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="richtext/richtext.min.css" />

<!-- include rich text JS -->
<script src="richtext/jquery.richtext.js"></script>

<!-- Begin bootstrap container -->
<div class="container">
	<!-- Begin row -->
	<div class="row">
		<!-- Begin interior container (inside of row) -->
		<div class="offset-md-3 col-md-6">
			<h1 class="text-center">Add FAQ</h1>

			<!-- Begin form -->
			<form method="POST" action="add.php">

				<!-- Input field for the FAQ question -->
				<div class="form-group">
					<label>Enter Question</label>
					<input type="text" name="question" class="form-control" required />
				</div>

				<!-- Input field for the FAQ answer -->
				<div class="form-group">
					<label>Enter Answer</label>
					<textarea name="answer" id="answer" class="form-control" required></textarea>
				</div>

				<!-- submit button -->
				<input type="submit" name="submit" class="btn btn-info" value="Add FAQ" />
			</form>
			<!-- End form -->
		</div>
		<!-- End interior container (inside of row) -->
	</div>
	<!-- End row -->

	<!-- Begin row -->
	<div class="row">
		<!-- Begin interior container (inside of row) -->
		<div class="offset-md-2 col-md-8">
			<!-- Begin table -->
			<table class="table table-bordered">
				<!-- table heading -->
				<thead>
					<tr>
						<th>ID</th>
						<th>Question</th>
						<th>Answer</th>
						<th>Actions</th>
					</tr>
				</thead>

				<!-- table body -->
				<tbody>
				<?php while($stmt->fetch()): ?>
						<!-- Begin table row -->
						<tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $question; ?></td>
							<td><?php echo $answer; ?></td>
							<td>
								<!-- edit button -->
								<a href="edit.php?id=<?php echo $id; ?>" class="btn btn-warning btn-sm">
									Edit
								</a>

								<!-- delete form -->
								<form method="POST" action="delete.php" onsubmit="return confirm('Are you sure you want to delete this FAQ?');">
									<input type="hidden" name="id" value="<?php echo $id; ?>" required />
									<input type="submit" value="Delete" class="btn btn-danger btn-sm" />
								</form>
							</td>
						</tr>
						<!-- End table row -->
					<?php endwhile; ?>
				</tbody>
			</table>
			<!-- End table -->
		</div>
		<!-- End interior container (inside of row) -->
	</div>
</div>

<script>
	// initialize rich text library
	window.addEventListener("load", function () {
		$("#answer").richText();
	});
</script>
<?php echo "$component_Footer";?>
