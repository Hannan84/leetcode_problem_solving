<?php

//94. Binary Tree Inorder Traversal

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $stack = [];
        $p = $root;
        $arr = [];

        while($p || count($stack) > 0) {

            if($p) {
                array_push($stack, $p);
                $p = $p->left;
            }
            else
            {
                $cur = array_pop($stack);
                array_push($arr, $cur->val);
                $p = $cur->right;
            }
        }
        return $arr;
    }
}