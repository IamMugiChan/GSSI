<?php
// Using strrev()
function is_palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 
// Driver Code

if(!empty($_GET['string'])){
    $input = htmlspecialchars($_GET['string']);
    if (is_palindrome($input)){ 
        echo "The String: ".$input." is Palindrome"; 
    }
    else { 
    echo "The String: ".$input." Not a Palindrome"; 
    }
    
}else{
    echo "please call the function by sending GET request with the following parameters <b>?string={Your Text}</b><br> Example: localhost/exam_01/?string=Bob";
}

?> 