<?php

session_start();
include 'dbconn.php';

if (isset($_POST["submit"])) {
    if (isset($_SESSION["shopping_cart"]))
}
     if(isset($_SESSION["shopping_cart"])){

     }else{
        $item_array = array (
            'item id'           =>  $_GET["ID"],
            'item_name'         =>  $_POST["hidden_name"],
            'item_price'        =>  $_POST["hidden_price"],
            'item_quantity'     =>  $_POST["hidden_quantity"],
        );
     }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Shopping cart</title>
        <script src= "https://ajax.googleapis.com/ajax/libs/query/2.20/jquery.min.js">
            <link rel="stylesheet" href>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootsrap.min.">
</head>
<body>
<br>
<div class="container" style= "width: 700px;">
<h3 align="center" >Shopping Cart<h3><br>
<?php
/*  $query= "SELECT * FROM watches ORDER BY ID ASC";
$result= mysqli_query($connect, $query);
if (mysqli_num_rows($result)> 0) {
    while ($row = mysqli_fetch_array($result))
}  */
?>
<div class= "col-md-4">
   <form method= "post" action= "index.php?action on=add&id=<?php echo $row["id"]?>">
   <div style= "border:1px solid #333 ;background-color:#f1f1f1; border-radius:">
   <img src= "<?php echo $row[image]; ?>" class= "img-responsive" /><br />
   <h4 class= "text-info"><?php echo $row ["name"]; ?></h4>
   <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
   <input type="text" name= "quantity" class="form-control" value="1" />
   <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>"/>
   <input type="hidden" name="hidden_price" value="<?php echo $row["price"]?>" />
   <input type= "submit" name="add_to_cart" style="margin-top: 5px;" class="btn "/>
   </div>
   </form>


</body>
</html>