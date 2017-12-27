<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>老王博客-后台管理中心</title>
    <link rel="stylesheet" href="/blog2/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/blog2/Public/Admin/css/global.css">
    <script type="text/javascript" src="/blog2/Public/Admin/layui/layui.js"></script>

    <!-- 样式文件 -->
    <link href="/blog2/Public/umedit/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/blog2/Public/umedit/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="/blog2/Public/umedit/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/blog2/Public/umedit/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/blog2/Public/umedit/umeditor.min.js"></script>
    <script type="text/javascript" src="/blog2/Public/umedit/lang/zh-cn/zh-cn.js"></script>
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">

            <a href="">
                <li class="layui-this">旧物交换修改</li>
            </a>
            <div class="main-tab-item">旧物交换信息修改</div>
        </ul>
        <div class="layui-tab-content">
            <form class="layui-form">
                <div class="layui-tab-item layui-show">
                    <input type="hidden" name="id" value="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">类别</label>
                        <div class="layui-input-inline input-custom-width">
                            <select name="model_id" lay-verify="required" id="type">
                                    <option value="">请选择</option>
                                    <option value="胡思乱想" <?php if($data["type"] == '胡思乱想'): ?>selected<?php endif; ?> >胡思乱想</option>
                                    <option value="细语微言" <?php if($data["type"] == '细语微言'): ?>selected<?php endif; ?> >细语微言</option>
                                    <option value="后端崛起" <?php if($data["type"] == '后端崛起'): ?>selected<?php endif; ?> >后端崛起</option>
                                    <option value="前端入坑" <?php if($data["type"] == '前端入坑'): ?>selected<?php endif; ?> >前端入坑</option>
                                </select>
                        </div>
                        <div class="layui-form-mid layui-word-aux"></div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline input-custom-width">
                            <input placeholder="0-20个字符" type="text" name="title" id="title" value="<?php echo ($data["title"]); ?>" lay-verify="required" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">作者</label>
                        <div class="layui-input-inline input-custom-width">
                            <input type="text" name="title" id="author" value="<?php echo ($data["author"]); ?>" lay-verify="required" autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux"></div>
                    </div>
                    <!-- <div class="layui-form-item">
            <label class="layui-form-label">栏目描述</label>
            <div class="layui-input-inline input-custom-width">
              <textarea name="description" lay-verify="" autocomplete="off" placeholder="请输入栏目描述" class="layui-textarea"></textarea>
            </div>
          </div> -->
                    <!-- <div class="layui-form-item">
                        <label class="layui-form-label">时间</label>
                        <div class="layui-input-inline input-custom-width">
                            <input type="text" name="create_time" id="rtime" value="<?php echo ($data["rtime"]); ?>" id="date" lay-verify="datetime" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this,istime: 1, format: 'YYYY-MM-DD hh:mm:ss' })">
                        </div>
                    </div> -->
                    <div class="layui-form-item">
                        <label class="layui-form-label">简介</label>
                        <div class="layui-input-block">
                            <textarea name="" id="desc" cols="100" rows="3"><?php echo ($data["desc"]); ?></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容</label>
                        <div class="layui-input-block">
                            <textarea name="content" id="content" lay-verify="layedit" autocomplete="off" class="layui-textarea" id="content"><?php echo ($data["content"]); ?></textarea>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <input type="text" value="<?php echo ($data["id"]); ?>" id="id" hidden>
                            <button class="layui-btn" lay-submit="" lay-filter="feedback_edit" id="back_edit" type="button">修改</button>
                            <a class="layui-btn" lay-filter="feedback_edit" href="javascript:history.back(-1)">返回</a>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- <script src="/blog2/Public/admin/js/jquery-1.11.1.min.js"></script> -->
    <script>
        $(function() {

            // alert('发布兼职');
            $('#back_edit').click(function() {
                var title = $('#title').val();
                var author = $('#author').val();
                // var rtime = $('#rtime').val();
                var content = UM.getEditor('content').getContent();
                var id = $('#id').val();
                var type = $("select[id='type']").val();
                var desc = $('#desc').val();
                $.ajax({
                    url: '<?php echo U("admin/back_edit");?>',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'title': title,
                        'author': author,
                        // 'rtime': rtime,
                        'content': content,
                        'desc': desc,
                        'type': type,
                        'id': id
                    },
                    success: function(data) {
                        if (data.code == 200) {
                            alert(data.msg);
                        } else {
                            alert(data.msg);
                        }
                    },
                    error: function(data) {
                        console.log(data);
                    }
                })
            })

        })
    </script>
    <script type="text/javascript">
        layui.use(['element', 'form', 'upload', 'layedit', 'laydate'], function() {
            var element = layui.element(),
                form = layui.form(),
                layedit = layui.layedit,
                laydate = layui.laydate,
                jq = layui.jquery;
            //表单验证
            form.verify({
                //编辑器数据同步
                layedit: function(value) {
                    layedit.sync(content);
                    // layedit.sync(reply);
                }
            });


            //监听提交
            form.on('submit(feedback_edit)', function(data) {
                return false;
            });

        })
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