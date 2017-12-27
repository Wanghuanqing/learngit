<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>校园信息发布后台管理中心</title>
    <link rel="stylesheet" href="/lwblog/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/lwblog/Public/Admin/css/global.css">
    <script type="text/javascript" src="/lwblog/Public/Admin/layui/layui.js"></script>
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/login.css">


    <link href="/lwblog/Public/umedit/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/lwblog/Public/umedit/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="/lwblog/Public/umedit/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/lwblog/Public/umedit/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/lwblog/Public/umedit/umeditor.min.js"></script>
    <script type="text/javascript" src="/lwblog/Public/umedit/lang/zh-cn/zh-cn.js"></script>

    <style>
        #type {
            width: 250px;
            height: 35px;
            border-color: #D2D2D2!important;
        }
        
        #type select {
            background: #07771A!important;
        }
        
        option {
            padding: 0 10px;
            line-height: 36px;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">
            <li class="layui-this">博文信息添加</li>

            <div class="main-tab-item">博文信息管理</div>
        </ul>
        <div class="layui-tab-content">
            <form id="form" method="post" enctype="multipart/form-data" action="<?php echo U('admin/blog_add1');?>">
                <div class="layui-tab-item layui-show">
                    <input type="hidden" name="id" value="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">类别</label>
                        <div>
                            <select name="type" id="type">
                                <option value="">请选择</option>
                                <option value="胡思乱想">胡思乱想</option>
                                <option value="细语微言">细语微言</option>
                                <option value="后端崛起">后端崛起</option>
                                <option value="前端入坑">前端入坑</option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline input-custom-width">
                            <input type="text" id="title" name="title" value="" style="width: 250px" lay-verify="required" autocomplete="off" placeholder="请输入标题" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">图片</label>
                        <div id="image" style="float:left; ">
                            <img id='img' src="" style="width:250px;height:250px;" />
                        </div>
                        <a href="javascript:;" class="a-upload">
                            <input type="file" id="photo" name="photo" />上传图片
                        </a>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">简介</label>
                        <div class="layui-input-block">
                            <textarea type="text/plain" id="desc" name="desc" style="width:800px;height:60px;"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容</label>
                        <div class="layui-input-block">
                            <textarea name="content" id="content" lay-verify="layedit" autocomplete="off" class="layui-textarea"></textarea>
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
    <!-- <script src="/lwblog/Public/admin/js/jquery-1.11.1.min.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#title").blur(function() {
                if (!$("#title").val()) {
                    alert('标题不能为空');
                }
            });
            $("#desc").blur(function() {
                if (!$("#desc").val()) {
                    alert('简介不能为空');
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
    <script type="text/javascript">
        //实例化编辑器
        var um = UM.getEditor('content');

        function getContent() {
            var arr = [];
            arr.push(UM.getEditor('content').getContent());
        }
    </script>

</body>

</html>