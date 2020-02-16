<?php

namespace Algorithm\BinaryTree\Traversal;

use Algorithm\BinaryTree\Struct\TreeNode;

/**
 * Class PreOrder
 * @package Algorithm\BinaryTree\Traversal
 * @desc 二叉树先序遍历
 */
class PreOrder
{
    /**
     * @desc 递归方式实现
     * @param TreeNode $treeNode
     */
    public function Recursive(TreeNode $treeNode)
    {
        if ($treeNode->value == null)
            return;

        echo $treeNode->value . PHP_EOL;

        if ($treeNode->leftChildren) {
            $this->Recursive($treeNode->leftChildren);
        }

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
        array_push($stack, $treeNode);

        while(!empty($stack))
        {
            $curNode = array_pop($stack);

            if ($curNode->value) {
                echo $curNode->value . PHP_EOL;
            } else {
                return;
            }

            if ($curNode->rightChildren) {
                array_push($stack, $curNode->rightChildren);
            }

            if ($curNode->leftChildren) {
                array_push($stack, $curNode->leftChildren);
            }
        }
    }
}