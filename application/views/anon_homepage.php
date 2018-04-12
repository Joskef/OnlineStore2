<!DOCTYPE html>
<html lang="en">


  <body>


    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-2">

          <h4 class="my-4">Categories</h4>
          <ul class="list-group">
            <a href="<?php echo base_url() ?>page/<?php echo PAGE_CATEGORY_ELECTRONICS?>" class="list-group-item">Electronics</a>
<!--              TODO: The rest of these-->
            <a href="<?php echo base_url() ?>page/<?php echo PAGE_CATEGORY_PHONE?>" class="list-group-item">Phone</a>
            <a href="<?php echo base_url() ?>page/<?php echo PAGE_CATEGORY_CLOTHING?>" class="list-group-item">Clothing</a>

        </div>
        <!-- /.col-lg-2 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" height="900" width="900" src="<?=base_url()?>assets/images/sale.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?=base_url()?>assets/images/sale.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?=base_url()?>assets/images/sale.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        <br><br>
        <hr>
        <br><br>
          <div class="row">
              <?php foreach($items as $item): ?>
              <?php $item = json_decode(json_encode($item),true)?>
                    <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                        <a href="<?php echo base_url() ?>page/<?php echo SHOP_ITEM?>"><img class="card-img-top" src="<?=base_url()?>assets/images/iphone.jpg" alt=""></a>
                        <hr>
                        <div class="card-body">
                          <h4 class="card-title">
                            <a href="<?php echo base_url() ?>page/<?php echo SHOP_ITEM?>"><?= $item[COLUMN_ITEM_NAME]?></a>
                          </h4>
                          <h5>$<?= $item[COLUMN_ITEM_PRICE]?></h5>
                          <p class="card-text"><?= $item[COLUMN_ITEM_DESC]?></p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                      </div>
                    </div>
              <?php endforeach; ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>/assets/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
