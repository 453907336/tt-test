<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录页面</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/static/admin/vince/rain/css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/static/admin/vince/rain/css/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/static/admin/vince/css/vince.css') }}">
    <style media="screen">
        body {
            overflow: hidden;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #verify{
            position: absolute;
            border-radius: 5px;
            left: 94%;
            bottom: 9px;
        }
        .span{
            font-size: 14px;
            color:#9f191f;
            height: 19px;
        }
    </style>
    <script src="{{ asset('/static/admin/vince/rain/js/rainyday.min.js') }}"></script>
    <script>
        function run() {
            var image = document.getElementById('background');
            image.onload = function() {
                var engine = new RainyDay({
                    image: this
                });
                engine.rain([ [1, 2, 8000] ]);
                engine.rain([ [3, 3, 0.88], [5, 5, 0.9], [6, 2, 1] ], 100);
            };
            image.crossOrigin = 'anonymous';
            image.src = "{{ asset('/static/admin/vince/rain/css/1.jpg') }}";
        }
    </script>
</head>
<body onLoad="run();">
<div class="login">
    <div class="loginform">
        <form action="{{url('admin/login')}}" method="post" id="login">
            {{ csrf_field() }}
            <div class="login_user">
                <input type="text" value="{{old('username')}}" name="username">
               <p class="span"> {{ $errors->first('username') }}</p>
            </div>
            <div class="login_pass">
                <input type="password" value="{{old('password')}}" name="password">
                <p  class="span">{{ $errors->first('password') }}</p>
            </div>
            <div class="login_pass">
                <input type="text" name="verify">
            </div>
            <a onclick="JavaScript:re_captcha();" >
                <img id="verify" src="{{ URL('admin/code/1') }}" />
            </a>
                <p  class="span">{{ $errors->first('verify') }}</p>
            <div class="login_botton">
                <input type="submit" value="登录">
            </div>
        </form>
    </div>
</div>
<img id="background" alt="background" src="{{ asset('/static/admin/vince/rain/css/1.jpg') }}" />
<script src="{{ asset('/static/admin/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('/static/admin/vince/js/demo.js') }}"></script>
<script>
    pingHeight=document.documentElement.clientHeight;
    pingWidth=document.documentElement.clientWidth;
    $("body").css({"height":pingHeight})
</script>
<script>
    function re_captcha() {
        $url = "{{ URL('admin/code') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('verify').src=$url;
    }
</script>
</body>
</html>
