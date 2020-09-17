function addToCart(event) {
    event.preventDefault();
    let urlCart = $(this).data('url');
    $.ajax({
        type: "GET",
        url: urlCart,
        dataType: 'json',
        success: function (data) {
            if(data.code === 200) {
                alert('Thêm sản phẩm thành công');
            }

        },
        error: function () {

        }

    });
}

$(function () {
$('.add_to_cart').on('click', addToCart);

});
