$(function(){
    $('a.product__link').on('click', function(e){
        e.preventDefault();
        let th = $(this);
        let product = th.closest('section.product');
        let item_id = product.attr('item_id');
        $.ajax({
            type: 'get',
            url: '/local/ajax/order.php',
            data: {
                act: 'add_to_basket',
                price: product.find('span[price_id]').text(),
                price_id: product.find('span[price_id]').attr('price_id'),
                name: product.find('.product__title').text(),
                item_id: item_id
            },
            success: function(response){
                alert('Товар успешно добавлен в коризину!');
            }
        })
    })
})