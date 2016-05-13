@extends('basic')
@section('text')


    <div>
        <div class="row">
            <div >
                <h2 class="sub-header">管理文章</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="check_articles" onclick="allchecked(this);">
                                &nbsp;&nbsp;<button class="btn btn-danger btn-xs delete_article" onclick="checkdel()">删除选中文章</button>
                            </th>
                            <th>标题</th>
                            <th>作者</th>
                            <th>邮箱</th>
                            <th>发布日期</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($myarticles))
                            @foreach($myarticles as $article)
                            <tr>
                                <td><input type="checkbox" name="check" value="{{$article->id}}"></td>
                                <td>
                                    <a href="{{url('articles/'.$article->id)}}" >
                                    @if((mb_strlen($article->title,'utf-8'))<=15)
                                        {{$article->title}}
                                    @else
                                        {{mb_substr($article->title,0,15,'utf-8').'...'}}
                                    @endif
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('articles/space/'.$article->user->id)}}" style="color: orangered;font-family: 'Arial Black'" >
                                    @if((mb_strlen($article->user->name,'utf-8'))<=10)
                                        {{$article->user->name}}
                                    @else
                                        {{mb_substr($article->user->name,0,10,'utf-8').'...'}}
                                    @endif
                                    </a>
                                </td>
                                <td>
                                    @if((mb_strlen($article->user->email,'utf-8'))<=20)
                                        {{$article->user->email}}
                                    @else
                                        {{mb_substr($article->user->email,0,20,'utf-8').'...'}}
                                    @endif
                                </td>
                                <td>{{$article->published_at}}</td>
                                <td><a href="{{url('articles',$article->id)}}/edit" >编辑</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div style="text-align: right">{!! $myarticles->render() !!}</div>
                    @else
                        <tr>
                            <td colspan="6" style="text-align: center">暂时没有记录</td>
                        </tr>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        function allchecked(ac){
            var checks = document.getElementsByName('check');
            for(var i=0;i<checks.length;i++){
                checks[i].checked = ac.checked;
            }
        }
        function checkdel(){
            var checks = document.getElementsByName('check');
            var flag = false;
            var ids = [];
            for(var i=0;i<checks.length;i++){
                if(checks[i].checked){
                    flag = true; //有文章被选中
                    ids.push(checks[i].value);
                }
            }
            if(flag==true){
                var sure = confirm("确定要删除所选的文章吗?");
                if (sure){
                    $.post('{{url('articles/delete')}}',{ids:ids,_method:"DELETE"},function(data){
                        if(data){
                            alert('删除成功');
                            location.reload();
                        }
                    });
                }else{
                    return false;
                }
            }else{
                alert("请选择要删除的文章!");
                return false;
            }

        }
    </script>


@stop
