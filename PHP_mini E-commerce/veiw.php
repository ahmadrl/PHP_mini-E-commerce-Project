<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Lobster&family=Montserrat:ital,wght@0,100;0,200;1,100&family=Ms+Madi&family=Satisfy&family=Shadows+Into+Light&family=Square+Peg&display=swap" rel="stylesheet">
        <title>RoseShop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .black{background-color: black !important;}
    </style>
</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark black">
        <a class="navbar-brand" href="#" style="display:flex;flex-direction: row;">
            <img src="images/rw.PNG" 
            style=" width: 90px;height: 90px;" alt=""><h1 style="color:rgb(23, 162, 184);font-family: 'Ms Madi', cursive;
            margin-top: 30px;">RoseShop</h1>
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul  class="navbar-nav">
                <li class="nav-item">
                    <a  style="font-family:  cursive;color: rgb(200, 227, 227) !important;" class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a  style="font-family:  cursive;color: rgb(200, 227, 227) !important;" class="nav-link" href="addD.php">Add products</a>
                </li>
                <li class="nav-item">
                    <a style="font-family:  cursive;color: rgb(200, 227, 227) !important;" class="nav-link" href="veiw.php">Veiw products</a>
                </li>
            </ul>
        </div>
    </nav>
   



          


          <?php
          echo '<br>';

          for($i = 0 ; $i < count($_SESSION['arr1']) ; $i++) 
          {
            if(isset( $_SESSION['arr1'][$i])){
           echo '<div class="card" style="width: 18rem; display:inline-block;margin:20px">'.
           '<img src="images\reseshire1.png" class="card-img-top" alt="...">'.
           '<div class="card-body">'.
             '<h5 class="card-title">'.$_SESSION['arr1'][$i]['pname'].'</h5>'.
             '<p class="card-text">'.$_SESSION['arr1'][$i]['desc'].'</p>'.
             '<p class="card-text">'.'Quantity:'.$_SESSION['arr1'][$i]['quantity']. '</p>'.
           '</div>'.
         '</div>';
           }
          }
          echo '<br>';

          ?>
          


    </div>
    </div>
    <br>
    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5  style="font-family:  cursive;color: rgb(44, 53, 53) !important;" class="text-uppercase">Who we are</h5>
      
              <p>
              RoseShop is store for sell roses and flowers,<br><br>you can choose any item you want <br> then contact us 
                and we will deliver yor order.              </p>
            </div>
            <!--Grid column-->
      
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 style="font-family:  cursive;color: rgb(44, 53, 53) !important;" class="text-uppercase">Contact us</h5>
      
              <p>
                Email: Ahmad.alkhalafse@gmail.com <br><br>
                Phone: +962798014636<br><br>
                Address: Amman-Jordan
              </p>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style=" background-color: rgba(0, 0, 0, 0.2);">
          <span style="font-family:  cursive;color: rgb(44, 53, 53) !important;">© 2022 Copyright:</span>         
               <a style="font-family:  cursive;color: rgb(44, 53, 53) !important;"  class="text-dark" href="index.html">ROSE.COM &ensp;</a>
        
            <a class="navbar-brand" href="#" >
            <h1 style="color:rgb(23, 162, 184);font-family: 'Ms Madi', cursive;
            margin-top: 30px;">RoseShop</h1>
            </a>           
            
   
           </div>
        <!-- Copyright -->
      </footer>
      
</body>

</html>
