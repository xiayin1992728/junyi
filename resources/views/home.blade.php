@extends('layouts.app')

@section('title','登录')

@section('css')
<style type="text/css">
.container-full {
    background-color: #FFFAD3;
}

.has-error .form-control {
    border-color:red;
}
.large {
    width:100vw;
    padding: 70vh 10vw 0 10vw;
    background: url('/images/home/login/background.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
}

.login-panel {
    height: 45vh;
}

.form-group input {
    border:1px solid #F38B31;
    border-radius: 5vw;
}

.getCode {
    display: flex;
    flex-direction: row;
}

.getCode input {
    border-radius: 5vw 0 0 5vw;
    border-top: 1px solid #F38B31;
    border-bottom: 1px solid #F38B31;
    border-left: 1px solid #F38B31;
    border-right: 0;
}

.getCode button {
    border:1px solid #F38B31;
    border-left:0;
    border-radius: 0 5vw 5vw 0;
    color: white;
    background: #F38B31;
    outline: none;
    filter:chroma(color=#000000);
}

.inperror::-webkit-input-placeholder {
    color:red;
}


.getCode img {
    border: 1px solid #F59034;
    border-left: 0;
    border-radius :0 5vw 5vw 0;
    background: white;
    font-size:1.3em;
    font-weight: 900;
    letter-spacing: 0.2em;
    height: 34px;
    line-height: 34px;
    width: 25vw;
    text-align: center;
}

.shenqi {
    width: 80vw;
    height: 8vh;
    border: 0;
    border-radius: 8vw;
    background: #F38B31;
    color: white;
}
</style>
@endsection

@section('content')
<div class="large">
    <div class="login-panel">
        <form action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}

            @if ($errors->has('phone'))
                <div class="form-group shu">
                <input type="text" placeholder="{{ $errors->first('phone') }}" class="form-control inperror" id="phone" aria-describedby="inputSuccess2Status" name="phone" value="{{ old('phone') }}">
            </div>
            @else
                <div class="form-group shu">
                    <input type="text" placeholder="请输入手机号" class="form-control" id="phone" aria-describedby="inputSuccess2Status" name="phone" value="{{ old('phone') }}">
                </div>
            @endif
            

            @if ($errors->has('captcha'))
                <div class="form-group getCode">
                    <input type="text" placeholder="{{ $errors->first('captcha') }}" class="form-control inperror" id="captcha" aria-describedby="inputSuccess2Status" name="captcha">
                    <img src="{{ captcha_src('mini') }}" align="点击刷新校检码">
                </div>
            @else 
                <div class="form-group getCode">
                    <input type="text" placeholder="请输入校检码" class="form-control" id="captcha" aria-describedby="inputSuccess2Status" name="captcha">
                    <img src="{{ captcha_src('mini') }}" align="点击刷新校检码">
                </div>
            @endif
            
            @if ($errors->has('code'))
                <div class="form-group getCode">
                    <input type="text" placeholder="{{ $errors->first('code') }}" class="form-control inperror" id="code" aria-describedby="inputSuccess2Status" name="code">
                    <button class="btn" type="button" id="captchabtn">获取验证码</button>
                </div>
            @else 
                <div class="form-group getCode">
                    <input type="text" placeholder="请输入验证码" class="form-control" id="code" aria-describedby="inputSuccess2Status" name="code">
                    <button class="btn" type="button" id="captchabtn">获取验证码</button>
                </div>
            @endif
            <input type="hidden" name="arg" value="{{ $arg }}">
            <input type="hidden" name="key" value="" id="key">
            <input type="submit" class="shenqi" value="立即申请">
        </form>
        <p class="text-center" style="font-size: 0.6em;margin-top: 2vh;color: #FF864C">点击"立即申请"即代表同意 《新用户注册协议》</p>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
let timer = 0;
let sendStatus = false;
let timerStatus;
 $('#captchabtn').on('click',function() {

    if ($('#phone').val() == '') {
        $('#phone').attr('placeholder','手机号不能为空');
        $('#phone').addClass('inperror');
        return;
    }
    if ($('#captcha').val() == '') {
        $('#captcha').attr('placeholder','图形验证码不能为空');
        $('#captcha').addClass('inperror');
        return;
    }
    if (timer > 0 && sendStatus) {
        return;
    }

    $.ajax({
        url:"{{ route('code') }}",
        type:'POST',
        dataType:'json',
        data:{
            _token: $('meta[name=csrf-token]').attr("content"),
            phone:$('#phone').val(),
            captcha:$('#captcha').val()
        },
        success:function(res) {
        if (res.errors != undefined) {

        $("#code").attr('placeholder','未知错误请联系管理员!');
        $("#code").addClass('inperror');

        } else {
         $('#key').val(res.key);
            localStorage.setItem('key',res.key);
            $("#captchabtn").attr('disable',true);
            timer = 60;
            sendStatus = true;
            // 调用计时器
            setTime();
        }    
    }
})
});

$('.getCode img').on('click',function(){
    $(this).attr('src','captcha/mini?'+Math.random());
});

if (localStorage.getItem('key')) {
    $('#key').val(localStorage.getItem('key'));
}

function setTime() {
    if (timer > 0 && sendStatus) {
        timer--;
        $('#captchabtn').text(timer+'(s)');
        setTimeout(setTime,1000);
    } else {
        sendStatus = false;
        timer = 0;
        $('#captchabtn').text('获取验证码');
    }
}

</script>
@endsection
