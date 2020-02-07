<h3>中序遍历</h3>
<h4>递归方式</h4>
1.判断当前节点的值是否为空，如果为空，直接返回。<br>
2.调用本身，参数为本节点的左孩子节点。<br>
3.打印当前节点的值。<br>
4.调用本身，参数为本节点的右孩子节点。<br>

<h4>非递归方式</h4>
1.申请一个新的栈，记为stack，申请一个变量curNode，初始时令curNode等于头节点。<br>
2.先把curNode节点压入栈中，对以curNode节点为头的整棵子树来说，依次把整棵树的左边界压入栈中，即不断地令curNode=curNode->leftChildren，
然后重复步骤2。<br>
3.不断重复步骤2，直到发现curNode为空，此时从stack中弹出一个节点，记为node。打印node的值，并让curNode=node->rightChildren，然后继续重复步骤2。<br>
4.当stack为空并且curNode为空时，整个过程结束。