<?php

$dbms='mysql';      //数据库类型
$host='mysql';      //数据库主机名
$dbName='shi';      //使用的数据库
$user='shi';        //数据库连接用户名
$pass='1qazxsw2';   //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";

try {
    $dbh = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));
    echo "连接成功<br/>";
    foreach ($dbh->query('SELECT * from test') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}







