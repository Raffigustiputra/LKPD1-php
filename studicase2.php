<?php

function fzbz($lipatan){
    for ($i = 1; $i <= $lipatan; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "Fizzbuzz" . "</br>";
    } elseif ($i % 3 == 0) {
            echo "Fizz" . "</br>";
    } elseif ($i % 5 == 0) {
            echo "Buzz ". "</br>";
    } else {
            echo $i . "</br>" ;
    }
}
};

$angka = 500;
fzbz($angka)

?>  