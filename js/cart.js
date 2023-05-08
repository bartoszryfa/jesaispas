let currentCart = localStorage.getItem('shop') ? JSON.parse(localStorage.getItem('shop')) : { shop: []}


const addToBasket = (item, price, img) => {
    currentCart = localStorage.getItem('shop') ? JSON.parse(localStorage.getItem('shop')) : { shop: []}

    let size = $("input[name='size']:checked").val()
    if(typeof(size) == 'undefined') size = 'one-size'
    console.log(`${item} - rozmiar: ${size.toUpperCase()}`)

    let newCart = currentCart

    console.log(newCart)

    newCart['shop'].push({item: item, size: size.toUpperCase(), amount: 1, img, price})

    console.log(newCart)

    console.log('current cart', currentCart)
    console.log('new cart', newCart)
    localStorage.setItem('shop', JSON.stringify(newCart))
    alert(`Dodano ${item} do koszyka.`)
    currentCart = localStorage.getItem('shop') ? JSON.parse(localStorage.getItem('shop')) : { shop: []}
    countItems()

}

$(document).ready(() => {
    currentCart = localStorage.getItem('shop') ? JSON.parse(localStorage.getItem('shop')) : { shop: []}
    countItems()
})

const countItems = () => {
    let counter = 0
    currentCart.shop.map(item => {
        counter += item.amount
    })
    $("#cartCount").html(counter)
}
