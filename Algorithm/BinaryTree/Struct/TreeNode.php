<?php

namespace Algorithm\BinaryTree\Struct;

class TreeNode
{
    public $value = null;

    public $leftChildren = null;

    public $rightChildren = null;

    public function __construct($value = null)
    {
        $this->value = $value;
    }

    public function addLeftChildren(TreeNode $treeNode)
    {
        $this->leftChildren = $treeNode;
    }

    public function addRightChildren(TreeNode $treeNode)
    {
        $this->rightChildren = $treeNode;
    }
}