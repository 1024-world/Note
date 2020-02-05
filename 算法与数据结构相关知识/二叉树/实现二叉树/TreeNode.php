<?php

namespace Algorithm;

class TreeNode
{
    public $data = null;

    public $children = [];

    public function __construct($data = null)
    {
        $this->data = $data;
    }

    public function addChildren(TreeNode $treeNode)
    {
        $this->children[] = $treeNode;
    }
}