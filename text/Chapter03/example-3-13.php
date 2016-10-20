<?php

$finished = false;

// The entire test expression ($finished == false)
// is true if $finished is false
if ($finished == false) {
    print 'Not done yet!';
}

echo '<br>';

// The entire test expression (! $finished)
// is true if $finished is false
// よく使われるやり方
if (! $finished) {
    print 'Not done yet!';
}