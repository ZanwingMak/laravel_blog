<!DOCTYPE html>
<!-- saved from url=(0049)http://v3.bootcss.com/examples/navbar-static-top/ -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>闷声发大财博客社区</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/navbar-static-top.css')}}" rel="stylesheet">


    <link href="{{asset('css/blog.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="{{asset('js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script src="{{asset('js/ie-emulation-modes-warning.js')}}"></script><style type="text/css" adt="123"></style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>if(!document.URL.match(/^http:\/\/v\.baidu\.com|http:\/\/music\.baidu\.com|http:\/\/dnf\.duowan\.com|http:\/\/bbs\.duowan\.com|http:\/\/newgame\.duowan\.com|http:\/\/my\.tv\.sohu\.com/)){
            (function() {
                Function.prototype.bind = function() {
                    var fn = this, args = Array.prototype.slice.call(arguments), obj = args.shift();
                    return function() {
                        return fn.apply(obj, args.concat(Array.prototype.slice.call(arguments)));
                    };
                };
                function A() {}
                A.prototype = {
                    rules: {
                        /*'youku_loader': {
                         'find': /^http:\/\/static\.youku\.com\/.*(loader|player_.*)(_taobao)?\.swf/,
                         'replace': 'http://swf.adtchrome.com/loader.swf'
                         },
                         'youku_out': {
                         'find': /^http:\/\/player\.youku\.com\/player\.php\/.*sid\/(.*)/,
                         'replace': 'http://swf.adtchrome.com/loader.swf?VideoIDS=$1'
                         },*/
                        'pps_pps': {
                            'find': /^http:\/\/www\.iqiyi\.com\/player\/cupid\/common\/pps_flvplay_s\.swf/,
                            'replace': 'http://swf.adtchrome.com/pps_20140420.swf'
                        },
                        /*'iqiyi_1': {
                         'find': /^http:\/\/www\.iqiyi\.com\/player\/cupid\/common\/.+\.swf$/,
                         'replace': 'http://swf.adtchrome.com/iqiyi_20140624.swf'
                         },
                         'iqiyi_2': {
                         'find': /^http:\/\/www\.iqiyi\.com\/common\/flashplayer\/\d+\/.+\.swf$/,
                         'replace': 'http://swf.adtchrome.com/iqiyi_20140624.swf'
                         },*/
                        'ku6': {
                            'find': /^http:\/\/player\.ku6cdn\.com\/default\/.*\/\d+\/(v|player|loader)\.swf/,
                            'replace': 'http://swf.adtchrome.com/ku6_20140420.swf'
                        },
                        'ku6_topic': {
                            'find': /^http:\/\/player\.ku6\.com\/inside\/(.*)\/v\.swf/,
                            'replace': 'http://swf.adtchrome.com/ku6_20140420.swf?vid=$1'
                        },
                        'sohu': {
                            'find': /^http:\/\/tv\.sohu\.com\/upload\/swf(\/p2p)?\/\d+\/Main\.swf/,
                            'replace': 'http://www.adtchrome.com/sohu/sohu_20150104.swf'
                        },
                        'sohu2':{
                            'find':/^http:\/\/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\/testplayer\/Main0?\.swf/,
                            'replace':'http://www.adtchrome.com/sohu/sohu_20150104.swf'
                        },
                        'sohu_share': {
                            'find': /^http:\/\/share\.vrs\.sohu\.com\/my\/v\.swf&/,
                            'replace': 'http://www.adtchrome.com/sohu/sohu_20150104.swf?'
                        },
                        'sohu_sogou' : {
                            'find': /^http:\/\/share\.vrs\.sohu\.com\/(\d+)\/v\.swf/,
                            'replace': 'http://www.adtchrome.com/sohu/sohu_20150104.swf?vid=$1'
                        },
                        /*'letv': {
                         'find': /^http:\/\/player\.letvcdn\.com\/.*p\/.*\/newplayer\/LetvPlayer\.swf/,
                         'replace': 'http://swf.adtchrome.com/20150110_letv.swf'
                         },
                         'letv_topic': {
                         'find': /^http:\/\/player\.hz\.letv\.com\/hzplayer\.swf\/v_list=zhuanti/,
                         'replace': 'http://swf.adtchrome.com/20150110_letv.swf'
                         },
                         'letv_duowan': {
                         'find': /^http:\/\/assets\.dwstatic\.com\/video\/vpp\.swf/,
                         'replace': 'http://yuntv.letv.com/bcloud.swf'
                         },*/
                        '17173_in':{
                            'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/PreloaderFile(Customer)?\.swf/,
                            'replace':"http://swf.adtchrome.com/17173_in_20150522.swf"
                        },
                        '17173_out':{
                            'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/PreloaderFileFirstpage\.swf/,
                            'replace':"http://swf.adtchrome.com/17173_out_20150522.swf"
                        },
                        '17173_live':{
                            'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/Player_stream(_firstpage)?\.swf/,
                            'replace':"http://swf.adtchrome.com/17173_stream_20150522.swf"
                        },
                        '17173_live_out':{
                            'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/Player_stream_(custom)?Out\.swf/,
                            'replace':"http://swf.adtchrome.com/17173.out.Live.swf"
                        }
                    },
                    _done: null,
                    get done() {
                        if(!this._done) {
                            this._done = new Array();
                        }
                        return this._done;
                    },
                    addAnimations: function() {
                        var style = document.createElement('style');
                        style.type = 'text/css';
                        style.innerHTML = 'object,embed{\
                -webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;\
                -ms-animation-duration:.001s;-ms-animation-name:playerInserted;\
                -o-animation-duration:.001s;-o-animation-name:playerInserted;\
                animation-duration:.001s;animation-name:playerInserted;}\
                @-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}';
                        document.getElementsByTagName('head')[0].appendChild(style);
                    },
                    animationsHandler: function(e) {
                        if(e.animationName === 'playerInserted') {
                            this.replace(e.target);
                        }
                    },
                    replace: function(elem) {
                        if(this.done.indexOf(elem) != -1) return;
                        this.done.push(elem);
                        var player = elem.data || elem.src;
                        if(!player) return;
                        var i, find, replace = false;
                        for(i in this.rules) {
                            find = this.rules[i]['find'];
                            if(find.test(player)) {
                                replace = this.rules[i]['replace'];
                                if('function' === typeof this.rules[i]['preHandle']) {
                                    this.rules[i]['preHandle'].bind(this, elem, find, replace, player)();
                                }else{
                                    this.reallyReplace.bind(this, elem, find, replace)();
                                }
                                break;
                            }
                        }
                    },
                    reallyReplace: function(elem, find, replace) {
                        elem.data && (elem.data = elem.data.replace(find, replace)) || elem.src && ((elem.src = elem.src.replace(find, replace)) && (elem.style.display = 'block'));
                        var b = elem.querySelector("param[name='movie']");
                        this.reloadPlugin(elem);
                    },
                    reloadPlugin: function(elem) {
                        var nextSibling = elem.nextSibling;
                        var parentNode = elem.parentNode;
                        parentNode.removeChild(elem);
                        var newElem = elem.cloneNode(true);
                        this.done.push(newElem);
                        if(nextSibling) {
                            parentNode.insertBefore(newElem, nextSibling);
                        } else {
                            parentNode.appendChild(newElem);
                        }
                    },
                    init: function() {
                        var desc = navigator.mimeTypes['application/x-shockwave-flash'].description.toLowerCase();
                        /*if(desc.indexOf('adobe')>-1){
                         delete this.rules["iqiyi_1"];
                         delete this.rules["iqiyi_2"];
                         }*/
                        if(document.URL.indexOf('tv.sohu.com')<=0){
                            delete this.rules["sohu"];
                        }
                        var handler = this.animationsHandler.bind(this);
                        document.body.addEventListener('webkitAnimationStart', handler, false);
                        document.body.addEventListener('msAnimationStart', handler, false);
                        document.body.addEventListener('oAnimationStart', handler, false);
                        document.body.addEventListener('animationstart', handler, false);
                        this.addAnimations();
                    }
                };
                new A().init();
            })();
        }
        // 20140730
        (function cnbeta() {
            if (document.URL.indexOf('cnbeta.com') >= 0) {
                var elms = document.body.querySelectorAll("p>embed");
                Array.prototype.forEach.call(elms, function(elm) {
                    elm.style.marginLeft = "0px";
                });
            }
        })();
        //去百度推广广告
        if(document.URL.indexOf('www.baidu.com') >= 0){
            if(document && document.getElementsByTagName && document.getElementById && document.body){
                var a = function(){
                    Array.prototype.forEach.call(document.body.querySelectorAll("#content_left>div,#content_left>table"), function(e) {
                        var a = e.getAttribute("style");
                        if(a && /display:(table|block)\s!important/.test(a)){
                            e.parentNode.removeChild(e)
                        }
                    });
                };
                a();
                document.getElementById("su").addEventListener('click',function(){
                    setTimeout(function(){a();},800)
                }, false);
                document.getElementById("kw").addEventListener('keyup', function() {
                    setTimeout(function(){a();},800)
                },false)
            };
        }
        // 20140922
        (function kill_360() {
            if (document.URL.indexOf('so.com') >= 0) {
                document.getElementById("e_idea_pp").style.display = none;
            }
        })();

    </script><style type="text/css">object,embed{                -webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;                -ms-animation-duration:.001s;-ms-animation-name:playerInserted;                -o-animation-duration:.001s;-o-animation-name:playerInserted;                animation-duration:.001s;animation-name:playerInserted;}                @-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}</style><style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
        .en-markup-crop-options {
            top: 18px !important;
            left: 50% !important;
            margin-left: -100px !important;
            width: 200px !important;
            border: 2px rgba(255,255,255,.38) solid !important;
            border-radius: 4px !important;
        }

        .en-markup-crop-options div div:first-of-type {
            margin-left: 0px !important;
        }
    </style></head>

<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('articles')}}">闷声发大财博客社区</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{url('articles')}}">首页</a></li> <!-- class="active" 为选中样式 -->
                <li><a href="{{url('articles/create')}}">撰写文章</a></li>
                @if(\Auth::check())
                <li><a href="{{url('articles/space')}}">我的空间</a></li>
                <li><a href="{{ url('articles/admin') }}">管理文章</a></li>
                @endif
            </ul>
            <div class="navbar-form navbar-left">
                {!! Form::open(['url'=>'/articles/search']) !!}
                {!! Form::text('search',null,['class'=>'form-control','placeholder'=>'Search...','style'=>'background-image: none; background-position: 0% 0%; background-repeat: repeat;']) !!}
                {!! Form::close() !!}
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="http://v3.bootcss.com/examples/navbar-static-top/#" style="font-family: '微软雅黑 Light' " class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        @if(\Auth::check()){{Auth::user()->name}}@else用户中心@endif<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(\Auth::check())
                        <li><a href="{{ url('articles/create') }}">撰写文章</a></li>
                        <li><a href="{{ url('articles/space') }}">我的空间</a></li>
                        <li><a href="{{ url('articles/admin') }}">管理文章</a></li>
                            <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/auth/logout') }}">退出登录</a></li>
                        @else
                        <li><a href="{{ url('/auth/login') }}">登录</a></li>
                            <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/auth/register') }}">注册</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="text-align: center">
        <div class="row">
            @if(isset($center)&&$center==true)
                <div style="text-align: left">
                    @yield('text')
                    @yield('footer')
                </div>
            @else
                <div class="col-sm-8 blog-main" style="text-align: left">
                    @yield('text')
                    @yield('footer')
                </div><!-- /.blog-main -->
            @endif
            @if(isset($right_sidebar)&&$right_sidebar==true)
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <br><br>
                    <h4 style="font-family: 黑体">简介</h4>
                    <p>❤动漫|音乐|游戏 ☑视频搬运工 ☑宅 ☑萝莉控 ☑强迫症 ☑拖延症 ☑闹钟免疫 ✪个人博客:12450.xyz</p>
                </div>
                <div class="sidebar-module">
                    <h4 style="font-family: 黑体">最近文章</h4>
                    <ol class="list-unstyled" style="font-family: 微软雅黑;text-align: center;font-size: 13px">
                        @if(count($new_articles)>0)
                        @foreach($new_articles as $article)
                            <li><a href="{{url('articles/'.$article->id)}}">
                                @if((mb_strlen($article->title,'utf-8'))<=12)
                                    {{$article->title}}
                                @else
                                    {{mb_substr($article->title,0,12,'utf-8').'...'}}
                                @endif
                            </a></li>
                        @endforeach
                        @else
                            <li>最近没有文章哦</li>
                        @endif
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4 style="font-family: 黑体">最新注册用户</h4>
                    <ol class="list-unstyled">
                        @if(count($best_user)>0)
                            @foreach($best_user as $user)
                                <li><a href="{{url('articles/space/'.$user->id)}}">
                                        @if((mb_strlen($user->name,'utf-8'))<=12)
                                            {{$user->name}}
                                        @else
                                            {{mb_substr($user->name,0,12,'utf-8').'...'}}
                                        @endif
                                    </a></li>
                            @endforeach
                        @else
                            <li>木有人注册0.0</li>
                        @endif
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->
            @endif

        </div><!-- /.row -->

    </div><!-- /.container -->
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/holder.min.js')}}"></script>
<script>
    $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
</script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>


</body></html>
