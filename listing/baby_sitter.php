<!DOCTYPE html>
<html lang="en">

<head>
    <?php

include "db.php";
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>HANDYMAN</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">


    <style type="text/css">
      #one{
        position: absolute;
        left:10%;
        top:10%;
      }  



    </style>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html">HANDYMAN</a>
                           
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER -->
    
    <!--// SLIDER -->
    <!--//END HEADER -->
    <!--============================= FIND PLACES =============================-->
   
    <!--//END FIND PLACES -->
    <!--============================= FEATURED PLACES =============================-->
   
    <!--//END FEATURED PLACES -->
    <!--============================= CATEGORIES =============================-->
    <?php
$keyword="baby_sitter";

    ?>
    <section class="main-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>BABY SITTER</h3>
                    </div>
                </div>
            </div>

          
            <div class="row">
                <?php 

                 $sql = "SELECT * FROM work WHERE Profession LIKE '%$keyword%'";
                 $run_query = mysqli_query($con,$sql);

                   while($row=mysqli_fetch_array($run_query))
                   {
                           $name    = $row['Name'];
                           $phone   = $row['phone'];
                           $rating  = $row['Rating'];
                           $cost    = $row['cost'];                

                        
                
                    
                    ?>
                <div class="col-md-3 category-responsive">
                    <a href="not.php" class="category-wrap" >
                        <div class="category-block">
                            <svg class="category-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve" width="1512px" height="512px" >
                            </svg>
                            <h6 id="one">
                                Name : <?php echo  $name  ?><br>
                                Costing : <?php  echo $cost      ?><br>
                                Rating : <?php  echo $rating     ?><br>
                            </h6>        
                        </div>
                    </a>
                </div>

                <?php
                   }

                ?>

            </div>


        

               
            </div>
       
    </section>
    <!--//END CATEGORIES -->
    <!--============================= ADD LISTING =============================-->
   
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy; 2018 Listing. All rights reserved </p>
                       
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>

</html>
