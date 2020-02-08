<?php

function hitunghurufvocal($input)
{   
    $input_str = $input;
    echo " Input = ". $input_str;
    echo "<br><br>";

    $input_arr = str_split($input_str);
    $vocal = ["a", "i", "u", "e", "o", "A", "I", "U", "E", "O"];
    $find = array_intersect($vocal, $input_arr);
    $count = count($find);
    echo "Output = " . $count;
}
hitunghurufvocal("merantau");

?>