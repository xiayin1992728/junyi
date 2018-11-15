@extends('layouts.app')

@section('title','特征')

@section('css')
	<style type="text/css">
		.large {
			width: 100vw;
			height: 100vh;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

		.large h4 {
			margin-top: 8vh;
			margin-bottom: 2vh;
			color: #747474;
			letter-spacing: 0.1em;
		}

		.tugif {
			height: 20vh;
			width:45vw;
			background: url('/images/home/feature/tugif.png');
			background-repeat: no-repeat;
			background-size: 100% 100%;
		}
	.wenzi p {
		color :#F5A237;
		font-size: 1.2em;
	}

	</style>
@endsection

@section('content')
<div class="large">
	<div class="tugif">
	
</div>
<h4>智能AI正在</h4>
<div class="wenzi">
	<p>正在计算你的第 1 身份特征</p>
	<p>正在计算你的第 2 身份特征</p>
	<p>正在计算你的第 3 身份特征</p>
</div>
</div>
@endsection

@section('script')

@endsection
