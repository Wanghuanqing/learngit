<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="老王博客,老王,老王博客,老王的个人博客,个人博客,个人网站,个人主页,老王blog,web老王,PHP个人博客,web个人博客,web程序员博客,PHP程序员博客,个人博客php源代码,基于php个人博客,Lwblogs,老王博客系统">
    <meta name="description" content="老王博客">
    <link rel="icon" href="/lwblog/Public/home/images/laowang.ico" type="image/x-icon">

    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/reset.css">

    <link rel="stylesheet" type="text/css" href="/lwblog/Public/admin/css/demo.css" />
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/layui/css/layui.css">
    <script type="text/javascript" src="/lwblog/Public/home/layui/layui.js"></script>

    <style>
        #lo h3 {
            text-align: center;
            height: 20px;
            font: 20px "microsoft yahei", Helvetica, Tahoma, Arial, "Microsoft jhengHei", sans-serif;
            color: #ec6200;
            height: 20px;
            line-height: 20px;
            padding: 0 0 35px 0;
        }
        
        #lo {
            border-radius: 10px;
            margin-top: 10%;
            animation: cc 1s ease-in-out;
        }
        
        .yuan {
            margin: 0 auto;
            width: 25%;
            height: 34rcm;
            padding: 0 5px;
            margin-bottom: 30px;
            border-radius: 50px;
            border: rgba(255, 255, 255, 0.2) 2px solid !important;
        }
        
        .yuan i {
            font-size: 30px;
        }
        
        .text1 {
            width: 80%;
            height: 30rcm;
            outline: none;
            border: none;
            display: inline-block;
            font: 14px "microsoft yahei", Helvetica, Tahoma, Arial, "Microsoft jhengHei";
            margin-left: 5px;
            line-height: 46px;
            background: #333;
        }
        
        #btn1 {
            margin: 0 auto;
            width: 80px;
            line-height: 20px;
            text-align: center;
            font-size: 20px;
            margin-top: 20px;
        }
        
        #btn {
            display: block;
            padding: 15px;
            border-radius: 20px;
            background: #ec6200;
        }
    </style>
</head>

<body style="background:#333;">
    <div id="lo">
        <h3>欢迎登录</h3>
        <form id="form" action="<?php echo U('home/loginuser');?>" method="post" name="f">
            <div class="yuan">
                <span style="color:#009688;"><i class="layui-icon" title="作者">&#xe612;</i>&nbsp;&nbsp;
                    <input class="text1" type="text" name="name" id="name" style="color: #FFFFFF !important" placeholder="请输入账户">
                 </span>
            </div>
            <div class="yuan">
                <span style="color:#009688;"><i class="layui-icon" title="作者">&#xe600;</i>&nbsp;&nbsp;
                    <input  class="text1" name="password" id="password" style="color: #FFFFFF !important;" value="" type="password" placeholder="请输入密码">
                </span>
            </div>
            <div id="btn1">
                <button style="color: #FFFFFF" id="btn" type="submit">登录</button>
            </div>
        </form>
    </div>
</body>

</html>