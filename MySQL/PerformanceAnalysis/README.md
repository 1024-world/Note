<h1>性能剖析</h1>
<h2>意义</h2>
服务器是否达到了性能最佳的状态？<br />
某条语句为什么执行不够快？<br />
诊断用户描述成“停顿”、“堆积”、“卡顿”的某些间歇性疑难杂症？<br /><br />
将性能定义为完成某件事情所需要的时间度量，换句话说，性能即响应时间，这是一个非常重要的准则。

<h2>剖析单条查询</h2>
1.show profile<br />
可以在会话级别动态的开启该功能。<br />
set profiling = 1;<br />
该功能有一定的作用，但是在后期可能会被Perfoemance Schema所取代。<br />
show profiles;<br />
show profiling for query query_id;<br /><br />
2.使用show status<br />
并不是一款剖析工具，其列出的大部分都是一个计数器，显示某些活动的频繁程度，但无法给出消耗了多少时间。<br /><br />
3.使用慢查询日志<br /><br />
4.使用Performance Schema

<h2>剖析服务器负载</h2>
1.慢查询日志：<br />
可以通过设置long_query_time为0来捕获所有的查询，而且查询的响应时间单位可以降低到微妙级。<br />
需要担心的是日志可能消耗大量的磁盘空间。不建议长期开启，只在需要收集负载样本的期间开启即可。<br /><br />

2.开启慢查询：<br />
slow_query_log=1;<br />
long_query_time=0;<br /><br />

3.分析查询日志：<br />
pt-query-digest。


