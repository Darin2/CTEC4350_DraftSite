<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>
<!doctype html>
<html>
<head>
<title>Monthly Challenges | The G.U.L.F. </title>

<style>
	.month {position:absolute; left:130px; top: 10px; width: 400px; padding: 0.5em; display: none; margin: 0.5em}
	#container {position:absolute; left:130px; top: 10px; width: 400px; padding: 0.5em; display: block;}

</style>

<script>
	function init(){
        anchorArr = document.querySelectorAll("#menu a");
    
        for (let i=0; i < anchorArr.length; i++ ) {
            anchorArr[i].onclick = function(){show(i+1)};
        }
	}
    
	function show(mNum){
		// first, hide all months
        mArr = document.querySelectorAll(".month");
        for (i=0; i<mArr.length; i++){
            mArr[i].style.display = "none";
        }
		// show the particular month
		objId = "m"+mNum;
		obj = document.getElementById(objId);
		obj.style.display = "block";
	}
	
   window.onload = init;
</script>
</head>

<body>
<main>
	<?php echo "$component_Nav";?>
        <h1 class="display-4 text-black text-center">Monthly Entrepreneur Challenge</h1>
<p class="lead text-black text-center">Challenge your entrepreneurial skills each month with our challenges. Click on the current month to discover a new challenge!</p>


<div id="menu">
	<a href="#" id="linkM1">January</a><br>
	<a href="#" id="linkM2">February</a><br>
	<a href="#" id="linkM3">March</a><br>
	<a href="#" id="linkM4">April</a><br>
	<a href="#" id="linkM5">May</a><br>
	<a href="#" id="linkM6">June</a><br>
	<a href="#" id="linkM7">July</a><br>
	<a href="#" id="linkM8">August</a><br>
	<a href="#" id="linkM9">September</a><br>
	<a href="#" id="linkM10">October</a><br>
	<a href="#" id="linkM11">November</a><br>
	<a href="#" id="linkM12">December</a><br>


</div>

<div id="container">
</div>
	
<div class="container-fluid px-0 mx-auto">
  <div id="challengeJumbotron" class="jumbotron row ml-0">
	
    <!-- Our Mission row -->
    <div id="about-ChallengesRow" class="row d-flex align-items-center bg-dark bg-gradient">
      <!-- center-aligned text section with CTA button-->
      <section class="col-sm">
    <div id="m1" class="month">
	
<h3>January Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>

<div id="m2" class="month">
<h3>February Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>

<div id="m3" class="month">
<h3>March Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m4" class="month">
<h3>April Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m5" class="month">
<h3>May Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m6" class="month">
<h3>June Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m7" class="month">
<h3>July Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m8" class="month">
<h3>August Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m9" class="month">
<h3>Septemeber Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m10" class="month">
<h3>October Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m11" class="month">
<h3>November Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m12" class="month">
<h3>Decemeber Challenge</h3>
<p class="lead text-black text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
      </section>
    </div>
		</div>
	</div>
	
</main>
<?php echo "$component_Footer";?>
</body>
</html>
