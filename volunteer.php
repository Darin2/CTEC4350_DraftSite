<?php session_start();
include("shared.php");
include("dbconn.inc.php");
echo "$component_HTMLHeader";
/*
Link to the wireframes for this project: https://darinhardin550576.invisionapp.com/freehand/Wireframes-YASr5nqZY?projectID=cl09vkvs0jk590132e7033lju
*/
?>
</head>

<body>

<main>
<div class="container-fluid">
  <div id="volunteerJumbotron" class="jumbotron">
    <h1 class="display-4">Fun-Filled Volunteering</h1>
    <p class="lead">Come out and Volunteer with us at...</p>
  </div>
  <div class="volunteer-places d-flex justify-content-center align-items-center">
    <img src="img/rangerstadium.jpg" class="volunteer-img" alt="Responsive image">
    <img src="img/attstadium.jpeg" class="volunteer-img" alt="Responsive image">
    <img src="img/aacenter.jpeg" class="volunteer-img" alt="Responsive image">
  </div>
    <hr class="my-4">
    <p>background image will be full-width</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Call to action of some sort</a>
    </p>



    <!-- "I'm interested in volunteering" form -->
    <div class="container-fluid bg-dark mb-5">
      <!-- the actual form begins here

      It takes up 4 columns of a 12-column grid on large screens, 6 on a medium screen, and all 12 on a small screen.
      -->
        <form class="container col-lg-4 col-md-6 col-sm-12 my-3 px-5 pt-5 bg-light bg-gradient rounded" method="POST" action="">
          <h1 class="text-center text-black">Interested in volunteering with us?</h1>
          <h5 class="text-center text-black">Help us make a difference.</h5>
          <div class="mb-3">
            <p class="text-center text-black">* Required field</p>

            <label for="volunteerEmail" class="form-label text-black">* Email address</label>
            <input type="email" name="contactEmail" class="form-control" id="volunteer-input-Email" aria-describedby="emailHelp">
            <!-- * we don't need this part right now, but leaving the code here as an example of the form-text class*
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            -->
          </div>

          <!-- Get user's first name -->
          <div class="mb-3">
            <label for="volunteerFirstName" class="form-label text-black">* First Name</label>
            <input type="name" name="contactFirstName" class="form-control" id="volunteer-input-FirstName">
          </div>

          <!-- Get user's last name -->
          <div class="mb-3">
            <label for="volunteerLastName" class="form-label text-black">* Last Name</label>
            <input type="name" name="contactLastName" class="form-control" id="volunteer-input-LastName">
          </div>

          <!-- Get user's phone number -->
          <div class="mb-3">
            <label for="volunteerPhoneNumber" class="form-label text-black">Phone Number</label>
            <input type="name" name="contactPhoneNumber" class="form-control" id="volunteer-input-PhoneNumber" placeholder="123-456-7890">
          </div>
    
          <!--Optional message from user -->
          <div class="input-group">
            <span class="input-group-text">Questions or comments</span>
            <label for="volunteerMessage" class="form-label text-black"></label>
            <textarea class="form-control" name="contactMessage" aria-label="With textarea" id="volunteer-input-textArea"></textarea>
          </div>
          <!--submit form -->
          <button type="submit" name="Submit" class="btn btn-primary my-3">Submit</button>
        </form>

    </div>



<!--end container -->
</div>
</main>
<?php echo "$component_Footer";?>
</body>
</html>
