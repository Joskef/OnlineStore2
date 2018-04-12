


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url() ?>">GES</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <form id="searchForm" method="GET" action="<?=base_url()?>action/<?php echo USER_SEARCH_ITEM?>">
                        <input type="text" placeholder="Search for Products..." name="searchInput" size="92">
                        <button type="submit" id="searchBtn">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>

<!--                    ADMIN ACCOUNT-->
                    <?php if(isset($_SESSION['userType'])&&$_SESSION['userType'] == 1): ?>
<!--                        <div class="dropdown">-->
<!--                            <li class="dropdown-toggle">-->
<!--                                <a data-toggle="dropdown">Admin<span class="caret"></span></a>-->
<!--                                <ul class="dropdown-menu">-->
                    <li class="nav-item" id="ProdList">
                        <a class="nav-link" href="<?php echo base_url() ?>page/<?php echo PRODUCT_LIST?>">Product List</a>
                    </li>
<!--                    TODO: not working-->
                        <li class="nav-item" id="CreateAdminAccount">
                            <a class="nav-link" href="<?php echo base_url() ?>page/<?php echo CREATE_ADMIN_ACCOUNT?>">Create Account</a>
                        </li>
<!--                    TODO: ditto-->
                                    <li class="nav-item" id="Login">
                                        <a class="nav-link" href="<?php echo base_url() ?>action/<?php echo USER_LOGOUT?>">Logout</a>
                                    </li>
<!--                                </ul>-->
<!--                            </li>-->
<!--                        </div>-->
<!--                    TODO: make dropdown work, make css work?-->
<!--                    TODO: add other navbar stuff depending on usertype-->
<!--                    GENERIC USER ACCOUNT-->
                    <?php elseif(isset($_SESSION['userType'])&&$_SESSION['userType'] == 3): ?>
<!--                        <li class="nav-item" id="Cart">-->
<!--                            <a class="nav-link" href="--><?php //echo base_url() ?><!--action/--><?php //echo SHOPPING_CART?><!--">Shopping Cart</a>-->
<!--                        </li>-->
                        <li class="nav-item" id="Login">
                            <a class="nav-link" href="<?php echo base_url() ?>action/<?php echo USER_LOGOUT?>">Logout</a>
                        </li>
                    <?php else:?>
                        <li class="nav-item" id="Login">
                            <a class="nav-link" href="<?php echo base_url() ?>page/<?php echo PAGE_LOGIN?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>page/<?php echo PAGE_REGISTER?>">Sign Up</a>
                        </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>

      




