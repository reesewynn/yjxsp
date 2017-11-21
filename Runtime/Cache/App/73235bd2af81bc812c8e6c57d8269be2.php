<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8"/>
    <title><?php echo ($town["name"]); ?></title>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- head 中 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/weui/1.1.1/style/weui.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/jquery-weui/1.0.1/css/jquery-weui.min.css">
    <link rel="stylesheet" href="/Public/statics/css/mobile.css">
</head>
<body>
<header class="demos-header">
    <h1 class="demos-title">视频中心</h1>
</header>
<div class="weui-grids">
    <a href="<?php echo U('App/Equipment/listcamera',array('type'=>1));?>" class="weui-grid js_grid weui-mygrid">
        <div class="weui-grid__icon">
            <img src="/Public/statics/images/camera.png" alt="">
        </div>
        <p class="weui-grid__label">
            谯城区
        </p>
    </a>
    <a href="<?php echo U('App/Equipment/listcamera',array('type'=>2));?>" class="weui-grid js_grid weui-mygrid">
        <div class="weui-grid__icon">
            <img src="/Public/statics/images/camera.png" alt="">
        </div>
        <p class="weui-grid__label">
            涡阳县
        </p>
    </a>
    <a href="<?php echo U('App/Equipment/listcamera',array('type'=>3));?>" class="weui-grid js_grid weui-mygrid">
        <div class="weui-grid__icon">
            <img src="/Public/statics/images/camera.png" alt="">
        </div>
        <p class="weui-grid__label">
            蒙城县
        </p>
    </a>
    <a href="<?php echo U('App/Equipment/listcamera',array('type'=>4));?>" class="weui-grid js_grid weui-mygrid">
        <div class="weui-grid__icon">
            <img src="/Public/statics/images/camera.png" alt="">
        </div>
        <p class="weui-grid__label">
            利辛县
        </p>
    </a>
</div>
<div class="weui-footer">
    <p class="weui-footer__text">Copyright © 启凡科技提供技术支持</p>
</div>
</body>
<!-- body 最后 -->
<script src="//cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdn.bootcss.com/jquery-weui/1.0.1/js/jquery-weui.min.js"></script>
</html>