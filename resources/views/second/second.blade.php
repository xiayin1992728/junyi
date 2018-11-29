@extends('layouts.app')

@section('title','为你推荐')

@section('css')
<style type="text/css">
body {
	height: 100%;
}

.container-full {
	height: 100%;
}
.large {
	width: 100vw;
	background: #EFEFEF;
	height: 100%;
}

.ad {
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	align-items: center;
	background: white;
	margin-bottom: 15px;
	padding: 10px 0;
}

.ad .ad_detail {
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	align-items: center;
	color: #CDCDCD;
}

.ad .ad_detail .x {
	background: url('/images/home/second/x.png');
	background-size: 100% 100%;
	background-repeat: no-repeat;
	width: 15px;
	height: 15px;
}

.ad_detail .imgs {
	border-radius: 50%;
	background: url('/images/home/second/miao.jpg');
	background-size: 100% 100%;
	background-repeat: no-repeat;
	width: 70px;
	height: 70px;
	margin: 0 10px;
}

.ad .ad_detail h5 {
	font-size: 1.3em;
	font-weight: 500;
}

.ad .ad_detail p {
	font-size: 8px;
}

.app a {
	color: #6695FF;
}

.miao_list {
	background: white;
	margin:15px;
	border-radius: 10px;
	box-shadow: 0 1px 1px 2px #C0C0C0;
}

.top {
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	padding: 15px 15px 0 15px;
}

.top .left {
	display: flex;
	flex-direction: row;
	width: 50%;
}

.top .left i {
	width: 50px;
	height: 50px;
}

.top .left i img {
	height: 50px;
	width: 50px;
	border-radius: 50%;
}

.top .left div {
	display: flex;
	flex-direction: column;
	margin-left: 10px;
}

.top .left div p {
	color: #AEAEAE;
}

.top .right {
	display: flex;
	flex-direction: column;
	align-items: center;
}

.top .right button {
	background: #F49417;
	color: white;
}

.top .right p {
	margin:8px 0 0 0;
	color: #AEAEAE;
}

.buttom {
	padding: 0 0 0 15px;
}

.buttom p {
	color: #AEAEAE;
}

a:focus, a:hover {
    color: #23527c;
}

</style>
@endsection

@section('content')
<div class="large">
	
<!-- 	<div class="ad">
			<div class="ad_detail">
				<div class="x">

				</div>
					<a href="http://t.cn/ELWKSgM">
					<img class="imgs" src="http://www.vipxia.cn/uploads/products/jLAcBuH14fc4TAetj4PV.jpg">
					</a>
					<a href="http://t.cn/ELWKSgM">
					<div>
						<h5>有钱借</h5>
						<p>线上自动审核，秒过</p>
					</div>
					</a>
			</div>
			<div class="app">
				<a href="http://t.cn/ELWKSgM">特别推荐</a>
			</div>
	</div> -->

	@foreach ($products as $product)
		<a href="{{ $product->link }}">
			<div class="miao_list">
				<div class="top">
					<div class="left">
						<i><img src="{{ env('APP_URL').'/uploads/products/'.$product->logo }}"></i>
						<div>
							<p>{{ $product->name }}</p>
							<span><strong>{{ $product->maxs }}</strong>元</span>
						</div>
					</div>
					<div class="right">
						<button class="btn">立即借款</button>
						<p>借款期限：{{ $product->longtimes }} 天</p>
					</div>
				</div>
				<div class="buttom">
					<p>{{ $product->tag }}</p>
				</div>
			</div>
		</a>	
	@endforeach
</div>
	@include('layouts._menu')
@endsection

@section('script')
<script type="text/javascript">
	$('.x').on('click',function () {
		$('.ad').hide();
	})
</script>
@endsection