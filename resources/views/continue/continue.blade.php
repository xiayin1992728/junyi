@extends('layouts.app')

@section('title','继续借')

@section('css')
<style type="text/css">
.large {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	width: 100vw;
	height: 100vh;
}

.top p {
	color: #929292;
}

.top strong {
	font-size: 1.3em;
	color: black;
}

.middle {
	width: 50vw;
	height: 24vh;
	background: url('/images/home/continue/search.png');
	background-size: 100% 100%;
	background-repeat: no-repeat;
	margin-top: 5vh;
	margin-bottom: 8vh;
}

.footer input {
	width: 80vw;
	height: 6vh;
	border: 0;
	border-radius: 5vw;
	background: #F49417;
	font-size: 1.2em;	
	color: white;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

.footer p {
	margin-top: 2vh;
	color: #929292;
}
</style>
@endsection

@section('content')
<div class="large">
	<div class="top">
		<p>您当前的信用分值为 718 分</p>
		<p>恭喜你审核通过：额度以用完</p>
		<p>根据资质为你匹配 <strong>10</strong> 个资金方</p>
		<p>成功率高达 <strong>94%</strong> </p>
	</div>
	<div class="middle">
		
	</div>

	<div class="footer">
		<input type="submit" name="" value="继续借">
		<p class="text-center">借款金额和期限以当天实际借款为准</p>
	</div>

</div>
@endsection

@section('script')

@endsection