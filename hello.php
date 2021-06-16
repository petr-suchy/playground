<?php

$value = 123;

echo "test({$value}):" . test($value) . "\n";

function test($value)
{
    return $value;
}