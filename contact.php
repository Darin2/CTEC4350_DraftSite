<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>
</head>

<body>

<main>
<?php echo "$component_Nav";?>

<form class="" action="index.html" method="post">
  <label for="fname">First Name</label> <br>
  <input type="text" id="fname" name="fname"><br>

  <label for="lname">Last name</label> <br>
  <input type="text" id="lname" name="lname"><br>

  <label for="email">Email</label> <br>
  <input type="text" id="email" name="email"><br>

  <label for="pnumber">Phone Number</label> <br>
  <input type="text" id="pnumber" name="pnumber"><br>

  <label for="interest">I am interested in...</label><br>
  <select id="interested" name="interested">
    <option value="volunteering">Volunteering</option>
    <option value="donation">Donating</option>

  </select>
</form>

<!-- bootstrap form example -->
<div class="container-fluid bg-dark bg-gradient">
  <h1 class="text-center text-white">Contact Us</h1>
  <!-- the actual form begins here .
  It takes up 4 columns of a 12-column grid on large screens, 6 on a medium screen, and all 12 on a small screen.
  -->
    <form class="container col-lg-4 col-md-6 col-sm-12 my-5">
      <div class="mb-3">
        <label for="contactField-Email" class="form-label text-white">Email address</label>
        <input type="email" class="form-control" id="contactField-Email" aria-describedby="emailHelp">
        <!-- * we don't need this part right now, but leaving the code here as an example of the form-text class*
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        -->
      </div>
      <!-- Get user's first name -->
      <div class="mb-3">
        <label for="contactField-FirstName" class="form-label text-white">First Name</label>
        <input type="name" class="form-control" id="contactField-FirstName">
      </div>
      <!-- Get user's last name -->
      <div class="mb-3">
        <label for="contactField-LastName" class="form-label text-white">Last Name</label>
        <input type="name" class="form-control" id="contactField-LastName">
      </div>
      <!-- Get user's phone number -->
      <div class="mb-3">
        <label for="contactField-Phone" class="form-label text-white">Phone Number</label>
        <input type="name" class="form-control" id="contactField-Phone" placeholder="123-456-7890">
      </div>
      <!-- dropdown menu for "I am interested in.." -->
      <div class="mb-3">
        <select class="form-select" aria-label="Default select example">
          <option selected>I am interested in...</option>
          <option value="1">Joining The G.U.L.F. as a participant</option>
          <option value="2">Volunteering with The G.U.L.F.</option>
          <option value="3">Sponsorship of The G.U.L.F.</option>
          <option value="4">Other</option>
        </select>
      </div>
      <!--Optional message from user -->
      <div class="input-group">
        <span class="input-group-text">Message (optional)</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
      </div>
      <!--Checkbox input -->
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label text-white" for="exampleCheck1">I'd like to receive occasional updates and announcements from The G.U.L.F.</label>
      </div>

      <!--submit form -->
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<!-- end bootstrap form example -->

</main>

<?php echo "$component_Footer";?>
</body>
</html>
