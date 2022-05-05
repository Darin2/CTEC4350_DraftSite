<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>

<body>
<main class="fullwidthBridgePic pb-5">
<?php echo "$component_Nav";?>

<!-- begin alternate way of showing the challenge -->
<div id="challengesContainer" class="container-fluid col-lg-6 col-md-10 col-sm-12 px-5 mx-auto fullwidthBridgePic">
	<div id="challengeBorder" class="col card mt-5">

	  <div class="card-header">
	   <p id="challengeMonth" class="display-2 text-center gulfBlueText">month</p>
	  </div>

	  <div class="card-body gulfBlueBG">
			<img id="challengeImage" class="w-75 mx-auto d-block"></img>
	    <h5 id="challengeTitle" class="display-6 card-title text-center text-white">challenge title</h5>
	    <p id="challengeDescription" class="lead col-sm-6 text-white text-left mx-auto">challenge description with social media reminder goes here (IG: thegulf_tx)</p>
			<p class="lead col-sm-6 text-white text-left mx-auto">Share your success with us on Instagram and use the hashtag #TheGulf.<br><br>Check back next month for another challenge!</p>
	  </div>

	  <div class="card-footer text-muted text-center text-black">
	    	<p id="daysLeft" class="card-text">"next challenge will appear in ____ days" goes here</p>
	  </div>

	</div>
</div>
<!-- end alternate challenge version -->


</main>
<?php echo "$component_Footer";?>
<!-- javascript that makes the content change each month -->
<script>

	/**********************************************************/
	/**************** Setting up a date object ****************/
	/**********************************************************/

	const d = new Date();
	console.log('d.getMonth() = ' + d.getMonth());






	/**********************************************************/
	/**************** Creating our arrays *********************/
	/**********************************************************/

	//create an array of months
	const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];

	//get the number of the current month. January is 0, February is 1, etc
	let monthNumber = d.getMonth();

	// store the current month in a variable
	let currentMonth = month[monthNumber];

	//make sure the month number never goes over 6 (we have 6 challenges)
	if(monthNumber>6){
		monthNumber = monthNumber - 6;
	}

	console.log('currentMonth = ' + currentMonth);

	//array of challenge titles
	let challengeTitleArray = ["Trade Up","3 in 5","Invention","Flipping","Mentoring","Innovation"];

	//array of challenge descriptions
	let challengeDescriptionArray = [

		"This week, your challenge is to turn $5 into at least $25. You get to keep every dollar you make, so get creative! <br>",

		"Come up with three business ideas in five minutes or less, then write a business plan for your favorite one.<br>",

		"Invent your own product and come up with a five minute business pitch as if you were pitching your product to real investors.<br>",

		"Find an item you can buy cheaply from a garage sale, thrift store or friend. Buy the item, and see how quickly you can sell it for a profit.<br>",

		"Connect with a local business owner, either in person or virtually, and ask them what they've learned since starting their own business.<br>",

		"Think of your absolute favorite product. What do you like about it? What makes it great?<br> Now, think of three ways this product could be even better.<br>"]

		//array containg the src of each image, as a string. All images are located in the img folder.
		let imgArray = [
			'img/challenge_tradeup.svg',
			'img/challenge_3in5.svg',
			'img/challenge_invention.svg',
			'img/challenge_flipping.svg',
			'img/challenge_mentor.svg',
			'img/challenge_innovation.svg'
		];

	//make an array containing the number of days in each month, in order from january to december
	let lengthOfMonthArray = [31,28,31,30,31,30,31,31,30,31,30,31];







	/**********************************************************/
	/*** Creating variables for each piece of the challenge ***/
	/**********************************************************/

	let challengeTitleText = "";
	let challengeDescriptionText = "";

	// Set the title of the event based on the current month
	challengeTitleText = challengeTitleArray[monthNumber];
	console.log('challengeTitle = ' + challengeTitleArray[monthNumber]);

	//Set the description of the event based on the current month
	challengeDescriptionText = challengeDescriptionArray[monthNumber];
	console.log('challengeDescription = ' + challengeDescriptionArray[monthNumber]);

	//Get the number for today's date, e.g. "18" for april 18th
	let todaysDateNumber = String(new Date().getDate()).padStart(2, '0');
	console.log('todaysDate = ' + todaysDateNumber);

	//get the number of days in this month
	let daysInCurrentMonth = lengthOfMonthArray[monthNumber];
	console.log('daysInCurrentMonth = ' + daysInCurrentMonth);

	//total days in this month - today's date = days left in this month. Challenge resets on first day of each month
	let daysUntilCountdownResets = daysInCurrentMonth - todaysDateNumber;
	console.log('daysUntilCountdownResets = ' + daysUntilCountdownResets);

	let currentImage = imgArray[monthNumber];







	/***************************************************/
	/**** Set innerHTML of each challenge component ***/
	/**************************************************/

	//Print the current month at the top of the challengesContainer.
	document.getElementById("challengeMonth").innerHTML = "Monthly Challenge: " + currentMonth;

	//Print the title of the challenge.
	document.getElementById("challengeTitle").innerHTML = '<u>The ' + challengeTitleText + ' Challenge</u>';

	//Print the image for this challenge.
	document.getElementById("challengeImage").src = currentImage;

	//Print the description of the challenge with the "share on social media" message attached
	document.getElementById("challengeDescription").innerHTML = challengeDescriptionText + ' ';

	//Print the remaining days for this challenge
	document.getElementById("daysLeft").innerHTML = daysUntilCountdownResets + ' days until our next challenge!';

</script>
</body>

</html>
