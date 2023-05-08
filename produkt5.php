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
        <a href=""> CHECKOUT</a>
    </div>
    

                            <div class="clear"></div>
   


   <div class="container">
       <img id="expandedImg"src="photos/czapka.png">
     </div>
<div class="row">
  <div class="column">
    <img src="photos/czapka.png" alt="Nature" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="photos/czapka3.jpg" alt="Snow" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="photos/czapka2.jpg" alt="Mountains"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="photos/czapka4.jpg" alt="Lights"  onclick="myFunction(this);">
  </div>
</div>



    <div class="box">
        <div class="prodname">"DOT" cap - black</div>
        <div class="prodname1">150 PLN</div>
        <div class="clear"></div>
        <div class="size">
            <p>one size</p>
            
        <form action="action.php?id" method="post">
            <div id="basket">
            <label><input name="dokoszyka" class="dokoszyka" value="add to basket" onClick="addToBasket('DOT cap - black', 150, 'czapka.png')"> </label>
        </from>
            </div>
            <div id="product_type">
               <p> color: black</p>

               <p> material: 33% mesh pannels + 67% foam pannels </p>

    
            </div>
            
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

