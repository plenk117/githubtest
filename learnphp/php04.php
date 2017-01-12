<?php
$food = array("tacos", "burritos", "rice", "sushi");
echo "<ol type='1'>";
echo '<li>' . implode( '</li><li>', $food) . '</li>';
echo '</ol>';

$count = count($food);
for ($i= 1; $i <= $count; $i++){
    echo "$i)" . $food[$i-1] . "<br>";
}
?>
