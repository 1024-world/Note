<?php

namespace Algorithm\BinaryTree\SpecialTree;

use Algorithm\BinaryTree\Struct\TreeNode;

/**
 * Class SearchTree
 * @package Algorithm\BinaryTree\SpecialTree
 * @desc 搜索二叉树
 */
class SearchTree
{
    /**
     * @desc 对外提供接口
     * @param TreeNode $treeNode
     * @return array
     */
    public function isSearch(TreeNode $treeNode)
    {
        $res = $this->_isSearch($treeNode);

        return ['flag' => $res, 'message' => $res ? '是' : '否'];
    }

    /**
     * @desc 判断是否是搜索二叉树
     * @param TreeNode $treeNode
     * @return bool
     */
    private function _isSearch(TreeNode $treeNode)
    {
        $stack = [];
        $curNode = $treeNode;
        $preNode = null;

        while ($stack || $curNode)
        {
            while ($curNode)
            {
                array_push($stack, $curNode);
                $curNode = $curNode->leftChildren;
            }

            $curNode = array_pop($stack);
            if ($curNode < $preNode)
                return false;

            $preNode = $curNode;
            $curNode = $curNode->rightChildren;
        }

        return true;
    }
}