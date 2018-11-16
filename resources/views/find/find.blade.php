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
	background: url('/images/home/find/background.webp') no-repeat;
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

</style>
@endsection

@section('content')
<div class="large">
	<div class="findbackground">
		
	</div>

	<div class="change">
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
	</div>
</div>
@endsection

@section('script')

@endsection