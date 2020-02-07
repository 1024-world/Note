<?php

namespace Algorithm\BinaryTree\PreorderTraversion;

use Algorithm\BinaryTree\Struct\TreeNode;

class NonRecursion
{
    public function traversal(TreeNode $treeNode)
    {
        echo '二叉树-先序遍历-非递归方式' . PHP_EOL;

        $stack = [];
        array_push($stack, $treeNode);

        while(!empty($stack))
        {
            $curNode = array_pop($stack);
            if ($curNode->value)
            {
                echo $curNode->value . PHP_EOL;
            }
            else
            {
                return;
            }

            if ($curNode->rightChildren)
            {
                array_push($stack, $curNode->rightChildren);
            }

            if ($curNode->leftChildren)
            {
                array_push($stack, $curNode->leftChildren);
            }
        }
    }
}