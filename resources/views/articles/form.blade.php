<div class="form-group">
    {!! Form::label('title','标题：') !!}
    {!! Form::text('title',null,['class'=>'form-control','woshishuxing'=>'woshishuxingzhi']) !!} <!--第二个参数是默认值-->
</div>
<div class="form-group">
    {!! Form::label('content','正文：') !!}
    {!! Form::textarea('content',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('published_at','发布日期：') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
</div>
{!! Form::submit('发表文章',['class'=>'btn btn-primary form-control']) !!}
{!! Form::close() !!}