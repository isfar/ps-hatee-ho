<?php

interface OperationInterface
{
    const TYPE_DIVIDES_BY = 'divides_by';
    const TYPE_LARGER_THAN = 'larger_than';
    const TYPE_IN_ARRAY = 'in_array';

    public function test($value): bool;
}