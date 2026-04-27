<?php

function checker($str) {


    if (ctype_lower($str))
        
        {

        echo "All letters are  lowercase.";

    } 
    
    else {

        echo "some capital letters are present.";

    }


}

checker("qasim");

echo "<br>";

?>