<?php

namespace Algorithm\BinaryTree;

use Algorithm\BinaryTree\InorderTraversion\NonRecursive as InNonRecursive;
use Algorithm\BinaryTree\InorderTraversion\Recursive as InRecursive;
use Algorithm\BinaryTree\LayerTraversion\NonRecursive as LayerNonRecursive;
use Algorithm\BinaryTree\PostorderTraversion\NonRecursive as PostNonRecursive;
use Algorithm\BinaryTree\PostorderTraversion\Recursive as PostRecursive;
use Algorithm\BinaryTree\PreorderTraversion\Recursion as PreRecursion;
use Algorithm\BinaryTree\PreorderTraversion\NonRecursion as PreNonRecursion;
use Algorithm\BinaryTree\Struct\Tree;
use Algorithm\BinaryTree\Struct\TreeNode;

class Demo
{
    public function __construct()
    {
        $tree = $this->structTree();
        $this->traversalTree($tree);
    }

    /**
     * @desc 创建树
     * @return Tree
     */
    private function structTree()
    {
        //根节点
        $one = new TreeNode('1');
        $tree = new Tree($one);

        //第二层
        $two = new TreeNode('2');
        $three = new TreeNode('3');
        $one->addLeftChildren($two);
        $one->addRightChildren($three);

        //第三层
        $four = new TreeNode('4');
        $five = new TreeNode('5');
        $two->addLeftChildren($four);
        $two->addRightChildren($five);

        $six = new TreeNode('6');
        $seven = new TreeNode('7');
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
        echo '二叉树-先序遍历-递归方式' . PHP_EOL;
        (new PreRecursion())->traversal($tree->root);

        echo '二叉树-先序遍历-非递归方式' . PHP_EOL;
        (new PreNonRecursion())->traversal($tree->root);

        echo '二叉树-中序遍历-递归方式' . PHP_EOL;
        (new InRecursive())->traversal($tree->root);

        echo '二叉树-中序遍历-非递归方式' . PHP_EOL;
        (new InNonRecursive())->traversal($tree->root);

        echo '二叉树-后序遍历-递归方式' . PHP_EOL;
        (new PostRecursive())->traversal($tree->root);

        (new PostNonRecursive())->traversal($tree->root);
        echo '二叉树-层级遍历-非递归方式' . PHP_EOL;
        (new LayerNonRecursive())->traversal($tree->root);
    }
}

// 引用composer的自动加载
require_once dirname(__DIR__) . '/../vendor/autoload.php';

(new Demo());