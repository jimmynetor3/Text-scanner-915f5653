<?php

$pattern = '/[a-zA-Z]{9,}/m';
$input = file("script.txt");
$implodedInput = implode($input);

preg_match_all($pattern, $implodedInput, $matches, PREG_SET_ORDER, 0);

foreach ($matches as $word) {
    echo($word[0] . PHP_EOL);
}
