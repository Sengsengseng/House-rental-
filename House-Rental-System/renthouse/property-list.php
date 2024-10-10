<?php
include("config/config.php");
?>

<link rel="stylesheet" href="css/property-list.css">

<?php

$sql   = "SELECT * FROM add_property";
$query = mysqli_query($db, $sql);
?>
<?php
if (mysqli_num_rows($query) > 0) {
  while ($rows = mysqli_fetch_assoc($query)) {
    $property_id = $rows['property_id'];
    ?>
    <div class="col-sm-2">
      <div class="card">
        <?php
        $sql2   = "SELECT * FROM property_photo where property_id='$property_id'";
        $query2 = mysqli_query($db, $sql2);

        if (mysqli_num_rows($query2) > 0) {
          $row   = mysqli_fetch_assoc($query2);
          $photo = $row['p_photo'];
          echo '<img class="image" src="owner/' . $photo . '">';
        } ?>

        <h4><b>
            <?php echo $rows['property_type']; ?>
          </b></h4>
        <p>
          <?php echo $rows['city'] . ', ' . $rows['district'] ?>
        </p>
        <p>
          <?php echo '<a href="view-property.php?property_id=' . $rows['property_id'] . '"  class="btn btn-lg btn-primary btn-block" >View Property </a><br>'; ?>
        </p><br>
      </div>
    </div>
    <?php
  }
}
?>