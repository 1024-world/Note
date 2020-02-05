<?php

namespace Algorithm;

class Tree
{
    public $root = null;

    public function __construct(TreeNode $treeNode)
    {
        $this->root = $treeNode;
    }

    public function traverse(TreeNode $treeNode, $level = 0)
    {
        if ($treeNode)
        {
            echo str_repeat('-', $level) . $treeNode->data . PHP_EOL;
        }

        if ($treeNode->leftChildren)
        {
            $this->traverse($treeNode->leftChildren, $level + 1);
        }

        if ($treeNode->rightChildren)
        {
            $this->traverse($treeNode->rightChildren, $level + 1);
        }
    }
}