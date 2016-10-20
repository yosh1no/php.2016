<?php
$_POST['email'] = 'president@WHITEHOUSE.gov';
if (strcasecmp($_POST['email'], 'president@whitehouse.gov') == 0) {
    print "Welcome back, Mr. President.";
}else{
    echo 'NG!!!';
}