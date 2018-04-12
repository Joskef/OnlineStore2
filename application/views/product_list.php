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
    <link href="css/product_list.css" rel="stylesheet">
    <link href="fonts/css/fontawesome-all.min.css" rel="stylesheet">

</head>

<body>


<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:22%" class="text-center">Added on</th>
            <th style="width:18%" class="text-center">Rating</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-10">
                        <h4 class="nomargin">Item One</h4>
                        <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </td>
            <td data-th="Price">$24.99</td>
            <td data-th="Subtotal" class="text-center">1/1/2018</td>
            <td data-th="Rating" class="text-center">4.0</td>
            <td class="actions" data-th="">
                <a href="edit_product.html"><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>

            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td><a href="homepage.html" class="btn"><i class="fa fa-angle-left"></i> Go to Homepage</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong></strong></td>
            <td id="checkoutBtn"><a href="add_product.html" class="btn" >Add A Product <i class="fa fa-cart-plus"></i></a></td>
        </tr>
        </tfoot>
    </table>
</div>

<!-- Bootstrap core JavaScript -->
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
