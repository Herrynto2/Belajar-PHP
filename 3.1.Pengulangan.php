
<?php
// Pengulangan
// for
// for ($i=0; $i<5 ; $i++) {
//   echo "Hello World <br>";
// }
// echo "<br><br>";
// //while
// $a=0;
// while ( $a < 10) {
//   echo "Hello Earth <br>";
// $a++;
// }
// echo "<br><br>";
// //do while : Dijalankan dulu sekali baru dicek
// $x=10;
// do {
//   echo "Hello Guys";
// } while ($x < 9);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>A X E L</title>
  </head>
  <body>
        <table border="1" cellpadding="10" cellspacing="0">
        <?php
        //i = baris & j = kolom
          for ($i=1; $i<=4 ; $i++) {
          echo "<tr>";
              for ($j=1; $j<=5; $j++) {
                echo "<td>$i.$j</td>";
              }
          echo "</tr>";
          }
        ?>
      </table>

                        <br><br>

      <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($x=1; $x <=4 ; $x++) : ?>
          <tr>
            <?php for ($y=1; $y<=5; $y++) { ?>
              <td><?php echo "$x.$y"; ?></td>
            <?php } ?>
          </tr>
        <?php endfor; ?>
      </table >
  </body>
</html>
