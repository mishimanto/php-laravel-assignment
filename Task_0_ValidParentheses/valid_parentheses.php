<?php

function isValid($str)
{
    $stack = [];
    $pairs = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];

    for ($i = 0; $i < strlen($str); $i++) {
        $ch = $str[$i];

        if (in_array($ch, ['(', '[', '{'])) {
            array_push($stack, $ch);
        } else {
            if (empty($stack) || array_pop($stack) !== $pairs[$ch]) {
                return false;
            }
        }
    }

    return empty($stack);
}

// Testing
echo isValid("()[]{}") ? "true" : "false";  
echo "\n";
echo isValid("([)]") ? "true" : "false";
