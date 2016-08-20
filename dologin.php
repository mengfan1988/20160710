<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$link= @mysql_connect('127.0.0.1','root','');
mysql_select_db('shop');
mysql_query('set names utf8');
$uname=$_POST['uname'];
$pwd=md5($_POST['pwd']);
$query="select * from tp_user where uname='{$uname}'&&pwd='{$pwd}'";
$res=mysql_query($query);
$row=  mysql_fetch_assoc($res);
if($row==true){
    echo "登入成功";
}else{
    echo '登入失败';
}

