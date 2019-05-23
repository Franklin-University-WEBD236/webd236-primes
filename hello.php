<?php
include_once('util.php');
$name = safeParam('name', "World");
?>
  
<?php include('header.php'); ?>
      <div class="row">
        <div class="col-lg-8 offset-2">
          <h2>Results</h2>
          <p>Hello <?php echo "$name!" ?></p>
          <p><a href="/">Return to BMI Calculator</a></p>
        </div>
      </div>
<?php include('footer.php'); ?>