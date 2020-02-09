<?php

namespace Algorithm\BinaryTree\PreorderTraversion;

use Algorithm\BinaryTree\Struct\TreeNode;

class Recursion
{
    public function traversal(TreeNode $treeNode)
    {
        if ($treeNode->value == null)
        {
            return;
        }

        echo $treeNode->value . PHP_EOL;

        if ($treeNode->leftChildren)
        {
            $this->traversal($treeNode->leftChildren);
        }

        if ($treeNode->rightChildren)
        {
            $this->traversal($treeNode->rightChildren);
        }
    }
}