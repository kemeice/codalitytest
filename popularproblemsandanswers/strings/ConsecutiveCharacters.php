<?php
/*
The power of the string is the maximum length of a non-empty substring that contains only one unique character.

Given a string s, return the power of s.
Input: s = "abbcccddddeeeeedcba"
Output: 5
Explanation: The substring "eeeee" is of length 5 with the character 'e' only.
*/
function maxPower($s) {
        $len = strlen($s);
        $current = 0;
        $max = 0;
        for($i=1 ; $i< $len ; $i++)
        { 
         
            
            if($s[$i] == $s[$i-1])
            {
               
                $current++;
               $max= max($max , $current);
            }
            else
            {
                $current = 0;
            }
        }
        
        return $max+1;
    }
