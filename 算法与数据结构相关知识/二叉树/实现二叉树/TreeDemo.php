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
        $cmo = new TreeNode('首席营销官');
        $coo = new TreeNode('首席运营官');
        $ceo->addChildren($cfo);
        $ceo->addChildren($cto);
        $ceo->addChildren($cmo);
        $ceo->addChildren($coo);

        //第三层
        $accountant = new TreeNode("注册会计师");
        $cfo->addChildren($accountant);

        $softwareEngineer = new TreeNode("软件工程师");
        $cto->addChildren($softwareEngineer);

        $userOperation = new TreeNode("用户运营");
        $coo->addChildren($userOperation);

        //遍历树
        $tree->traverse($tree->root);
    }
}

(new TreeDemo())->index();