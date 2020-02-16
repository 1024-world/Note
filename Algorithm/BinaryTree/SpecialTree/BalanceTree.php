<?php

namespace Algorithm\BinaryTree\SpecialTree;

use Algorithm\BinaryTree\Struct\TreeNode;

/**
 * Class BalanceTree
 * @package Algorithm\BinaryTree\SpecialTree
 * @desc 平衡二叉树
 */
class BalanceTree
{
    /**
     * @desc 对外提供接口
     * @param TreeNode $treeNode
     * @return array
     */
    public function isBalance(TreeNode $treeNode)
    {
        $res = $this->_isBalance($treeNode, $depth);

        return ['flag' => $res, 'message' => $res ? '是' : '否'];
    }

    /**
     * @desc 判断是否是平衡二叉树
     * @param $treeNode
     * @param $depth
     * @return bool
     */
    private function _isBalance($treeNode, &$depth)
    {
        if ($treeNode == null) {
            $depth = 0;
            return true;
        }

        if ($this->_isBalance($treeNode->leftChildren, $left)
            && $this->_isBalance($treeNode->rightChildren, $right)) {
            $diff = $left - $right;
            if ($diff <= 1 && $diff >= -1)
            {
                $depth = max($left, $right) + 1;
                return true;
            }
        }

        return false;
    }
}