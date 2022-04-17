<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>

<!-- script below to figure out the current month-->
<script>
	const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];

	const d = new Date();
	let name = month[d.getMonth()];
	document.getElementById("demo").innerHTML = name;
</script>


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
	    <div id="instagramFeed">
				<p class="card-text">We can put an instagram feed here</p>
			</div>
	  </div>

	  <div class="card-footer text-muted">
	    	<p class="card-text">"next challenge will appear in ____ days" goes here</p>
	  </div>
		
	</div>
</div>
<!-- end alternate challenge version -->
</main>
<?php echo "$component_Footer";?>
</body>
</html>
