MySql数据库
==========
>   ### 【创建库】
>    * create database 库字
>
>    想在一个库里建表，首先你要记住use 
>    使用当前库
>    * use 库名
>
>    ### 【创建表】
>    * create table 表名(id int,name varchar(35),pirce int);
>    id name price 是字段 后面的限制是类型
>
>    ### 【删除表】
>    * drop table 表名字
>
>    ### 【查看表结构】
>    * desc 表名字
>
>    ### 【查看建库语句】
>    * show create database 库名字
>
>    ### 【查看建表语句】
>    * show create table 表名
>
>    ### 【修改表字段值】
>    * alter table 表名 modify 字段名字 修改后的值;
>
>    ### 【修改表字段】
>    * alter table 表名 change 原来字段名称 修改后的字段名(你要修改的字段类型);
>
>    ### 【添加表字段】
>    * alter table 表名 add 字段名(字段类型)
>
>    ### 【删除表字段】
>    * alter table 表名 drop 字段名称
>
>    ### 【插入顺序的问题】
>        first
>            alter table 表名 add 你要添加的字段(字段类型) first;
>
>        after
>            alter table 表名 add 你要添加的字段(字段类型) after （在谁后面）;
>
>    ###【修改表名字】
>    * alter table 原表名 rename 你要修改的表名;
>
>
>    ### 【插入数据】
>    > 第一种插入方式
>        insert into 表名字 values(值1,2,3、、、、、);  
>      第二种插入方式
>        insert into 表名字(id,name,money,age,sex) values(1,'xxx',123,60,1); 常用  
>      第三种插入方式‘
>        insert into 表名(name,mone,province,age,sex)
>        values('xxx',999,'香港',37,1),('xxx',9123,'加拿大',37,1);
>
>    ### 【删除数据】
>    > delete from 表名字 where 字段名=’字段值‘;    
>
>    ### 【修改数据】
>    > update 表名字 set 修改的字段 where 查找的字段;   
>
>    ### 【查询数据】
>    > select * from 表名字;  
>    > select * from 表 where id = 2;  
>    > select * from 表 group by class limit 0,2;  
>    > select * from 表 where age > 30 order by chengji desc limit 5,5;  
>
>    ### 【内联查询】
>    > select 表1.字段 [as 别名],表n.字段 from 表1 inner join 表2 on 条件;  
>    > 例如：select username,name from shop user inner join shop goods on shop_user.gid = shop_goods.gid; >   
>    > 说明：以上方式的inner关键字换成cross同样可以，其实也可以省略  
>
>    ### 【左链接】
>    > select 表1.字段 [as 别名],表n.字段 from 表1 left join 表n on 条件;  
>    > 例如：select username,name from shop_user left join shop_goods on shop_user.gid = shop_goods.gid;  
>
>     ### 【右链接】
>     > select 表1.字段 [as 别名], 表n.字段 from 表1 right join 表n on 条件;  
>     > 例如：select username as uname,name as gname from shop_user right join shop_goods on >shop_user.gid =     shop_goods.gid;  
>
>    ### 【嵌套查询】
>    > select 字段 from 表 where 字段 in(select id from 表);  
>    > 例如：select * from shop_user where gid in(select gid from shop_goods);
>
>    ---
>
>    ### 【PHP7.+ 链接数据库】
>    1. 链接数据库
>    ```
>        $link = mysqli_connect('主机名','用户名','密码');
>    ```
>    2. 判断是否连接成功
>    ```
>    if(!$link){
>        exit('数据库链接失败');
>    }
>    ```
>    3. 设置字符集
>       + 设置编码，防止中文乱码 
>    ```
>       mysqli_set_charset($link,'utf8');
>    ```
>    4. 选择数据库
>    ```
>        mysqli_select.db($link,'bbs');
>    ```
>    5. 准备sql语句
>    ```
>        $sql = "select * from bbs_user"
>    ```
>    6. 发送sql语句
>    ```
>        $res = mysqli_query($link, $sql);
>    ```
>    7. 处理结果集
>    ```
>        $result = mysqli_fatch_assoc($res);
>    ```
>    8. 关闭数据库 
>    ```
>        mysqli_close($link);
>    ```
>
>    ### 【相关API】
>    * mysqli_fetch_assoc($result) 一个一个往下读 返回的是一个一维的关联数组（重要）
>    * mysqli_fetch_row($result) 返回一个索引数组
>    * mysqli_fetch_array($result) 返回一个索引又有关联的数组
>    * mysqli_num_rows($result) 返回查询时候的结果集的总条数
>    * mysqli_affected_rows($link) 返回你修改的，删除，添加的时候的受影响的行数
>    * mysqli_insert_id($link) 返回的是你插入的当前的数据的自增的id

---

### 设计篇
 >  1. 服务器管理  
    2. 数据库管理    
    3. 表管理    
    4. 字段管理    
    5. 索引管理

* 数据值和列的类型
    1. 表字段类型
    * tinyint   -->  有符号:-128到+127 ; 无符号:0到255
    * smallint  -->  有符号:-32768到+32767 ; 无符号:0到65535
    * mediumint -->  有符号:-8388608到+8388607 ; 无符号:0到16777215
    * int       -->  有符号:-2147483648到+2147483647 ; 无符号:0到4294967295
    * bigint    -->  有符号:-9223372036854775808到+9223372036854775807 ; 无符号:0到18446744073709551615
    2. 字符串类型
    * char(M)     --> 0 - 255
    * varchar(M)  --> 0 - 65535
    * tinytext    --> 0 - 255
    * text        --> 0 - 65535
    * mediumtext  --> 0 - 16777215
    * longtext    --> 0 - 4294967295
    3. 日期和时间
    * int （时间戳）

> 有符号数值 create table 表名称(id int);  
  无符号数值 create table 表名称(id int unsigned);

> 字符类型：  
    1. 最大长度或最大数值  
    2. 占用空间  

* 数据字段属性
1. unsigned        -->  无符号
2. zerofill        -->  0填充
3. auto_increment  -->  主键自增 create table 表名称(int unsigned auto_increment primary key);
4. null            -->  空
5. not null        -->  不允许为空
6. default         -->  默认值
 
> * 字段管理  
    1.1 alter table 表名称 add 添加字段    --->  添加字段  
    1.2 alter table 表名称 add 添加字段  after 已有字段 ---> 添加到已有字段的后面   
    1.3 alter table 表名称 add 添加字段  first ---> 添加表的最前面   
    2. alter table 表名称 drop 要删除的字段     ---> 删除字段  
    3.1 alter table 表名称 modify 要修改的字段及属性    ---> 修改字段  
    3.2 alter table 表名称 change 要修改的字段 新字段 及属性   ---> 修改字段  
    4. desc 表名称 ---> 查看字段  


* 数据表对象管理
* 数据表的类型及存储位置
* mysql服务器默认字符集
1. default-character-set = utf8;       建议客户端字符集utf8
2. character-set-server = utf8;        mysql服务端默认字符集utf8
3. collation-server = utf8_general_ci  mysql服务端校验字符集utf8
* 索引管理
1. 主键
    * 添加(1) create table 表名称(id int unsigned auto_increment primary key));
    * 添加(2) create table 表名称(id int unsigned auto_increment, username varchar(50) not null, primary key(id)));'
    * 删除(1-1) alter table 表名称 modify id int unsigned;
    * 删除(1-2) alter table 表名称 drop primary key;
2. 唯一
    * 添加 alter table 表名称 add unique u_username(username)
    * 删除 alter table 表名称 drop index u_username;
3. 普通
    * 添加 alter table 表名称 add index i_username(username);
    * 删除 alter table 表名称 drop index i_username;

---

### 操作篇
0. 基本操作
    * net start mysql  ---->   开启数据库
    * net stop mysql   ---->    关闭数据库
    * mysql -uroot -p123 --tee=c.\mysql.log  ---->  登录mysql
    * create database 数据库名称  ---->     创建数据库
    * drop database 数据库名称    ---->     删除数据库
    * show databases;           ---->     查看数据库
    * use test;                 ---->     切换到test数据库
    * show tables; ---->    查看所有表
    * create table user(id int,username varchar,password varchar);  ---->   创建表结构
    * remane table 表名称 to 新的表名称;                修改表名称
1. sql语句
    * insert into user(id,username,password) values(1,'Tom','123');  ---->   向user表中插入数据
    * drop table 表名称;    ---->  删除表
    * desc user;           ---->  查看表结构
    * select * from user;  ---->  查看表数据
    * delete from 表名称 where id=502;   ----> 删除当前表id为502的字段
    * update 表名称 set id=4 where id=500;  ----> 修改当前表将id=4 修改为 id=500 
    * exit;                ---->  退出数据库
2. 单表操作

3. 多表操作
    * 1. 普通多表查询
        + 两个数据进行所有组合
        + 数据量是两个表的乘积
        ~~~
        表一 class表
        create table class(id int unsigend auto_increment primary key,user varchar(50) not null,ctime int not null);
        insert into class(user,ctime) values('class1',unix_timestamp()),('class2',unix_timestamp()),...);
        +----+--------+------------+
        | id | user   | ctime      |
        +----+--------+------------+
        |  1 | class1 | 1532664261 |
        |  2 | class2 | 1532664261 |
        |  3 | class3 | 1532664261 |
        +----+--------+------------+
        ~~~
        ~~~
        表二 user表
        create table class(id int unsigend auto_increment primary key,username varchar(50) not null,age int not null,class_id int not null);
        insert into class(username,age,class_id) values('usre1',18,1),('usre2',20,3),('usre2',21,2)...;
        +----+----------+-----+
        | id | username | age |
        +----+----------+-----+
        |  1 | user1    |  19 |
        |  2 | user2    |  22 |
        |  3 | user3    |  21 |
        |  4 | user4    |  18 |
        |  5 | user5    |  22 |
        |  6 | user6    |  21 |
        |  7 | user7    |  20 |
        |  8 | user8    |  18 |
        |  9 | user9    |  19 |
        | 10 | user10   |  20 |
        +----+----------+-----+
        ~~~
        ~~~
        多表查询语句
        select * from user,class where user.class_id = class.id;
        +----+----------+-----+----------+----+--------+------------+
        | id | username | age | class_id | id | user   | ctime      |
        +----+----------+-----+----------+----+--------+------------+
        |  1 | user1    |  19 |        1 |  1 | class1 | 1532664261 |
        |  2 | user2    |  22 |        1 |  1 | class1 | 1532664261 |
        |  3 | user3    |  21 |        2 |  2 | class2 | 1532664261 |
        |  4 | user4    |  18 |        3 |  3 | class3 | 1532664261 |
        |  5 | user5    |  22 |        3 |  3 | class3 | 1532664261 |
        |  6 | user6    |  21 |        1 |  1 | class1 | 1532664261 |
        |  7 | user7    |  20 |        2 |  2 | class2 | 1532664261 |
        |  8 | user8    |  18 |        3 |  3 | class3 | 1532664261 |
        |  9 | user9    |  19 |        1 |  1 | class1 | 1532664261 |
        | 10 | user10   |  20 |        1 |  1 | class1 | 1532664261 |
        +----+----------+-----+----------+----+--------+------------+
        ~~~
        ~~~
        查询每个学员的姓名、年龄、班级名称、班级创建时间
        select user.username,user.age,class.user,from_unixtime(class.ctime) as ctime from user,class where user.class_id = class.id;

        +----------+-----+--------+---------------------+
        | username | age | user   | ctime               |
        +----------+-----+--------+---------------------+
        | user1    |  19 | class1 | 2018-07-27 12:04:21 |
        | user2    |  22 | class1 | 2018-07-27 12:04:21 |
        | user3    |  21 | class2 | 2018-07-27 12:04:21 |
        | user4    |  18 | class3 | 2018-07-27 12:04:21 |
        | user5    |  22 | class3 | 2018-07-27 12:04:21 |
        | user6    |  21 | class1 | 2018-07-27 12:04:21 |
        | user7    |  20 | class2 | 2018-07-27 12:04:21 |
        | user8    |  18 | class3 | 2018-07-27 12:04:21 |
        | user9    |  19 | class1 | 2018-07-27 12:04:21 |
        | user10   |  20 | class1 | 2018-07-27 12:04:21 |
        +----------+-----+--------+---------------------+
        ~~~
        ~~~
        select * from class where id in(select distinct class_id from user);
        +----+--------+------------+
        | id | user   | ctime      |
        +----+--------+------------+
        |  1 | class1 | 1532664261 |
        |  2 | class2 | 1532664261 |
        |  3 | class3 | 1532664261 |
        +----+--------+------------+
        ~~~
    * 2. 嵌套查询或子查询
    ~~~
    select * from class where id in(select distinct class_id from user);
    +----+--------+------------+
    | id | user   | ctime      |
    +----+--------+------------+
    |  1 | class1 | 1532664261 |
    |  2 | class2 | 1532664261 |
    |  3 | class3 | 1532664261 |
    +----+--------+------------+

    select * from user where user.class_id in(select id from class);
    +----+----------+-----+----------+
    | id | username | age | class_id |
    +----+----------+-----+----------+
    |  1 | user1    |  19 |        1 |
    |  2 | user2    |  22 |        1 |
    |  3 | user3    |  21 |        2 |
    |  4 | user4    |  18 |        3 |
    |  5 | user5    |  22 |        3 |
    |  6 | user6    |  21 |        1 |
    |  7 | user7    |  20 |        2 |
    |  8 | user8    |  18 |        3 |
    |  9 | user9    |  19 |        1 |
    | 10 | user10   |  20 |        1 |
    +----+----------+-----+----------+
    ~~~
    * 3. 链接查询
    ~~~
    * 4. 左链接
    select * from class left join user on class.id = user.class_id;
    +----+--------+------------+------+----------+------+----------+
    | id | user   | ctime      | id   | username | age  | class_id |
    +----+--------+------------+------+----------+------+----------+
    |  1 | class1 | 1532664261 |    1 | user1    |   19 |        1 |
    |  1 | class1 | 1532664261 |    2 | user2    |   22 |        1 |
    |  2 | class2 | 1532664261 |    3 | user3    |   21 |        2 |
    |  3 | class3 | 1532664261 |    4 | user4    |   18 |        3 |
    |  3 | class3 | 1532664261 |    5 | user5    |   22 |        3 |
    |  1 | class1 | 1532664261 |    6 | user6    |   21 |        1 |
    |  2 | class2 | 1532664261 |    7 | user7    |   20 |        2 |
    |  3 | class3 | 1532664261 |    8 | user8    |   18 |        3 |
    |  1 | class1 | 1532664261 |    9 | user9    |   19 |        1 |
    |  1 | class1 | 1532664261 |   10 | user10   |   20 |        1 |
    |  4 | class4 | 1532679839 | NULL | NULL     | NULL |     NULL |
    +----+--------+------------+------+----------+------+----------+
    ~~~
    * 5. 右链接
    ~~~
    select class.user,count(user.id) from user right join class on class.id = user.class_id group by class.id;
    +--------+----------------+
    | user   | count(user.id) |
    +--------+----------------+
    | class1 |              5 |
    | class2 |              2 |
    | class3 |              3 |
    | class4 |              0 |
    +--------+----------------+
    ~~~
    * 6. 内连接
    ~~~
    select user.username, class.user from user inner join class on class.id = user.class_id;
    +----------+--------+
    | username | user   |
    +----------+--------+
    | user1    | class1 |
    | user2    | class1 |
    | user3    | class2 |
    | user4    | class3 |
    | user5    | class3 |
    | user6    | class1 |
    | user7    | class2 |
    | user8    | class3 |
    | user9    | class1 |
    | user10   | class1 |
    +----------+--------+
    ~~~

---

#### 表引擎的类型
> myisam 表引擎：  
    1. user.frm 表字段  
    2. user.myd 表数据  
    3. user.myi 表索引  

> innodb 表引擎：  
    1. user.frm 表字段  
    2. user.idb 表索引 + 部分表数据  
    3. ibdata1 索引数据库中的所有表共享存储的文件  

---

> 数据库操作  
    1. DCL 数据控制语言   
        * grant  
        * commit   
        * rollback  
    2. DDL 数据定义语言  
        * create  
        * drop  
        * alter  
    3. DML 数据操作语言  
        * insert  --->  insert into user(id,username,password) values(1,'Tom','123');  ---->   向user表中插入数据  
        * delete --->  delete from 表名称 where id=502;   ----> 删除当前表id为502的字段  
        * update --->  update 表名称 set id=4 where id=500;  ----> 修改当前表将id=4 修改为 id=500   
    4. DQL 数据查询语言  
        * select ---> select * from user;  ---->  查看所有表数据  
        * select ---> select * from user where 查询条件  
        * distinct 关键字去除重复的数据  
    5. like的使用方法  
    5.1. select * from user where username like "%user%" ---> 检索  
    5.2. select * from user where passowrd is null 查询为空的字段   
    5.3. select * from user where passowrd is not null 查询不为空的字段   
    6. 使用order by对查询结果排序  
    # 排序分为升序（asc）从大到小和 降序（desc）从小到大  
    6.1 select * from user order by id asc; （升序） 
    6.2 select * from user order by id desc; (降序)  
    7.1 select * from user where username limit 5; 使用limit限定查询条数  
    7.2 select * from user where username limit 0,5; 使用limit限定查询条数  
    8 delete 与truncate的区别  
    8.1 delete from user ---> delete 消息清空表数据，但不会清楚计数器（自增）  
    8.1 truncate user ---> truncate 消息清空表数据，同时会清楚计数器（自增）  

---

链接函数 concat;  
select concat(id:id) as id,username,password from user;   
随机数 rand();   
统计总列数 count();   
求和函数 sum();   
最大值 max();  
最小值 min();  
平均数 avg();
~~~
分组聚合 group by;
select class, max(id),min(id),count(*),sum(id),avg(id) from users group by class;
+-------+---------+---------+----------+---------+---------+
| class | max(id) | min(id) | count(*) | sum(id) | avg(id) |
+-------+---------+---------+----------+---------+---------+
|     1 |      10 |       1 |        6 |      31 |  5.1667 |
|     2 |       7 |       2 |        2 |       9 |  4.5000 |
|     3 |       9 |       6 |        2 |      15 |  7.5000 |
+-------+---------+---------+----------+---------+---------+
~~~
~~~
+----+----------+----------+-------+
| id | username | password | class |
+----+----------+----------+-------+
|  1 | user1    | 123      |     1 |
|  2 | user2    | 345      |     2 |
|  3 | user3    | 345      |     1 |
|  4 | user4    | 456      |     1 |
|  5 | user5    | 463      |     1 |
|  6 | user6    | 466      |     3 |
|  7 | user7    | 246      |     2 |
|  8 | user8    | 442      |     1 |
|  9 | user9    | 190      |     3 |
| 10 | user10   | 990      |     1 |
+----+----------+----------+-------+
~~~
~~~  
select class,count(id),sum(id) from users group by class;
+-------+-----------+---------+
| class | count(id) | sum(id) |
+-------+-----------+---------+
|     1 |         6 |      31 |
|     2 |         2 |       9 |
|     3 |         2 |      15 |
+-------+-----------+---------+
~~~

~~~
select concat(class,'班') as 班级, concat(count(*),'人') as 人数 from users group by class;  
+--------+--------+
| 班级   | 人数   |
+--------+--------+
| 1班    | 6人    |
| 2班    | 2人    |
| 3班    | 2人    |
+--------+--------+
~~~

### 数据库优化
#### mysql表复制
1. mysql 复制表结构 
    + create table 新建表 like 要复制的表名称
2. mysql 复制表内容
    + insert into 新建表 select * from 要复制的表名称

### mysql索引
1. 查看索引
    show index from user\G
2. 普通索引  
    create index i_age on user(age);  
    drop index i_age on user;  
3. 唯一索引  
    create unique index u_username on user(username);  
    drop index u_username on user;  
### mysql视图
1. 创建视图
    + create view userclass as select user.username,user,age,class,name from user,class where user.class_id=class.id;
2. 查看视图
    + show tables;
3. 查看视图数据
    + select * from userclass
4. 删除视图
    + drop view userclass;
5. mysql中查看表中未来的自增数
    + show create table user;
> 视图的特性：当表中数据发生变化时视图数据也会随着发生相应的变化

### mysql字符串函数
* concat(string2 [,...]) 链接字符串
* lcase() 转小写
* ucase() 转大写
* lenght() 长度
* ltrim() 去除左边长度
* rtrim() 去除右边长度
* repeat() 重复
    + 例子：select concat(repeat('-',20),'linux');
* replace() 替换
    + 例子：select repace('linux and java','linux','php');
* substring() 截取（索引从1开始）
    + 例子：select substring('/user/local/src',5,5);
* space() 空格 
    + 例子：select concat('linux',space(20),'php');  

### mysql数学函数
1. bin(); 十进制转二进制
    + 例子：select bin(10);
2. ceiling(); 向上去一个整数
    + 例子：select ceiling(10.5);
3. floor(); 向下取整
4. max(); 取最大值
5. min(); 取最小值
6. sqrt(); 平方
7. rand(); 求随机数

### mysql时间函数
* curdate(); 当前日期
* curtime(); 当前时间
* now(); 当前日期和时间
* unix_timestamp(data) 当前时间戳
* from_unixtime() 时间戳转日期
* week(date) 一年中的第几周
* year(date) 日期中的年份
* datediff(expr,expr2) 日期的差值(天)
> 重排auto_increment  
    1. delete  
        + delete from user;  
        + alter table user auto_increment = 1;  
    2. truncate  
        + truncate user;  