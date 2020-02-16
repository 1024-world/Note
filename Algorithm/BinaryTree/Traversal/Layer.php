<?php

namespace Algorithm\BinaryTree\Traversal;

use Algorithm\BinaryTree\Struct\TreeNode;

/**
 * Class Layer
 * @package Algorithm\BinaryTree\Traversal
 * @desc 二叉树层级遍历
 */
class Layer
{
    /**
     * @desc 非递归方式实现
     * @param TreeNode $treeNode
     */
    public function NonRecursive(TreeNode $treeNode)
    {
        if (!$treeNode)
            return;

        $queue = [];
        $lineNode = null;
        $nLineNode = null;

        $lineNode = $nLineNode = $treeNode;
        array_push($queue, $treeNode);

        while ($queue)
        {
            $curNode = array_shift($queue);
            echo $curNode->value . " ";

            if ($curNode->leftChildren) {
                $nLineNode = $curNode->leftChildren;
                array_push($queue, $curNode->leftChildren);
            }
            if ($curNode->rightChildren) {
                $nLineNode = $curNode->rightChildren;
                array_push($queue, $curNode->rightChildren);
            }
            if ($curNode == $lineNode) {
                $lineNode = $nLineNode;
                echo PHP_EOL;
            }
        }
    }

}