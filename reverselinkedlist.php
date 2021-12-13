<?php
/*
Given the head of a singly linked list, reverse the list, and return the reversed list.

 */
function reverseList($head) {
        $rev=null;
        
        while($head!=null){
            
            $next=$head->next;
            $head->next=$rev;
            $rev=$head;
            $head=$next;
            
            
            
            
        }
        
        return $rev;
    }
}
