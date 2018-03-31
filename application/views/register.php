<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Navigation bar</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>/assets/css/register.css" rel="stylesheet">
    <link href="<?=base_url()?>/assets/fonts/css/fontawesome-all.min.css" rel="stylesheet">

  </head>
  <body>


    <div class="container" id="registerContainer">
        <h2>Create New Account</h2>
        <br>
        <div class="col-sm-12">
        <div class="row">
            <form>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4 form-group">
                           <label>First Name</label>
                                <input type="text" placeholder="Enter First Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                        <label>Last Name</label>
                            <input type="text" placeholder="Enter Last Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-2 form-group">
                        <label>M.I.</label>
                            <input type="text" placeholder="Enter M.I." class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 form-group">
                            <label>E-mail Address</label>
                                <input type="text" placeholder="Enter City Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-8 form-group">
                            <label>Credit Card Number</label>
                                <input type="text" placeholder="Enter State Name Here.." class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 form-group">
                            <label>Email Address</label>
                                <input type="text" placeholder="Enter Email Address Here.." class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Date of Birth</label>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-3 form-group">
                                <input type="text" placeholder="Month" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" placeholder="Day" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" placeholder="Year" class="form-control">
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Shipping Address</label>
                                <input type="text" placeholder="Enter Shipping Address Here.."  class="form-control"></text>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>Secret Question</label>
                                <input type="text" placeholder="Enter Shipping Address Here.." class="form-control"></text>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-info" id="btnSubmit">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>
      
    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
