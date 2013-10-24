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
				<iframe class="app-cls" style="width:680px;height:480px;border:none;"src="/taobaoapp/size/chest.php">
				</iframe>
			<div class="tools-title">
				<span>裤子尺码对照表</span>
			</div>
				<iframe class="app-cls" style="width:640px;height:300px;border:none;"src="/taobaoapp/size/ku.php">
				</iframe>		
		</div>
	</body>
</html>