<?php include_once('header.php'); ?>
      <div class="row">
        <div class="col-lg-8 offset-2">
          <p>This program will say hello to you.</p>
          <form action="hello.php" method="get">
            <div class="form-group">
              <label for="height">Name</label>
              <input type="text" min="1" id="name" name="name" class="form-control" placeholder="Enter your name" />
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
<?php include('footer.php'); ?>
