<?php

namespace Algorithm\BinaryTree;

use Algorithm\BinaryTree\InorderTraversion\NonRecursive as InNonRecursive;
use Algorithm\BinaryTree\InorderTraversion\Recursive as InRecursive;
use Algorithm\BinaryTree\LayerTraversion\NonRecursive as LayerNonRecursive;
use Algorithm\BinaryTree\PostorderTraversion\Recursive as PostRecursive;
use Algorithm\BinaryTree\PreorderTraversion\Recursion as PreRecursion;
use Algorithm\BinaryTree\PreorderTraversion\NonRecursion as PreNonRecursion;
use Algorithm\BinaryTree\Struct\Tree;
use Algorithm\BinaryTree\Struct\TreeNode;

class Demo
{
    public function index()
    {
        //根节点
        $ceo = new TreeNode('首席执行官');
        $tree = new Tree($ceo);

        //第二层
        $cfo = new TreeNode('首席财务官');
        $cto = new TreeNode('首席技术官');
        $ceo->addLeftChildren($cfo);
        $ceo->addRightChildren($cto);

        //第三层
        $accountant = new TreeNode("注册会计师");
        $cfo->addLeftChildren($accountant);

        $softwareEngineer = new TreeNode("软件工程师");
        $cto->addRightChildren($softwareEngineer);

        //遍历树
        (new PreRecursion())->traversal($tree->root);
        (new PreNonRecursion())->traversal($tree->root);

        (new InRecursive())->traversal($tree->root);
        (new InNonRecursive())->traversal($tree->root);

        (new PostRecursive())->traversal($tree->root);

        (new LayerNonRecursive())->traversal($tree->root);
    }
}

// 引用composer的自动加载
require_once dirname(__DIR__) . '/../vendor/autoload.php';
spl_autoload_register('autoload', true, true);

(new Demo())->index();