<?php
 include("consql.php");
 $sql="create table guanliyuan(id int auto_increment primary key,name varchar(20),password varchar(20))";
 mysql_query($sql);
 echo "����guanliyuan���ݱ����!!";
 mysql_query("insert into guanliyuan values(null,'admin','123456')");
 //�������ݱ�
/*1����Ʒ�������ݱ�
(1)��Ʒ����� 
(2)��ƷƷ�Ʊ�
(3)��Ʒ��
*/
//��������leibie
$sql=("create table leibie(id int auto_increment primary key,leibie_name varchar(30),cengji int(10),father_id int(2),leixing_id int(5),leibie_key varchar(30))");
if (mysql_query($sql)){
echo "��������leibie�ɹ�<br>";
}else{
echo "�����Ѿ�����<br>";
}

//����Ʒ�Ʊ�pinpai

$sql=("create table pinpai(id int auto_increment primary key,pinpai_name varchar(20),pinpai_web varchar(50),pinpai_miaosu blob,pinpai_show varchar(4),pinpai_logo varchar(50)) ");
if (mysql_query($sql)){
echo "����Ʒ�Ʊ�pinpai�ɹ�<br>";
}else{
echo "Ʒ�Ʊ��Ѿ�����<br>";
}

//������Ʒ��good
$sql=("create table goods(id int auto_increment primary key,goods_name varchar(20),goods_houhao varchar(20),leibie_id int(10),pinpai_id int(10),goods_theme varchar(20),goods_market_price varchar(20),goods_bendian_price varchar(20),goods_count int(10),goods_fabu int(4),goods_tag int (4),goods_key varchar(30),goods_miaosu blob,goods_weight varchar(10),goods_color varchar(10),goods_guige varchar(10),goods_dit varchar(10),goods_warning_num int (10),goods_warning_content varchar(30),goods_imageurl varchar(30))");

if (mysql_query($sql)){
echo "������Ʒ��good�ɹ�<br>";
}else{
echo "��Ʒ���Ѿ�����<br>";
}
?>