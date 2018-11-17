@extends('layouts.app')

@section('titel','我的')

@section('css')
<style type="text/css">
.large {
	width: 100vw;
	position: relative;
	height: 100vh;
	background: #F0F0F0;
}
.top {
	width: 100vw;
	background: url('/images/home/user/background.png');
	background-repeat:no-repeat;
	background-size: 100% 100%;
	height: 20vh;
}

.top h4 {
	margin-top: 0;
	padding: 35px 0 0 5vw;
	color: white;
}

.info {
	width: 90vw;
	height: 20vh;
	background: white;
	position: absolute;
	top: 11vh;
	left: 5vw;
	border-radius: 10px;
	padding: 5vw;
}

.userinfo {
	display: flex;
	flex-direction: row;
	align-items: center;
}

.userhead {
	width:20vw;
	height: 20vw;
	border-radius: 50%;
	background: url('images/home/user/head.jpg');
	background-size: 100% 100%;
	background-repeat: no-repeat;
}

.userother {
	margin-left: 20px;
}

.userother strong {
	font-size: 1.2em;
}

.userother span {
	display: inline-block;
	width: 70px;
	height: 25px;
	background-color: #539BFC;
	border-radius: 20px;
	text-indent: 25px;
	line-height: 25px;
	color: white;
	font-size: 10px;
	background-image:url('/images/home/user/bao.png');
	background-repeat: no-repeat;
	background-position:7px 3px;
}

.userother div {
	color: #B5B5B5;
	margin-top: 5px;
	font-size: 1.2em;
}

.buttom {
	margin-top: 15vh;
    padding: 5vw;
}

.tiao_list {
	height: 60px;
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center;
	padding-right: 25px;
	color: #B1B1B1;
	border-bottom: 1px solid #D5D5D5;
}

.tiao_list span {
	display: inline-block;
	width:10px;
	height: 15px;
	background-image:url('/images/home/user/point.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.tiao_name {
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center;
}

.tiao_name div {
	width: 20px;
	height: 20px;
	margin-right: 15px;
}

.tiao strong {

}

.look div {
	background-image:url('/images/home/user/look.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.about div {
	background-image:url('/images/home/user/about.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
</style>
@endsection

@section('content')
<div class="large">
	<div class="top">
		<h4>我的</h4>
	</div>
	<div class="info">
		<div class="userinfo">
			<div class="userhead"></div>
			<div class="userother">
				<strong>用户1231</strong>
				<span>保障中</span>
				<div>手机：<i>151******904</i></div>
			</div>
		</div>
	</div>
	<div class="buttom">
		<div class="tiao_list">
			<div class="tiao_name look">
				<div></div>
				<strong>浏览记录</strong>
			</div>
			<span></span>
		</div>

		<div class="tiao_list">
			<div class="tiao_name about">
				<div></div>
				<strong>关于我们</strong>
			</div>
			<span></span>
		</div>
	</div>
</div>
@endsection

@section('script')

@endsection