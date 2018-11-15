@extends('layouts.app')

@section('title','贷款')

@section('css')
<style type="text/css">
.container-full {

}
.zimu {
	color: #808080;
	background: #E6E6E6;
	height: 2em;
	line-height: 2em;
	letter-spacing: 0.3em;
}

.sum {
	height:30vh;
	background: url('/images/home/loan/background.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.sum h4 {
	font-weight: bold;
	color: #646464;
	margin-left:2em;
	letter-spacing: 0.2em;
	margin-top: 1.5em;
}

.xuanjine {
	display: flex;
	flex-direction: row;
	align-items: center;
}

.sum .bar {
	height:10px;
	width: 75%;
	background: #848484;
	margin-left:2em;
	padding: 0;
	border-radius: 5px;
	display: flex;
	flex-direction: row;
	box-shadow: 0 5px 5px #888888;
	position: relative;
}

.bar .left {
	height:10px;
	width: 47%;
	border-radius: 5px;
	background: #FAB051;
}

.bar .icon {
	background: url('/images/home/loan/yuan.webp');
	background-repeat: no-repeat; 
	background-size: 100% 100%;
	height:30px;
	width:30px;
	position: absolute;
	left:44%;
	top:-10px;
	cursor: pointer;
}

.bar .icon .tishikuang {
	width:15vw;
	height:7vh;
	line-height: 6vh;
	background: url('/images/home/loan/duobian.webp');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	position: absolute;
	top:-40px;
	left: -6%;
	color: white;
	text-align: center;
}

.shuru {
	width: 30%;
	margin-left: 20px;
}

.shuru input {
	border-radius: 5px;
	background: #F49417;
	color:white;
	border:0px;
	height:30px;
	outline: none;
}

.biaoshi {
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	width:70%;
	margin-left:2em;
	margin-top:0.5em;
	color:#808080;
}

.days {
	margin-top:20px;
}

.days p {
	font-size: 1.2em;
	font-weight: 600;
	letter-spacing: 0.1em;
	color:#808080;
}

.days .zhuanshi {
	display: flex;
	flex-direction: column;
	align-items: center;
}

.days .yuan {
	width: 40vh;
	height: 40vh;
	border-radius: 50%;
	border:1px solid #D0D0D0;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	position: relative;
}

.yuan .anniu {
	background: url('/images/home/loan/anniu.png');
	background-repeat:no-repeat;
	background-size: 100% 100%;
	position: absolute;
	width: 30px;
	height: 30px;
	top:-13px;
}

.yuan .yuantu {
	background: url('/images/home/loan/yuan.png');
	background-repeat:no-repeat;
	background-size: 100% 100%;
	height: 90%;
	width: 90%;
	margin:0;
	border-radius: 50%;
	display: flex;
	flex-direction: column;
	align-items: center;
}

.yuantu .day {
	width:20%;
	height:20%;
	margin-top: 4vh;
	font-size: 1.5em;
	border-radius: 50%;
	color: #808080;
}

.yuantu .num {
	font-size: 5em;
	letter-spacing: 0.2em;
	color: #808080;
}

.btnj {
	margin-top: 3vh;
	width: 45vh;
	height: 6vh;
}

.btnj input {
	width: 100%;
	height:100%;
	background: #FFA93A;
	outline:none;
	border: 0;
	border-radius: 10px;
	color: white;
	letter-spacing: 0.2em;
	font-size: 1.2em;
	box-shadow: 0px 5px 5px #888888;
}
</style>
@endsection

@section('content')
<p class="text-center zimu">1分钟放款</p>

<div class="sum col-md-12">
	<h4>借款金额</h4>

	<div class="xuanjine">
		<div class="bar">
			<div class="left"></div>
			<div class="icon">
				<div class="tishikuang">
					50000	
				</div>
			</div>
		</div>

		<div class="shuru">
			<input type="button" value="输入金额">
		</div>
	</div>

	<div class="biaoshi">
		<div>500</div>
		<div>5万</div>
		<div>最高10万</div>
	</div>
</div>

<div class="days col-md-12">
	<p class="text-center">借款期限</p>	
	<div class="zhuanshi">
		<div class="yuan">
			<div class="anniu"></div>
			<div class="yuantu">
				<div class="day">Day</div>
				<div class="num">14</div>
			</div>
		</div>

		<div class="btnj">
			<input type="submit" name="" value="马上借">
		</div>
	</div>
</div>

<div class="">

</div>
@endsection

@section('script')
<script type="text/javascript">
	window.onload = function() {

        var lineDiv = document.getElementsByClassName('bar')[0]; //长线条
        var minDiv = document.getElementsByClassName('icon')[0]; //小方块
        var vals = document.getElementsByClassName("tishikuang")[0];
        var left = document.getElementsByClassName('left')[0];
        var ifBool = false; //判断鼠标是否按下
        var yuanDiv = document.getElementsByClassName('yuan')[0];
        var anniuDiv = document.getElementsByClassName('anniu')[0];
        

        //事件
        var start = function(e) {
        	e.stopPropagation();
        	ifBool = true;
        	console.log("鼠标按下")
        }
        var move = function(e) {
        	console.log("鼠标拖动")
        	if(ifBool) {
            if(!e.touches) {  //兼容移动端
            	var x = e.clientX;
            } else {   //兼容PC端
            	var x = e.touches[0].pageX;
            }
            //var x = e.touches[0].pageX || e.clientX; //鼠标横坐标var x
            var lineDiv_left = getPosition(lineDiv).left; //长线条的横坐标
            var minDiv_left = x - lineDiv_left; //小方块相对于父元素（长线条）的left值 
            if(minDiv_left >= lineDiv.offsetWidth - 15) {
            	minDiv_left = lineDiv.offsetWidth - 15;
            }
            if(minDiv_left < 0) {
            	minDiv_left = 0;
            }
            //设置拖动后小方块的left值
            minDiv.style.left = minDiv_left + "px";
            console.log(minDiv_left);
            //msg.innerText = parseInt((minDiv_left / (lineDiv.offsetWidth - 15)) * 100);
            vals.innerText = parseInt((minDiv_left / (lineDiv.offsetWidth - 15)) * 100000);
            left.style.width = parseInt((minDiv_left / (lineDiv.offsetWidth - 15)) * 100) + '%';
        }


    }

    var end = function(e) {
    	console.log("鼠标弹起")
    	ifBool = false;
    }
          //鼠标按下方块
          minDiv.addEventListener("touchstart", start);
          minDiv.addEventListener("mousedown", start);
        //拖动
        window.addEventListener("touchmove", move);
        window.addEventListener("mousemove", move);
        //鼠标松开
        window.addEventListener("touchend", end);
        window.addEventListener("mouseup", end);
        //获取元素的绝对位置
        function getPosition(node) {
          var left = node.offsetLeft; //获取元素相对于其父元素的left值var left
          var top = node.offsetTop;
          current = node.offsetParent; // 取得元素的offsetParent
          　 // 一直循环直到根元素
          　　
          while(current != null) {　　
          	left += current.offsetLeft;　　
          	top += current.offsetTop;　　
          	current = current.offsetParent;　　
          }
          return {
          	"left": left,
          	"top": top
          };
      }
  }
</script>
@endsection