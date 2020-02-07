<?php

namespace Algorithm\BinaryTree\InorderTraversion;

use Algorithm\BinaryTree\Struct\TreeNode;

class NonRecursive
{
    public function traversal(TreeNode $treeNode)
    {
        echo '二叉树-中序遍历-非递归方式' . PHP_EOL;

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