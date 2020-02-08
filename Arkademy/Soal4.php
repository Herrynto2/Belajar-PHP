<?php

function gantihuruf($kata, $huruf, $replace)
{

        $kata_str = $kata;
        $huruf_str = $huruf;
        $replace_str = $replace;

        echo "Kata = " . $kata_str;
        echo "<br>";
        echo "Huruf = " . $huruf_str;
        echo "<br>";
        echo "Huruf ganti = " . $replace_str;
        echo "<br><br>";

        $kata_arr = str_split($kata_str);
        $huruf_arr = str_split($huruf_str);
        $replace_arr = str_split($replace_str);

        for ($i=0; $i < count($kata_arr) ; $i++) {
            if ($kata_arr[$i] == $huruf_arr[0] ) {
                $kata_arr[$i] = $replace_arr[0];
            } 
        }
        $result = implode("", $kata_arr);
        echo "Hasil = " . $result;
    }
gantihuruf("Heriyanto", "e", "a");
?>