<?php

function cc($str) {


    if (ctype_lower($str))
        
        {

        echo "All letters are  lowercase.";

    } 
    
    else {

        echo "some capital letters are present.";

    }


}

cc("Qasim");

echo "<br>";

cc("fahad");

echo "<br>";

cc("sohaib");

echo "<br>";

cc("rafay");



?>