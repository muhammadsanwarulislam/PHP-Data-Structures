<?php

function evalRPN($tokens) {
    $stack = []; // Initialize an empty stack to store values
    $operators = ['+', '-', '*', '/']; // Define the supported operators

    foreach ($tokens as $token) {
        if (!in_array($token, $operators)) {
            // If the token is not an operator, push it as an integer onto the stack
            array_push($stack, intval($token));
        } else {
            // If the token is an operator, pop the top two values from the stack
            $val1 = array_pop($stack);
            $val2 = array_pop($stack);

            // Perform the operation based on the operator and push the result back onto the stack
            switch ($token) {
                case '+':
                    array_push($stack, $val2 + $val1);
                    break;
                case '-':
                    array_push($stack, $val2 - $val1);
                    break;
                case '*':
                    array_push($stack, $val2 * $val1);
                    break;
                case '/':
                    array_push($stack, intval($val2 / $val1));
                    break;
            }
        }
    }

    // The final result should be on top of the stack
    return end($stack);
}

// Example usage
print_r(evalRPN(["2", "1", "+", "3", "*"]));
