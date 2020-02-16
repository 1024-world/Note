<?php

namespace Algorithm\BinaryTree;

class Demo
{
    public function __construct()
    {
        $tree = $this->structTree();
        $this->traversalTree($tree);
        $this->checkTree($tree);
    }

    /**
     * @desc 创建树
     * @return Struct\Tree
     */
    private function structTree()
    {
        //根节点
        $one = Facade::createTreeNode(4);
        $tree = Facade::createTree($one);

        //第二层
        $two = Facade::createTreeNode(2);
        $three = Facade::createTreeNode(6);
        $one->addLeftChildren($two);
        $one->addRightChildren($three);

        //第三层
        $four = Facade::createTreeNode(1);
        $five = Facade::createTreeNode(3);
        $two->addLeftChildren($four);
        $two->addRightChildren($five);

        $six = Facade::createTreeNode(5);
        $seven = Facade::createTreeNode(7);
        $three->addLeftChildren($six);
        $three->addRightChildren($seven);

        return $tree;
    }

    /**
     * @desc 遍历树
     * @param $tree
     */
    private function traversalTree($tree)
    {
        echo '先序遍历-递归方式' . PHP_EOL;
        Facade::preOrderTraversalByRecursion($tree->root);

        echo '先序遍历-非递归方式' . PHP_EOL;
        Facade::preOrderTraversalByNonRecursion($tree->root);

        echo '中序遍历-递归方式' . PHP_EOL;
        Facade::inOrderTraversalByRecursion($tree->root);

        echo '中序遍历-非递归方式' . PHP_EOL;
        Facade::inOrderTraversalByNonRecursion($tree->root);

        echo '后序遍历-递归方式' . PHP_EOL;
        Facade::postOrderTraversalByRecursion($tree->root);

        Facade::postOrderTraversalBuNonRecursion($tree->root);

        echo '层级遍历-非递归方式' . PHP_EOL;
        Facade::layerTraversal($tree->root);
    }

    /**
     * @desc 判断树
     * @param $tree
     */
    private function checkTree($tree)
    {
        echo '平衡二叉树判断' . PHP_EOL;
        $res = Facade::isBalanceTree($tree->root);
        echo $res['message'] . PHP_EOL;

        echo '搜索二叉树判断' . PHP_EOL;
        $res = Facade::isSearchTree($tree->root);
        echo $res['message'] . PHP_EOL;
    }
}

// 引用composer的自动加载
require_once dirname(__DIR__) . '/../vendor/autoload.php';

(new Demo());