<?php

function countdown($top) {
    while ($top > 0) {
        print "$top..";
        $top--;
    }
    print "boom!<br>\n";
}

$counter = 10;
countdown($counter);
print "Now, counter is $counter";