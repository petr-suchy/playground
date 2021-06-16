<?php

$value = 123;

echo "test({$value}):" . test($value) . "\n";
echo "test100({$value}):" . test100($value) . "\n";
echo "test200({$value}):" . test200($value) . "\n";
echo "test500({$value}):" . test500($value) . "\n";

function test($value)
{
    return $value;
}

function test100($value)
{
    return 100 + $value;
}

function test200($value)
{
    return 200 + $value;
}

function test400($value)
{
    return 400 + $value;
}

function test500($value)
{
    return 500 + $value;
}
