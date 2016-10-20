<?php

$first_name = 'test';
$last_name = 'test';

/* strcasecmp関数は引数の2つの文字列が等しい場合は
 * 0を返し、PHPは0をfalseと見るので
 *それの否定(！)はtrueとなる
 */
if (! strcasecmp($first_name,$last_name)) {
    print '2つの文字は等しいです。';
}else{
    print '2つの文字は等しくありません。';
}
