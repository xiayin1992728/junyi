@extends('layouts.app')

@section('title','验证')

@section('css')
<style type="text/css">
.wenzi {
	display: flex;
	flex-direction: column;
	margin:0 5vh;
	height: 125vw;
}

.fangshi {
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	margin-top: 5vh;
}

.fangshi p {
	letter-spacing: 0.2em;
	color: #CFCFCF;
}

.info {

}

.info .wai {
	margin-top:10px;
	display: flex;
	flex-direction: row;
	position: relative;
}


.wai .icon {
	width:9vw;
	height:6vw;
}

.name .icon {
	background: url('/images/home/verify/name.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.idCard .icon {
	background: url('/images/home/verify/idcard.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.zhimafen .icon {
	background: url('/images/home/verify/zhima.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.qq .icon {
	background: url('/images/home/verify/qq.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.weixin .icon {
	background: url('/images/home/verify/weixin.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.money .icon {
	background: url('/images/home/verify/money.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.change {
	display: flex;
	flex-direction: column;
	margin-top:2vh;;
}

.change .common {
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center;
}

.common p {
	width:32vw;
	letter-spacing: 0.1em;
	margin-top: 1vh;
	color: #CFCFCF;
}

.common span {
	margin-right: 10px;
	color: #CFCFCF;
}

.btns {
	display: flex;
	flex-direction: row;
	justify-content: center;
}

.btns input {
	width:65vw;
	border: 0;
	border-radius: 20px;
	outline: none;
	background: #F6A43A;
	color: white;
	height: 6vh;
}

.inp::-webkit-input-placeholder {
	color:#CFCFCF;
}

.inperrors::-webkit-input-placeholder {
	color:red;
}


.wai input {
	border: 0;
	outline: none;
	width:70vw;
	height: 6vw;
	padding-left: 15px;
	letter-spacing: 0.1em;
}


.error {
	width:9vw;
	height:6vw;
	background: url('/images/error.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.yes {
	width:9vw;
	height:6vw;
	background: url('/images/yes.png');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

.bgk {
	background: url('/images/home/verify/background.png');
	background-size: 100% 100%;
	background-repeat: no-repeat;
	height: 16vh;
}
</style>
@endsection

@section('content')
	<form action="{{ route('verify') }}" method="POST">
<div class="wenzi">
	<!-- 验证方式 -->
	<div class="fangshi">
		<p>①手机验证</p>
		<p>②身份验证</p>
		<p>③智能验证</p>
	</div>

		{{ csrf_field() }}
		<!-- 信息 -->
		<div class="info">
			<div class="wai name">
				<div class="icon"></div>
				@if ($errors->has('name'))
					<div>
						<input type="text" class="inperrors" placeholder="{{ $errors->first('name') }}" name="name" value="">
					</div>
				
					<div class="error">
					
					</div>
				@else
					<div>
						<input type="text" class="inp" placeholder="请输入姓名" class="noerror" name="name" value="{{ old('name') }}">
					</div>
			
					<div class="">
					
					</div>
				@endif
			</div>
			<div class="wai idCard">
				<div class="icon"></div>
				@if ($errors->has('idcard'))
					<div>
						<input type="text" class="inperrors" placeholder="{{ $errors->first('idcard') }}" name="idcard" value="">
					</div>
				
					<div class="error">
					
					</div>
				@else
					<div>
						<input type="text" class="inp" placeholder="请输入身份证号码" name="idcard" value="{{ old('idcard') }}">
					</div>
			
					<div class="">
					
					</div>
				@endif
			</div>
			<div class="wai zhimafen">
				<div class="icon"></div>
				@if ($errors->has('credit'))
					<div>
						<input type="text" class="inperrors" placeholder="{{ $errors->first('credit') }}" maxlength="4" name="credit" value="">					</div>
				
					<div class="error">
					
					</div>
				@else
					<div>
						<input type="text" class="inp" placeholder="请输入芝麻分" name="credit" value="{{ old('credit') }}" maxlength="4">
					</div>
			
					<div class="">
					
					</div>
				@endif
			</div>
			<div class="wai qq">
				<div class="icon"></div>
				@if ($errors->has('qq'))
					<div>
						<input type="text" class="inperrors" placeholder="{{ $errors->first('qq') }}" name="qq" value="">
					</div>
				
					<div class="error">
					
					</div>
				@else
					<div>
						<input type="text" class="inp" placeholder="请输入QQ号" name="qq" value="{{ old('qq') }}">
					</div>
			
					<div class="">
					
					</div>
				@endif
			</div>
			<div class="wai weixin">
				<div class="icon"></div>
				@if ($errors->has('weixin'))
					<div>
						<input type="text" class="inperrors" placeholder="{{ $errors->first('weixin') }}" name="weixin" value="">
					</div>
				
					<div class="error">
					
					</div>
				@else
					<div>
						<input type="text" class="inp" placeholder="请输入微信号" name="weixin" value="{{ old('weixin') }}">
					</div>
			
					<div class="">
					
					</div>
				@endif
			</div>
		</div>

		<!-- 选填信息 -->
		<div class="change">
			<div class="work common">
				<p>有无工作(选填)</p>
				<div>
					<span>有</span><input type="radio" name="work" value="1">
				</div>
				<div>
					<span>无</span><input type="radio" name="work" value="0">
				</div>
			</div>
			<div class="house common">
				<p>有无房产(选填)</p>
				<div>
					<span>有</span><input type="radio" name="house" value="1">
				</div>
				<div>
					<span>无</span><input type="radio" name="house" value="0">
				</div>
			</div>
			<div class="card common">
				<p>有无车产(选填)</p>
				<div>
					<span>有</span><input type="radio" name="card" value="1">
				</div>
				<div>
					<span>无</span><input type="radio" name="card" value="0">
				</div>
			</div>
			<div class="gongjijin common">
				<p>有无公积金(选填)</p>
				<div>
					<span>有</span><input type="radio" name="accumulation" value="1">
				</div>
				<div>
					<span>无</span><input type="radio" name="accumulation" value="0">
				</div>
			</div>
			<div class="shebao common">
				<p>有无社保(选填)</p>
				<div>
					<span>有</span><input type="radio" name="insurance" value="1">
				</div>
				<div>
					<span>无</span><input type="radio" name="insurance" value="0">
				</div>
			</div>
		</div>
	</div>

	<div class="btns">
		<input type="submit" value="提交">
	</div>

<div class="bgk">
	
</div>
</form>
@endsection

@section('script')

@endsection