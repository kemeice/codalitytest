<?php
/*Given two strings s and t, return true if t is an anagram of s, and false otherwise.
*/
function isAnagram($s, $t) {
        
     if (count_chars($s, 1) == count_chars($t, 1))
            return true;
        else 
            return false;       
    }
