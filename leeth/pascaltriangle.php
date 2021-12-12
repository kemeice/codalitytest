<?php
/*Given an integer numRows, return the first numRows of Pascal's triangle.

In Pascal's triangle, each number is the sum of the two numbers directly above it as shown:
Input: numRows = 5
Output: [[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]]
Example 2:

Input: numRows = 1
Output: [[1]]
 

Constraints:

1 <= numRows <= 30
*/
 function generate($numRows) {
        
        for($row=1; $row <= $numRows; $row++) {
            
            $k= 1;
            for($i=1; $i<= $row; $i++) {
                $arr[] = $k;
                $k= $k*($row-$i)/$i;
            }
            $res[]=$arr;
            unset($arr);
        }
        
        return $res;
    }
