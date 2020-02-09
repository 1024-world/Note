<h3>按层遍历</h3>
1.申请一个队列，记为q1，然后将头节点放入q1中。同时设置两个变量lineNode和nlineNode，在整个流程中，lineNode表示正在打印的当前行的最右节点，
nlineNode表示下一行的最右节点，初始时令lineNode和nlineNode都为头节点<br>
2.从q1中弹出的节点记为curNode，打印curNode，并将curNode的左、右孩子节点依次放入q1中。同时令nlineNode依次等于curNode的左右孩子节点。<br>
3.判断curNode是否等于lineNode，如果等于，则令lineNode等于nlineNode。
4.重复步骤3和步骤4，直到q1为空，过程停止。<br>