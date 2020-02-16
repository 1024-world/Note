<?php

namespace Algorithm\BinaryTree\Traversal;

use Algorithm\BinaryTree\Struct\TreeNode;

/**
 * Class InOrder
 * @package Algorithm\BinaryTree\Traversal
 * @desc 二叉树中序遍历
 */
class InOrder
{
    /**
     * @desc 递归方式实现
     * @param TreeNode $treeNode
     */
    public function Recursive(TreeNode $treeNode)
    {
        if ($treeNode->value == null)
            return;

        if ($treeNode->leftChildren) {
            $this->Recursive($treeNode->leftChildren);
        }

        echo $treeNode->value . PHP_EOL;

        if ($treeNode->rightChildren) {
            $this->Recursive($treeNode->rightChildren);
        }
    }

    /**
     * @desc 非递归方式实现
     * @param TreeNode $treeNode
     */
    public function NonRecursive(TreeNode $treeNode)
    {
        $stack = [];
        $curNode = $treeNode;

        while ($stack || $curNode)
        {
            while ($curNode)
            {
                array_push($stack, $curNode);
                $curNode = $curNode->leftChildren;
            }

            $curNode = array_pop($stack);
            echo $curNode->value . PHP_EOL;

            $curNode = $curNode->rightChildren;
        }
    }
}