function addToCart(id) {
    $.post('./api/cookie.php', {
        'action': 'add',
        'id': id,
        'num': 1
    }, setTimeout(function(data) {
        location.href = ("../wb_php/cart.php");
    },1500))
    
}