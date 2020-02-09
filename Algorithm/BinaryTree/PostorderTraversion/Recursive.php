<?php

namespace Algorithm\BinaryTree\PostorderTraversion;

use Algorithm\BinaryTree\Struct\TreeNode;

class Recursive
{
    public function traversal(TreeNode $treeNode)
    {
        if ($treeNode->value == null)
        {
            return;
        }

        if ($treeNode->leftChildren)
        {
            $this->traversal($treeNode->leftChildren);
        }

        if ($treeNode->rightChildren)
        {
            $this->traversal($treeNode->rightChildren);
        }

        echo $treeNode->value . PHP_EOL;
    }
}