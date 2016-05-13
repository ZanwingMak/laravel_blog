@extends('basic')
@section('text')
        @if($name == 'shabi')
            <!-- <h1>Hello <?= $name; ?></h1> 原生写法-->
            <h1>Hello {{$name}} 转义输出</h1>
            <h1>Hello {!!$name!!} 不转义输出</h1>
            <h1>Hello {{$hehe}}</h1>
            <h1>IF</h1>
        @else
                <!-- <h1>Hello <?= $name; ?></h1> 原生写法-->
                <h1>Hello {{$name}} 转义输出</h1>
                <h1>Hello {!!$name!!} 不转义输出</h1>
                <h1>Hello {{$hehe}}</h1>
                <h1>ELSE</h1>
        @endif
<h3>yooo~</h3>
@if(count($aaa)>0)
<ul>
        @foreach($aaa as $value)
            <li>{{$value}}</li>
        @endforeach
</ul>
@endif
@stop