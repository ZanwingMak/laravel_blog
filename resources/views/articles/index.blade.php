@extends('basic')
@section('text')
    @if(count($articles))
    @foreach($articles as $article)
        {{--<h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>--}}

        <div class="container">

            <div class="col-sm-9 blog-main">
                <h1 style="word-break:break-all;font-family: 黑体;font-size: 40px"><a href="{{url('articles',$article->id)}}">
                        ◆@if((mb_strlen($article->title,'utf-8'))<=20)
                            {{$article->title}}
                        @else
                            {{mb_substr($article->title,0,20,'utf-8').'...'}}
                        @endif
                    </a></h1>
            </div>

            <div class="row">

                <div class="col-sm-8 blog-main">

                    <div class="blog-post">
                        <p class="blog-post-meta">{{$article->published_at}}&nbsp;&nbsp;by&nbsp;&nbsp;<a href="{{url('articles/space/'.$article->user->id)}}" style="color: orangered;font-family: 'Arial Black'" >{{$article->user->name}}</a>&nbsp;&nbsp;
                            @if(\Auth::check() && ($article->user_id == \Auth::user()->id))
                                <a href="{{url('articles',$article->id)}}/edit" ><button class="btn btn-xs">编辑</button></a>
                            @endif
                        </p>

                        <p style="word-break:break-all;font-family: 微软雅黑">
                            @if((mb_strlen($article->content,'utf-8'))<=200)
                                {{$article->content}}
                            @else
                                {{mb_substr($article->content,0,200,'utf-8').'...'}}
                            @endif
                        </p>
                    </div>

                </div>

            </div><!-- /.row -->

        </div><!-- /.container -->
    @endforeach
    <div style="text-align: left">{!! $articles->render() !!}</div>
    @else
        <tr>
            <td colspan="6" style="text-align: center">暂时没有记录</td>
        </tr>
    @endif
@stop

