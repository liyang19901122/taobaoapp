<html>
<head>
   <meta charset="utf-8">
</head>
<body>
    输入上胸围和下胸围，即可完成自动计算出你的文胸尺码
    上胸围<input type="text" id="upper"></input>cm 
    下胸围<input type="text" id="down"></input>cm 
    <button id="calculate" onclick="calFunc()">计算</button>
    结果：<span id="result"></span>
    <p>测量文胸尺码时的三大注意事项：</p>
    <p>计算出来的这个罩杯数也不一定是你最终应该买的码数，还有三种可能：</p>
    <p>1) 脂肪偏多：罩杯的级数应该选大一级。(例如差值为C级时通常选择D)
2) 算出的差值比较模糊：你尽量选大一号的罩杯型号，以便乳房有发展的空间。(例如差值为15介于C和D通常的情况下选择D)</p>
    <p>3) 乳房的形状扁平得象一盘散沙：量出的差值越小，所选杯级却大。(例如按照科学穿着手法将散失的脂肪给它拨拢成形的时候，量出的差值为B杯，那么所选杯为C杯)</p>
<script>
    //caculate chest size:
function calFunc(){
    var range = [65,70,75,80,85,90,95,100,105,110];
    var upper = document.getElementById("upper").value;
    var down = document.getElementById("down").value;
    var result = document.getElementById("result");
    var answer= upper - down
    var downsize = 0;
    if (down>=60&&down<=67)
        downsize = 65;
    if (down>=68&&down<=72)
        downsize = 70;
    if (down>=73&&down<=77)
	downsize = 75;
    if (down>=78&&down<=82)
	downsize = 80;
    if (down>=83&&down<=87)
	downsize = 85;
    if (down>=88&&down<=92)
	downsize = 90;
    var chima = "";
    if(downsize!=0){
    	chima='您的文胸尺码为：'+ downsize;
	if (answer < 7.5)
       	    chima=chima+'AA';
    	else if (answer <10  &&  answer >=7.5)
            chima=chima+'A';
    	else if (answer <12.5  &&  answer >=10)
            chima=chima+'B';
	else if (answer >=12.5&&answer<15)
	    chima = chima + 'C';
	else if (answer >=15&&answer<17.5)
	    chima = chima + 'D'
    	else 
            chima=chima+'E+';
		  
    }else{
	chima='暂无尺码'
    }
    result.innerHTML= chima;
}
    
    
</script>

</body>
</html>
