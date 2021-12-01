function deleteCart(id){
    $.post('./api/cookie.php', {
        'action':'delete',
        'id':id
    }, function(data){
        location.reload();
    })
}