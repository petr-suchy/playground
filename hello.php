<?php

$value = 123;

echo "test({$value}):" . test($value) . "\n";
echo "test200({$value}):" . test200($value) . "\n";

function test($value)
{
    return $value;
}

function test200($value)
{
    return 200 + $value;
}