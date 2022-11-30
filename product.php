<!DOCTYPE html>
<!-- Requiring the price file file -->
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
     
        <h1 class= "text-center"> Our Products</h1> <br> <br>
           </div>
        </div>
         <?php
       include_once 'shcart.php';
      ?>
        
		<div class= "container">
      <div class="card">
  <div class="text">
<h2> Golden Swiss </h2>
    <div class= "imgBx">
        <a href= "#">
          <img src="./images/download.jfif" alt="./images/lala.jpg">
        </a>

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
<form action= "list.php" method= "post">
<input type= "submit" class= "button" id= submit1 value= "Add to cart">
<?php
if (isset($_POST['submit'])) {
echo "lolipop";
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
     <img src="./images/lala.jpg" alt= "./images/swiss gold33.webp">
  </a>

       
   <div class= "price">
<?php
$sql = "SELECT * FROM watches WHERE ID=2;";
$result= mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0)  {
   while ($row = mysqli_fetch_assoc($result)) {
      echo  $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
   }
}
?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
    </div>
  </div>
    </div>
   

<div class= "container">
  <div class="card">
    <div class="text">
      <h2> Swiss 212</h2>
         <div class= "imgBx">
           <a href= "#">
          <img src="./images/1.jpg" alt= "./images/33.jpg">
          </a>
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
  <a href= "product.php" div class="button" >Add to cart</a>
  </div>
   
</div>
</div>
</div>



<div class= "container">
  <div class="card">
     <div class="text">
       <h2> Tanzatime</h2>
    <div class= "imgBx">
    <a href= "#">
  <img src="./images/tanzatime.webp" alt= "./images/swiss222.jpg">
</a>
	
       </div>
       
<div class= "price">
  <?php
  $sql = "SELECT * FROM watches WHERE ID=4 ;";
  $result= mysqli_query($conn, $sql);
  $resultcheck = mysqli_num_rows($result);
  
  if ($resultcheck > 0)  {
     while ($row = mysqli_fetch_assoc($result)) {
        echo  $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
     }
  }
        ?>
		</div>
      <a href= "product.php" div class="button" >Add to cart</a>
          </div>
            </div>
              </div>
    


               <div class= "container">
                  <div class="card">
                     <div class="text">
                        <h2> Iced Tee</h2>
                           <div class= "imgBx">
                              <a href= "#">
                           <img src="./images/icedtee.jpg" alt="./images/22.png">
                               </a>

<br>
<br>
<br>
	
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
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>
          </body>
             </html>

 <div class= "container">
      <div class="card">
         <div class="text">
            <h2> GS33</h2>
                <div class= "imgBx">
                    <a href= "#">
                      <img src= "./images/bluu.jfif"alt="./images/11.webp">
                   </a>

<br>
<br>
<br>
	
</div>
                <div class= "price">
                <?php
             $sql = "SELECT * FROM watches WHERE ID=6 ;";
             $result= mysqli_query($conn, $sql);
             $resultcheck = mysqli_num_rows($result);
             
             if ($resultcheck > 0)  {
                while ($row = mysqli_fetch_assoc($result)) {
                   echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
                }
             }
                ?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>
          

			 <div class= "container">
      <div class="card">
         <div class="text">
            <h2> AB4 Gold</h2>
                <div class= "imgBx">
                    <a href= "#">
                      <img src="./images/ggol.jpg" alt="./images/15.jfif">
                   </a>

<br>
<br>
<br>
	
</div>
                <div class= "price">
                <?php
         $sql = "SELECT * FROM watches WHERE ID=7 ;";
         $result= mysqli_query($conn, $sql);
         $resultcheck = mysqli_num_rows($result);
         
         if ($resultcheck > 0)  {
            while ($row = mysqli_fetch_assoc($result)) {
               echo  $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
            }
         }
                ?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>
          </body>
             </html>


			 <div class= "container">
      <div class="card">
         <div class="text">
            <h2>Swiss515</h2>
                <div class= "imgBx">
                    <a href= "#">
                      <img src="./images/12.jpg" alt = "./images/vIN41.webp">
                   </a>

<br>
<br>
<br>
	
</div>
                <div class= "price">
                <?php
              $sql = "SELECT * FROM watches WHERE ID=8;";
              $result= mysqli_query($conn, $sql);
              $resultcheck = mysqli_num_rows($result);
              
              if ($resultcheck > 0)  {
                 while ($row = mysqli_fetch_assoc($result)) {
                    echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
                 }
              }
                ?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>


			 <div class= "container">
      <div class="card">
         <div class="text">
            <h2> Tanzatime22</h2>
                <div class= "imgBx">
                    <a href= "#">
                      <img src="./images/tanzatime2.jpg" alt= "./images/99.jpg">
                   </a>

<br>
<br>
<br>
	
</div>
                <div class= "price">
                <?php
               $sql = "SELECT * FROM watches WHERE ID=9 ;";
               $result= mysqli_query($conn, $sql);
               $resultcheck = mysqli_num_rows($result);
               
               if ($resultcheck > 0)  {
                  while ($row = mysqli_fetch_assoc($result)) {
                     echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
                  }
               }
                ?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>


			 <div class= "container">
      <div class="card">
         <div class="text">
            <h2> Iced45</h2>
                <div class= "imgBx">
                    <a href= "#">
                      <img src="./images/icedtee2.webp" alt= "./images/Blue-Red.webp">
                   </a>

<br>
<br>
<br>
	
</div>
                <div class= "price">
                <?php
          $sql = "SELECT * FROM watches WHERE ID=10 ;";
          $result= mysqli_query($conn, $sql);
          $resultcheck = mysqli_num_rows($result);
          
          if ($resultcheck > 0)  {
             while ($row = mysqli_fetch_assoc($result)) {
                echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
             }
          }
                ?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>


			 <div class= "container">
      <div class="card">
         <div class="text">
            <h2> Golden SwissM8</h2>
                <div class= "imgBx">
                    <a href= "#">
                      <img src= "./images/rrer.webp"alt="./images/golden swiss2.jfif">
                   </a>

<br>
<br>
<br>
	<br>
	<br>
</div>
                <div class= "price">
                <?php
            $sql = "SELECT * FROM watches WHERE ID=11 ;";
            $result= mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            
            if ($resultcheck > 0)  {
               while ($row = mysqli_fetch_assoc($result)) {
                  echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
               }
            }
                ?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>
          </body>
             </html>


			 <div class= "container">
      <div class="card">
         <div class="text">
            <h2> ZB9 Gold</h2>
                <div class= "imgBx">
                    <a href= "#">
                      <img src="./images/14.jpg" alt= "./images/golden swiss2.jfif">
                   </a>

<br>
<br>
<br>
	
</div>
                <div class= "price">
                <?php
             $sql = "SELECT * FROM watches WHERE ID=12 ;";
             $result= mysqli_query($conn, $sql);
             $resultcheck = mysqli_num_rows($result);
             
             if ($resultcheck > 0)  {
                while ($row = mysqli_fetch_assoc($result)) {
                   echo  $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
                }
             }
                ?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>


			 <div class= "container">
      <div class="card">
         <div class="text">
            <h2> Swiss 499</h2>
                <div class= "imgBx">
                    <a href= "#">
                      <img src="./images/16.webp" alt="./images/17.jpg">
                   </a>

<br>
<br>
<br>
	
</div>
                <div class= "price">
                <?php
      $sql = "SELECT * FROM watches WHERE ID=13 ;";
      $result= mysqli_query($conn, $sql);
      $resultcheck = mysqli_num_rows($result);
      
      if ($resultcheck > 0)  {
         while ($row = mysqli_fetch_assoc($result)) {
            echo  $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
         }
      }
                ?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>
          </body>
             </html>


			 <div class= "container">
      <div class="card">
         <div class="text">
            <h2> 000Moree</h2>
                <div class= "imgBx">
                    <a href= "#">
                      <img src="./images/18.jpeg" alt= "./images/17.jpg">
                   </a>

<br>
<br>
<br>
	
</div>
                <div class= "price">
                <?php
            $sql = "SELECT * FROM watches WHERE ID=14 ;";
            $result= mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            
            if ($resultcheck > 0)  {
               while ($row = mysqli_fetch_assoc($result)) {
                  echo  $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
               }
            }
                ?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>


			 <div class= "container">
      <div class="card">
         <div class="text">
            <h2>Swiss 515</h2>
                <div class= "imgBx">
                    <a href= "#">
                      <img src="./images/icedtee.jpg" alt="./images/24.jpg">
                   </a>

<br>
<br>
<br>
	
</div>
                <div class= "price">
                <?php
         $sql = "SELECT * FROM watches WHERE ID=15 ;";
         $result= mysqli_query($conn, $sql);
         $resultcheck = mysqli_num_rows($result);
         
         if ($resultcheck > 0)  {
            while ($row = mysqli_fetch_assoc($result)) {
               echo   $row["Name"]. " <br>".$row ["Category"]. "<br>" . "ZAR" .$row ["Price"]. "<br>" ;
            }
         }
                ?>
</div>
<a href= "product.php" div class="button" >Add to cart</a>
</div>
    </div>
       </div>
          </body>
             </html>








