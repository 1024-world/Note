<?php

namespace Algorithm;

include "./TreeNode.php";
include "./Tree.php";

class TreeDemo
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
        $tree->traverse($tree->root);
    }
}

(new TreeDemo())->index();