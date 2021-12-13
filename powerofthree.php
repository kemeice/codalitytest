<?php
/*
Given an integer n, return true if it is a power of three. Otherwise, return false.

An integer n is a power of three, if there exists an integer x such that n == 3x.
 */
 function isPowerOfThree($n) {
         if ($n <= 0) {
            return false;
        }
        
        while ($n > 1) {
           if($n / 3 == floor($n / 3)) {
                $n /= 3;
            } else {
                return false;
            } 
        }
        
        return true;
    }
