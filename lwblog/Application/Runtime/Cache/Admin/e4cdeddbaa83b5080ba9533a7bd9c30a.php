<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>登入</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/u2/Public/Front/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Front/css/global.css">
</head>

<body>

    <div class="header">
        <div class="main">
            <a class="logo" href="#" title="Fly">Fly社区</a>
            <div class="nav">
                <!-- <a class="nav-this" href="index.html">
                    <i class="iconfont icon-wenda"></i>问答
                </a>
                <a href="http://www.layui.com/" target="_blank">
                    <i class="iconfont icon-ui"></i>框架
                </a> -->
                <a href="joblist.html">兼职信息</a>
                <a href="lostlist.html">失物招领</a>
                <a href="course.html">课程信息</a>
                <a href="swap.html">旧物交换</a>
                <a href="index.html">学院简介</a>
            </div>

            <div class="nav-user">
                <!-- 登入后的状态 -->

                <a class="unlogin" href="login.html"><i class="iconfont icon-touxiang"></i></a>
                <!-- <a class="avatar" href="#">
                    <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
                    <cite>贤心</cite>
                    <i>VIP2</i>
                </a> -->
                <div class="nav">
                    <a href="register.html"><i class="iconfont icon-shezhi"></i>注册</a>
                    <a href=""><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>退了</a>
                </div>

            </div>
        </div>
    </div>

    <div class="main layui-clear">

        <div class="fly-panel fly-panel-user" pad20>
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <li class="layui-this">登入</li>
                    <li><a href="register.html">注册</a></li>
                </ul>
                <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
                    <div class="layui-tab-item layui-show">
                        <div class="layui-form layui-form-pane">
                            <form method="post" id="form" action="<?php echo U('student/loginstudent');?>" method="post">
                                <div class="layui-form-item">
                                    <label for="L_email" class="layui-form-label">账号</label>
                                    <div class="layui-input-inline">
                                        <input type="text" id="uid" name="uid" required lay-verify="required" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label for="L_pass" class="layui-form-label">密码</label>
                                    <div class="layui-input-inline">
                                        <input type="password" id="password" name="password" required lay-verify="required" autocomplete="off" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label for="L_vercode" class="layui-form-label">验证码</label>
                                    <div class="layui-input-inline">
                                        <input type="text" id="vercode" name="vercode" required lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input">
                                       
                                    </div>
                                    <span><img id="sverify" src="/u2/Public/verifycode.php"/></span>
                                    <!-- <div class="layui-form-mid">
                                        <span style="color: #c00;">1+1=?</span>
                                    </div> -->
                                </div>
                                <div class="layui-form-item">
                                    <button class="layui-btn" lay-filter="*" id="btn" type="submit" lay-submit>立即登录</button>
                                    <span style="padding-left:20px;">
                                    <a href="forget.html">忘记密码？</a>
                                    </span>
                                </div>
                                <!-- <div class="layui-form-item fly-form-app">
                                    <span>或者使用社交账号登入</span>
                                    <a href="http://fly.layui.com:8098/app/qq" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq" title="QQ登入"></a>
                                    <a href="http://fly.layui.com:8098/app/weibo/" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-weibo" title="微博登入"></a>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="footer">
        <p><a href="http://fly.layui.com/">校园信息发布</a> 2017 &copy; <a href="http://www.layui.com/">layui.com</a></p>
        <p>
            <a href="http://fly.layui.com/auth/get" target="_blank">联系我们</a>
            <!-- <a href="http://fly.layui.com/jie/8157.html" target="_blank">获取Fly社区模版</a> -->
            <a href="http://fly.layui.com/jie/2461.html" target="_blank">微信公众号</a>
        </p>
    </div>
    <script src="/u2/Public/Front/layui/layui.js"></script>
    <script>
        layui.cache.page = 'user';
        layui.cache.user = {
            username: '游客',
            uid: -1,
            avatar: '/u2/Public/Front/images/avatar/00.jpg',
            experience: 83,
            sex: '男'
        };
        layui.config({
            version: "2.0.0",
            base: '/u2/Public/Front/mods/'
        }).extend({
            fly: 'index'
        }).use('fly');
    </script>
    <script src="/u2/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script>
        // $(function(){
        //     var uid = $('#uid').val();
        //     var password = $('#password').val();

        //     $.ajax({
        //         url: ('#form').arrt('action'),
        //         type: ('post'),
        //         dataType: ('json'),
        //         data: {
        //             'uid': uid,
        //             'password': password
        //         },
        //     })
        // })
    </script>    

</body>

</html>