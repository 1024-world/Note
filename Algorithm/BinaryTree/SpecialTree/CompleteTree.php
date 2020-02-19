<?php

namespace Algorithm\BinaryTree\SpecialTree;

use Algorithm\BinaryTree\Struct\TreeNode;

/**
 * Class CompleteTree
 * @package Algorithm\BinaryTree\SpecialTree
 * @desc 完全二叉树
 */
class CompleteTree
{
    /**
     * @desc 对外提供接口
     * @param TreeNode $treeNode
     * @return array
     */
    public function isCompleteTree(TreeNode $treeNode)
    {
        $res = $this->_isCompleteTree($treeNode);

        return ['flag' => $res, 'message' => $res ? '是' : '否'];
    }

    /**
     * @desc 判断是否是完全二叉树
     * @param TreeNode $treeNode
     * @return bool
     */
    private function _isCompleteTree(TreeNode $treeNode)
    {
        if (!$treeNode)
            return true;

        $queue = [];
        $lineNode = null;
        $nLineNode = null;
        $isLeaf = false;

        $lineNode = $nLineNode = $treeNode;
        array_push($queue, $treeNode);

        while ($queue)
        {
            $curNode = array_shift($queue);

            if ((!$curNode->leftChildren && $curNode->rightChildren) ||
                ($isLeaf && ($curNode->leftChildren || $curNode->rightChildren))) {
                return false;
            }

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
            }

            if (!$curNode->leftChildren || !$curNode->rightChildren) {
                $isLeaf = true;
            }
        }

        return true;
    }
}