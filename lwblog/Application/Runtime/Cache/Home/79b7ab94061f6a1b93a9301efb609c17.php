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
        
        #email2,
        #ps {
            margin-left: 20px;
            color: red;
        }
    </style>
</head>

<body style="background:#333;">
    <div id="lo">
        <h3>欢迎注册</h3>
        <form id="form" action="<?php echo U('home/registeruser');?>" method="post" name="f">
            <div class="yuan">
                <span style="color:#009688;"><i class="layui-icon" title="作者">&#xe612;</i>&nbsp;&nbsp;
                    <input class="text1" type="text" name="name" id="name1" style="color: #FFFFFF !important" placeholder="请输入账户">
                </span>
            </div>
            <div class="yuan">
                <span style="color:#009688;"><i class="layui-icon" title="作者">&#xe612;</i>&nbsp;&nbsp;
                    <input  class="text1" type="text" name="email" id="email"style="color: #FFFFFF !important" placeholder="例：zhangsan-001@126.com ">
                    <label style="display:none;" id="email2" for="" hidden>邮箱格式不正确，请重新输入！</label>
                    
                </span>
            </div>
            <div class="yuan">
                <span style="color:#009688;"><i class="layui-icon" title="作者">&#xe600;</i>&nbsp;&nbsp;
                    <input  class="text1" name="password" id="password" style="color: #FFFFFF !important;" value="" type="password" placeholder="请输入密码">
                </span>
            </div>
            <div class="yuan">
                <span style="color:#009688;"><i class="layui-icon" title="作者">&#xe600;</i>&nbsp;&nbsp;
                    <input  class="text1" name="repassword" id="repassword" style="color: #FFFFFF !important;" value="" type="password" placeholder="请再次输入密码">                        
                    <label style="display:none;" id="ps" for="" hidden>两次密码不一致，请重新输入！</label>
                    
                </span>
            </div>
            <div id="btn1">
                <button class="act-but submit" style="color: #FFFFFF" id="btn" type="button">注册</button>
            </div>
        </form>
    </div>
    <script src="/lwblog/Public/admin/js/jquery-1.11.1.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#email').blur(function() {
                var email = $('#email').val();
                if (email != "") {
                    var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
                    isok = reg.test(email);
                    if (!isok) {
                        $('#email2').css("display", "block");
                    } else {
                        $('#email2').css("display", "none");
                    }

                };
            })

            $('#repassword').blur(function() {
                var password = $('#password').val();
                var repassword = $('#repassword').val();
                // alert(password.length);
                if (password !== repassword) {
                    $('#ps').css("display", "block");

                } else {
                    $('#ps').css("display", "none");
                }
            })
            $('#btn').click(function() {
                var name = $('#name1').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var repassword = $('#repassword').val();
                // alert($('#name').val());
                if (name == "" || name.length < 4) {
                    alert("用户名不能为空，且不能低于四个字符");
                } else if (email == "") {
                    alert("email不能为空");
                } else if (password == "" || password.length < 6 || password.length > 18) {
                    alert("密码不能为空，且长度不低于3个字符，不超过18个字符！谢谢！");
                } else {
                    var name = $('#name1').val();
                    $.ajax({
                        url: $('#form').attr('action'),
                        type: 'post',
                        dataType: 'json',
                        data: {
                            'name': name,
                            'password': password,
                            'email': email
                        },
                        success: function(data) {
                            if (data.code == 200) {
                                alert(data.msg);
                                location = 'login.html';
                            } else {
                                alert(data.msg);
                            }
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    })
                }

            })

        })
    </script>
</body>

</html>