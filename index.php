<?php session_start();
include("shared.php");
echo "$component_HTMLHeader";
/*
Link to the wireframes for this project: https://darinhardin550576.invisionapp.com/freehand/Wireframes-YASr5nqZY?projectID=cl09vkvs0jk590132e7033lju
*/
?>
</head>

<body>

<main>

<?php echo "$component_Nav";?>
<div class="container">
<!--end container -->
</div>
</main>

<footer>
  <p class="centeredText">Website by Something Visionary - CTEC 4350 @ UT Arlington - For class use only</p>
</footer>
<script>
  /*This code ensures our nav bar is able to be toggled closed. */
      $("#navbarSupportedContent a:not(.dropdown-toggle)").click(function() {
        $("#navbarSupportedContent").collapse("hide");
      });
</script>
</body>
</html>
