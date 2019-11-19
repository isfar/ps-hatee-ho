<?php

class InArray implements OperationInterface
{
    private $numbers;

    public function setOptions(array $options = [])
    {
        $this->numbers = $options['numbers'] ?? null; 
    }

    public function test($value): bool
    {
        return in_array($value, $this->numbers);
    }
}