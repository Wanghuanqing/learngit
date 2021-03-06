<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>老王博客-后台管理中心</title>
    <link rel="stylesheet" href="/lwblog/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/lwblog/Public/Admin/css/global.css">
    <script type="text/javascript" src="/lwblog/Public/Admin/layui/layui.js"></script>
    <style>
        .ht-box {
            float: left;
            width: 10rem;
            height: 10rem;
            border-radius: 100px;
            margin-left: 10%;
        }
        
        .count-title {
            margin: 50px 50px;
            color: #eee;
        }
        
        .count {
            font-size: 50px;
            color: #eee;
            margin-top: -30%;
            margin-left: 30%;
        }
    </style>
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">
            <div class="main-tab-item">首页面板</div>
        </ul>

        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <fieldset class="layui-elem-field layui-field-title">
                    <legend style="margin:0 auto;">统计信息</legend>
                    <div class="layui-field-box">
                        <div style="display: inline-block; width: 100%;">
                            <div class="ht-box layui-bg-blue">
                                <p class="count-title">博文总数</p>
                                <p class="count"><?php echo ($count["blog"]); ?></p>

                            </div>
                            <div class="ht-box layui-bg-red" style="background:orange;">
                                <p class="count-title" style="margin-left:25%; width:100px;">浏览用户总数</p>
                                <p class="count"><?php echo ($count["user"]); ?></p>

                            </div>
                            <div class="ht-box layui-bg-green">
                                <p class="count-title">留言总数</p>
                                <p class="count"><?php echo ($count["message"]); ?></p>

                            </div>
                            <div class="ht-box " style="background:#0400FF;">
                                <p class="count-title">评论总数</p>
                                <p class="count"><?php echo ($count["comment"]); ?></p>

                            </div>


                        </div>
                    </div>
                </fieldset>
            </div>
        </div>



        <div class="layui-tab-content">
            <blockquote class="layui-elem-quote">
                <p>所有表单样式参考layui,老王博客的后台模版是用layui框架搭建的
                </p>
            </blockquote>
            <blockquote class="layui-elem-quote">
                <p>系统版本：Lwblog v1.0
                </p>
                <hr>
                <p>服务器系统：xxxx
                </p>
                <hr>
                <p>服务器信息：xxxx
                </p>
                <hr>
                <p>数据库信息：MySQL
                </p>
            </blockquote>
        </div>
    </div>
</body>

</html>