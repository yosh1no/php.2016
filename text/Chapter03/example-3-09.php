<?php

$price_1 = 1.001;
$price_2 = 1.001;

/*
 *このような比較は行わないほうがよい
 *if($price_1 == $price_2)
 * 2つの小数点の差が0.00001より小さければ等しい
 */
if(abs($price_1 - $price_2) < 0.00001) {
    print '$price_1 and $price_2 are equal.';
} else {
    print '$price_1 and $price_2 are not equal.';
}
