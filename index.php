<?php include_once('header.php'); ?>
      <div class="row">
        <div class="col-lg-8 offset-2">
          <p>This program will say hello to you.</p>
          <form action="isPrime.php" method="get">
            <div class="form-group">
              <label for="number">Number to test for primality</label>
              <input type="number" min="1" id="number" name="number" class="form-control" placeholder="Enter a number" />
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
<?php include('footer.php'); ?>
