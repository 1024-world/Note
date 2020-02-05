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
        $seniorArchitect = new TreeNode("高级设计师");
        $userInterfaceDesigner = new TreeNode("UI设计师");
        $qualityAssuranceEngineer = new TreeNode("测试工程师");
        $cto->addChildren($seniorArchitect);
        $cto->addChildren($userInterfaceDesigner);
        $cto->addChildren($qualityAssuranceEngineer);

        $softwareEngineer = new TreeNode("软件工程师");
        $seniorArchitect->addChildren($softwareEngineer);

        $tree->traverse($tree->root);
    }
}

(new TreeDemo())->index();