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
    <link rel="stylesheet" href="css/order.css" type="text/css"/>
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
ORDER FORM
-->

    <div id="box">
                             <div class="clear"></div>



     <form action="orderconfirmed.php" method="POST" />
        <div id="form_na_dane">
            <h2>Your personal information:</h2>
            <input id="size" type="hidden" name="produkt" value="$pdname"/>
            <input type="hidden" name="price" value="$price"/>
            <input type="hidden" name="size" value="$size"/>
            
            <div class="dane">E-mail:</div>
            <label><input type="email" name="email"required/><label>
                
            <div class="dane">Name:</div>
            <label><input type="text" name="imie"required/><label>
                    
            <div class="dane">Surname:</div>
            <label><input type="text" name="nazwisko"required/><label>
                
            <div class="dane">Phone:</div>
            <label><input type="tel"pattern="[0-9]{3}[0-9]{3}[0-9]{3}"
            name="telefon"required/><label>
             
            <h2>Address:</h2>
             
            <div class="dane">Street and house number</div>
            <label><input type="text" name="ulica"required/><label>
                 
            <div class="dane">Postal code:</div>
            <label><input type="text" pattern="[0-9]{2}-[0-9]{3}"name="kodpocztowy"placeholder="np. 01-100"required/><label>
                    
            <div class="dane">City:</div>
            <label><input type="text" name="miasto"required/><label>
            
            <div class="reg">I have read the store regulations and accept their content.</div>
            <input type="checkbox" name="" required/>
            <input type="submit" value="Summary"name=""required/>
        
        </div>
      </form>

  <!--
  CUSTOMER CHECKOUT
  -->
        <div id="php">
            <h3>Order:</h3>
            <div id="finalCart">
                <table>
                    <tr>
                        <td>lp:</td>
                        <td>img:</td>
                        <td>product:</td>
                        <td>size:</td>
                        <td>amount:</td>
                        <td>price:</td>
                    </tr>
                </table>
                <div>
                    <h3>Total: <span id="totalAmountPLN"></span> PLN</h3>
                </div>
            </div>
        </div>
      
      
  <!--
  FOOTER
  -->
        <div id="stopka">
            <?php include('footer.php') ?>
        </div>
        
    </div>
</div>

    <!--
    SCRIPT
    -->

    <script src="js/finalCart.js"></script>
    <script>
    var variable = "wartość";
    document.getElementById("size").value = size;

    </script>
</body>
</html>
