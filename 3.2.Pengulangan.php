<?php
for ($a = 10; $a > 0; $a--) {
    //Membuat segitiga rata kiri kebawah dari angka 10-1
    for ($a1 = 11; $a1 > $a; $a1--) {
        echo $a;
    }
    echo "<br>";
}
?>

<?php echo "<br><br>" ?>

<?php
//Membuat segitiga rata kiri kebawah dari angka 1-10
for ($a = 1; $a <= 9; $a++) {
    for ($a1 = 0; $a1 < $a; $a1++) {
        echo $a;
    }
    echo "<br>";
}
?>

<?php echo "<br><br>" ?>

<?php
//Membuat segitiga rata kanan kebawah 10-1
for ($a = 10; $a > 0; $a--) {
    for ($b = 1; $b <= $a; $b++) {
        echo "&nbsp ";
    }
    for ($c = 10; $c > $a; $c--) {
        echo $a;
    }
    echo "<br/> ";
}
?>

<?php echo "<br><br>" ?>

<?php
//Membuat segitiga rata kanan kebawah 1-10
for ($a = 1; $a <= 9; $a++) {
    for ($b = 10; $b >= $a; $b--) {
        echo "&nbsp ";
    }
    for ($c = 0; $c < $a; $c++) {
        echo $a;
    }
    echo "<br> ";
}
?>

<?php echo "<br><br>" ?>

<?php
//Membuat segitiga rata kanan terbalik 1-10
for ($a = 1; $a <= 10; $a++) {
    for ($a1 = 10; $a1 > $a; $a1--) {
        echo $a;
    }
    echo "<br>";
}
?>

<?php echo "<br><br>" ?>

<?php
//Membuat segitiga samakaki lancip atas
for ($a = 1; $a <= 10; $a++) {
    for ($a1 = 10; $a1 > $a; $a1--) {
        echo "&nbsp";
    }
    for ($a2 = 0; $a2 < $a; $a2++) {
        echo "o";
    }
    echo "<br>";
}
?>

<?php echo "<br><br>" ?>

<?php
//Membuat segitiga samakaki lancip atas ganjil
for ($a = 1; $a <= 10; $a++) {
    for ($a1 = 10; $a1 > $a; $a1--) {
        echo "&nbsp";
        echo "&nbsp";
    }
    for ($a2 = 0; $a2 < $a; $a2++) {
        echo "o";
    }
    for (
        $a3 = 1; $a3 < $a; $a3++) {
        echo "o";
    }
    
    echo "<br>";
}
?>

<?php echo "<br><br>" ?>

<?php
//Membuat segitiga samakaki lancip bawah
for ($a = 1; $a <= 10; $a++) {
    for ($a1 = 0; $a1 < $a; $a1++) {
        echo "&nbsp";
    }
    for ($a2 = 10; $a2 >= $a; $a2--) {
        echo "o";
    }
    echo "<br>";
}
?>

<?php echo "<br><br>" ?>

<?php
//Membuat Layang-layang
for ($a = 1; $a <= 5; $a++) {
    for ($a1 = 5; $a1 > $a; $a1--) {
        echo "&nbsp";
    }
    for ($a2 = 0; $a2 < $a; $a2++) {
        echo "o";
    }
    echo "<br>";
}
for ($a = 1; $a <= 5; $a++) {
    for ($a1 = 0; $a1 < $a; $a1++) {
        echo "&nbsp";
    }
    for ($a2 = 5; $a2 > $a; $a2--) {
        echo "o";
    }
    echo "<br>";
}
?>