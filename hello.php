<?php

$value = 123;

echo "test({$value}):" . test($value) . "\n";
echo "test100({$value}):" . test100($value) . "\n";

function test($value)
{
    return $value;
}

function test100($value)
{
    return 100 + $value;
}