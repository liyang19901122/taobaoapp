<html>
	<head>
		<meta charset="utf-8">
	</head>
	<style>
	.ku-main{
		border:2px solid #ddd;
		width:600px;
		height:280px;
		margin-left:0px;
	}
	.select-sex {
	    font-size: 16px;
	    border: none;
	    border-radius: 10px;
	    color: #000;
	    padding: 12px;
	    width: 50px;

	    -webkit-appearance: none;

	    
	    background-color: #3DB;
	    background-transparency: 0.5;
	    background-position: right 25px top 22px;
	    background-size: 18px 18px;
	}
	.select-size {
	    font-size: 16px;
	    border: none;
	    border-radius: 10px;
	    color: black;
	    padding: 12px;
	    width: 50px;
	    -webkit-appearance: none;

	    
	    background-color: lightblue;
	    background-transparency: 0.5;
	    background-position: right 25px top 22px;
	    background-size: 18px 18px;
	}
	
	#zozo {
	    margin: 10px;
	}
	.select-label{
		font-size:20px;
		color:#787777;
		margin-right:15px;
		margin-left:15px;
	}

	.ku-img{
		background:url(../static/img/kusize.png) no-repeat;
		width:256px;
		height:268px;
		position:absolute;
		margin-left:320px;
		margin-top:-60px;
	}
	.ku-size-area{
		margin-left:-15px;
		float:left;
	}
	.ku-size-area ul{
		list-style:none;
		width:260px;
		float:left;
	}
	.ku-size-area li{
		margin-top:8px;
		width:260px;
		height:20px;
		font-size:15px;
		color:#B21;
		border-bottom:1px solid #eee;
	}
	.ku-size-label-before{
		margin-right:5px;
	}
	.ku-size-label{
		position:absolute;
		left:160px;
	}
	.ku-size-label-data{
		position:absolute;
		left:200px;
	}
	.select-women{
		display:inline;
	}
	.select-men{
		display:none;
	}
	</style>
	<body>
	<div class="ku-main">
		<div id="zozo">
			<span class="select-label">性别:</span>
		    <select class="select-sex" id="select-sex" onchange=changeSex()>
		        <option value="1">女</option>
		        <option value="2">男</option>
		    </select>
		    <span class="select-label">尺码:</span>
		    <select class="select-size select-women" id="select-size-women" onchange=changeFun()>
		    	<option value="25">25</option>
		        <option value="26">26</option>
		        <option value="27">27</option>
		        <option value="28">28</option>
		        <option value="29">29</option>
		        <option value="30">30</option>
		        <option value="31">31</option>
		        <option value="32">32</option>
		    </select>
		    <select class="select-size select-men" id="select-size-men" onchange=changeFun()>
		        <option value="28">28</option>
		        <option value="29">29</option>
		        <option value="30">30</option>
		        <option value="31">31</option>
		        <option value="32">32</option>
		        <option value="33">33</option>
		        <option value="34">34</option>
		        <option value="35">35</option>
		        <option value="36">36</option>
		        <option value="37">37</option>
		        <option value="38">38</option>
		    </select>
		</div>
		<div class="ku-size-area">
			 <ul>
			 	<li>
			 		<span class="ku-size-label-before">身高 :</span><span id="height">155cm/62A</span><span class="ku-size-label">腰围 :</span><span class="ku-size-label-data" id="yaowei">67.5cm 1尺9</span>
			 	</li>
			 	<li>
			 		<span class="ku-size-label-before">裤长 :</span><span id="kuchang">97cm</span><span class="ku-size-label">臀围 :</span><span class="ku-size-label-data" id="tunwei">82.5cm</span>
			 	</li>
			 	<li>
			 		<span class="ku-size-label-before">横档 :</span><span id="hengdang">48.1cm</span><span class="ku-size-label">前浪 :</span><span class="ku-size-label-data" id="qianlang">21.1cm</span>
			 	</li>
			 	<li>
			 		<span class="ku-size-label-before">裤口 :</span><span id="kukou">27.6cm</span>
			 	</li>
			 </ul>
		</div>
		<div class="ku-img">
		</div>
	</div>
	</body>
	<script>
	function changeSex(){
		var sex = document.getElementById("select-sex").value;
		var selectsizewomen = document.getElementById("select-size-women");
		var selectsizemen = document.getElementById("select-size-men");
		var height = document.getElementById("height");
		var yaowei = document.getElementById("yaowei");
		var kuchang = document.getElementById("kuchang");
		var tunwei = document.getElementById("tunwei");
		var hengdang = document.getElementById("hengdang");
		var qianlang = document.getElementById("qianlang");
		var kukou = document.getElementById("kukou");

		if(parseInt(sex)===1){
			selectsizewomen.style.display = "inline";
			selectsizemen.style.display = "none";
			height.innerHTML = "155cm/62A";
			yaowei.innerHTML = "67.5cm 1尺9";
			tunwei.innerHTML = "82.5cm";
			kuchang.innerHTML = "97cm";
			qianlang.innerHTML = "21.1cm";
			hengdang.innerHTML = "48.1cm";
			kukou.innerHTML = "27.6cm";
		}else if(parseInt(sex)===2){
			selectsizewomen.style.display="none";
			selectsizemen.style.display = "inline";
			
			height.innerHTML = "165cm/70A";
			yaowei.innerHTML = "72.5cm 2尺15";
			tunwei.innerHTML = "96cm";
			kuchang.innerHTML = "103cm";
			qianlang.innerHTML = "24.5cm";
			hengdang.innerHTML = "58cm";
			kukou.innerHTML = "42cm";
		}
	}
	function changeFun(){
		var sex = document.getElementById("select-sex").value;

		var size = 0;
		
		
		var womendata = { data:[
			{
				size : 25,
				height:"155cm/62A",
				yaowei:"67.5cm 1尺9",
				tunwei:"82.5cm",
				kuchang : "97cm",
				qianlang : "21.1cm",
				hengdang : "48.1cm",
				kukou : "27.6cm"
			},{
				size : 26,
				height:"160cm/64A",
				yaowei:"70cm 2尺",
				tunwei:"85cm",
				kuchang : "98cm",
				qianlang : "21.4cm",
				hengdang : "49.4cm",
				kukou : "28.4cm"
			},{
				size : 27,
				height:"160cm/66A",
				yaowei:"72.5cm 2尺05",
				tunwei:"87.5cm",
				kuchang : "99cm",
				qianlang : "21.7cm",
				hengdang : "50.7cm",
				kukou : "29.2cm"
			},{
				size : 28,
				height:"165cm/70A",
				yaowei:"75cm 2尺15",
				tunwei:"90cm",
				kuchang : "100cm",
				qianlang : "22cm",
				hengdang : "52cm",
				kukou : "30cm"
			},{
				size : 29,
				height:"165cm/72A",
				yaowei:"77.5cm 2尺2寸",
				tunwei:"92.5cm",
				kuchang : "100cm",
				qianlang : "22.3cm",
				hengdang : "53.3cm",
				kukou : "30.8cm"
			},{
				size : 30,
				height:"170cm/74A",
				yaowei:"80cm 2尺3",
				tunwei:"95cm",
				kuchang : "102cm",
				qianlang : "22.6cm",
				hengdang : "54.6cm",
				kukou : "31.6cm"
			},{
				size : 31,
				height:"170cm/76A",
				yaowei:"82.5cm 2尺4",
				tunwei:"97.5cm",
				kuchang : "103cm",
				qianlang : "22.9cm",
				hengdang : "55.9cm",
				kukou : "32.4cm"
			},{
				size : 32,
				height:"175cm/80A",
				yaowei:"85cm 2尺5",
				tunwei:"100cm",
				kuchang : "104cm",
				qianlang : "23.2cm",
				hengdang : "57.2cm",
				kukou : "33.2cm"
			}]
		};

		var mendata = { data:[
			{
				size : 28,
				height:"165cm/70A",
				yaowei:"72.5cm 2尺15",
				tunwei:"96cm",
				kuchang : "103cm",
				qianlang : "24.5cm",
				hengdang : "58cm",
				kukou : "42cm"
			},{
				size : 29,
				height:"165cm/72A",
				yaowei:"75cm 2尺2",
				tunwei:"98cm",
				kuchang : "104cm",
				qianlang : "25cm",
				hengdang : "59.2cm",
				kukou : "42.6cm"
			},{
				size : 30,
				height:"170cm/74A",
				yaowei:"100cm",
				tunwei:"95cm 2尺3",
				kuchang : "105cm",
				qianlang : "25cm",
				hengdang : "60.4cm",
				kukou : "43.2cm"
			},{
				size : 31,
				height:"170cm/76A",
				yaowei:"80cm 2尺35",
				tunwei:"102cm",
				kuchang : "105cm",
				qianlang : "25.5cm",
				hengdang : "61.6cm",
				kukou : "43.8cm"
			},{
				size : 32,
				height:"175cm/80A",
				yaowei:"82.5cm 2尺45",
				tunwei:"104cm",
				kuchang : "107cm",
				qianlang : "25.5cm",
				hengdang : "62.8cm",
				kukou : "44.4cm"
			},{
				size : 33,
				height:"175cm/82A",
				yaowei:"85cm 2尺5",
				tunwei:"106cm",
				kuchang : "107cm",
				qianlang : "26cm",
				hengdang : "64cm",
				kukou : "45cm"
			},{
				size : 34,
				height:"175cm/84A",
				yaowei:"87.5cm 2尺6",
				tunwei:"108cm",
				kuchang : "107cm",
				qianlang : "26cm",
				hengdang : "65.2cm",
				kukou : "45.6cm"
			},{
				size : 35,
				height:"180cm/86A",
				yaowei:"90cm 2尺65",
				tunwei:"110cm",
				kuchang : "109cm",
				qianlang : "26.5cm",
				hengdang : "66.4cm",
				kukou : "46.2cm"
			},{
				size : 36,
				height:"180cm/90A",
				yaowei:"92.5cm 2尺75",
				tunwei:"112cm",
				kuchang : "109cm",
				qianlang : "26.5cm",
				hengdang : "67.6cm",
				kukou : "46.8cm"
			},{
				size : 37,
				height:"180cm/92B",
				yaowei:"95cm 2尺8",
				tunwei:"114cm",
				kuchang : "109cm",
				qianlang : "27cm",
				hengdang : "68.8cm",
				kukou : "47.4cm"
			},{
				size : 38,
				height:"185cm/94B",
				yaowei:"97.5cm 2尺9",
				tunwei:"116cm",
				kuchang : "110cm",
				qianlang : "27cm",
				hengdang : "70cm",
				kukou : "48cm"
			}]
		};
		var height = document.getElementById("height");
		var yaowei = document.getElementById("yaowei");
		var kuchang = document.getElementById("kuchang");
		var tunwei = document.getElementById("tunwei");
		var hengdang = document.getElementById("hengdang");
		var qianlang = document.getElementById("qianlang");
		var kukou = document.getElementById("kukou");
		var size = 0;
		if(parseInt(sex)===1){
			size = document.getElementById("select-size-women").value;
			for(var i=0;i<womendata.data.length;i++){
				var currData = womendata.data[i];
				if(parseInt(size)===currData.size){
					height.innerHTML = currData.height;
					yaowei.innerHTML = currData.yaowei;
					tunwei.innerHTML = currData.tunwei;
					kuchang.innerHTML = currData.kuchang;
					qianlang.innerHTML = currData.qianlang;
					hengdang.innerHTML = currData.hengdang;
					kukou.innerHTML = currData.kukou;
				}
			}
			
		}else if(parseInt(sex)===2){
			size = document.getElementById("select-size-men").value;
			for(var i=0;i<mendata.data.length;i++){
				var currData = mendata.data[i];
				if(parseInt(size)===currData.size){
					height.innerHTML = currData.height;
					yaowei.innerHTML = currData.yaowei;
					tunwei.innerHTML = currData.tunwei;
					kuchang.innerHTML = currData.kuchang;
					qianlang.innerHTML = currData.qianlang;
					hengdang.innerHTML = currData.hengdang;
					kukou.innerHTML = currData.kukou;
				}
			}
		}
	}
	</script>
</html>