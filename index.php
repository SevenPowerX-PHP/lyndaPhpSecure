<?php
echo 'Hello Lynda';

//registar_global
function check_password($userName, $password){
    return $userName === $password ? true :false;
}

if (check_password($username, $password))
{
    $logged_in = true;
}

if($logged_in)
{
    //display the page
}


//http://somesite.com?logged_in=true

?>