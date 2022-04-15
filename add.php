<?php
session_start();

	// stored shared content
include("dbconn.inc.php");
include("shared.php");
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

<!-- include bootstrap, font awesome and rich text library CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="richtext/richtext.min.css" />

<!-- include jquer, bootstrap and rich text JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="richtext/jquery.richtext.js"></script>

<!-- layout for form to add FAQ -->
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			<h1 class="text-center">Add FAQ</h1>

			<!-- for to add FAQ -->
			<form method="POST" action="add.php">

				<!-- question -->
				<div class="form-group">
					<label>Enter Question</label>
					<input type="text" name="question" class="form-control" required />
				</div>

				<!-- answer -->
				<div class="form-group">
					<label>Enter Answer</label>
					<textarea name="answer" id="answer" class="form-control" required></textarea>
				</div>

				<!-- submit button -->
				<input type="submit" name="submit" class="btn btn-info" value="Add FAQ" />
			</form>
		</div>
	</div>

	<!-- show all FAQs added -->
	<div class="row">
		<div class="offset-md-2 col-md-8">
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
					<?php endwhile; ?>
				</tbody>
			</table>
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
