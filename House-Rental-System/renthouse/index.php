<?php
session_start();
include("navbar.php");
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
  <div class="bg" style="margin-bottom: 20px;"></div>
  <div class="container active-cyan-4 inline" style="margin-bottom:50px">
    <form method="POST" action="search-property.php">
      <input class="form-control" type="text" placeholder="Enter location to search house." name="search_property"
        aria-label="Search">
    </form>
  </div>
  <div class="container" style="padding-bottom: 200px;">
    <?php include('property-list.php') ?>
  </div>
  <?php
  include('footer.php');
  ?>
</body>
</html>