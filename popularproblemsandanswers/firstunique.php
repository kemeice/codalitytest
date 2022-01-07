<?php
/*Given a string s, find the first non-repeating character in it and return its index. If it does not exist, return -1.

 

Example 1:

Input: s = "leetcode"
Output: 0
Example 2:

Input: s = "loveleetcode"
Output: 2
Example 3:

Input: s = "aabb"
Output: -1
*/

 function firstUniqChar($s) {
        $c = str_split($s);
        $res = array_count_values($c);
        $char = array_search(1, $res);
        if ($char === false) {
            return -1;
        }
        
        return array_search($char, $c); 
        
    }
