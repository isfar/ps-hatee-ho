<?php

// Task 1 Command: php index.php 1 20 ' ' '{"type":"divides_by","word":"pa","options":{"number":3}}' '{"type":"divides_by","word":"pow","options":{"number":5}}' 
// Task 2 Command: php index.php 1 15 '-' '{"type":"divides_by","word":"hatee","options":{"number":2}}' '{"type":"divides_by","word":"ho","options":{"number":7}}'
// Task 3 Command: php index.php 1 10 '-' '{"type":"in_array","word":"joff","options":{"numbers":[1,4,9]}}' '{"type":"larger_than","word":"tchoff","options":{"number":5}}'

require_once __DIR__ . "/vendor/autoload.php";

$configs = [];

foreach (array_slice($argv, 4) as $arg) {
    $configs[] = json_decode($arg, true);
}

$operations = [
    OperationInterface::TYPE_DIVIDES_BY => new DividesBy(),
    OperationInterface::TYPE_LARGER_THAN => new LargerThan(),
    OperationInterface::TYPE_IN_ARRAY => new InArray(),
];

echo Printer::print(
    $argv[1],
    $argv[2],
    $argv[3],
    $configs,
    $operations
);