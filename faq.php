<?php
<<<<<<< Updated upstream
	session_start();
	include("shared.php");
	// connect with database
	$conn = mysqli_connect("localhost", "vmt8625_class4350", "theGULF2022", "vmt8625_4350");
=======
	// stored shared content
include("dbconn.inc.php");
include("shared.php");
echo "$component_HTMLHeader";

// make database connection
 $conn = new PDO("mysql:host=localhost;dbname=vmt8625_4350", "vmt8625_class4350", "theGULF2022");

//$conn = mysqli_connect("localhost", "vmt8625_class4350", "theGULF2022", "vmt8625_4350");
//$conn = dbConnect();
>>>>>>> Stashed changes

	// fetch all FAQs from database
	$sql = "SELECT * FROM faqs";
	$stmt = $conn->prepare($sql);		
	$stmt->execute();
	$faqs = $stmt->fetchAll();
?>
<?php echo "$component_Nav";?>

<!-- include CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css" />

<!-- include JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<!-- show all FAQs in a panel -->
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="row">
		<div class="col-md-12 accordion_one">
		    <div class="panel-group">
                <?php foreach ($faqs as $faq): ?>
			        <div class="panel panel-default">

			        	<!-- button to show the question -->
			            <div class="panel-heading">
			                <h4 class="panel-title">
			                	<a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#faq-<?php echo $faq['id']; ?>" aria-expanded="false" class="collapsed">
			                		<?php echo $faq['question']; ?>
			                	</a>
			                </h4>
			            </div>

			            <!-- accordion for answer -->
			            <div id="faq-<?php echo $faq['id']; ?>" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
			                <div class="panel-body">
			                	<div class="text-accordion">
			                        <?php echo $faq['answer']; ?>
			                    </div>
			                </div>
			            </div>
			        </div>
		        <?php endforeach; ?>
		    </div>
		</div>
	</div>
</div>
<?php echo "$component_Footer";?>


<!-- apply some styles -->
<style>
	.accordion_one .panel-group {
	    border: 1px solid #f1f1f1;
	    margin-top: 100px
	}
	a:link {
	    text-decoration: none
	}
	.accordion_one .panel {
	    background-color: transparent;
	    box-shadow: none;
	    border-bottom: 0px solid transparent;
	    border-radius: 0;
	    margin: 0
	}
	.accordion_one .panel-default {
	    border: 0
	}
	.accordion-wrap .panel-heading {
	    padding: 0px;
	    border-radius: 0px
	}
	h4 {
	    font-size: 18px;
	    line-height: 24px
	}
	.accordion_one .panel .panel-heading a.collapsed {
	    color: #999999;
	    display: block;
	    padding: 12px 30px;
	    border-top: 0px
	}
	.accordion_one .panel .panel-heading a {
	    display: block;
	    padding: 12px 30px;
	    background: #fff;
	    color: #313131;
	    border-bottom: 1px solid #f1f1f1
	}
	.accordion-wrap .panel .panel-heading a {
	    font-size: 14px
	}
	.accordion_one .panel-group .panel-heading+.panel-collapse>.panel-body {
	    border-top: 0;
	    padding-top: 0;
	    padding: 25px 30px 30px 35px;
	    background: #fff;
	    color: #999999
	}
	.img-accordion {
	    width: 81px;
	    float: left;
	    margin-right: 15px;
	    display: block
	}
	.accordion_one .panel .panel-heading a.collapsed:after {
	    content: "\2b";
	    color: #999999;
	    background: #f1f1f1
	}
	.accordion_one .panel .panel-heading a:after,
	.accordion_one .panel .panel-heading a.collapsed:after {
	    font-family: 'FontAwesome';
	    font-size: 15px;
	    width: 36px;
	    line-height: 48px;
	    text-align: center;
	    background: #F1F1F1;
	    float: left;
	    margin-left: -31px;
	    margin-top: -12px;
	    margin-right: 15px
	}
	.accordion_one .panel .panel-heading a:after {
	    content: "\2212"
	}
	.accordion_one .panel .panel-heading a:after,
	.accordion_one .panel .panel-heading a.collapsed:after {
	    font-family: 'FontAwesome';
	    font-size: 15px;
	    width: 36px;
	    height: 48px;
	    line-height: 48px;
	    text-align: center;
	    background: #F1F1F1;
	    float: left;
	    margin-left: -31px;
	    margin-top: -12px;
	    margin-right: 15px
	}
</style>
