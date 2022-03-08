@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm bài viết
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('admin/page/store')}}">
                @csrf
                <div class="form-group">
                    <label for="title">Tiêu đề bài viết</label>
                    <input class="form-control" type="text" name="title" id="title">
                    @error('title')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Nội dung bài viết</label>
                    <textarea name="content" class="form-control" id="content" cols="30" rows="5"></textarea>
                    @error('content')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" >
                        <label class="form-check-label" for="exampleRadios1">
                          Chờ duyệt
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2">
                        <label class="form-check-label" for="exampleRadios2">
                          Công khai
                        </label>
                    </div>
                    @error('status')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>



                <button type="submit" name="btn-add" value="Thêm mới" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
@endsection