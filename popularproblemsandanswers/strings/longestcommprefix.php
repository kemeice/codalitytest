<?php
/*Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string ""
*/

 function longestCommonPrefix($strs) {
        $scount = count($strs);
    if ($scount < 2) {
        return $scount ? $strs[0] : '';
    }
    
    $res = $strs[0];
    for ($n = 1; $n < $scount; $n++) {
        $a = str_split($res);
        $b = str_split($strs[$n]);
        $res = '';
        $max = min(count($a), count($b));
        
        for($i = 0; $i < $max; $i++) {
            if ($a[$i] == $b[$i]) {
                $res .= $b[$i];
            }else {
                break;
            }
        }
        
        if (!$res) return $res;
    }
    
    return $res;
        
        
    }
