<?php
 include("consql.php");
 $sql="create table guanliyuan(id int auto_increment primary key,name varchar(20),password varchar(20))";
 mysql_query($sql);
 echo "创建guanliyuan数据表完成!!";
 mysql_query("insert into guanliyuan values(null,'admin','123456')");
 //创建数据表
/*1、商品管理数据表
(1)商品分类表 
(2)商品品牌表
(3)商品表
*/
//建立类别表leibie
$sql=("create table leibie(id int auto_increment primary key,leibie_name varchar(30),cengji int(10),father_id int(2),leixing_id int(5),leibie_key varchar(30))");
if (mysql_query($sql)){
echo "创建类别表leibie成功<br>";
}else{
echo "类别表已经存在<br>";
}

//建立品牌表pinpai

$sql=("create table pinpai(id int auto_increment primary key,pinpai_name varchar(20),pinpai_web varchar(50),pinpai_miaosu blob,pinpai_show varchar(4),pinpai_logo varchar(50)) ");
if (mysql_query($sql)){
echo "创建品牌表pinpai成功<br>";
}else{
echo "品牌表已经存在<br>";
}

//建立商品表good
$sql=("create table goods(id int auto_increment primary key,goods_name varchar(20),goods_houhao varchar(20),leibie_id int(10),pinpai_id int(10),goods_theme varchar(20),goods_market_price varchar(20),goods_bendian_price varchar(20),goods_count int(10),goods_fabu int(4),goods_tag int (4),goods_key varchar(30),goods_miaosu blob,goods_weight varchar(10),goods_color varchar(10),goods_guige varchar(10),goods_dit varchar(10),goods_warning_num int (10),goods_warning_content varchar(30),goods_imageurl varchar(30))");

if (mysql_query($sql)){
echo "创建商品表good成功<br>";
}else{
echo "商品表已经存在<br>";
}
?>