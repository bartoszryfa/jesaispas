<!DOCTYPE html>
<html lang="pl">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500; user-scalable=0;" />
        
        <title>JESAISPAS</title>
    <meta name="description" content=""/>
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="author" content="Bartosz Ryfa"/>
    <link rel="stylesheet" href="order.css" type="text/css"/>
    <link rel="stylesheet" href="cart.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
   
        
        
</head>

<body>
<!--
MENU
-->
<div id="container">
    
    <div id="back">
        <a href="index.php">❮ BACK </a>
    </div>
    
    <div id="card">
        <a href="cart.php"> CART (<span id="cartCount">0</span>)</a>
    </div>
    
    <div id="checkout">
        <a href="order.php"> CHECKOUT</a>
    </div>
    
    
    <div class="clear"></div>
    
    <!--
    CART
    -->
    <div class="row">
        
        
        
        <div id="cart">
            <table>
                
            </table>
            <div>
                <h4>Razem: <span id="totalAmountPLN"></span> PLN</h4>
            </div>
        </div>
        
    </div>
    
    <!--
    SCRIPT
    -->
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script src='js/cart.js'></script>
    
    
    <script>
        function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            expandImg.src = imgs.src;
        }
    </script>
    <script src="js/cartShow.js"></script>
    
    
</body>
</html>
