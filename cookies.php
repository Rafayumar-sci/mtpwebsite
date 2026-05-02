<?php

setcookie("user", "John Doe", time() + 3600, "/"); 

if (isset($_COOKIE['user'])){
    echo"welcome" . $_COOKIE['user'];

}

setcookie ( "user" ,"",time() - 3600, "/"); 
?> 