<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>老王博客前台模版</title>
    <meta name="renderer" content="webkit">
    <link rel="icon" href="/lwblog/Public/home/images/laowang.ico" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/style.css">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/login.css">

    <script type="text/javascript" src="/lwblog/Public/home/layui/layui.js"></script>

</head>

<body>
    <!-- 头部 开始 -->
    <!-- 头部 开始 -->
    <div class="layui-header header trans_3">
        <div class="main index_main">
            <?php if($_SESSION['id'] != '' ): ?><a id="layout" href="<?php echo U('home/layout');?>">注销</a>
                <a id="user" href="<?php echo U('home/user',array('id'=>$_SESSION['id']));?>"><img src="/lwblog/Public/upload/<?php echo ($_SESSION["photo"]); ?>" alt=""></a>
                <?php else: ?>
                <a class="register" href="<?php echo U('home/register');?>">注册</a>
                <a class="login1" href="<?php echo U('home/login');?>">登录</a><?php endif; ?>
            <a class="logo" href="./index.html"><img src="/lwblog/Public/home/images/logo2.png" alt="老王博客"></a>
            <ul class="layui-nav" lay-filter="top_nav">
                <li class="layui-nav-item home"><a href="<?php echo U('home/index');?>">首页</a></li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('home/article_list');?>">文章栏目</a>
					<dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd><a href="<?php echo U('home/article_think');?>">胡思乱想</a></dd>
						<dd><a href="<?php echo U('home/article_talk');?>">细语微言</a></dd>
						<dd><a href="<?php echo U('home/article_front');?>">前端入坑</a></dd>
						<dd><a href="<?php echo U('home/article_home');?>">后端崛起</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('home/case_list');?>">你我共享</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('home/diary');?>">雁过留痕</a>
                </li>
                <li class="layui-nav-item">
                    <a href="">关于</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd><a href="<?php echo U('home/about_blog');?>">关于博客</a></dd>
                        <dd><a href="<?php echo U('home/about_author');?>">关于作者</a></dd>
                        <dd><a href="<?php echo U('home/message');?>">留言</a></dd>
                    </dl>
                </li>

            </ul>
            <div class="title">老王博客</div>
        </div>
    </div>
    <div class="header_back"></div>
    <!-- 头部 结束 -->

    <!-- 面包屑导航 开始 -->
    <div class="main breadcrumb_nav trans_3">
        <span class="layui-breadcrumb" lay-separator="—">
		<a href="<?php echo U('home/index');?>">首页</a><a href="<?php echo U('home/diary');?>">日志</a>
		
	</span>
    </div>
    <!-- 图片列表开始 -->
    <div class="main">
        <div class="picture_list_container">
            <ul>
                <?php if(is_array($list0)): foreach($list0 as $key=>$vo): ?><li class="trans_3">
                        <input value="<?php echo ($vo["id"]); ?>" style="display: none;" />
                        <a href="http://<?php echo ($vo["s_link"]); ?>" class="pic"><img src="/lwblog/Public/share/<?php echo ($vo["photo"]); ?>" alt="lwblog1.0"></a>
                        <h2 class="title"><a href="http://<?php echo ($vo["s_link"]); ?>"><?php echo ($vo["s_title"]); ?></a></h2>
                        <p class="desc"><?php echo ($vo["s_desc"]); ?></p>
                        <div class="date_hits">
                            <p class="date"><span>老王</span><span><?php echo ($vo["s_time"]); ?></span></p>
                            <!-- <span class="hits"><i class="layui-icon" title="点击量">&#xe62c;</i> <?php echo ($vo["s_hot"]); ?> ℃</span> -->
                            <!-- <a href="<?php echo ($vo["s_link"]); ?>" class="layui-btn layui-btn-primary">演示</a> -->
                            <a href="http://<?php echo ($vo["s_link"]); ?>" id="{vo.id}" class="layui-btn layui-btn-primary">下载</a>
                        </div>
                    </li><?php endforeach; endif; ?>
                <div id="page" class="pages"><?php echo ($page); ?></div>
                <div class="clear"></div>
            </ul>
        </div>
    </div>
    <!-- 图片列表结束 -->
    <!-- 底部 开始 -->
    <ul class="layui-fixbar">
        <li class="layui-icon layui-fixbar-top" id="to_top">&#xe604;</li>
    </ul>
    <div class="layui-footer footer">
        <div class="main index_main">
            <p><a href="http://www.phplaozhang.com">老王博客</a> © phplaozhang.com</p>
            <p>
                <a href="">网站地图</a>
            </p>
            <p class="beian">
                <a class="gongan" target="_blank" href=""><img src="/lwblog/Public/home/images/gonganbeian.png" alt="豫公网安备 410xxxxxxx号">豫公网安备 410xxxxxxx号</a>
                <a class="icp" target="_blank" href="http://www.miitbeian.gov.cn">豫ICP备xxxxxxxxx号-1</a>
            </p>
        </div>
    </div>
    <!-- 底部 结束 -->
    <script type="text/javascript">
        layui.use(['form', 'element'], function() {
            var layer = layui.layer,
                form = layui.form(),
                element = layui.element(),
                $ = layui.jquery;
            //回到顶部
            $("#to_top").click(function() {
                $("html,body").animate({
                    scrollTop: 0
                }, 200);
            });
            $(document).scroll(function() {
                var scroll_top = $(document).scrollTop();
                if (scroll_top > 500) {
                    $("#to_top").show();
                } else {
                    $("#to_top").hide();
                }
            });
            //底部版权始终在底部 
            // var win_height = $(window).height();
            // var body_height = $('body').height();
            // var footer_height = $('.footer').height();
            // if (body_height - win_height < 0) {
            //     $('.footer').addClass('footer_fixed');
            // }
        });
    </script>
</body>

</html>