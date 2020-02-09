<?php

namespace Algorithm\BinaryTree\PostorderTraversion;

use Algorithm\BinaryTree\Struct\TreeNode;

class NonRecursive
{
    public function traversal(TreeNode $treeNode)
    {
        // 使用两个栈
        echo '二叉树-后序遍历-非递归方式-使用两个栈';
        $this->useDoubleStack($treeNode);
        // 使用一个栈
        echo '二叉树-后序遍历-非递归方式-使用一个栈';
        $this->useStack($treeNode);
    }

    private function useDoubleStack(TreeNode $treeNode)
    {
        $stack1 = [];
        $stack2 = [];

        array_push($stack1, $treeNode);

        while ($stack1)
        {
            $curNode = array_pop($stack1);
            array_push($stack2, $curNode);
            if ($curNode->leftChildren)
            {
                array_push($stack1, $curNode->leftChildren);
            }
            if ($curNode->rightChildren)
            {
                array_push($stack1, $curNode->rightChildren);
            }
        }

        while ($stack2)
        {
            $node = array_pop($stack2);
            echo $node->value . ' ';
        }
    }

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
            if ($cur->leftChildren && $head != $cur->leftChildren && $head != $cur->rightChildren)
            {
                array_push($stack, $cur->leftChildren);
            } elseif ($cur->rightChildren && $head != $cur->rightChildren)
            {
                array_push($stack, $cur->rightChildren);
            } else {
                $node = array_pop($stack);
                $head = $node;
                echo $node->value . " ";
            }
        }
    }
}