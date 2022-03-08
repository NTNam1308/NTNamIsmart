@extends('layouts.admin')
@section('title', 'Cập nhật sản phẩm')

@section('content')
    <div id="content" class="container-fluid">
        <div class="card">
            <div class="card-header font-weight-bold">
                Chỉnh sửa sản phẩm
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('product.update', $products->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Tên sản phẩm</label>
                                <input class="form-control" type="text" name="name" id="name" value="{{$products->name}}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Giá</label>
                                <input class="form-control" type="text" name="price" id="price" value="{{$products->price}}">
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            
                           
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="desc">Mô tả sản phẩm</label>
                                <textarea name="desc" class="form-control" id="desc" cols="30" rows="5">{!!$products->desc!!}</textarea>
                                @error('desc')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">Chi tiết sản phẩm</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="5">{!!$products->content!!}</textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="file">Ảnh đại diện sản phẩm</label>
                        <input type="file" class="form-control-file" name="file" id="file">
                    
                        @error('file')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
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
                        <label for="">Trạng thái</label>
                        <div class="form-check">
                            <input class="form-check-input" {{$products->status=="chờ duyệt"?"checked":""}} type="radio" name="status" id="pending" value="hoạt động">
                            <label class="form-check-label" for="pending">
                                Chờ duyệt
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" {{$products->status=="hoạt động"?"checked":""}} type="radio" name="status" id="public" value="hoạt động">
                            <label class="form-check-label" for="public">
                                Hoạt động
                            </label>
                        </div>
                    </div>
                    <button type="submit" name="btn_update_product" value="Cập nhật" class="btn btn-primary">Cập nhật</button>
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
