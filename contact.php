<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";?>
</head>

<body>

<main>
<?php echo "$component_Nav";?>

<form class="" action="index.html" method="post">
  <label for="fname">First Name</label>
  <input type="text" id="fname" name="fname"><br>

  <label for="lname">Last name</label><br>
  <input type="text" id="lname" name="lname">

  <label for="email">Email</label><br>
  <input type="text" id="email" name="email">

  <label for="pnumber">Phone Number</label><br>
  <input type="text" id="pnumber" name="pnumber">

  <label for="interest">I am interested in...</label><br>
  <select id="interested" name="interested">
    <option value="volunteering">Volunteering</option>
    <option value="donation">Donating</option>

  </select>
</form>

</main>

<?php echo "$component_Footer";?>
</body>
</html>
