<?php
session_start();
require_once("./database/register.php");

register();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./assets/css/register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
</head>

<body>
    <div class="main">
        <div class="resiger">
            <h1 class="lable">Đăng Ký</h1>
            <form method="POST" action="" id="form-1">
                <div class="form_group">
                    <lable for="tendangnhap" class="lb">Tên đăng nhập: </lable>
                    <input id="tendangnhap" name="tendangnhap" type="text" class="dn" placeholder="Tên đăng nhập">
                    <span class="form_message"></span>
                </div>

                <div class="form_group">
                    <lable for="email" class="lb">Email:</lable>
                    <input id="email" name="email" type="email" class="dn" placeholder="VD: admin12@gmail.com">
                    <span class="form_message"></span>
                </div>

                <div class="form_group">
                    <lable for="matkhau" class="lb">Mật khẩu: </lable>
                    <input id="matkhau" name="matkhau" type="password" class="dn" placeholder="Mật khẩu">
                    <span class="form_message"></span>
                </div>

                <div class="form_group">
                    <lable for="nhaplaimk" class="lb">Nhập lại mật khẩu: </lable>
                    <input id="nhaplaimk" name="nhaplaimk" type="password" class="dn" placeholder="Nhập lại mật khẩu">
                    <span class="form_message"></span>
                </div>
                <div class="dk">
                    <button class="btn">Đăng ký</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./assets/js/Validator.js"></script>
    <script>
        //Mong muốn của chúng ta
        Validator({
            form: '#form-1',
            errorSelector: '.form_message',
            rules: [
                Validator.isRequired('#tendangnhap'),
                Validator.isEmail('#email'),
                Validator.minLength('#matkhau', 6),
                Validator.isConfirmed('#nhaplaimk', function() {
                    return document.querySelector('#form-1 #matkhau').value;
                }, 'Mật khẩu không khớp')

            ]
        });
    </script>
</body>

</html>