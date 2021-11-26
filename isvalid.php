<?php
/*
Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
*/
function isValid($s) {
        $leftbracket = array('(' => ')', '{' => '}', '[' => ']');
        
        $balance = [];
        $length = strlen($s);
        
        for($i = 0; $i < $length; $i++) {
            
            $currentchar = $s[$i];
            $lastchar = end($balance);

            if (!isset($leftbracket[$currentchar]) && (($leftbracket[$lastchar] ?? '') == $currentchar)) {
                array_pop($balance);
            }
            else {
                $balance[] = $currentchar;
            }
            
        }
        
        return (count($balance) == 0);
        
    }
