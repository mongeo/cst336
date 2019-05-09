function addToCart(id) {
    ajax 

    // update Qty if product is already present
    for (var i in cart) {
        if(cart[i].Product == name)
        {
            cart[i].Qty = qty;  // replace existing Qty
            showCart();
            saveCart();
            return;
        }
    }

    var item = { Product: name,  Price: price, Qty: qty };
    cart.push(item);
    saveCart();
    showCart();
}
