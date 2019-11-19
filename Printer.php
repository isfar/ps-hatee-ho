<?php

class Printer
{
    public static function print(
        int $from,
        int $to,
        string $glue,
        array $configs,
        array $operations
    ) {
        $words = [];

        for ($i = $from; $i <= $to; $i++) {
            $word = "";

            foreach ($configs as $config) {
                $operation = $operations[$config['type']];
                $operation->setOptions($config['options']);

                if ($operation->test($i)) {
                    $word .= $config['word'];
                }
            }

            if ($word === '') {
                $word = $i;
            }

            $words[] = $word;
        }

        return implode($glue, $words);
    }
}