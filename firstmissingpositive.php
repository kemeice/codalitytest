<? 
//Given an unsorted integer array nums, return the smallest missing positive integer.

//You must implement an algorithm that runs in O(n) time and uses constant extra space.


 function firstMissingPositive($nums) {
         $nums = array_flip($nums);
        
        $firstMissingPositive = 1;
        
        while(isset($nums[$firstMissingPositive])) {
            $firstMissingPositive++;
        }
        
        return $firstMissingPositive;
    }
 

 
