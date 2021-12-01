<?php
    require_once('../../database/dbhelper.php');
if(!empty($_POST)){
    if(isset($_POST['action'])){
        $action = $_POST['action'];

        switch($action){
            case 'delete';
                if(isset($_POST['id'])){
                    $id = $_POST['id'];
                    // câu lênh truy vấn
                    $sql = 'DELETE FROM category where id ='.$id;
                    execute($sql);
                }
                break;
        }
    }

}