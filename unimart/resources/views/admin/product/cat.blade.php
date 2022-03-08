@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
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
                        Danh mục sản phẩm
                    </div>
                    
                    <div class="card-body">
                        <form action="{{url('admin/product/cat/store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="catname">Tên danh mục</label>
                                <input class="form-control" type="text" name="catname" id="catname">
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Danh mục cha</label>
                                <select class="form-control" name="parent_id" id="parent_id">
                                    <option value="0">Chọn danh mục</option>
                                    {{-- @foreach ($category as $cate)
                                        <option value="{{$cate->id}}">{{$cate->catname}}</option>
                                    @endforeach --}}
                                    <?php showCategory($category)?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header font-weight-bold">
                        Danh sách
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">Tên Danh Mục</th>
                                    <th scope="col">Người tạo</th>
                                    <th scope="col">Ngày tạo</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php showCategories($categories);?>
                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>
    
    </div>
@endsection


<?php 

function showCategories($categories, $parent_id = 0, $char = '')
{
    $t=0;
    foreach ($categories as $key => $item)
    {
        $t++;
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id)
        {
            echo '<tr>';
                // echo '<td>';
                //     echo $t;
                // echo '</td>';
                echo '<td>';
                    echo $char.$item['catname'];
                echo '</td>';
                echo '<td>';
                    echo $item->creator;
                echo '</td>';
                echo '<td>';
                    echo $item->created_at;
                echo '</td>';
            echo '</tr>';
             
            // Xóa chuyên mục đã lặp
            unset($categories[$key]);
             
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories, $item->id, $char.'--');
        }
    }
}

function showCategory($category, $parent_id = 0, $char = '')
{
    foreach ($category as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id)
        {
            echo '<option value="'.$item[$key].'">';
                echo $char . $item['catname'];
            echo '</option>';
             
            // Xóa chuyên mục đã lặp
            unset($category[$key]);
             
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategory($category, $item->id, $char.'--');
        }
    }
}
?>

