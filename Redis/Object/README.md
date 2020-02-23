<h1>对象</h1>
<h2>对象的类型与多态</h2>
Redis使用对象来表示数据库中的键值对，每次当我们在Redis中新创建一个键值对时，我们至少会创建两个对象，一个对象用作键值对的键，一个对象用作键值对的值。<br />
Redis中每个对象都由一个redisObject结构表示，该结构中和保存数据有关的三个属性分别是type属性、encoding属性和ptr属性：

```
typedef struct redisObject {
    unsigned type:4; // 类型
    unsigned encoding:4; // 编码
    void *ptr; // 指向底层实现数据结构的指针
    // ...
} robj;
```
对象的type属性记录了对象的类型，这个属性的值可以是字符串、列表、哈希、集合、有序集合任何一种。对于Redis数据库来说，键总是一个字符串对象。<br />
使用TYPE命令可以查看一个对象的类型，使用OBJECT ENCODING命令可以查看一个数据库键的值对象的编码。


<h2>一、字符串对象</h2>
字符串对象的编码可以是int、embstr或者raw。<br />
如果一个字符串对象保存的是整数值，并且这个整数值可以用long类型来表示，那么字符串对象会将整数值保存在字符串对象结构中的ptr属性里面，并将字符串对象的编码设置成int。<br />
如果字符串保存的是一个字符串值，并且这个字符串值的长度大于39字节，那么字符串对象将会使用一个简单动态字符串来保存这个字符串值，并将编码设置为raw。<br />
如果字符串保存的是一个字符串值，并且这个字符串值的长度小于等于39字节，那么字符串对象将会使用一个embstr编码的方式来保存这个字符串值。<br /><br />

embstr编码是专门用于保存短字符串的一种优化编码方式，这种编码和raw编码一样，都是使用sdshdr结构来表示字符串对象。但是raw编码会调用两次
内存分配函数来分别创建redisObject结构和sdshdr结构，而embstr编码则通过调用一次内存分配来分配一块连续的空间，空间中依次包含这两个结构。
所以embstr编码的优势在于内存释放次数降低为1次，连续的内存空间能够更好的利用缓存带来的优势。<br /><br />

<h3>编码的转换</h3>
int编码的字符串对象和embstr编码的字符串对象在条件满足的情况下，会被转化为raw编码的字符串对象。因为Redis没有为embstr编码的字符串对象
编写任何相应的修改程序，所以embstr编码的字符串对象实际上是只读的。当我们对embstr编码的字符串对象执行任何修改命令时，程序会先将对象的编码 
从embstr转换为raw，然后在执行修改命令。因为这个原因，embstr编码的字符串对象在执行修改命令后，总会转换为raw编码的字符串对象。<br />

<h3>常用命令</h3>
SET、GET、APPEND、INCRBYFLOAT、INCRBY、DECRBY、STRLEN、SETRANGE、GETRANGE


<h2>二、列表对象</h2>
列表对象的编码可以是ziplist或者linkedlist

<h3>编码的转换</h3>
当列表对象可以同时满足一下两个条件时，使用ziplist编码。<br />
列表对象保存的所有字符串元素长度都小于64字节；<br />
列表对象保存元素数量小于512个；<br />
不能满足这两个条件的列表对象需要使用linkedlist编码。

<h3>常用命令</h3>
LPUSH、RPUSH、LPOP、RPOP、LINDEX、LLEN、LINSERT、LREM、LTRIM、LSET

<h2>三、哈希对象</h2>
哈希对象的编码可以是ziplist或者hashtable。

<h3>编码转换</h3>
当哈希对象同时满足以下两个条件时，哈希对象使用ziplist编码。<br />
哈希对象保存的所有键值对的键和值的字符串长度都小于64字符。<br />
哈希对象保存的键值对数量小于512个。<br />
不能同时满足这两个条件的哈希对象需要使用hashtable编码。

<h3>常用命令</h3>
HSET、HGET、HGETALL、HEXISTS、HDEL、HLEN、

<h2>四、集合对象</h2>
集合对象的编码可以是intset或者hashtable。<br />

<h3>编码转换</h3>
当集合对象同时满足一下两个条件时，集合对象使用intset编码。<br />
集合对象所保存的元素都是整数值。<br />
集合对象保存的元素数量不操作512个。<br />
不能同时满足这两个条件的集合对象需要使用hashtable编码。

<h3>常用命令</h3>
SADD、SCARD、SISMEMBER、SMEMBERS、SRANDMEMBER、SPOP、SREM

<h2>五、有序集合对象</h2>
有序集合对象的编码可以是ziplist或者skiplist。<br />

skiplist编码的有序集合对象使用zset结构作为底层实现，一个zset结构同时包含一个字典一个跳跃表。
```
typedef struct zset {
    zsikplist *zsl;
    dict *dict;
} zset;
```
zsl跳跃表按分值从小到大保存了所有的集合元素，跳跃表节点得object属性保存了元素得成员，跳跃表节点的score属性则保存了元素得分值。
通过这个跳跃表，程序可以对这个有序集合禁行范围型操作。<br />
dict字典为有序集合创建了一个从成员到分值的映射，字典的的键保存了元素成员，字典的值保存了元素的分值。
通过这个字典，程序可以用O(1)复杂度查找给定成员的分值。<br />

<h3>编码转换</h3>
当有序集合对象可以同时满足以下两个条件时，对象使用ziplist编码：<br />
有序集合保存的元素数量小于128。<br />
有序集合保存的所有元素成员的长度都小于64字节。<br />
不能满足以上两个条件的有序集合对象将使用skiplist编码。<br />

<h3>常用命令</h3>
ZADD、ZCARD、ZCOUNT、ZRANGE、ZREVRANGE、ZRANK、ZREVRANK、ZREM、ZSCORE


<h2>六、内存回收</h2>
引用计数机制，每个对象的引用计数信息由redisObject结构的refcount属性记录
```
typedef struct redisObject {
    int refcount; // 引用计数
}
```
创建一个对象、引用计数初始化为1。<br />
当对象被一个新程序引用的时候，引用计数加1。<br />
当对象不再被一个程序引用时，他的引用计数会被减1。<br />
当对象的引用计数值变为0时，对象所占用的内存会被释放。

<h2>七、对象的空转时长</h2>
该属性记录了对象最后一次被命令程序访问的时间。
```
typedef struct redisObject {
    // ...
    unsigned lru:22;
    // ...
} robj;
```

OBJECT IDLETIME命令可以打印出给定键的空转时长，这一空转时长就是通过将当前时间减去键的值对象的lru时间计算得出的。<br />





