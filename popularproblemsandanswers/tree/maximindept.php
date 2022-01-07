<?php
/*
Given the root of a binary tree, return its maximum depth.

A binary tree's maximum depth is the number of nodes along the longest path from the root node down to the farthest leaf node.
*/
function maxDepth($root) {
return $root===null ? 0 : max($this->maxDepth($root->left), $this->maxDepth($root->right)) + 1;
}
