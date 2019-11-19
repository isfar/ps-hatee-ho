<?php

require_once __DIR__ . "/OperationInterface.php";

class DividesBy implements OperationInterface
{
    private $number;

    public function setOptions(array $options = [])
    {
        $this->number = $options['number'] ?? null;
    }

    public function test($value): bool
    {
        return $value % $this->number === 0;
    }
}