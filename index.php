<?php
  require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: home.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Index page| E-Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

          <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

       <div id="content">
            <!--Main banner image-->
            <div  id = "banner_image">
                <div class="container ">
                    <center>
                        <div id="banner_content">
                            <h1 > Biggest Online Mobile Store</h1>
                            
                            <br>
                            <br>
                            <a  href="home.php." class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>
            <!--Main banner image end-->

            <!--Item list-->
            <div  class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="text-align: center">BELOW ARE SOME OF THE PRODUCT </h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="home.php">
                               <div class="thumbnail">
                                   <img src="./img/oneplus.png" alt="Oneplus" >
                                        <div class="caption">
                                            <h3>Oneplus</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="home.php">
                               <div class="thumbnail">
                                   <img src="./img/xgody.jpg" alt="galaxy note 8 plus" >
                                        <div class="caption">
                                            <h3>xgody</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="home.php">
                               <div class="thumbnail">
                                   <img src="./img/phone 1.jpg" alt="Inspire" >
                                        <div class="caption">
                                            <h3>Inspire</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="home.php">
                               <div class="thumbnail">
                                   <img src="./img/smart phone.jpg" alt="Furious" >
                                        <div class="caption">
                                            <h3>Furious</h3>
                                        </div>
                              </div>
                            </a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Item list-->
        </div>

        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body>
</html>
