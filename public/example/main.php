<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");

$key = "a097dca933f26862b6c50d1a2d6c4794";//通讯密钥
$host = "../createOrder";

$sign = md5($_GET['payId'].$_GET['param'].$_GET['type'].$_GET['price'].$key);
$p = "payId=".$_GET['payId'].'&param='.$_GET['param'].'&type='.$_GET['type']."&price=".$_GET['price'].'&sign='.$sign.'&isHtml=1';

echo "<script>window.location.href = '".$host."?".$p."'</script>";

