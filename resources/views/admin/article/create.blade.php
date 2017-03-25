@extends('admin.admin')
@section('other-css')
    {!! editor_css() !!}
    <link href="//cdn.bootcss.com/select2/4.0.3/css/select2.min.css" rel="stylesheet">
@endsection
@section('content-header')
    <h1>
        内容管理
        <small>文章</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li class="active"><a href="{{url('/admin/article/index')}}">内容管理 - 文章</a></li>
    </ol>
@stop

@section('content')
    <h2 class="page-header">撰写新文章</h2>
    <form method="POST" action="#" accept-charset="utf-8">
        {!! csrf_field() !!}
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">主要内容</a></li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                        <label>标题
                            <small class="text-red">*</small>
                        </label>
                        <input required="required" type="text" class="form-control" name="title" autocomplete="off"
                               placeholder="标题" maxlength="80">
                    </div>
                    <div class="form-group">
                        <label>作者
                            <small class="text-red">*</small>
                        </label>
                        <input required="required" type="text" class="form-control" name="author" autocomplete="off"
                               placeholder="作者" maxlength="80">
                    </div>
                    <div class="form-group">
                        <label>选择标签
                            <small class="text-red">*</small>
                        </label>
                        <select class="js-example-basic-multiple form-control" multiple="multiple">
                            <option value="1">PHP</option>
                            <option value="2">Web</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>是否置顶
                            <small class="text-red">*</small>
                        </label>
                        <select class="js-example-placeholder-single form-control">
                            <option value=""></option>
                            <option value="1">是</option>
                            <option value="2">否</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>正文(Markdown)
                            <small class="text-red">*</small>
                            <span class="text-green">min:20</span></label>
                        <div id="editormd_id">
                            <textarea name="content" style="display:none;"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">发布文章</button>
            </div>
        </div>
    </form>

@stop
@section('other-js')
    {!! editor_js() !!}
    <script src="//cdn.bootcss.com/select2/4.0.3/js/select2.full.min.js"></script>
    <script>
        $(".js-example-basic-multiple").select2({
            placeholder: "选择一个标签"
        });
        $(".js-example-placeholder-single").select2({
            placeholder: "选择是否置顶",
            allowClear: true
        });
    </script>
@endsection

