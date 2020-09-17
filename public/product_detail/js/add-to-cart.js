function addToCart(event) {
    event.preventDefault();
    let urlAddCart = $(".add_to_cart").data("url");
    let quantity = $(this)
        .parents("div")
        .find("input.quantity")
        .val();
    $.ajax({
        url: urlAddCart,
        type: "GET",
        data: { quantity: quantity },
        success: function(data) {
            if (data.code === 200) {
                alert("Thêm sản phẩm thành công !");
            }
        },
        error: function() {}
    });
}

$(function() {
    $(document).on("click", ".cart add_to_cart", addToCart);
});
