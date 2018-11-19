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
	
</div>
</div>
@endsection

@section('script')
	<script type="text/javascript">
		window.onload = function () {
			setTimeout(function () {
				window.location.href = "{{ route('continue') }}"
			},5000);
		}
		let num = 0;
		
		let jisuan = setInterval(function() {

		let texts = '<p>正在计算你的第 '+(num = num+1)+' 个身份特征</p>'
			$('.wenzi').append(texts);
			console.log();
			if ($('.wenzi p').length > 3) {
				$('.wenzi p').eq(0).remove();
			}
			if (num > 100) {
				clearInterval(jisuan);
			}	
		},50);		
	</script>
@endsection
