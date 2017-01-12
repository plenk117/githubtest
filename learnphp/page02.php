<?php
date_default_timezone_set("America/Los_Angeles");
echo date("D h:i:s A" 
);
$t = date("H");

if ($t < "20") {
    echo "<p>" . "Have a good day!" . "<p>" ;
}
else 
{
    echo "<p>" . "Get outta here buddy" . "</p>";
}

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>