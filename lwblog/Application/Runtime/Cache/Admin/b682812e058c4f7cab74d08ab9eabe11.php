<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>老王博客-后台管理中心</title>
    <link rel="stylesheet" href="/lwblog/Public/admin/layui/css/layui.css">
    <link rel="stylesheet" href="/lwblog/Public/admin/css/global.css">
    <script type="text/javascript" src="/lwblog/Public/admin/layui/layui.js"></script>


</head>

<body>
    <div class="layui-layout layui-layout-admin">
        <div class="layui-header header">
            <div class="layui-main">
                <a class="logo" target="_blank">
                    <img src="/lwblog/Public/admin/images/logo2.png" alt="老王">
                </a>
                <ul class="layui-nav top-nav-container">
                    <li class="layui-nav-item layui-this">
                        <a href="javascript:void(0)">首页</a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:void(0)">内容</a>
                    </li>
                </ul>
                <div class="top_admin_user">
                    <a href="<?php echo U('home/home/index');?>" target="_blank">网站首页</a> | <a id="layout" class="logout_btn" href="javascript:void(0)">退出</a>
                </div>
            </div>
        </div>
        <div class="layui-side layui-bg-black">
            <div class="layui-side-scroll">
                <ul class="layui-nav layui-nav-tree left_menu_ul">
                    <li class="layui-nav-item layui-nav-title">
                        <a>个人信息</a>
                    </li>
                    <li class="layui-nav-item first-item layui-this">
                        <a href="./home.html" target="main">
                            <i class="layui-icon">&#xe638;</i>
                            <cite>首页面板</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item ">
                        <a href="./adminlist.html" target="main">
                            <i class="layui-icon">&#xe642;</i>
                            <cite>管理员</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item ">
                        <a href="./ad.html" target="main">
                            <i class="layui-icon">&#xe642;</i>
                            <cite>公告</cite>
                        </a>
                    </li>
                </ul>
                <ul class="layui-nav layui-nav-tree left_menu_ul content_put_manage hide">
                    <li class="layui-nav-item layui-nav-title">
                        <a>内容发布管理</a>
                    </li>
                    <li class="layui-nav-item first-item">
                        <a href="bloglist.html" target="main">
                            <i class="layui-icon">&#xe609;</i>
                            <cite>博文信息管理</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item content_manage">
                        <a href="blogadd.html" target="main">
                            <i class="layui-icon">&#xe609;</i>
                            <cite>博文信息添加</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item content_manage">
                        <a href="share.html" target="main">
                            <i class="layui-icon">&#xe609;</i>
                            <cite>分享管理</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="log.html" target="main">
                            <i class="layui-icon">&#xe609;</i>
                            <cite>日志</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="aboutblog.html" target="main">
                            <i class="layui-icon">&#xe609;</i>
                            <cite>关于博客</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="aboutauthor.html" target="main">
                            <i class="layui-icon">&#xe609;</i>
                            <cite>关于作者</cite>
                        </a>
                    </li>
                </ul>
                <div class="content_manage_container left_menu_ul hide">
                    <div class="content_manage_title">内容管理</div>
                    <div id="content_manage_tree"></div>
                </div>
            </div>



        </div>

        <div class="layui-body iframe-container">
            <div class="iframe-mask" id="iframe-mask"></div>
            <iframe class="admin-iframe" id="admin-iframe" name="main" src="./home.html"></iframe>
        </div>

        <div class="layui-footer footer">
            <div class="layui-main">
                <p>2017 © <a href="#">老王博客-后台管理中心</a></p>
            </div>
        </div>
    </div>

    <script src="/lwblog/Public/Admin/js/jquery-1.11.1.min.js"></script>

    <script type="text/javascript">
        layui.use(['layer', 'element', 'jquery', 'tree'], function() {
            var layer = layui.layer,
                element = layui.element() //导航的hover效果、二级菜单等功能，需要依赖element模块
                ,
                jq = layui.jquery

            //头部菜单切换
            jq('.top-nav-container .layui-nav-item').click(function() {
                var menu_index = jq(this).index('.top-nav-container .layui-nav-item');
                jq('.top-nav-container .layui-nav-item').removeClass('layui-this');
                jq(this).addClass('layui-this');
                jq('.left_menu_ul').addClass('hide');
                jq('.left_menu_ul:eq(' + menu_index + ')').removeClass('hide');
                jq('.left_menu_ul .layui-nav-item').removeClass('layui-this');
                jq('.left_menu_ul:eq(' + menu_index + ')').find('.first-item').addClass('layui-this');
                var url = jq('.left_menu_ul:eq(' + menu_index + ')').find('.first-item a').attr('href');
                jq('.admin-iframe').attr('src', url);
                //出现遮罩层
                jq("#iframe-mask").show();
                //遮罩层消失
                jq("#admin-iframe").load(function() {
                    jq("#iframe-mask").fadeOut(100);
                });
            });

            //点击回到内容页面
            jq('.content_manage_title').click(function() {
                jq('.left_menu_ul .layui-nav-item').removeClass('layui-this');
                jq(this).parent().addClass('hide');
                jq('.content_put_manage').find('.first-item').addClass('layui-this');
                var url = jq('.content_put_manage').find('.first-item a').attr('href');
                jq('.admin-iframe').attr('src', url);
                jq('.content_put_manage').removeClass('hide');

            });

            //退出登陆
            $(function() {
                $('#layout').click(function() {
                    $.ajax({
                        url: '<?php echo U("admin/layout");?>',
                        type: 'post',
                        dataType: 'json',
                        data: {

                        },
                        success: function(data) {
                            if (data.code == 200) {
                                alert(data.msg);
                                location.href = "<?php echo U('user/login');?>";
                            } else {
                                alert(data.msg);
                            }
                        }
                    })
                })
            })


        });
    </script>
</body>

</html>