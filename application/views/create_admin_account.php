<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Navigation bar</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/create_account.css" rel="stylesheet">
    <link href="fonts/css/fontawesome-all.min.css" rel="stylesheet">

</head>

<body>
<div>Admin only</div>
<?php if(isset($_SESSION['userType'])&&$_SESSION['userType'] == 1): ?>
<div class="container" id="createContainer">
    <h2>Create New Administrative Account</h2>
    <br>
    <div class="col-sm-12">
        <div class="row">
            <form>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>First Name</label>
                            <input type="text" placeholder="John" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Last Name</label>
                            <input type="text" placeholder="Doe" class="form-control">
                        </div>
                        <div class="col-sm-2 form-group">
                            <label>M.I.</label>
                            <input type="text" placeholder="B" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 form-group">
                            <label>E-mail Address</label>
                            <input type="text" placeholder="JohnDoe@gmail.com" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 form-group">
                            <label>Address</label>
                            <input type="text" placeholder="2401 Taft Avenue" class="form-control">
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
                        <div class="col-sm-4 form-group">
                            <label>ROLE</label>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Stock Manager</option>
                                    <option>Administrator</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-info" id="btnSubmit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endif;?>

<!-- Bootstrap core JavaScript -->
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
