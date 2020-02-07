<?php

namespace Algorithm\BinaryTree\Struct;

class Tree
{
    public $root = null;

    public function __construct(TreeNode $treeNode)
    {
        $this->root = $treeNode;
    }
}