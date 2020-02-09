<?php

namespace Algorithm\BinaryTree\Struct;

class Tree
{
    public $root = null;

    public function __construct(TreeNode $treeNode)
    {
        $this->root = $treeNode;
    }

    /**
     * @desc 获取树的深度
     * @param TreeNode $treeNode
     * @return int
     */
    public function getDepth(TreeNode $treeNode)
    {
        $depth = 0;
        if (!$treeNode->value)
        {
            return $depth;
        }

        $left = $this->getDepth($treeNode->leftChildren);
        $right = $this->getDepth($treeNode->rightChildren);

        $depth = ($left > $right ? $left : $right) + 1;

        return $depth;
    }
}