<?php
/*
Given a string, determine if a permutation of the string could form a palindrome.

For example, "code" -> False, "aab" -> True, "carerac" -> True.
*/
function canPermutePalindrome( $s) {
        $str = str_split(strtolower($s));
        
        $count = array_count_values($str);
        $k =0;
        foreach($count as $num)
        {
            if($num%2 !=0)
            {
                $k++;
            }
        }
        
        if($k >1) {
        
            return false;
        }
        else {
            return true;
        }
        
        }
        
