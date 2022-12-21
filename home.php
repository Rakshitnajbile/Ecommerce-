<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>

    <head>
        <title>home | E-Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </head>

    <body style="padding-top: 50px;">
        <!-- Header file -->
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'login.php';
        ?>
        <br>
        <br>

        <div class="container">
            
    <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center><h1>Welcome to our E-Store</h1>
                    <p>We have the best Mobile phone from Popular Brands for you. </p>
                </center>
            </div>
            <hr>
            <br>
            <div class="row">


                <div  text-center">
                    <div class="container-fluid" >
                        <!--Products-->

                        <div class="col-sm-4 home-feature">
                            <div class="panel panel-default">
                                <div class="panel-heading" >
                                    <h4>Black Shark</h4>
                                </div>

                                <div class="thumbnail">

                                    <img src="./img/android phone.jpg" alt="Black Shark" >
                                    <div class="caption">
                                        <p>6.5' Screen ,snap-dragon processor, 4GB RAM ,64GB internal memory,RS 15000.</p>      
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">  Order Now</a></p>
                                            <?php
                                        } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?> 
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-4 home-feature">
                            <div class="panel panel-default">
                                <div class="panel-heading" >
                                    <h4>Oneplus</h4>
                                </div>

                                <div class="thumbnail">

                                    <img src="./img/oneplus.png" alt="Oneplus" >
                                    <div class="caption">
                                        <p>6' Screen,snap-dragon 750g processor,6GB RAM,128GB internal memory,RS 25000.</p>      
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                            <?php
                                        } else {
                                            //I have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?> 
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-4 home-feature">
                            <div class="panel panel-default">
                                <div class="panel-heading" >
                                    <h4>Furious</h4>
                                </div>

                                <div class="thumbnail">

                                    <img src="./img/smart phone.jpg" alt="Furious" >
                                    <div class="caption">
                                        <p>5.5' Screen,MediaTek Hellio G25 processor G25,2GB RAM,16GB internal memory,RS 7000.</p>      
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                            <?php
                                        } else {
                                            //I  have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?> 
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-sm-4 home-feature">
                            <div class="panel panel-default">
                                <div class="panel-heading" >
                                    <h4>Inspire</h4>
                                </div>

                                <div class="thumbnail">

                                    <img src="./img/phone 1.jpg" alt="Inspire" >
                                    <div class="caption">
                                        <p>5.5' Screen,Snapgragon processor,6GB RAM,64GB internal memory,RS 17000.</p>      
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-block btn-primary ">Order Now</a></p>
                                            <?php
                                        } else {
                                            //I  have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?> 
                                    </div>
                                </div>


                            </div>
                        </div><!-- comment -->
                        <div class="col-sm-4 home-feature">
                            <div class="panel panel-default">
                                <div class="panel-heading" >
                                    <h4>xgody</h4>
                                </div>

                                <div class="thumbnail">

                                    <img src="./img/xgody.jpg" alt="xgody" >
                                    <div class="caption">
                                        <p>4.2' Screen,MediaTek Hellio G25,2GB RAM, 16GB internal memory,RS 8000.</p>      
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                            <?php
                                        } else {
                                            //I have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block  ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?> 
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-sm-4 home-feature">
                            <div class="panel panel-default">
                                <div class="panel-heading" >
                                    <h4>Iphone 7 plus</h4>
                                </div>

                                <div class="thumbnail" style="margin-bottom: 0px">

                                    <img src="./img/ipnone7plus.png" alt="Iphone 7 plus" >
                                    <div class="caption">
                                        <p>5.5' Screen,Quad code processor,3GB RAM,32GB internal memory,RS 22000.</p>      
                                        <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                            <?php
                                        } else {
                                            //I have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                            } else {
                                                ?>
                                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?> 
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->                                                                                                                         
        <?php include 'includes/footer.php'; ?>
        <!--Footer end-->
    </body>
</html>

