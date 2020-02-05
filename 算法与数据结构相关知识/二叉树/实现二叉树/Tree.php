<?php

namespace Algorithm\BinaryTree;

class Tree
{
    public $root = null;

    public function __construct(TreeNode $treeNode)
    {
        $this->root = $treeNode;
    }

    public function traverse(TreeNode $treeNode, $level = 0)
    {
        //详见具体的相关遍历方法
    }
}