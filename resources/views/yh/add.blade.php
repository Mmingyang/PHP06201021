@extends("layouts.main")

@section("title","用户添加")

@section("content")
    <a href="javascript:history.go(-1)" class="btn btn-info">返回</a>
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label class="col-sm-2 control-label">用户名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="name" value="{{old("name")}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">用户头像</label>
            <div class="col-sm-10">
                <input type="file" class="form-control"  name="imgs">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">用户性别</label>
            <div class="col-sm-10">
                <label class="checkbox-inline">
                    <input type="radio" name="sex" value="男" checked> 男
                </label>
                <label class="checkbox-inline">
                    <input type="radio" name="sex" value="女"> 女
                </label>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">用户年龄</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="age" value="{{old("age")}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">用户联系方式</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="tel" value="{{old("tel")}}">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-2 control-label">用户住址</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="address" value="{{old("address")}}">
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-10">
                <input id="captcha" class="form-control" name="captcha" >
                <img class="thumbnail captcha" src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">添加</button>
            </div>
        </div>
    </form>


@endsection