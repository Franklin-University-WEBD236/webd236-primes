<?php
include_once('util.php');

function isPrime($num) {
  if ($num == 2 || num == 3) {
    return true;
  }
  for ($i = 3; $i < $num; $i + 2) {
    if ($num % $i == 0) {
      return false;
    }
  }
  return true;
}

$number = safeParam('number', 17);



?>
  
<?php include('header.php'); ?>
      <div class="row">
        <div class="col-lg-8 offset-2">
          <h2>Results</h2>
          <p>The number <?php echo $number ?> is 
<?php
  if (!isPrime($number)) {
    echo " not ";
  }
?>
  prime</p>
          <p><a href="/">Return to BMI Calculator</a></p>
        </div>
      </div>
<?php include('footer.php'); ?>