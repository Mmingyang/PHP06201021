@extends("layouts.main")

@section("title","用户列表")
@section("content")
    <a href="/yh/add" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>用户ID</th>
            <th>用户名</th>
            <th>用户头像</th>
            <th>用户性别</th>
            <th>用户年龄</th>
            <th>用户联系电话</th>
            <th>用户地址</th>
            <th>操作</th>
        </tr>
        @foreach($yhs as $yh)
            <tr>
                <td>{{$yh->id}}</td>
                <td>{{$yh->name}}</td>
                <td><img src="/{{$yh->imgs}}" width="50"></td>
                <td>{{$yh->sex}}</td>
                <td>{{$yh->age}}</td>
                <td>{{$yh->tel}}</td>
                <td>{{$yh->address}}</td>
                <td>
                    <a href="edit/{{$yh->id}}" class="btn btn-info">编辑</a>
                    <a href="del/{{$yh->id}}" class="btn btn-info">删除</a>
                </td>
            </tr>
        @endforeach

    </table>



@endsection