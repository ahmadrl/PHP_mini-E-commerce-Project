
<?php
  session_start();

if(isset($_POST['sub']))
{
    if (!empty($_POST))
     { 
      $arrr=array('pname'=>$_POST['pr'],'quantity'=>$_POST['prQuantity'],'desc'=>$_POST['prDesc']);
      $_SESSION['arr1'][]= $arrr;
      
}
}

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
            <ul  class="navbar-nav ">
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
        <br>
        <div class="container">

    <h2 style="text-align: center;">Add a new product</h2> <br>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  style="margin: auto; width: 700px; border: 1px solid;padding: 20px;">
        <div  class="form-group">
          <label for="exampleFormControlInput1">Product name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="pr" >
        </div>
   
          <div class="form-group">
            <label for="exampleFormControlFile1">Product image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="prImg">
          </div>
        
        <div  class="form-group">
          <label for="exampleFormControlInput1">Quantity</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="prQuantity" >
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="prDesc"></textarea>
        </div>

        <input type="submit" value="Add product" name="sub" class="btn btn-info" >
       
      </form>
      
      <br>
      <table class="table table-striped">
        <thead>
          <tr>
          <th scope="col">Product name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Product image</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          


          <?php
          

          for($i = 0 ; $i < count($_SESSION['arr1']) ; $i++) 
          {
            if(isset( $_SESSION['arr1'][$i])){
           echo '</tr>'.
           '<td>'.$_SESSION['arr1'][$i]['pname'].'</td>'
           .'<td>'.$_SESSION['arr1'][$i]['quantity']. '</td>'
           .'<td>'.'<img style="height: 100px;"  src="images\reseshire1.png"  alt="...">'.'</td>'

           .'<td>'.$_SESSION['arr1'][$i]['desc'].'</td>'

           .'</tr>';

           }

          }
           



          ?>
          

        </tbody>
      </table>
      <br>

    </div>
    <br>



<footer class="bg-light text-center text-lg-start">
        
      
        <!-- Copyright -->
        <div class="text-center p-3" style=" background-color: rgba(0, 0, 0, 0.2);">
          <span style="font-family:  cursive;color: rgb(44, 53, 53) !important;">© 2022 Copyright:</span>         
               <a style="font-family:  cursive;color: rgb(44, 53, 53) !important;"  class="text-dark" href="index.html">ROSE.COM &ensp;</a>
        
            <a class="navbar-brand" href="#" >
            <h1 style="color:rgb(23, 162, 184);font-family: 'Ms Madi', cursive;
            margin-top: 30px;">RoseShop</h1>
            </a>           
            
   
           </div>
   
      </footer>
      
</body>

</html>
