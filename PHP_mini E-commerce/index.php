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
    <br/>
            <h1 style="color:rgb(49, 98, 98);font-family: 'Ms Madi', cursive;
            margin-left: 550px;">Welcome to RoseShop</h1>
        <br>
        <div class="container">

        <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="height: 440px;" src="images/reseshire1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="height: 440px;" src="images/Black-Rose-is-a-myth-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="height: 440px;" src="images/istockphoto-1135947774-170667a.jpg" class="d-block w-100" alt="...">
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
                and we will deliver yor order.

              </p>
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