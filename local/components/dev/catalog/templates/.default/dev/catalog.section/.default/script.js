$(function(){
    $('article.card .card__link').on('click', function(e){
        e.preventDefault();
        let th = $(this);
        let article = th.closest('article');
        let item_id = article.attr('item_id');
        $.ajax({
            type: 'get',
            url: '/local/ajax/order.php',
            data: {
                act: 'add_to_basket',
                price: article.find('.card__price span').text(),
                price_id: th.attr('price_id'),
                name: article.find('.card__title-link').text(),
                item_id: item_id
            },
            success: function(response){
                alert('Товар успешно добавлен в корзину!');
            }
        })
    })
})