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
            echo str_repeat(' ', $level) . $treeNode->data . PHP_EOL;

            foreach ($treeNode->children as $child) {
                $this->traverse($child, $level + 1);
            }
        }
    }
}