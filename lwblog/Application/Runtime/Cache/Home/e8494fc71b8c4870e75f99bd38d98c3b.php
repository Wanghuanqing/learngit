<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>老王博客</title>
	<meta name="keywords" content="老王博客">
	<meta name="description" content="老王博客">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/blog2/Public/home/layui/css/layui.css">
	<link rel="stylesheet" type="text/css" href="/blog2/Public/home/css/style.css">
	<script type="text/javascript" src="/blog2/Public/home/layui/layui.js"></script>
</head> 
<body>
<!-- 头部 开始 -->
<div class="layui-header header trans_3">
<div class="main index_main">
	<a class="logo" href="./index.html"><img src="./images/logo.png" alt="老王博客"></a>
	<ul class="layui-nav" lay-filter="top_nav">
	  	<li class="layui-nav-item home"><a href="./index.html">首页</a></li>
	  	<li class="layui-nav-item">
	  		<a href="./article_list.html">学无止境</a>
			<dl class="layui-nav-child"> <!-- 二级菜单 -->
		      	<dd><a href="./article_list.html">PHP</a></dd>
		      	<dd><a href="./article_list.html">WEB前端</a></dd>
		    </dl>
	  	</li>
	  	<li class="layui-nav-item">
	  		<a href="./case_list.html">分享无价</a>
			<dl class="layui-nav-child"> <!-- 二级菜单 -->
		      	<dd><a href="./case_list.html">源码分享</a></dd>
		      	<dd><a href="./case_list.html">jQuery特效</a></dd>
		    </dl>
	  	</li>
	  	<li class="layui-nav-item">
	  		<a href="./diary.html">日记</a>
	  	</li>
	  	<li class="layui-nav-item">
	  		<a href="./about_laozhang.html">关于</a>
			<dl class="layui-nav-child"> <!-- 二级菜单 -->
				<dd><a href="./about_blog.html">关于博客</a></dd>
				<dd><a href="./about_author.html">关于作者</a></dd>
				<dd><a href="./message.html">留言</a></dd>
		    </dl>
	  	</li>
	</ul>
	<div class="title">老王博客</div>
	<form action="" mothod="post" class="head_search trans_3 layui-form">
	  <div class="layui-form-item trans_3">
	  	<!-- <span class="close trans_3"><i class="layui-icon">&#x1006;</i> </span> -->
	    <div class="layui-input-inline trans_3">
	      <select name="model_id trans_3">
	      	<option value="1" selected >文章模型</option>
	      	<option value="2">图集模型</option>
	      </select>
	    </div>
	    <input type="text" name="keywords" placeholder="搜索" autocomplete="off" class="search_input trans_3">
	    <button class="layui-btn" lay-submit="" style="display: none;"></button>
	  </div>
		
	</form>
</div>
</div>
<div class="header_back"></div>
<!-- 头部 结束 -->
<!-- 左边导航 开始 -->
<div class="layui-side layui-bg-black left_nav trans_2">
  <div class="layui-side-scroll">
	<ul class="layui-nav layui-nav-tree"  lay-filter="left_nav">
		<li class="layui-nav-item home"><a href="./index.html">首页</a></li>
	  	<li class="layui-nav-item">
	  		<a href="javascript:void();">学无止境</a>
			<dl class="layui-nav-child"> <!-- 二级菜单 -->
		      	<dd><a href="./article_list.html">PHP</a></dd>
		      	<dd><a href="./article_list.html">WEB前端</a></dd>
		    </dl>
	  	</li>
	  	<li class="layui-nav-item">
	  		<a href="javascript:void();">分享无价</a>
			<dl class="layui-nav-child"> <!-- 二级菜单 -->
		      	<dd><a href="./case_list.html">源码分享</a></dd>
		      	<dd><a href="./case_list.html">jQuery特效</a></dd>
		    </dl>
	  	</li>
	  	<li class="layui-nav-item">
	  		<a href="./diary.html">日记</a>
	  	</li>
	  	<li class="layui-nav-item">
	  		<a href="javascript:void();">关于</a>
			<dl class="layui-nav-child"> <!-- 二级菜单 -->
		      	<dd><a href="./about_laozhang.html">关于老张</a></dd>
		      	<dd><a href="./about_lzcms.html">关于Lz_CMS</a></dd>
		      	<dd><a href="./feedback.html">留言</a></dd>
		    </dl>
	  	</li>
	</ul>
  </div>
</div>
<div class="left_nav_mask"></div>
<div class="left_nav_btn"><i class="layui-icon">&#xe602;</i></div>
<!-- 左边导航 结束 -->
<!-- 面包屑导航 开始 -->
<div class="main breadcrumb_nav trans_3">
	<span class="layui-breadcrumb" lay-separator="—">
	  <a href="./index.html">首页</a><a><cite>留言</cite></a>
	</span>
</div>
<!-- 面包屑导航 结束 -->
<div class="main">
	<div class="page_left">	
	<form class="layui-form feedback-form">
		<div class="layui-form-item">
		    <div class="">
		    	<textarea name="content" lay-verify="layedit" autocomplete="off" placeholder="我要留言" class="llayui-textarea layui-hide" id="content"></textarea>
		    </div>
		</div>
		<div class="layui-form-item">
		    <button class="layui-btn" lay-submit="" lay-filter="feedback">提交留言</button>
		</div>
	</form>
	<ul class="feedback_list"> 
		<li>
			<div class="feedback_member">
			 	<div class="avatar"><img src="./images/laozhang_avatar.png" alt="老张头像"></div>
				<div class="name_date"><p class="name">老张</p>
			 	<p class="date">3天前</p></div>
			 	<div class="feedback_content">老张不赖呀</div>
			</div>
			<div class="feedback_member feedback_reply">
			 	<div class="avatar"><img src="./images/laozhang_avatar.png" alt="老张头像"></div>
				<div class="name_date"><p class="name">老张</p>
			 	<p class="date">3天前</p></div>
			 	<div class="feedback_content reply_content">回复：老张不赖呀</div>
			</div>
		</li>
		<li>
			<div class="feedback_member">
				<div class="avatar"><i class="layui-icon">&#xe612;</i></div>
			 	<div class="name_date"><p class="name">游客留言</p>
			 	<p class="date">3天前</p></div>
			 	<div class="feedback_content">老张不赖呀</div>
			</div>
			<div class="feedback_member feedback_reply">
			 	<div class="avatar"><img src="./images/laozhang_avatar.png" alt="老张头像"></div>
				<div class="name_date"><p class="name">老张</p>
			 	<p class="date">3天前</p></div>
			 	<div class="feedback_content reply_content">回复：老张不赖呀</div>
			</div>
		</li>
	</ul>
	</div>
	<div class="page_right">
		<div class="about_stationmaster_container">
			<h3>博主信息</h3>
			<ol class="page_right_list trans_3">
				<li>姓名：张丹峰</li>
				<li>职业：PHP程序猿、WEB前端</li>
				<li>座右铭：业精于请、学无止境、工匠精神</li>
				<li>QQ群：602099721 </li>
			</ol>
		</div>
	</div>
	<div class="clear"></div>
</div>
<script type="text/javascript">
layui.use(['form', 'layedit'], function(){
	var form = layui.form(),
  	layer = layui.layer,
  	layedit = layui.layedit,
  	$ = layui.jquery;

  //创建一个编辑器
  var content = layedit.build('content',{
  	tool: ['face', '|', 'left', 'center', 'right']
    ,height: 150
  });
  //表单验证
  form.verify({
    //编辑器数据同步
    layedit: function(value){
      layedit.sync(content);
      if(layedit.getText(content).length < 1){
        return '至少得 1 个字吧...';
      }
    }

  });
  //监听提交
  form.on('submit(feedback)', function(data){
  	var is_login = false;
  	$.post({
  		type:"POST",  
        async:false,  //设置同步请求  
        url:'',  
        dataType:'json',  
        success:function(data) {
        	if(data.code == 200){
		        is_login = true;
		    }
        }
  	});
    return false;
  });

});
</script>
<!-- 底部 开始 --> 
<ul class="layui-fixbar">
	<!-- <li class="layui-icon qr_code">&#xe63b;<img class="qr_code_pic" src="<?php echo ($settings["qr_code"]); ?>" alt="微信公众号二维码"></li> -->
	<li class="layui-icon layui-fixbar-top" id="to_top">&#xe604;</li>
</ul>
<div class="layui-footer footer">
  <div class="main index_main">
    <p><a href="http://www.phplaozhang.com">老张博客</a> © phplaozhang.com</p>
    <p>
      <a href="">网站地图</a>
    </p>
    <p class="beian">
    	<a class="gongan" target="_blank" href=""><img src="./images/gonganbeian.png" alt="豫公网安备 410xxxxxxx号">豫公网安备 410xxxxxxx号</a>
    	<a class="icp" target="_blank" href="http://www.miitbeian.gov.cn">豫ICP备xxxxxxxxx号-1</a>
    </p>
  </div>
</div>
<!-- 底部 结束 -->
<script type="text/javascript">
layui.use(['form','element'], function(){
	var layer = layui.layer,
	form = layui.form(),
	element = layui.element(),
	$ = layui.jquery;
  	
	//左边导航点击显示
	$('.left_nav_btn').click(function(){
		$('.left_nav_mask').show();
		$('.left_nav').addClass('left_nav_show');
	});
	//左边导航点击消失
	$('.left_nav_mask').click(function(){
		$('.left_nav').removeClass('left_nav_show');
		$('.left_nav_mask').hide();
	});

	//搜索框特效
	$('.header .head_search .search_input').focus(function(){
		$('.header .head_search').addClass('focus');
		$(this).attr('placeholder','输入关键词搜索');
	});
	$(document).click(function(){
		$('.header .head_search').removeClass('focus');
		$('.header .head_search .search_input').attr('placeholder','搜索');
	});
	$('.header .head_search').click(function(e){
		$(this).addClass('focus');
		e.stopPropagation(); 
	});
	/*$('.header .head_search .close').click(function(){
		$('.header .head_search').removeClass('focus');
		$('.header .head_search .search_input').attr('placeholder','搜索');
	});*/
	
	//回到顶部
	$("#to_top").click(function() {
      $("html,body").animate({scrollTop:0}, 200);
    });
    $(document).scroll(function(){
    	var	scroll_top = $(document).scrollTop();
    	if(scroll_top > 500){
    		$("#to_top").show();
    	}else{
    		$("#to_top").hide(); 
    	}
    }); 
    //底部版权始终在底部 
    /*var win_height = $(window).height();
    var body_height = $('body').height();  
    var footer_height = $('.footer').height();
    if(body_height - win_height < 0){
    	$('.footer').addClass('footer_fixed');
    } */
});
</script>
</body>
</html>