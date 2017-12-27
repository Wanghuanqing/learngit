<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>校园信息发布后台管理中心</title>
    <link rel="stylesheet" href="/blog2/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/blog2/Public/Admin/css/global.css">
    <script type="text/javascript" src="/blog2/Public/Admin/layui/layui.js"></script>
    <link rel="stylesheet" type="text/css" href="/blog2/Public/home/css/login.css">
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">
            <li class="layui-this">分享信息添加</li>

            <div class="main-tab-item">分享信息管理</div>
        </ul>
        <div class="layui-tab-content">
            <form class="layui-form" id="form" method="post" enctype="multipart/form-data" action="<?php echo U('admin/share_add');?>">
                <div class="layui-tab-item layui-show">
                    <input type="hidden" name="id" value="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline input-custom-width">
                            <input type="text" id="title" name="title" value="" style="width: 250px" lay-verify="required" autocomplete="off" placeholder="请输入标题" class="layui-input">
                            <span style="color:red;" id="op">标题不能为空</span>

                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">图片</label>
                        <div id="image" style="float:left; ">
                            <img id='img' src="/blog2/Public/front/images/图片.jpg" style="width:250px;height:250px;" />
                        </div>
                        <a href="javascript:;" class="a-upload">
                            <input type="file" id="photo" name="photo" />上传图片
                        </a>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">链接</label>
                        <div class="layui-input-inline input-custom-width">
                            <input type="text" id="link" name="link" value="" style="width: 250px" lay-verify="required" autocomplete="off" placeholder="请输入链接" class="layui-input">
                            <span style="color:red;" id="op1">链接不能为空</span>

                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">简介</label>
                        <div class="layui-input-block">
                            <textarea type="text/plain" id="desc" name="desc" style="width:800px;height:60px;"></textarea>
                            <span style="color:red;" id="op2">简介不能为空</span>

                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" id="btn" lay-submit="" lay-filter="feedback_edit">立即添加</button>
                            <a class="layui-btn" lay-filter="feedback_edit" href="javascript:history.go(-1)">返回</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="/blog2/Public/Front/layui/layui.js"></script>
    <script src="/blog2/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#title").blur(function() {
                if ($("#title").val() !== "") {
                    $("#op").hide();
                } else {
                    $("#op").show();

                }
            });
            $("#desc").blur(function() {
                if ($("#desc").val() !== "") {
                    $("#op2").hide();
                } else {
                    $("#op").show();

                }
            });
            $("#link").blur(function() {
                if (!$("#link").val() !== "") {
                    $("#op1").hide();
                } else {
                    $("#op").show();

                }
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
</body>

</html>