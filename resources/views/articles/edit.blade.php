@extends('basic')
@section('text')
    <h1>正在编辑：
        @if((mb_strlen($article->title,'utf-8'))<=20)
            {{$article->title}}
        @else
            {{mb_substr($article->title,0,20,'utf-8').'...'}}
        @endif
         文章</h1>
    {{--model 第一个参数 自动填充对应内容--}}
    {!! Form::model($article,['method'=>'PATCH','url'=>'/articles/'.$article->id]) !!}
    <!--有复制粘贴的地方就有可以优化的地方，所以可以放到另一个页面引用进来-->
    @include('articles.form')
    @include('errors.list')
@stop