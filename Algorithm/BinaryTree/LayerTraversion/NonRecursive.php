<?php


namespace Algorithm\BinaryTree\LayerTraversion;


use Algorithm\BinaryTree\Struct\TreeNode;

class NonRecursive
{
    public function traversal(TreeNode $treeNode)
    {
        echo '二叉树-层级遍历-非递归方式' . PHP_EOL;

        if (!$treeNode)
            return;

        $queue = [];
        $lineNode = null;
        $nLineNode = null;

        $lineNode = $nLineNode = $treeNode;
        array_push($queue, $treeNode);

        while ($queue)
        {
            $curNode = array_shift($queue);
            echo $curNode->value . " ";

            if ($curNode->leftChildren)
            {
                $nLineNode = $curNode->leftChildren;
                array_push($queue, $curNode->leftChildren);
            }
            if ($curNode->rightChildren)
            {
                $nLineNode = $curNode->rightChildren;
                array_push($queue, $curNode->rightChildren);
            }
            if ($curNode == $lineNode)
            {
                $lineNode = $nLineNode;
                echo PHP_EOL;
            }
        }
    }
}