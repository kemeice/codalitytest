<?php
/*
Given an array nums of size n, return the majority element.

The majority element is the element that appears more than ⌊n / 2⌋ times. You may assume that the majority element always exists in the array.
*/
function majorityElement($nums) {
        $maj = (count($nums)/2);// this is the dominator 
        $vals = array_count_values($nums);
        $count = count($vals);
        arsort($vals);
        foreach ($vals as $key => $value)
        {
            if($value > $maj)
            {
                return $key;
            }
        }
        
    }
