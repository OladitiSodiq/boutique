function addItemToCart(id) {
    // e.preventDefault();
    // alert(id);
    var product_id = $('#btn-item-' + id).attr('pk_id');
    // alert(product_id);

    // var price = $('#price' + id).val();

    if (!product_id || isNaN(product_id)) {
        // alert('a');
        return false;
    } else {

        var qty = 1;
        var data = {
            product_id,
            qty
        };
        // alert(data);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            type: "POST",
            url: "/add-to-cart",
            data: data,
            dataType: "json",
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",

            beforeSend: function() {
                $(this).attr('disabled', true);
            },
            success: function(data) {
                // alert(data);

                switch (data.error_no) {

                    case 1:
                        sessionStorage.setItem("cart", data.json);
                        $('#cart-qty').html(data.count);
                        notify('info', 'Successful', data.item.name + ' has been added to your cart.');
                        var div = '';
                        div += '<div class="product-widget" id="product-widget-' + data.item.id + '">';
                        div += '    <div class="product-img">';
                        div += '        <img src="/antique/' + data.item.photo + '" alt="">';
                        div += '    </div>';
                        div += '    <div class="product-body">';
                        div += '        <h3 class="product-name"><a href="/antique-desc/' + data.item.id + '/' + data.item.slug + '"> ' + data.item.name + ' </a></h3>';
                        div += '        <h4 class="product-price"><span class="qty" id="product-quantity-' + data.item.id + '">' + data.item.quantity + 'x</span>$<span id="product-price-' + data.item.id + '">' + data.item.price + '</span></h4>';
                        div += '    </div>';
                        div += '    <button onclick="deleteItemInCart(' + data.item.id + ', ' + data.item.quantity + ', ' + data.item.price + ')" class="delete"><i class="fa fa-close"></i></button>';
                        div += '</div>';
                        if (data.count == 1) {
                            var t = '<div class="cart-list">';
                            var b = '</div>';
                            b += '<div class="cart-summary">'
                            b += '<h5>TOTAL: $<span id="cart-total"> ' + data.item.price + '</span>.00</h5>'
                            b += '</div>'
                            b += '<div class="cart-btns">'
                            b += '<a href="/cart">View Cart</a>'
                            b += '<a href="/checkout">Checkout  <i class="fa fa-arrow-circle-right"></i></a>'
                            b += '</div>';
                            $('#cart-empty-text').hide();
                            $('.cart-dropdown').append(t + div + b);
                        } else {
                            var total = parseInt($('#cart-total').text());
                            total = total + parseInt(data.item.price);
                            $('#cart-total').text(total);
                            $('.cart-list').append(div);
                        }

                        $('#btn-item-' + id).html('<a id="btn-go-to-cart" href="/cart">Item in Cart »</a>');

                        return;
                    case 2:
                        //    console.log('data.count')
                        // console.log(data.count)
                        // console.log('data.json')
                        // console.log(data.json)
                        return;
                    case 3:
                        // alert(data.msg)
                        return;
                    default:
                        $(this).attr('disabled', false);
                        return;

                }
                // $('#btnCoinBuy').attr('disabled', false);

            },
            error: function(error) {
                console.log(error);
            }
        });
        // alert(bid_price)


    }
}

function notify(type, title, text) {
    new PNotify({
        title: title,
        text: text,
        type: type
    });
}


function addItemToWishlist(id, desc = 'grid') {
    // e.preventDefault();
    // alert(id);
    // var product_id = $('#btn-item-' + id).attr('pk_id');
    var product_id = id;
    // alert(product_id);

    // var price = $('#price' + id).val();

    if (!product_id || isNaN(product_id)) {
        // alert('a');
        return false;
    } else {

        var data = {
            product_id
        };
        // alert(data);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            type: "POST",
            url: "/add-to-wishlist",
            data: data,
            dataType: "json",
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",

            beforeSend: function() {
                $(this).attr('disabled', true);
            },
            success: function(data) {
                // console.log(data);

                switch (data.error_no) {

                    case 1:
                        sessionStorage.setItem("wishlist", data.json);
                        $('#wishlist-qty').html(data.count);
                        // notify('info', 'Successful', data.itemTitle + ' has been added to your wishlist.')
                        if (desc == 'grid') {
                            $('#add-to-wishlist-' + id).html('<i class="fa fa-heart"></i><span class="tooltipp">Item in wishlist</span>');
                        } else {

                            $('.desc-add-to-wishlist-' + id).html('<i class="fa fa-heart"></i> Item in wishlist');
                        }


                        return;
                    case 4:
                        sessionStorage.setItem("wishlist", data.json);
                        $('#wishlist-qty').html(data.count);
                        // notify('info', 'Successful', data.itemTitle + ' has been deleted from your wishlist.')
                        if (desc == 'grid') {
                            $('#add-to-wishlist-' + id).html('<i class="fa fa-heart-o"></i><span class="tooltipp">Add to wishlist</span>');
                        } else {

                            $('.desc-add-to-wishlist-' + id).html('<i class="fa fa-heart-o"></i> Add to wishlist');
                        }

                        return;
                    case 3:
                        // alert(data.msg)
                        return;
                    default:
                        $(this).attr('disabled', false);
                        return;

                }
                // $('#btnCoinBuy').attr('disabled', false);

            },
            error: function(error) {
                console.log(error);
            }
        });
        // alert(bid_price)


    }
}

$(document).ready(function() {
    $('.quick_view').click(function() {
        var id = $(this).data("id");
        var data = {
            id
        };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "/ajax-desc",
            data: data,
            dataType: "json",
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            success: function(res) {
                // console.log(res);
                const {
                    id,
                    category,
                    discounted_price,
                    full_price,
                    image,
                    short_desc,
                    title
                } = res.data;
                $('#modal-product-name').text(title);
                $('#modal-product-discountedprice').text(discounted_price);
                $('#modal-product-fullprice').text(full_price);
                $('#modal-product-shortdesc').html(short_desc);
                $('#modal-product-title').text(title);
                $('#modal-img').attr('src', '/img/' + image);
                $('#modal-add-to-cart').attr('data-id', id);
                $('#modal-item-count').val(1);
                $('.desc-add-to-wishlist').attr('id', id);
                $('.desc-add-to-wishlist').addClass('desc-add-to-wishlist-' + id);



                // $('.modal-body').text(discounted_price);

                // show modal
                $('#exampleModal').modal('show');

            },
            error: function(request, status, error) {
                console.log("ajax call went wrong:" + request.responseText);
            }
        });
    });

})



function deleteItemInCart(id, qty, price) {
    var product_id = id;

    if (!product_id || isNaN(product_id)) {
        // alert('a');
        return false;
    } else {

        var data = {
            id
        };
        // alert(data);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            type: "POST",
            url: "/remove-from-cart",
            data: data,
            dataType: "json",
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",

            success: function(data) {
                // console.log(data);

                switch (data.error_no) {

                    case 4:
                        sessionStorage.setItem("cart", data.json);
                        $('#cart-qty').html(data.count);
                        if (data.count == 0) {
                            $('.cart-dropdown').html('<h5 id="cart-empty-text"> Your cart is empty. </h5>');
                        } else {

                            $('#product-widget-' + id).remove();
                            var total = parseInt($('#cart-total').text());
                            total = total - (price * qty);
                            $('#cart-total').text(total);
                        }
                        return;

                    default:
                        $(this).attr('disabled', false);
                        return;

                }
                // $('#btnCoinBuy').attr('disabled', false);

            },
            error: function(error) {
                console.log(error);
            }
        });
        // alert(bid_price)


    }
}