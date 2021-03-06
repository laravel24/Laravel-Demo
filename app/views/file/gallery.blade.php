<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>文档列表</title>
    <!-- 让IE浏览器运行最新的渲染模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 最新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/flat-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nprogress.css') }}">
    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/jquery/1.11.0/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="http://cdn.staticfile.org/jquery/2.1.0/jquery.min.js"></script>
    <!--<![endif]-->
    <script>window.jQuery || document.write('<script src="{{asset('
        js / jquery - 1.10
        .2.min.js
        ')}}"><\/script>'
        )</script>

    <!--    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>-->
<!--    <script src="{{ asset('js/nprogress.js') }}"></script>-->
    <!--[if lt IE 7]>
    <div id="browsehappy">你正在使用的浏览器版本过低，请<a href="http://c7sky.com/go/browsehappy"
                                            target="_blank"><strong>升级你的浏览器</strong></a>，获得最佳的浏览体验！
    </div><![endif]-->

    <!--[if lte IE 8]>
    <script src="{{ asset('js/html5shiv.js') }}"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script><![endif]-->
    <style>

        /*.navbar-default{*/
        /*background-image: url( '{{asset('images/background/plaid.jpg') }}');*/
        /*}*/
        .container {
            background-image: url('{{asset('images/background/plaid.jpg') }}');
            background-repeat: repeat;
        }

        #loginbtn {
            color: #EA6D6C;
            border: 1px solid #d3d3d3;
            /*background:#EA6D6C ;*/
        }

        #regbtn {
            color: #58CBAA;
            border: 1px solid #d3d3d3;
        }

        .label-size {
            font-size: 1.6em;
        }

        .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
            background-color: #16a085;
        }

        .page {
            margin-top: 1%;
            margin-left: 40%;
        }

        .list-block {
            width: 200px;
            height: 150px;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-top:0.5em;
            padding-top: 2em;
            border-radius: 2px;
            float: left;
            font-size: 20px;
            text-align: center;
            background: #ffffff;
            word-wrap: break-word;
        }

        .list-all {
            margin-left: 100px;
            width: 80%;
        }
    </style>
</head>
<body>
<nav id="nav">
    <div class="navbar navbar-default ">
<!--        <div class="container">-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">数字逻辑</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">首页</a></li>
                    <li><a href="/article/1">教学大纲</a></li>
                    <li><a href="/article/4">授课计划</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">资源<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/upload/all">文档</a></li>
                            <li class="divider"></li>
                            <li><a href="/paper/index">试卷</a></li>
                            <li><a href="/video/all">视频</a></li>
                        </ul>
                    </li>
                    <li><a href="/comment/all">留言</a></li>
                    <li><a href="/comment/all">友情链接</a></li>
                </ul>
                @if(Sentry::getUser()==null)
                <ul class="nav navbar-nav navbar-right">
                    <li ><a id="loginbtn"  href="/user/login">登录</a></li>
                    <li><a id="regbtn" href="/user/reg">注册</a></li>
                </ul>
                @else
                <ul class="nav navbar-nav navbar-right">
                    <li ><a id="loginbtn"  href="/user/{{Sentry::getUser()->id}}">{{Sentry::getUser()->email}}</a></li>
                </ul>
                @endif
            </div>
            <!--/.nav-collapse -->
        </div>
<!--    </div>-->
</nav>

<div class="container">
    <div class="col-md-4 list-all">
        @foreach($docs as $doc)
        <div class="list-block ">
            <a href="/upload/download/{{$doc->id}}" class="list-block-item">
                <h4 class="list-block-title">{{$doc->fname}}</h4>

                <!--                <p class="list-group-item-text" href="">下载</p>-->

            </a>
        </div>
        @endforeach

    </div>
    <div class="page">
        {{ $docs->links() }}
    </div>
</div>
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="{{asset('/js/bootstrap.min.js') }}"></script>
</body>
<footer>
    <script>

        //        $('body').show();
//        $('.version').text(NProgress.version);
//        NProgress.start();
//        NProgress.set(0.2);
//        setTimeout(function () {
//            NProgress.done();
//            $('.fade').removeClass('out');
//        }, 1000);
    </script>
</footer>
</html>