@extends('basic')
@section('text')
    <h1>{{$user->name}}的空间</h1><br>
    @if(count($articles))
    @foreach($articles as $article)
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
                <p class="blog-post-meta">{{$article->published_at}}&nbsp;&nbsp;by&nbsp;&nbsp;<a href="{{url('articles/space/'.$article->user->id)}}" style="color: orangered;font-family: 'Arial Black'" >{{$article->user->name}}</a>&nbsp;&nbsp;
                <a href="{{url('articles',$article->id)}}/edit">
                    @if(\Auth::check() && ($user->id == \Auth::user()->id))
                        <a href="{{url('articles',$article->id)}}/edit" ><button class="btn btn-xs">编辑</button></a>
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