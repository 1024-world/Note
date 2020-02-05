<?php

namespace Algorithm;

class TreeDemo
{
    public function index()
    {
        $ceo = new TreeNode('ceo');

        $tree = new Tree($ceo);

        $cfo = new TreeNode('cfo');
        $cto = new TreeNode('cto');
        $cmo = new TreeNode('cmo');
        $coo = new TreeNode('coo');

        $ceo->addChildren($cfo);
        $ceo->addChildren($cto);
        $ceo->addChildren($cmo);
        $ceo->addChildren($coo);

        $seniorArchitect = new TreeNode("Senior Architect");
        $softwareEngineer = new TreeNode("SoftwareEngineer");

        $userInterfaceDesigner = new TreeNode("userInterface Designer");
        $qualityAssuranceEngineer = new TreeNode("qualityAssurance Engineer");


        $cto->addChildren($seniorArchitect);
        $seniorArchitect->addChildren($softwareEngineer);

        $cto->addChildren($userInterfaceDesigner);
        $cto->addChildren($qualityAssuranceEngineer);

        $tree->traverse($tree->root);
    }
}

(new TreeDemo())->index();