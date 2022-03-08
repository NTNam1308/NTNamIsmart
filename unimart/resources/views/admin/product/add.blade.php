@extends('layouts.admin')

@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm sản phẩm
        </div>
        <div class="card-body">
            <form action="{{url('admin/product/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-8">
                        
                        <div class="form-group">
                            <label for="content">Chi tiết sản phẩm</label>
                            <textarea name="content" class="form-control" id="content" cols="30" rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="desc">Mô tả sản phẩm</label>
                            <textarea name="desc" class="form-control" id="desc" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name">Tên sản phẩm</label>
                            <input class="form-control" type="text" name="name" id="name">
                        </div>

                        <div class="form-group">
                            <label for="price">Giá</label>
                            <input class="form-control" type="text" name="price" id="price">
                        </div>
                        <div class="form-group">
                            <label for="category">Danh mục</label>
                            <select class="form-control" id="category" name="category">
                                <option>Chọn danh mục</option>
                                {{-- @foreach ($category as $cate)
                                    <option value="{{$cate->id}}">{{$cate->catname}}</option>
                                @endforeach --}}
                                <?php showCategory($category)?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="file">Chọn ảnh</label>
                            <input type="file" name="file" id="file"><br><br>
                        </div>

                        <div class="form-group">
                            <label for="">Trạng thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status1" value="Chờ duyệt" checked>
                                <label class="form-check-label" for="status1">
                                    Chờ duyệt
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status2" value="Hoạt động">
                                <label class="form-check-label" for="status2">
                                    Hoạt động
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>    
@endsection

<?php 
function showCategory($category, $parent_id = 0, $char = '')
{
    foreach ($category as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id)
        {
            echo '<option value="'.$item['id'].'">';
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