<html>
    <head>
    	<meta charset="utf-8">
    </head>
    <body>
    	<p>腰围测量办法：将带尺经脐上0.5至1厘米处水平绕一周，肥胖者选腰部最粗处水平绕一周测腰围。</p>
    	知道腰围:<input type="text" value="" id="yao"></input>cm
    	<button onclick=calcuFunc()>换算</button>
    	<span id="results"></span>
    </body>
    <script>
    function calcuFunc(){
    	var yao = document.getElementById("yao").value;
    	var results = document.getElementById("results");
    	var yaoSize = 0;
    	if(yao&&yao!=""){
    		yaoSize = parseInt(yao);
    	}

    	var str = "";
    	var chi = yaoSize/33;
    	var realChi = chi.toFixed(1);	
    	chiInt = parseInt(realChi);
    	cun = parseInt((realChi - chiInt)*10);
    	//var tunChi = realChi + 0.7;
    	var tunChi = parseFloat(realChi)+0.7;
    	tunInt = parseInt(tunChi);
    	tunCun = parseInt((tunChi-tunInt)*10);

    	var yard = parseInt(tunChi*10);
    	var str = yard + "号------腰围"+chiInt+"尺"+cun+"寸臀围"+tunInt+"尺"+tunCun+"寸";
    	results.innerHTML = str;
   	}
    </script>
    
</html>
