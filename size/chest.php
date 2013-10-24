<html>
<head>
   <meta charset="utf-8">
</head>
<style>
    .chest-main{
      float:left;
      background: #fff;
      margin: 5px auto;
      width:641px;
      height:450px;
      position: relative;
      font-size: 18px;
      color:#787777;
      border:2px solid #ddd; 
    }

    .chest-input {
        color:#3c3c3c;
        font-family: Helvetica, Arial, sans-serif;
        font-weight:500;
        font-size: 18px;
        border-radius: 0;
        line-height: 22px;
        background-color: #eef;
        padding: 13px 13px 13px 54px;
        margin-bottom: 10px;
        width:200px;
        margin-right:5px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
        border: 3px solid rgba(0,0,0,0);
    }

    .chest-pic{
        float:left;
        background:url(../static/img/size.png) no-repeat;
        height:237px;
        width:627px;
    }
    .chest-cal{
        font-size:18px;
        color:#fff;
        width:83px;
        height:50px;
        font-weight:bold;
        background-color:#d31;
        border:none;
        cursor:pointer;
    }
    .chest-label{
        margin-left:10px;
        margin-right:10px;
    }
    .chest-label-result{
        margin-left:15px;
        margin-right:10px;
        color:#e2d;
    }
</style>
<body>
<div class="chest-main">
    <p class="chest-label">输入上胸围和下胸围，即可自动计算出你的文胸尺码</p>
    <span class="chest-label">上胸围</span><input class="chest-input" type="text" id="upper"></input>cm <br>
    <span class="chest-label">下胸围</span><input class="chest-input" type="text" id="down"></input>cm <button  class="chest-cal" id="calculate" onclick="calFunc()">计算</button><br>
    <span class="chest-label-result" id="result"></span>
    <div class="chest-pic">
    </div>
    <!--p>测量文胸尺码时的三大注意事项：</p>
    <p>计算出来的这个罩杯数也不一定是你最终应该买的码数，还有三种可能：</p>
    <p>1) 脂肪偏多：罩杯的级数应该选大一级。(例如差值为C级时通常选择D)
2) 算出的差值比较模糊：你尽量选大一号的罩杯型号，以便乳房有发展的空间。(例如差值为15介于C和D通常的情况下选择D)</p>
    <p>3) 乳房的形状扁平得象一盘散沙：量出的差值越小，所选杯级却大。(例如按照科学穿着手法将散失的脂肪给它拨拢成形的时候，量出的差值为B杯，那么所选杯为C杯)</p-->
</div>
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
    	chimaNational = '结果：您的文胸国际尺码为：'+ downsize;
        chimaEnglish = "   英国尺码:" + parseInt(18+downsize/5);
    	if (answer < 7.5){
           	chimaNational = chimaNational+'AA';
            chimaEnglish = chimaEnglish+'AA';
        }
        else if (answer <10  &&  answer >=7.5){
            chimaNational = chimaNational+'A';
            chimaEnglish = chimaEnglish+'A';
        }
        else if (answer <12.5  &&  answer >=10){
            chimaNational = chimaNational+'B';
            chimaEnglish = chimaEnglish+'B';
        }
    	else if (answer >=12.5&&answer<15){
    	    chimaNational = chimaNational + 'C';
            chimaEnglish = chimaEnglish + 'C';
        }
    	else if (answer >=15&&answer<17.5){
    	    chimaNational = chimaNational + 'D';
            chimaEnglish = chimaEnglish + 'D';
        }
        else{ 
            chimaNational = chimaNational+'E+';
    		chimaEnglish = chimaEnglish+'E+';
        }
    }else{
	    chimaNational = '结果：暂无尺码';
        chimaEnglish = '';
    }
    result.innerHTML= chimaNational+chimaEnglish;
}
    
    
</script>

</body>
</html>
