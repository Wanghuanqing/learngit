<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>老王博客</title>
    <meta name="keywords" content="老王博客">
    <meta name="description" content="老王博客">
    <link rel="icon" href="/lwblog/Public/home/images/laowang.ico" type="image/x-icon">

    <meta name="renderer" content="webkit">
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
    <div class="layui-header header trans_3">
        <div class="main index_main">
            <?php if($_SESSION['id'] != '' ): ?><a id="layout" href="<?php echo U('home/layout');?>">注销</a>
                <a id="user" href="<?php echo U('home/user',array('id'=>$_SESSION['id']));?>"><img src="/lwblog/Public/upload/<?php echo ($_SESSION["photo"]); ?>" alt=""><?php echo ($_SESSION["name"]); ?></a>
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
	  	  <a href="<?php echo U('home/index');?>">首页</a><cite></cite><a href="">关于</a></cite> <a><cite>关于作者</cite></a>
			
	</span>
    </div>
    <!-- 面包屑导航 结束 -->
    <div class="main">
        <div class="page_left">

            <div class="detail_container trans_3">
                <audio controls="controls" autoplay="true" loop="true">
                            <source src="/lwblog/Public/music/汉宫秋月.ogg" type="audio/ogg">
                            <source src="/lwblog/Public/music/汉宫秋月.mp3" type="audio/mpeg">
                          Your browser does not support the audio element.
                </audio>
                <h1>关于作者</h1>
                <div class="line"></div>
                <div class="aboutinfo">
                    <div class="aboutinfo-figure">
                        <img src="/lwblog/Public/home/images/touxiang.jpg" alt="老王博客" />
                    </div>
                    <p class="aboutinfo-nickname">天赋流觞</p>
                    <p class="aboutinfo-introduce">一枚90后程序员，web前端工程师，php开发</p>
                    <p class="aboutinfo-location"><i class="fa fa-location-arrow"></i>&nbsp;安徽 - 宿州</p>
                    <hr />
                    <div class="aboutinfo-contact">
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1426095072&site=qq&menu=yes"><img src="/lwblog/Public/home/images/qq.png" /></a>
                        <a target="_blank" title="给我写信" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=wanghuanqing00@126.com"><img src="/lwblog/Public/home/images/email.png" /></a>

                        <a target="_blank" title="码云" href="https://gitee.com/huanqing"><img src="/lwblog/Public/home/images/mayun.png" /></a>
                        <a target="_blank" title="新浪微博" href="http://weibo.com/huanqing0301"><img src="/lwblog/Public/home/images/weibo.png" /></a>
                        <!-- <a target="_blank" title="QQ交流" href="http://sighttp.qq.com/authd?IDKEY=2167096a0e422402c1aed4ff61d3a377f190a83ac69aa30a"><i class="fa fa-qq fa-2x"></i></a>
					<a target="_blank" title="给我写信" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=absolutely@lyblogs.cn"><i class="fa fa-envelope fa-2x"></i></a>
					<a target="_blank" title="新浪微博" href="javascript:layer.msg('个人隐私，暂不提供')"><i class="fa fa-weibo fa-2x"></i></a>
					<a target="_blank" title="码云" href="https://git.oschina.net/LY2016Start"><i class="fa fa-git fa-2x"></i></a> -->
                    </div>
                    <fieldset class="layui-elem-field layui-field-title">
                        <legend>简介</legend>
                        <div class="layui-field-box aboutinfo-abstract abstract-bloger">
                            <p style="text-align:center;">天赋流觞，诞生于1996年3月1日，目前是一个码农，从事web前端开发、php。</p>
                            <h1>个人信息</h1>
                            <p style="text-align:left;"><?php echo ($data["infomation"]); ?></p>
                            <h1>个人介绍</h1>
                            <p style="text-align:left;"><?php echo ($data["introduction"]); ?></p>
                            <h1 style="text-align:center;">The End</h1>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="page_right">
            <div class="second_categorys_container">
                <h3>栏目导航</h3>
                <ol class="seond_category trans_3">
                    <li><a href="<?php echo U('home/about_author');?>" class="about">关于作者</a></li>
                    <li><a href="<?php echo U('home/about_blog');?>" class="about">关于博客</a></li>
                </ol>
            </div>

        </div>
        <div class="clear"></div>
    </div>
    <!-- 底部 开始 -->
    <ul class="layui-fixbar">
        <!-- <li class="layui-icon qr_code">&#xe63b;<img class="qr_code_pic" src="<?php echo ($settings["qr_code"]); ?>" alt="微信公众号二维码"></li> -->
        <li class="layui-icon layui-fixbar-top" id="to_top">&#xe604;</li>
    </ul>
    <div class="layui-footer footer">
        <div class="main index_main">
            <p><a href="http://www.baidu.com">老王博客</a> © phplaozhang.com</p>
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
        });
    </script>
</body>

</html>