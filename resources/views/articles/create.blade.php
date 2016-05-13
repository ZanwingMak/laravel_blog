@extends('basic')
@section('text')
    <h1>撰写新文章</h1>
    {!! Form::open(['url'=>'/articles']) !!}
    <!--有复制粘贴的地方就有可以优化的地方，所以可以放到另一个页面引用进来-->
    @include('articles.form')
    @include('errors.list')
@stop