@extends("layouts.main")

@section("title","用户编辑")

@section("content")
    <a href="javascript:history.go(-1)" class="btn btn-info">返回</a>
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label class="col-sm-2 control-label">用户名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="name" value="{{$yh->name}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">用户头像</label>
            <div class="col-sm-10">
                <input type="file" class="form-control"  name="imgs">
                <img src="/{{$yh->imgs}}" width="50">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">用户性别</label>
            <div class="col-sm-10">
                <label class="checkbox-inline">
                    <input type="radio" name="sex" value="男" <?php if($yh->sex==='男') echo 'checked'?>> 男
                </label>
                <label class="checkbox-inline">
                    <input type="radio" name="sex" value="女" <?php if($yh->sex!=='男') echo 'checked'?>> 女
                </label>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">用户年龄</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="age" value="{{$yh->age}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">用户联系方式</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="tel" value="{{$yh->tel}}">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">用户住址</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="address" value="{{$yh->address}}">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">编辑</button>
            </div>
        </div>
    </form>


@endsection