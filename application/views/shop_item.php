<!DOCTYPE html>
<html lang="en">


  <body>
  <script>console.log("");</script>



    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- /.col-lg-3 -->

        <div class="col-lg-8">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="<?=base_url()?>assets/images/iphone.jpg" alt="">
            <hr>
            <div class="card-body">
              <h3 class="card-title"><?= $item[COLUMN_ITEM_NAME]?></h3>
              <h4>$<?= $item[COLUMN_ITEM_PRICE]?></h4>
              <p class="card-text"><?= $item[COLUMN_ITEM_DESC]?></p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars<br><br>
                <?php if(isset($_SESSION['userType'])&&$_SESSION['userType'] == 3): ?>
                    <a class="nav-link" href="<?php echo base_url() ?>page/<?php echo SHOPPING_CART?>">Add to Shopping Cart</a>
                <?php endif;?>
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Reviews
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <a href="#" class="btn btn-success">Leave a Review</a>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->
          
        <div class="col-lg-4">
          <h2 class="my-4">Categories (change later)</h2>
          <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>
        </div>

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>/assets/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
