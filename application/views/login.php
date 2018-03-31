<!DOCTYPE html>
<html lang="en">



    <body>


    <div class="wrapper">
        <form class="form-signin" method="POST" action="<?=base_url()?>action/<?php echo USER_LOGIN?>">
          <h4 class="form-signin-heading">Registered Customers</h4>
            <?php if($errorMessage!=""):?>
            <a class="form-control col-md-2" id="message" style="font-size: large; color: white; background: red;"><?=$errorMessage?></a>
            <?php endif;?>
          <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="" autofocus="" />
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required=""/>  
          <a href="#">Forgot your password?</a>
            <br>

          <button class="btn btn-lg btn-primary btn-block" type="submit"id="loginBtn">Login</button>


        </form>
      </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>/assets/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
