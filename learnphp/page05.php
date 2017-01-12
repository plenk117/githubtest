<?php
// error_reporting(E_ALL);
// ini_set(‘display_errors’ , true);
// ini_set(‘html_errors’, false);
// $array = array(
//     1    => "a",
//     "2"  => "b",
//     "1.5"  => "c",
//     "true" => "d",
// );
// var_dump($array);

$username = $_GET["str"];
$password = $_GET["pass"];
// $password = "secret";

if (($username == "abraham") && ($password == "secret")) {
print "access granted";
}
elseif (($username == "") && ($password == "")){
    print "please input username and or password";
}
else {
    print "access denied";
}
// if($b = "pass"){
//     echo $b;
// }

?>