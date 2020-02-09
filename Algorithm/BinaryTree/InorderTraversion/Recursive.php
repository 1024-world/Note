<?php

namespace Algorithm\BinaryTree\InorderTraversion;

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
        
        echo $treeNode->value . PHP_EOL;

        if ($treeNode->rightChildren)
        {
            $this->traversal($treeNode->rightChildren);
        }
    }
}