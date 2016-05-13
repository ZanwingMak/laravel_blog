@extends('basic')
@section('text')

    <div class="container" style="text-align: left">

        <div class="blog-header">
            <h1 class="blog-title" style="text-align: left;font-family: 黑体">
                @if((mb_strlen($article->title,'utf-8'))<=25)
                    {{$article->title}}
                @else
                    {{mb_substr($article->title,0,25,'utf-8').'...'}}
                @endif
            </h1>
        </div>

        <div class="row" >

            <div style="text-align: left">

                <div class="blog-post" >
                    <p class="blog-post-meta" >{{$article->published_at}}&nbsp;&nbsp;by <a href="{{url('articles/space/'.$article->user->id)}}" style="color: orangered;font-family: 'Arial Black'" >{{$article->user->name}}</a>&nbsp;&nbsp;
                        <a href="{{url('articles',$article->id)}}/edit">
                            {{--{!! Form::button('编辑文章',['class'=>'btn btn-primary form-control']) !!}--}}
                            @if(\Auth::check() && ($article->user_id == \Auth::user()->id))
                                <a href="{{url('articles',$article->id)}}/edit" ><button class="btn btn-xs">编辑</button></a>
                            @endif
                        </a>
                    </p>
                    <p style="word-break:break-all;font-family: '微软雅黑';text-align: left;font-size: 25px">{{$article->content}}</p>
                </div>

            </div>


        </div><!-- /.row -->

    </div><!-- /.container -->

@stop