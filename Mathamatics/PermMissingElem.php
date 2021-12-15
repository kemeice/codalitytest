<?php
/*An array A consisting of N different integers is given. The array contains integers in the range [1..(N + 1)], which means that exactly one element is missing.

Your goal is to find that missing element.

Write a function:

    function solution($A);

that, given an array A, returns the value of the missing element.

For example, given array A such that:
  A[0] = 2
  A[1] = 3
  A[2] = 1
  A[3] = 5

the function should return 4, as it is the missing element.

Write an efficient algorithm for the following assumptions:

        N is an integer within the range [0..100,000];
        the elements of A are all distinct;
        each element of array A is an integer within the range [1..(N + 1)]
  */
Notes : the sum of any Group of numbers that is N+1 is N*(N+1)/2
  function solution($A) {
    // write your code in PHP7.0
      $n = sizeof($A) +1;
      $n = sizeof($A) +1;
      $total = $n*($n+1)/2;
      foreach ($A as $num)
      {
          $total -= $num; // we know what the total should be so we just subtract to find the missing one 
      }
      return $total;
      
}
