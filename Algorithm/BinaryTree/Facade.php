<?php

namespace Algorithm\BinaryTree;

use Algorithm\BinaryTree\SpecialTree\BalanceTree;
use Algorithm\BinaryTree\SpecialTree\SearchTree;
use Algorithm\BinaryTree\Struct\Tree;
use Algorithm\BinaryTree\Struct\TreeNode;
use Algorithm\BinaryTree\Traversal\InOrder;
use Algorithm\BinaryTree\Traversal\Layer;
use Algorithm\BinaryTree\Traversal\PostOrder;
use Algorithm\BinaryTree\Traversal\PreOrder;


/**
 * Class Facade
 * @package Algorithm\BinaryTree
 * @desc 二叉树模块外观类
 */
class Facade
{
    /**
     * @desc 创建二叉树节点
     * @param $value
     * @return TreeNode
     */
    public static function createTreeNode($value)
    {
        return (new TreeNode($value));
    }

    /**
     * @desc 创建二叉树
     * @param TreeNode $treeNode
     * @return Tree
     */
    public static function createTree(TreeNode $treeNode)
    {
        return (new Tree($treeNode));
    }

    /**
     * @desc 先序遍历-递归方式
     * @param TreeNode $treeNode
     */
    public static function preOrderTraversalByRecursion(TreeNode $treeNode)
    {
        (new PreOrder())->Recursive($treeNode);
    }

    /**
     * @desc 先序遍历-非递归方式
     * @param TreeNode $treeNode
     */
    public static function preOrderTraversalByNonRecursion(TreeNode $treeNode)
    {
        (new PreOrder())->NonRecursive($treeNode);
    }

    /**
     * @desc 中序遍历-递归方式
     * @param TreeNode $treeNode
     */
    public static function inOrderTraversalByRecursion(TreeNode $treeNode)
    {
        (new InOrder())->Recursive($treeNode);
    }

    /**
     * @desc 中序遍历-非递归方式
     * @param TreeNode $treeNode
     */
    public static function inOrderTraversalByNonRecursion(TreeNode $treeNode)
    {
        (new InOrder())->NonRecursive($treeNode);
    }

    /**
     * @desc 后序遍历-递归方式
     * @param TreeNode $treeNode
     */
    public static function postOrderTraversalByRecursion(TreeNode $treeNode)
    {
        (new PostOrder())->Recursive($treeNode);
    }

    /**
     * @desc 后序遍历-非递归方式
     * @param TreeNode $treeNode
     */
    public static function postOrderTraversalBuNonRecursion(TreeNode $treeNode)
    {
        (new PostOrder())->NonRecursive($treeNode);
    }

    /**
     * @desc 层级遍历
     * @param TreeNode $treeNode
     */
    public static function layerTraversal(TreeNode $treeNode)
    {
        (new Layer())->NonRecursive($treeNode);
    }

    /**
     * @desc 检验是否是平衡二叉树
     * @param TreeNode $treeNode
     * @return array
     */
    public static function isBalanceTree(TreeNode $treeNode)
    {
        return (new BalanceTree())->isBalance($treeNode);
    }

    /**
     * @desc 检验是否是搜索二叉树
     * @param TreeNode $treeNode
     * @return array
     */
    public static function isSearchTree(TreeNode $treeNode)
    {
        return (new SearchTree())->isSearch($treeNode);
    }
}