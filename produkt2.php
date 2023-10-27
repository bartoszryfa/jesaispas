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
    <link rel="stylesheet" href="produkt.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
   
        
        
</head>

<body>

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
   


   <div class="container">
       <img id="expandedImg"src="photos/bluza1.jpg">
     </div>
<div class="row">
  <div class="column">
    <img src="photos/bluza1.jpg" alt="jpg1" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="photos/bluza2.jpg" alt="jpg2" onclick="myFunction(this);">
  </div>
  
</div>



    <div class="box">
    <form action="order.php" method="post">
        <div class="prodname">001 BLACK „DEBUT” HOODIE</div>
        <div class="price">379 PLN</div>
        <div class="clear"></div>
        <div class="size">
            <p>size:</p>
            
       
            <div class="sizes">
                <input type="radio" id="1" checked name="size" class="hidebox" value="S"/>
                <label for="1" class="lbl-radio">
                <div class="display-box"></div>
                    <div class="roz1">S</div>
                </label>
            </div>
            
            <div class="sizes2">
                <input type="radio" id="2" name="size" class="hidebox" value="M"/>
                <label for="2" class="lbl-radio">
                <div class="display-box"></div>
                    <div class="roz2">M</div>
                </label>
            </div>
            
            <div class="sizes3">
                <input type="radio" id="3" name="size" class="hidebox" value="L"/>
                <label for="3" class="lbl-radio">
                <div class="display-box"></div>
                    <div class="roz3">L</div>
                </label>
            </div>
            
            <div class="sizes4">
                <input type="radio" id="4" name="size" class="hidebox" value="XL"/>
                <label for="4" class="lbl-radio">
                <div class="display-box"></div>
                    <div class="roz4">XL</div>
                </label>
            </div>
            </div>
            <div class="clear"></div>
    <input type="hidden" name="price" value="179"/>
    <input type="hidden" name="pdname" value='001 BLACK „DEBUT” HOODIE'/>
            <div id="qt">

            </div>
            <div id="basket">
            <label><input type="button" name="dokoszyka" class="dokoszyka" value="add to basket" onClick="addToBasket('001 BLACK „DEBUT” HOODIE', 379, 'bluza1.jpg')"> </label>
            </div>
        </form>
            <div id="product_type">
               <p> color: black</p>

               <p> material: 100% cotton</p>

                <p>fit: true to size</p>
            </div>
            
        </div>


    <?php include('footer.php') ?>



</div>




<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  expandImg.src = imgs.src;
}
</script>
</body>