<?php

namespace Algorithm\BinaryTree\Traversal;

use Algorithm\BinaryTree\Struct\TreeNode;

/**
 * Class PostOrder
 * @package Algorithm\BinaryTree\Traversal
 * @desc 二叉树后序遍历
 */
class PostOrder
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

        if ($treeNode->rightChildren) {
            $this->Recursive($treeNode->rightChildren);
        }

        echo $treeNode->value . PHP_EOL;
    }

    /**
     * @desc 非递归方式实现
     * @param TreeNode $treeNode
     */
    public function NonRecursive(TreeNode $treeNode)
    {
        // 使用一个栈
        echo '二叉树-后序遍历-非递归方式-使用一个栈' . PHP_EOL;
        $this->useStack($treeNode);
        // 使用两个栈
        echo '二叉树-后序遍历-非递归方式-使用两个栈' . PHP_EOL;
        $this->useDoubleStack($treeNode);
    }

    /**
     * @desc 使用一个栈实现
     * @param TreeNode $treeNode
     */
    private function useStack(TreeNode $treeNode)
    {
        $head = null;
        $cur = null;

        $stack = [];

        array_push($stack, $treeNode);
        $head = $treeNode;

        while ($stack)
        {
            $cur = end($stack);
            if ($cur->leftChildren && $head != $cur->leftChildren && $head != $cur->rightChildren) {
                array_push($stack, $cur->leftChildren);
            } elseif ($cur->rightChildren && $head != $cur->rightChildren) {
                array_push($stack, $cur->rightChildren);
            } else {
                $node = array_pop($stack);
                $head = $node;
                echo $node->value . PHP_EOL;
            }
        }
    }

    /**
     * @desc 使用两个栈实现
     * @param TreeNode $treeNode
     */
    private function useDoubleStack(TreeNode $treeNode)
    {
        $stack1 = [];
        $stack2 = [];

        array_push($stack1, $treeNode);

        while ($stack1)
        {
            $curNode = array_pop($stack1);
            array_push($stack2, $curNode);
            if ($curNode->leftChildren) {
                array_push($stack1, $curNode->leftChildren);
            }
            if ($curNode->rightChildren) {
                array_push($stack1, $curNode->rightChildren);
            }
        }

        while ($stack2)
        {
            $node = array_pop($stack2);
            echo $node->value . PHP_EOL;
        }
    }
}