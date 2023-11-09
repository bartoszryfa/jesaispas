$(document).ready(() => {
    genTable()
})

const addItem = (whatItem, whatSize) => {
    currentCart.shop.map(item => {
        if(item.item == whatItem && item.size == whatSize){
            item.amount = item.amount + 1
        }
    })

    localStorage.setItem('shop', JSON.stringify(currentCart))
    genTable()
}

const removeItem = (whatItem, whatSize) => {
    currentCart.shop.map(item => {
        if(item.item == whatItem && item.size == whatSize){
            item.amount = item.amount - 1 == 0 ? 1 : item.amount - 1
        }
    })

    localStorage.setItem('shop', JSON.stringify(currentCart))
    genTable()
}

const delItem = (whatItem, whatSize) => {
    let delI = null
    currentCart.shop.map((item, idx) => {
        if(item.item == whatItem && item.size == whatSize){
            delI = idx
        }
    })
    currentCart.shop.splice(delI, 1)

    localStorage.setItem('shop', JSON.stringify(currentCart))
    genTable()
}

//table

const genTable = () => {
    countItems()

    $("#cart table").html(`
        <tr>
            <td>lp:</td>
            <td>img:</td>
            <td>product:</td>
            <td>size:</td>
            <td>item:</td>
            <td>price:</td>
            <td>more:</td>
            <td>less:</td>
            <td>remove:</td>
        </tr>
    `)
    currentCart = localStorage.getItem('shop') ? JSON.parse(localStorage.getItem('shop')) : { shop: []}

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
                    <td style="font-size: 22px" onClick="addItem('${item.item}', '${item.size}')">+</td>
                    <td style="font-size: 22px" onClick="removeItem('${item.item}', '${item.size}')">-</td>
                    <td style="font-size: 22px" onClick="delItem('${item.item}', '${item.size}')">x</td>
                </tr>
            `)
            amount += item.amount * item.price
            lp++
        })
        $("#totalAmountPLN").html(amount.toFixed(2))
    }
        else{
            $("#cart").html('Basket is empty.')
    }
}
