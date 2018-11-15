@extends('layouts.app')

@section('title','贷款')

@section('css')
<style type="text/css">
.container-full {
	margin:0 -15px;
}
.zimu {
	color: #808080;
	background: #E6E6E6;
	height: 2em;
	line-height: 2em;
	letter-spacing: 0.3em;
}

.sum {
	margin:0 -15px;
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
}

.bar .left {
	height:10px;
	width: 49%;
	border-radius: 5px;
	background: #FAB051;
}

.bar .icon {
	background: url('/images/home/loan/yuan.webp');
	background-repeat: no-repeat; 
	background-size: 100% 100%;
	height:30px;
	width:30px;
	position: relative;
	left:-2%;
	top:-10px;
}

.icon .tishikuang {
	width:15vw;
	height:7vh;
	background: url('/images/home/loan/duobian.webp');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	position: relative;
	top:-41px;
	left: 2px;
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

</script>
@endsection