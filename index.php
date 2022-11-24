<!DOCTYPE html>
<!-- include functions and connect to the database-->

<?php 

session_start();
include 'dbconn.php';

?>
<html lang="en">
    <head>
        <title> </title>
        <link rel= "stylesheet" href= "stylesheet.css ">
        <script src= "https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery/2.1.3/jquery.min.js"></script>
        <script src= "js/bootstrap.min.js"></script>
        <meta charset= "UTF=8">
        <meta http-equiv="X-AU-Compatible" content= "IE=edge">
        <meta name= "viewport" content= "width=devie=width, initial-scale= 1.0">
        <title> </title>




        <style>
      .container {
        display: flex;
        align-items: center;
        justify-content: center
      }
      img {
        max-width: 100%
      }
      .image {
        flex-basis: 40%
      }
      .text {
        font-size: 20px;
        padding-left: 20px;
      }
    </style>
</head>


<body>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <div class="sticky">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                   <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="product.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
           </a>
       
      </li>
    </div>
    </ul>
  </div>
</nav>

<div class= "col-md-2"></div>

<div class= "col-md-8">
    <div class="row">
      <h1 class= "text-center">STARFELZ' </h1>
        <h1 class= "text-center"> Upcoming Collection!!</h1> <br> <br>
           </div>
        </div>
        <div class= "container">
      <div class="card">
  <div class="text">
<h2> Golden Swiss </h2>
    <div class= "imgBx">
        <a href= "#">
          <img src="./images/download.jfif" alt="">
        </a>
        <br>
<br>
<br>
<p>  10 carats and 2 troy ounces.Imported from Italy,limited edition,
  of jeweller Fourie J! 
</p>

<a href= "product.php" div class="button" >View all items</a>

</div>

<div class= "price">
<?php
$sql = "SELECT * FROM watches WHERE ID=1 ;";
$result= mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0)  {
   while ($row = mysqli_fetch_assoc($result)) {
      echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
   }
}
?>
</div>

     </div>
         </div>
      
            <div class= "container">
         <div class="card">
     <div class="text">
  <h2> AB3 Gold </h2>
<div class= "imgBx">
  <a href= "#">
     <img src="./images/lala.jpg">
  </a>
  <br>
<br>
<br>
       <p> Historical AB3 gold! Light weight, Non-iced and classic.
       12 carats and weighs 1 troy ounces.
       </p>
       <a href= "product.php" div class="button" >View all items</a>
    </div>
   <div class= "price">
<?php
$sql = "SELECT * FROM watches WHERE ID=2 ;";
$result= mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0)  {
   while ($row = mysqli_fetch_assoc($result)) {
      echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
   }
}
?>
</div>
  </div>
    </div>
   

<div class= "container">
  <div class="card">
    <div class="text">
      <h2> Swiss 212</h2>
         <div class= "imgBx">
           <a href= "#">
          <img src="./images/1.jpg">
          </a>
          <br>
<br>
<br>
              <p> Rose gold and South African locally made! 
                  9k carat, 37.5% Gold(Au).
              </p>
              <br>
              <br>
              <a href= "product.php" div class="button" >View all items</a>
        </div>
    <div class= "price">
  <?php
$sql = "SELECT * FROM watches WHERE ID=3 ;";
$result= mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0)  {
   while ($row = mysqli_fetch_assoc($result)) {
      echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
   }
}
  ?>
</div>
</div>
</div>



<div class= "container">
  <div class="card">
     <div class="text">
       <h2> Tanzatime</h2>
    <div class= "imgBx">
    <a href= "#">
  <img src="./images/tanzatime.webp">
</a>
<br>
<br>
<br>
       <p>With 503 carat,10 000 times more rare than diamond and of cause indegenous
         to Africa. 
       </p>
       
       <a href= "product.php" div class="button" >View all items</a>
       </div>
       
<div class= "price">
  <?php
  $sql = "SELECT * FROM watches WHERE ID=4;";
  $result= mysqli_query($conn, $sql);
  $resultcheck = mysqli_num_rows($result);
  
  if ($resultcheck > 0)  {
     while ($row = mysqli_fetch_assoc($result)) {
        echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
     }
  }
        ?>
          </div>
            </div>
              </div>
    


               <div class= "container">
                  <div class="card">
                     <div class="text">
                        <h2> Iced Tee</h2>
                           <div class= "imgBx">
                              <a href= "#">
                           <img src="./images/icedtee.jpg">
                               </a>
<br>
<br>
<br>
<p> A Diamond Iced silver is just the perfect item if you want LUXURY! 
</p>
<br>
<br>

<a href= "product.php" div class="button" >View all items</a>
</div>
                <div class= "price">
                <?php
                $sql = "SELECT * FROM watches WHERE ID=5 ;";
                $result= mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);
                
                if ($resultcheck > 0)  {
                   while ($row = mysqli_fetch_assoc($result)) {
                      echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
                   }
                }
                ?>
<br>
<br>
</div>
    </div>
       </div>
          </body>
             </html>
