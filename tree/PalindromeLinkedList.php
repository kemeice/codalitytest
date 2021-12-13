<?php
/*
Given the head of a singly linked list, return true if it is a palindrome.

 

Example 1:


Input: head = [1,2,2,1]
Output: true
Example 2:


Input: head = [1,2]
Output: false
 

Constraints:

The number of nodes in the list is in the range [1, 105].
0 <= Node.val <= 9
 */
class Solution {

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function isPalindrome($head) {
         $list = array();
        $node = &$head;
        while(isset($node->val)){
            $list[] = $node->val;
            $node = &$node->next;
        }
        if($list == array_reverse($list))
        {
            return true;
        }
        else {
            return false;
        }
    }
    }
