// notify('info', 'Successful', ' Cart has been Updated')
function notify(type, title, text) {
    new PNotify.alert({
        title: title,
        text: text,
        type: type
    });
}

function decreaseValue(id) {
    // var siblings = $(this).siblings('input.quantity-no');
    // if (parseInt(siblings.val(), 10) >= 1) {
    //     siblings.val(parseInt(siblings.val(), 10) - 1);
    //     var newPrice=siblings * 

    var value = parseInt(document.getElementById(`quantity-no-${id}`).value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;

    document.getElementById(`quantity-no-${id}`).value = value;
    var price = parseInt(document.getElementById(`price${id}`).innerHTML, 10);
    document.getElementById(`total${id}`).innerHTML = price * value;
}

function increaseValue(id) {
    // var siblings = $(this).siblings('input.quantity-no');
    // siblings.val(parseInt(siblings.val(), 10) + 1);

    var quantity = parseInt(document.getElementById(`quantity-no-${id}`).value, 10);
    var price = parseInt(document.getElementById(`price${id}`).innerHTML, 10);


    quantity = isNaN(quantity) ? 0 : quantity;
    quantity++;

    document.getElementById(`quantity-no-${id}`).value = quantity;
    document.getElementById(`total${id}`).innerHTML = price * quantity;
    updateCart(id, quantity);

}

const updateCart = (id, quantity) => {
    const dataToSend = {
        id,
        quantity
    }

    const notification = {
        type: 'info',
        title: 'Successful',
        text: 'Cart has been updated'
    }

    const path = '/updateCart'
    sendData(path, dataToSend, notification)
}

const deleteCart = (id, quantity, price) => {
    const dataToSend = { id }

    const notification = {
        type: 'info',
        title: 'Successful',
        text: 'Item has been removed from cart'
    }

    const path = '/deleteCart'
    sendData(path, dataToSend, notification)
}