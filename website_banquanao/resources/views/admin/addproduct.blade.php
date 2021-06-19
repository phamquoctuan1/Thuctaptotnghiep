@extends('layouts.master')
@section('title')
    Thêm sản phẩm
@endsection

@section('content')
    <div class="container">
        <section class="panel panel-default">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Thêm sản phẩm</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" class="form-horizontal" role="form"
                        enctype="multipart/form-data" method="post">
                        @csrf
                        <!-- form-group // -->
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Tên sản phẩm</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name" placeholder="">
                            </div>
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label for="price" class="col-sm-3 control-label">Giá </label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" min="0" name="price" id="price" placeholder="">
                            </div>
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label for="discount" class="col-sm-3 control-label">giảm giá</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="discount" id="discount" placeholder="">
                            </div>
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label for="shortdecription" class="col-sm-3 control-label">Mô tả ngắn</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="shortdecription" id="shortdecription"
                                    placeholder="">
                            </div>
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label for="about" class="col-sm-3 control-label">Mô tả</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Màu sắc</label>
                            <div class="col-sm-3">
                                <label class="control-label small" for="color">Tên màu</label>
                                <input type="text" class="form-control" name="color" id="color" placeholder="">
                            </div>
                            <div class="col-sm-3">
                                <label class="control-label small" for="code">Mã màu</label>
                                <input type="color" class="form-control" name="code" id="code" placeholder="">
                            </div>
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kích thước</label>
                            <div class="col-sm-3">
                                <label class="control-label small" for="size">Tên size</label>
                                <select class="form-control" name="size">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label class="control-label small" for="amount">Số lượng</label>
                                <input type="number" class="form-control" name="amount" id="amount" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Hình ảnh</label>
                            <div class="col-sm-3">
                                <label class="control-label " for="file_img">Chọn hình </label> <input type="file"
                                    name="images[]" multiple="multiple">
                            </div>
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label for="discount" class="col-sm-3 control-label">Tình trạng</label>
                            <div class="col-sm-3">
                                <input type="radio" name="status" value="1" checked> <label class="control-label small">Còn
                                    hàng</label>
                                <input type="radio" name="status" value="0"><label class="control-label small">Hết
                                    hàng</label>
                            </div>
                        </div> <!-- form-group // -->
                        <div class="form-group">
                            <label for="tech" class="col-sm-3 control-label">Danh mục</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="categoryid">
                                    <optgroup>
                                        @foreach ($data['categories'] as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @foreach ($category->children as $child)
                                                <option value="{{ $child->id }}">&nbsp &nbsp &nbsp{{ $child->name }}
                                                </option>
                                            @endforeach
                                    </optgroup>
                                    @endforeach
                                </select>
                            </div>

                        </div> <!-- form-group // -->
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </div>
                    </form>

                </div><!-- panel-body // -->

            </div>
    </div>
    </div>

    </section><!-- panel// -->


    </div> <!-- container// -->
@endsection
