<?php
error_reporting(0);
/* 
 * Copyright(c)2016 All rights reserved.
 * @Licenced  http://www.w3.org
 * @Author  liutian<1538731090@qq.com> liutian_jiayi
 * @Create on 2016-6-12 11:13:15
 * @Version 1.0
 */
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "test");
mysqli_set_charset($link, "utf8");
$resource = mysqli_query($link, "SELECT * FROM lamp142 WHERE id = {$_GET['id']}");
echo json_encode(mysqli_fetch_assoc($resource));