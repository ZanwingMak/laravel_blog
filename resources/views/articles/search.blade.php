@extends('basic')
@section('text')
    <h1>
        @if($keywords!=null)
        {{$keywords}}
        @else
        {{'请输入关键字(╬ﾟдﾟ)▄︻┻┳═一'}}
        @endif
    </h1><br>
    @if(count($articles) && $keywords!=null)
    @foreach($articles as $article)
        {{--<h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>--}}
        <h1><a href="{{url('articles',$article->id)}}">
                @if((mb_strlen($article->title,'utf-8'))<=20)
                    {{$article->title}}
                @else
                    {{mb_substr($article->title,0,20,'utf-8').'...'}}
                @endif
            </a></h1>
        {{--<h2><a href="{{action('ArticlesController@show',[$article->id])}}">{{$article->title}}</a></h2>--}}
        <article>
            <div class="body">
                <p class="blog-post-meta">{{$article->published_at}}&nbsp;&nbsp;by&nbsp;&nbsp;<span style="color: orangered;font-family: 'Arial Black'" >{{$article->user->name}}</span>&nbsp;&nbsp;
                <a href="{{url('articles',$article->id)}}/edit">
                    @if(\Auth::check() && ($article->user_id == \Auth::user()->id))
                        <button class="btn btn-xs">编辑</button>
                    @endif
                </a>
                </p>
                <p style="word-break:break-all" >
                    @if((mb_strlen($article->content,'utf-8'))<=200)
                        {{$article->content}}
                    @else
                        {{mb_substr($article->content,0,200,'utf-8').'...'}}
                    @endif
                </p>
            </div>
        </article>
        <hr>
    @endforeach
    <div style="text-align: left">{!! $articles->render() !!}</div>
    @else
        <tr>
            <td colspan="6" style="text-align: center">暂时没有记录</td>
        </tr>
    @endif
@stop