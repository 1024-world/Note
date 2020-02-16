<?php

namespace Algorithm\BinaryTree\Struct;

/**
 * Class Tree
 * @package Algorithm\BinaryTree\Struct
 * @desc 二叉树
 */
class Tree
{
    public $root = null;

    public function __construct(TreeNode $treeNode)
    {
        $this->root = $treeNode;
    }
}