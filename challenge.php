<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>

<body>
<main>
<?php echo "$component_Nav";?>

<!-- begin bootstrap container -->
<div class="container-fluid px-0 mx-auto">

	<!-- begin jumbotron -->
	<div id="challengeJumbotron" class="jumbotron row ml-0">

		<!-- begin challenges row -->
		<div id="about-ChallengesRow" class="row d-flex align-items-center gulfBlueBG bg-gradient">

			<!-- begin title section -->
			<section class="col-sm py-0">
				<h1 class="display-4 text-black text-center">Monthly Entrepreneur Challenge</h1>
				<p class="lead text-black text-center">Challenge your entrepreneurial skills with our challenges. Check back each month to discover a new challenge! Don't forget to show us how you do, tag us in your social media posts using the hashtag #TheGULF</p>
			</section>
			<!-- end title section -->

			<p id="demo"></p>

			<!-- begin months section -->
			<section id="monthsSection" class="col-sm py-0">

				<div id="m1" class="month">
					<h4 class="display-4 text-white text-center">Trade-Up Challenge</h4>
					<p class="lead text-white text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
				</div>

				<div id="m2" class="month">
					<h4 class="display-4 text-white text-center">3 in 5 Challenge</h4>
					<p class="lead text-white text-center">Come up with three business ideas in five minutes or less, then write a business plan for your favorite one. <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
				</div>

				<div id="m3" class="month">
					<h4 class="display-4 text-white text-center">Invention Challenge</h4>
					<p class="lead text-white text-center">Invent your own product and come up with a five minute business pitch as if you were pitching your product to real investors.<br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
				</div>

				<div id="m4" class="month">
					<h4 class="display-4 text-white text-center">Flipping Challenge</h4>
					<p class="lead text-white text-center">Find an item you can buy cheaply from a garage sale, thrift store or friend. Buy the item, and see how quickly you can sell it for a profit.<br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
				</div>

				<div id="m5" class="month">
					<h4 class="display-4 text-white text-center">Mentoring Challenge</h4>
					<p class="lead text-white text-center">Connect with a local business owner, either in person or virtually, and ask them what they've learned since starting their own business.<br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
				</div>

				<div id="m6" class="month">
					<h4 class="display-4 text-white text-center">Innovation Challenge</h4>
					<p class="lead text-white text-center">Think of your absolute favorite product. What do you like about it? What makes it great? Now, think of three ways this product could be even better.<br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
				</div>

			</div>
			<!-- end challenges row -->

		</section>
		<!-- end months section -->

	</div>
	<!-- end jumbotron -->
</div>
<!--end bootstrap container -->

<!-- begin alternate way of showing the challenge -->
<div id="challengesContainer" class="container-fluid px-0 mx-auto">
	<div class="card text-center">

	  <div class="card-header">
	   <p id="challengeMonth">month</p>
	  </div>

	  <div class="card-body">
	    <h5 id="challengeTitle" class="card-title">challenge title</h5>
	    <p id="challengeDescription" class="card-text">challenge description with social media reminder goes here (IG: thegulf_tx)</p>
	  </div>

	  <div class="card-footer text-muted">
	    	<p id="daysLeft" class="card-text">"next challenge will appear in ____ days" goes here</p>
	  </div>

	</div>
</div>
<!-- end alternate challenge version -->
</main>
<?php echo "$component_Footer";?>
<script>
	//create an array of months
	const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];

	//create a new Date object when someone loads this page
	const d = new Date();

	// store the current month in a variable
	let currentMonth = month[d.getMonth()];
	console.log('currentMonth = ' + currentMonth);

	console.log('d.getMonth() = ' + d.getMonth());

	let challengeTitleArray = ["Trade Up","3 in 5","Invention","Flipping","Mentoring","Innovation"];

	let challengeDescriptionArray = [

		"This week, your challenge is to turn $5 into at least $25. You get to keep every dollar you make, so get creative!",

		"Come up with three business ideas in five minutes or less, then write a business plan for your favorite one.",

		"Invent your own product and come up with a five minute business pitch as if you were pitching your product to real investors.",

		"Find an item you can buy cheaply from a garage sale, thrift store or friend. Buy the item, and see how quickly you can sell it for a profit.",

		"Connect with a local business owner, either in person or virtually, and ask them what they've learned since starting their own business.",

		"Think of your absolute favorite product. What do you like about it? What makes it great? Now, think of three ways this product could be even better."]

	let shareMsg = "Share your success with us on Instagram and use the hashtag #TheGulf. Check back next month for another challenge!";

	let challengeTitleText = "";
	let challengeDescriptionText = "";
	//using a switch statement to decide what to show for this month's challenge. This should probably be written as a function if we have the time, but this works for now.

	console.log('Debug: on line 134 my switch statement evaluated d.month to equal ' + d.getMonth());
	switch(d.getMonth()){
		//If the month is January, we'll show the Trade Up Challenge
		case 0:
			challengeTitleText = challengeTitleArray[0];
			challengeDescriptionText = challengeDescriptionArray[0];
		break;

		//If the month is February, we'll show the 3 in 5 Challenge
		case 1:
			challengeTitleText = challengeTitleArray[1];
			challengeDescriptionText = challengeDescriptionArray[1];
		break;

		//If the month is March, we'll show the Invention Challenge
		case 2:
			challengeTitleText = challengeTitleArray[2];
			challengeDescriptionText = challengeDescriptionArray[2];
		break;

		//If the month is April, we'll show the Flipping Challenge
		case 3:
			challengeTitleText = challengeTitleArray[3];
			challengeDescriptionText = challengeDescriptionArray[3];
		break;

		//If the month is May, we'll show the Mentoring Challenge
		case 4:
			challengeTitleText = challengeTitleArray[4];
			challengeDescriptionText = challengeDescriptionArray[4];
		break;

		//If the month is June, we'll show the Innovation Challenge
		case 5:
			challengeTitleText = challengeTitleArray[5];
			challengeDescriptionText = challengeDescriptionArray[5];
		break;

		//If the month is July, we'll show the Trade Up Challenge
		case 6:
			challengeTitleText = challengeTitleArray[0];
			challengeDescriptionText = challengeDescriptionArray[0];
		break;

		//If the month is August, we'll show the 3 in 5 Challenge
		case 7:
			challengeTitleText = challengeTitleArray[1];
			challengeDescriptionText = challengeDescriptionArray[1];
		break;

		//If the month is September, we'll show the Invention Challenge
		case 8:
			challengeTitleText = challengeTitleArray[2];
			challengeDescriptionText = challengeDescriptionArray[2];
		break;

		//If the month is October, we'll show the Flipping Challenge
		case 9:
			challengeTitleText = challengeTitleArray[3];
			challengeDescriptionText = challengeDescriptionArray[3];
		break;

		//If the month is November, we'll show the Mentoring Challenge
		case 10:
			challengeTitleText = challengeTitleArray[4];
			challengeDescriptionText = challengeDescriptionArray[4];
		break;

		//If the month is December, we'll show the Innovation Challenge
		case 11:
			challengeTitleText = challengeTitleArray[5];
			challengeDescriptionText = challengeDescriptionArray[5];
		break;
	}

	console.log('challengeTitle = ' + challengeTitleArray[d.getMonth()]);
	console.log('challengeDescription = ' + challengeDescriptionArray[d.getMonth()]);
	//Print the current month in the demo element.
	document.getElementById("demo").innerHTML = currentMonth;
	//Print the current month at the top of the challengesContainer.
	document.getElementById("challengeMonth").innerHTML = currentMonth;
	//Print the description of the challenge with the "share on social media" message attached
	document.getElementById("challengeDescription").innerHTML = challengeDescriptionText + ' ' + shareMsg;
	//Print the title of the challenge.
	document.getElementById("challengeTitle").innerHTML = challengeTitleText + ' Challenge';

</script>
</body>

</html>
