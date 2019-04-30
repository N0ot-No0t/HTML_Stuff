<?php

$test_str = "apples.are,good?for,you,or,don't?you,like?apples,or.maybe.you,like,oranges,better.than.apples?";
$matches = array();

preg_match_all("/\w+\W/",$test_str,$matches);

print_r($matches);
