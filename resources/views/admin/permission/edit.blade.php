@extends('_layout.main')
{{--需要处理的变更：  $pageTitle $pageKeywords $pageDescription --}}
{{--可以重写的模块：@section('masterCss')@overwrite @section('masterJS')@overwrite--}}
@section('pageCss')

    {{--当前页面独有的样式--}}
@stop

@section('heasJs')
    {{--当前页面独有 head js样式--}}
@stop

@section('wrapper')
    <div class="row">
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
                    <a href="{{URL::to('admin/permissions')}}" class="btn btn-default btn-xs">返回列表</a>
                    <span>permission修改</span>
                </header>
                <div class="panel-body">
                    <form role="form" method="post" action="{{URL::to('admin/permissions').'/'.$permission->id}}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="name">规则名称</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$permission->name or ''}}" placeholder="规则名称">
                        </div>
                        <div class="form-group">
                            <label for="label">标签</label>
                            <input type="text" class="form-control" name="label" id="label" value="{{$permission->label or ''}}" placeholder="标签">
                        </div>
                        <div class="form-group">
                            <label for="description">描述</label>
                            <textarea name="description" class="form-control" id="description">{{$permission->description or ''}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">修改</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
@stop



@section('pageJs')
    {{--当前页面独有 js样式--}}
@stop