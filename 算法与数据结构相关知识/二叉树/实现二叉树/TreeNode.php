<?php

namespace Algorithm;

class TreeNode
{
    public $data = null;

    public $leftChildren = null;

    public $rightChildren = null;

    public function __construct($data = null)
    {
        $this->data = $data;
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