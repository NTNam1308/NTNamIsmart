@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="card-header font-weight-bold">
                    Thêm danh mục
                </div>
                <div class="card-body">
                    <form action="{{url('admin/post/cat/list')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên danh mục</label>
                            <input class="form-control" type="text" name="name" id="name">
                            @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Danh mục cha</label>
                            <select class="form-control" id="rank_id" name="rank_id">
                                <option>Chọn danh mục</option>
                                <option>Danh mục 1</option>
                                <option>Danh mục 2</option>
                                <option>Danh mục 3</option>
                                <option>Danh mục 4</option>
                            </select>
                            @error('rank_id')
                                    <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
            
                        <button type="submit" value="Thêm mới" class="btn btn-primary">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header font-weight-bold">
                    Danh mục
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Người tạo</th>
                                <th scope="col">Ngày tạo</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                             $t=0;   
                            @endphp
                            @foreach ($postcats as $postcat)
                                @php
                                    $t++;
                                @endphp
                                <tr>
                                    <th scope="row">{{$t}}</th>
                                    <td>{{$postcat->name}}</td>
                                    <td>{{$postcat->rank_id}}</td>
                                    <td>{{Auth::user()}}</td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection