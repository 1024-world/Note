<?php

namespace Algorithm\BinaryTree\Struct;

/**
 * Class TreeNode
 * @package Algorithm\BinaryTree\Struct
 * @desc 二叉树节点
 */
class TreeNode
{
    public $value = null;
    public $leftChildren = null;
    public $rightChildren = null;

    public function __construct($value = null)
    {
        $this->value = $value;
    }

    /**
     * @desc 添加左孩子节点
     * @param TreeNode $treeNode
     */
    public function addLeftChildren(TreeNode $treeNode)
    {
        $this->leftChildren = $treeNode;
    }

    /**
     * @desc 添加右孩子节点
     * @param TreeNode $treeNode
     */
    public function addRightChildren(TreeNode $treeNode)
    {
        $this->rightChildren = $treeNode;
    }
}