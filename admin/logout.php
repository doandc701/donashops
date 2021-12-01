<?php
setcookie('home', 'true', time()-7*24*60*60, '/');
header('Location: home.php');