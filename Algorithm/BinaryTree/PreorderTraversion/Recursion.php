<?php

namespace Algorithm\BinaryTree\PreorderTraversion;

use Algorithm\BinaryTree\Struct\TreeNode;

class Recursion
{
    public function traversal(TreeNode $treeNode, $level = 0)
    {
        echo '二叉树-先序遍历-递归方式' . PHP_EOL;

        if ($treeNode->value == null)
        {
            return;
        }

        echo str_repeat('---', $level) . $treeNode->value . PHP_EOL;

        if ($treeNode->leftChildren)
        {
            $this->traversal($treeNode->leftChildren, $level+1);
        }

        if ($treeNode->rightChildren)
        {
            $this->traversal($treeNode->rightChildren, $level+1);
        }
    }
}