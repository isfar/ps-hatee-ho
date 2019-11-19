<?php

class LargerThan implements OperationInterface
{
    private $number;

    public function setOptions(array $options = [])
    {
        $this->number = $options['number'] ?? null;
    }

    public function test($value): bool
    {
        if ($value > $this->number) {
            return true;
        }

        return false;
    }
}