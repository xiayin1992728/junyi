@extends('layouts.app')

@section('title','发现')

@section('css')
<style type="text/css">

.large {
	height: 100vh;
	width: 100vw;
	background: #F4F4F4;
}
.findbackground {
	background: url('/images/home/find/find.png') no-repeat;
	background-size: 100% 100%;
	width:100vw;
	height: 35vh;
}

.change {
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	margin-top:10px;
	padding: 0 10px;
}

.change .img_text {
	display: flex;
	flex-direction: column;
	align-items: center;
	background: white;
	padding: 2px 20px;
	border-radius: 5px;
}

.img_text div {
	width:50px;
	height: 50px;
}

.img_text span {

}

.bigmoney div {
	background: url('/images/home/find/big.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.subport div {
	background: url('/images/home/find/sub.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.newport div {
	background: url('/images/home/find/new.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.contact {
	padding: 15px;
}

.contact h3 {
	margin:20px 0;
}

.tuijian {
	color: white;
	background: #F6B012;
	text-align: center;
}

.kefu {
	color: white;
	background: #F6B012;
	text-align: center;
}

.fenge {
	border:1px solid gray;
}

.notice {
	display: flex;
	flex-direction: row;
}

.notice-title {
	width:66px;
	padding: 5px;
	color: yellow;
    background: green;
    display: flex;
    align-items: center;
}

.notice-content {
	color: red;
	background: darkgrey;
	padding: 5px;
}

</style>
@endsection

@section('content')
<div class="large">
	<div class="findbackground">
		
	</div>

	<!-- <div class="change">
		<div class="img_text bigmoney">
			<div></div>
			<span>大额贷款</span>
		</div>
		<div class="img_text subport">
			<div></div>
			<span>提交口子</span>
		</div>
		<div class="img_text newport">
			<div></div>
			<span>新口子</span>
		</div>
	</div> -->
	<div class="contact">
		<h3 class="text-center">联系我们</h3>
		
		<p class="tuijian">{{ setting('tuijian','','text') }}</p>

		<p class="kefu">{{ setting('kefu','','text') }}</p>
		<hr/ class="fenge">
		
		<div class="notice">
			<div class="notice-title">
				注意：
			</div>
			<div class="notice-content">
				@foreach (noticeContent() as $k => $v)
				<p> {{ $v }}</p>
				@endforeach
			</div>	
		</div>
	</div>
</div>
@include('layouts._menu')
@endsection

@section('script')

@endsection