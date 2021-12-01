function increase(id){
    $.post('./api/tang_giam.php', {
        'action':'tru',
        'id':id,
        'num': 1
    }, function(data){
        location.reload();
    })
}

function reduction(id){
    $.post('./api/tang_giam.php', {
        'action':'cong',
        'id':id,
        'num': 1
    }, function(data){
        location.reload();
    })
}