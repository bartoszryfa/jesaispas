$(document).ready(() => {
    let lp = 1
    let amount = 0

    if(currentCart && currentCart.shop.length){
        currentCart.shop.map(item => {
            $("table").append(`
                <tr>
                    <td>${lp}</td>
                    <td><img style="max-height: 60px" src="./photos/${item.img}" /></td>
                    <td>${item.item}</td>
                    <td>${item.size}</td>
                    <td>${item.amount}</td>
                    <td>${item.price} PLN</td>
                </tr>
            `)
            amount += item.amount * item.price
            lp++
        })
        $("#totalAmountPLN").html(amount.toFixed(2))
    
    }
    else{
        $("#finalCart").html('Koszyk jest pusty.')
    }

    countItems()
})

$(document).ready(function() {
  $('#form').submit(function(e) {
    e.preventDefault();

    var name = $('input[name=pdname]').val();
    var email = $('input[name=size]').val();
    var message = $('input[name=price]').val();

    $.ajax({
      type: 'POST',
      url: 'orderconfirmed.php',
      data: { name: size, name: price, name: pdname },
      success: function() {
        alert('Wiadomość została wysłana!');
      }
    });
  });
});
