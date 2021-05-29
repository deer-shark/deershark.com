<html lang="tw" class="h-100">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Youu">
    <link href="https://bootstrap.hexschool.com/docs/4.2/dist/css/bootstrap.css" rel="stylesheet">
<?php $uri = $_GET['redirect'];?>

正在<?php if($_GET['dl']== null){echo "開啟 <code>".$uri."</code>";}else{echo "下載 <code>".$_GET['dl']."</code>";};?> ，請稍候
<meta content='0; url=<? echo $uri;?>' http-equiv='refresh'>