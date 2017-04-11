$('aside ul label').click(function() {
    if( $(this).hasClass('active') ){
        $(this).removeClass('active');
        $(this).siblings('ul.inner').slideUp();
    }else{
        $(this).addClass('active');
        $(this).siblings('ul.inner').slideDown();
    }
});

$('aside .sizes a').click(function() {
    if( $(this).hasClass('active') ){
        $(this).removeClass('active');
    }else{
        $(this).addClass('active');
    }
});

$('.slider').jRange({
    from: 0,
    to: 1000,
    step: 1,
    format: '$ %s',
    width: 180,
    showScale: false,
    showLabels: true,
    isRange : true
}).jRange('setValue', '190,728');

$('.slider').change(function() {
    sortDress();
});

$('.menu_button').click(function(){
    if( $(this).hasClass('active') ){
        $(this).removeClass('active');
        $('aside').removeClass('active');
    }else{
        $(this).addClass('active');
        $('aside').addClass('active');
    }
});

function sortDress(){
    var price = $('input.slider').val().split(',');

    $('main .list > a.item').each(function(i,elem) {
        var priceItem = $(this).data('price');
        if( priceItem >= price[0] && priceItem <= price[1] ){
            $(this).show();
        }else{
            $(this).hide();
        }
    });
}

$('button.load_more').click(function(){
    //some data to filter load
    var filter_data = {};

    $.ajax({
        url: 'get_items.php',
        async: true,
        dataType: "json",
        data: filter_data,
        type: 'post',
        error: function(xhr){
            alert('Ошибка загрузки: '+xhr.responseCode);
        },
        success: function(json){
            var html = '';
            if(json){
                json.forEach(function(item){
                    html += '<a href="#" class="item" data-price="'+item.price+'">'+
                    '<img src="'+item.image+'" />'+
                    '<label>'+item.label+'</label>'+
                    '<span>'+item.style+'</span>'+
                    '<div class="price">$'+item.price+'</div>';
                    if(item.isNew) html += '<div class="new">new</div>';
                    html += '</a>';
                });
                $('button.load_more').before(html);
            }
        }
    });
});
