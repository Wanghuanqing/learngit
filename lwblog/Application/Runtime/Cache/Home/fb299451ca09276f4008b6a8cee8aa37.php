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
    <style>
        #no1:hover,
        #no2:hover {
            transform: scale(1.2);
        }
    </style>

</head>

<body>
    <!-- 头部 开始 -->
    <div class="layui-header header trans_3">
        <div class="main index_main">
            <?php if($_SESSION['id'] != '' ): ?><a id="layout" href="<?php echo U('home/layout');?>">注销</a>
                <a id="user" href="<?php echo U('home/user',array('id'=>$_SESSION['id']));?>"><img src="/lwblog/Public/upload/<?php echo ($_SESSION["photo"]); ?>" alt=""></a>
                <?php else: ?>
                <a class="register" href="<?php echo U('home/register');?>">注册</a>
                <a class="login1" href="<?php echo U('home/login');?>">登录</a><?php endif; ?>
            <a class="logo" href="<?php echo U('home/index');?>"><img src="/lwblog/Public/home/images/logo2.png" alt="老王博客"></a>
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
                <a href="<?php echo U('home/index');?>">首页</a><cite></cite><a><cite>用户中心</cite></a>
                
        </span>
    </div>
    <!-- 面包屑导航 结束 -->
    <div class="main">
        <div class="page_left">

            <div id="touxiang" class="detail_container trans_3">
                <h1>头像修改</h1>
                <div class="line"></div>
                <div class="layui-tab-content">
                    <form class="layui-form" id="form" method="post" enctype="multipart/form-data" action="<?php echo U('home/edit_touxiang');?>">
                        <div class="layui-tab-item layui-show">
                            <input value="<?php echo ($_SESSION['id']); ?>" name="id" style="display: none;" />

                            <div class="layui-form-item">
                                <label class="layui-form-label">用户名 :</label>
                                <div class="layui-input-inline input-custom-width">
                                    <label style="position: absolute;top: 10px;" for=""><?php echo ($_SESSION['name']); ?></label>
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <label class="layui-form-label">头像 ：</label>
                                <div id="image" style="float:left; ">
                                    <img id='img' src="/lwblog/Public/upload/<?php echo ($_SESSION["photo"]); ?>" style="width:250px;height:250px;" />
                                </div>
                                <a href="javascript:;" class="a-upload">
                                    <input type="file" id="photo" name="photo" />上传图片
                                </a>
                            </div>

                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <button class="layui-btn" id="btn" lay-submit="" lay-filter="feedback_edit">立即修改</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="info" class="detail_container trans_3" hidden>
                <h1>个人信息修改</h1>
                <div class="line"></div>
                <div class="layui-tab-content">
                    <form class="layui-form" id="form1" method="post" action="<?php echo U('home/edit_user');?>">
                        <div class="layui-tab-item layui-show">
                            <input value="<?php echo ($_SESSION['id']); ?>" name="id" style="display: none;" />

                            <div class="layui-form-item">
                                <label class="layui-form-label">用户名 :</label>
                                <div class="layui-input-inline input-custom-width">
                                    <label style="position: absolute;top: 10px;" for=""><?php echo ($_SESSION['name']); ?></label>
                                </div>
                            </div>
                            <?php if(is_array($list )): foreach($list as $key=>$vo): ?><li id="lists ">
                                    <input value="<?php echo ($vo["id"]); ?> " style="display: none; " />

                                    <div class="desc"><?php echo (htmlspecialchars_decode($vo["desc"])); ?></div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">邮箱 :</label>
                                        <div class="layui-input-inline input-custom-width">
                                            <input style="position: absolute;top: 10px;" type="text" name="email" id="email" value="<?php echo ($vo["email"]); ?>">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">密码 :</label>
                                        <div class="layui-input-inline input-custom-width">
                                            <input style="position: absolute;top: 10px;" type="password" name="password" id="password" value="<?php echo ($vo["password"]); ?>">
                                        </div>
                                    </div>
                                </li><?php endforeach; endif; ?>

                            <div class="layui-form-item">
                                <label class="layui-form-label">确认密码 :</label>
                                <div class="layui-input-inline input-custom-width">
                                    <input style="position: absolute;top: 10px;" type="password" name="repassword" id="repassword">
                                </div>
                            </div>


                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <button class="layui-btn" type="submit" id="btn2" lay-submit="" lay-filter="feedback_edit">立即修改</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="page_right">
            <div class="">
                <h3>用户中心</h3>
                <ol class="seond_category trans_3">
                    <button style="margin-left:15%;" class="layui-btn layui-btn-primary trans_1" id="no1">个人头像修改</button>
                    <button class="layui-btn layui-btn-primary trans_1" id="no2">个人信息修改</button>
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
    <script src="/lwblog/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#no1").click(function() {
                $("#touxiang").show();
                $("#info").hide();
            });
            $("#no2").click(function() {
                $("#info").show();
                $("#touxiang").hide();
            });
        });
    </script>
    <script>
        document.getElementById('photo').onchange = function() {
            var imgFile = this.files[0];
            var fr = new FileReader();
            fr.onload = function() {
                document.getElementById('image').getElementsByTagName('img')[0].src = fr.result;
            };
            fr.readAsDataURL(imgFile);
        };
    </script>
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
            var win_height = $(window).height();
            var body_height = $('body').height();
            var footer_height = $('.footer').height();
            if (body_height - win_height < 0) {
                $('.footer').addClass('footer_fixed');
            }
        });
    </script>
</body>

</html>