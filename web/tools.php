<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../static/css/main.css"/>
	</head>
	<style>
		.tools-title{
			width:100%;
			height:40px;
			border-bottom:1px solid #ddd;
			float:left;
			margin-top:20px;
		}
		.tools-title span{
			padding:10px;
			font-size:18px;
			font-weight:bold;
			color:#787777;
			float:left;
		}
	</style>
	<body class="home">

		<?php include "../widget/header.php"
		?>
		<div class="page">
			<div class="tools-title">
				<span>测文胸尺寸</span>
			</div>
				<iframe class="app-cls" style="width:680px;height:480px;border:none;"src="/size/chest.php">
				</iframe>
			<div class="tools-title">
				<span>裤子尺码对照表</span>
			</div>
				<iframe class="app-cls" style="width:640px;height:300px;border:none;"src="/size/ku.php">
				</iframe>		
		</div>
	</body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45122547-1', 'maipiaodaquan.com');
  ga('send', 'pageview');

</script>
</html>