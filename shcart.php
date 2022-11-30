
<!DOCTYPE html>
<html>
<head>
<title>Font Awesome Icons</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
</head>
<style>


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 100px;
}

.badge {

  font-size: 44px;
  color: orange;
}
.badge:after{
        content:attr(value);
        font-size:22px;
        color: black;
        background: red;
        border-radius:50%;
        padding: 0 5px;
        position:relative;
        left:-8px;
        top:-10px;
        opacity:0.9;
    }

    
    </style>

</head>
<body>

<?php
$ii = 0;

?>

<div class= "sticky" >
<a href= "list.php"><i class="fa badge fa-lg" value= <?php echo $ii +3; ?> >&#xf07a;</i></a>

</div>
<br>



</body>
</html> 
