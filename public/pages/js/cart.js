function cartUpdate(event) {
    event.preventDefault();
    let urlAddCartQuantity = $(".update_cart_url").data("url");
    let id = $(this).data("id");
    let quantity = $(this)
        .parents("tr")
        .find("input.quantity")
        .val();
    $.ajax({
        type: "GET",
        url: urlAddCartQuantity,
        data: {
            id: id,
            quantity: quantity
        },
        success: function(data) {
            if (data.code === 200) {
                $(".cart_wrapper").html(data.cartIndex);
                alert("Update thanh cong !");
            }
        },
        error: function() {}
    });
}

function cartDelete(event) {
    event.preventDefault();
    let urlDelete = $(".container_cart").data("url");
    let id = $(this).data("id");
    $.ajax({
        url: urlDelete,
        type: "GET",
        data: { id: id },
        success: function(data) {
            if (data.code === 200) {
                $(".cart_wrapper").html(data.cart_delete);
                alert("delete !");
            }
        },
        error: function() {}
    });
}

$(function() {
    $(".cart_update").on("click", cartUpdate);
    $(document).on("click", '.cart_delete',cartDelete);
});
