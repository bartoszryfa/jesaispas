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
         <a href="cart.php"> CART  (<span id="cartCount">0</span>)</a>
     </div>
     
     <div id="checkout">
         <a href=""> CHECKOUT</a>
     </div>
     
    <div id="box">
                             <div class="clear"></div>



      <form action="sendMail.php" id="sendOrder" method="POST">
        <div id="form_na_dane">
            <h2>Twoje dane:</h2>
<input id="size" type="hidden" name="produkt" value="$pdname"/>
<input type="hidden" name="price" value="$price"/>
<input type="hidden" name="size" value="$size"/>
            <div class="dane">E-mail:</div>
            <label><input type="email" name="email" id="insertEmail" required/><label>
                
            <div class="dane">Imię:</div>
            <label><input type="text" name="imie" id="insertName" required/><label>
                    
            <div class="dane">Nazwisko:</div>
            <label><input type="text" name="nazwisko" id="insertSurname" required/><label>
                
            <div class="dane">Telefon:</div>
            <label><input type="tel"pattern="[0-9]{3}[0-9]{3}[0-9]{3}" id="insertPhone" name="telefon"required/><label>
             
             <h2>Dane adresowe:</h2>
             
             <div class="dane">Ulica i numer domu:</div>
             <label><input type="text" name="ulica" id="insertStreet" required/><label>
                 
            <div class="dane">Kod pocztowy:</div>
            <label><input type="text" pattern="[0-9]{2}-[0-9]{3}"name="kodpocztowy" id="insertPostal" placeholder="np. 01-100"required/><label>
                    
            <div class="dane">Miasto:</div>
            <label><input type="text" name="miasto" id="insertCity" required/><label>
            
            <div class="reg">Zapoznałem się z regulaminem sklepu internetowego i akceptuję jego treść.</div>
            <input type="checkbox" name="" required/>
            
            <input type="submit" value="Przejdź do podsumowania zamówienia"name=""required/>
        
        </div>
      </form>





<div id="php">
    <h3>Zamówienie:</h3>
    <div id="finalCart">
        <table>
            <tr>
                <td>lp:</td>
                <td>img:</td>
                <td>produkt:</td>
                <td>rozmiar:</td>
                <td>ilość:</td>
                <td>cena:</td>
            </tr>
        </table>
        <div>
            <h3>Razem: <span id="totalAmountPLN"></span> PLN</h3>
        </div>
    </div>
</div>
      
      

<div id="stopka">
    <?php include('footer.php') ?>

</div>


      
      
      
      
    </div>
</div>

<script src="js/finalCart.js"></script>
<script>
var variable = "wartość";
document.getElementById("size").value = size;

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $("#sendOrder").on('submit', (e) => {
        e.preventDefault()
        let form = $(this);
        let currentCart = localStorage.getItem('shop') ? JSON.parse(localStorage.getItem('shop')) : { shop: []}
        
        console.log(currentCart)
        let html = ``
        currentCart.shop.map((item, idx) => html = html + `${idx+1}. ${item.item} - x${item.amount} - rozmiar ${item.size} - ${item.price} pln\n\n`)
                
        html = html + `\n\nRazem: ${$("#totalAmountPLN").html()} PLN + 20 PLN ship`

        $.ajax({
            url: './php/sendMail.php',
            method: 'POST',
            data: {
                email: $("#insertEmail").val(),
                name: $("#insertName").val(),
                surname: $("#insertSurname").val(),
                street: $("#insertStreet").val(),
                phone: $("#insertPhone").val(),
                postal: $("#insertPostal").val(),
                city: $("#insertCity").val(),
                total: $("#totalAmountPLN").html(),
                orders: html
            },
            success: (data) => {
                window.location.replace('orderconfirmed.php')
                console.log(data)
            },
            error: (e) => console.log(e)
        })

        return false;
    })
</script>
</body>
</html>
