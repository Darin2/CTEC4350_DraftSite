<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>
<!doctype html>
<html>
<head>
<title>Entrepreuner Challenges | The G.U.L.F. </title>
<style>
#menu {width: 100px; height: 300px; display: inline;}
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
	<a href="#" id="linkM12">December</a><br
</div>
<div id="container">
</div>
	
<div class="container-fluid px-0 mx-auto">
  <div id="challengeJumbotron" class="jumbotron row ml-0">
	
    <!-- challenges row -->
    <div id="about-ChallengesRow" class="row d-flex align-items-center gulfBlueBG bg-gradient">
		
      <section class="col-sm py-0">
		     <h1 class="display-4 text-black text-center">Monthly Entrepreneur Challenge</h1>
<p class="lead text-black text-center">Challenge your entrepreneurial skills each month with our challenges. Click on the current month to discover a new challenge!</p>
		</section>
		<section class="col-sm py-0">
    <div id="m1" class="month">
	
<h4 class="display-4 text-white text-center">January Challenge</h4>
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
	
<div id="m7" class="month">
<h4 class="display-4 text-white text-center">July Challenge</h4>
<p class="lead text-white text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m8" class="month">
<h4 class="display-4 text-white text-center">August Challenge</h4>
<p class="lead text-white text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m9" class="month">
<h4 class="display-4 text-white text-center">September Challenge</h4>
<p class="lead text-white text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m10" class="month">
<h4 class="display-4 text-white text-center">October Challenge</h4>
<p class="lead text-white text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m11" class="month">
<h4 class="display-4 text-white text-center">November Challenge</h4>
<p class="lead text-white text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
	
<div id="m12" class="month">
<h4 class="display-4 text-white text-center">Decemeber Challenge</h4>
<p class="lead text-white text-center">This week, your challenge is to turn $5 into at least $25. <br> You get to keep every dollar you make, so get creative! <br> Share your success with us on Instagram and use the hashtag #TheGulf <br> Check back next month for another challenge!</p>
</div>
      </section>
    </div>
		</div>
	</div>
	
</main>
<?php echo "$component_Footer";?>
</body>
</html>
