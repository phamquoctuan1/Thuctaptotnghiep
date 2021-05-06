@extends('layouts.master')

@section('title')
    Quản lý sản phẩm
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h4 class="card-title">Danh sách sản phẩm </h4>
                                <div>
                                    <a class="btn btn-success ml-5" href="{{ route('product.create') }}"
                                        id="createNewItem"> Thêm sản phẩm</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Tên </th>
                                        <th>Giá</th>
                                        <th>Giá giảm</th>
                                        <th>Tình trạng</th>
                                        <th>Đường dẫn</th>
                                        <th>Màu</th>
                                        <th>Size</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                    @endsection
                    @push('scripts')
                        <script type="text/javascript">
                            $(function() {
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                                var table = $('.data-table').DataTable({
                                    processing: true,
                                    serverSide: true,
                                    ajax: "{{ route('ajaxItems.index') }}",
                                    columns: [{
                                            data: 'id',
                                            name: 'id'
                                        },
                                        {
                                            data: 'name',
                                            name: 'name'
                                        },
                                        {
                                            data: 'price',
                                            name: 'price'
                                        },
                                        {
                                            data: 'discount',
                                            name: 'discount'
                                        },
                                        {
                                            data: 'status',
                                            render: function(data, type) {
                                                if (type === 'display') {
                                                    if (data === 1) {
                                                        var status = "Còn hàng"
                                                    } else {
                                                        status = "Hết hàng"
                                                    }
                                                    return status
                                                }
                                                return data
                                            }
                                        },
                                        {
                                            data: 'url',
                                            name: 'url'
                                        },
                                        {
                                            data: 'color',
                                            name: 'color.name'
                                        },
                                        {
                                            data: 'size',
                                            name: 'size.name'
                                        },
                                        {
                                            data: 'action',
                                            name: 'action',
                                            orderable: false
                                        },
                                    ]
                                });
                            });



                            $('body').on('click', '.deleteItem', function() {
                                var Item_id = $(this).data("id");
                                var a = confirm("Bạn chắc chắn muốn xóa sản phẩm này ?");
                                if (a == false) {
                                    $('.data-table').DataTable().ajax.reload();
                                } else
                                    $.ajax({
                                        type: "DELETE",
                                        url: "{{ url('ajaxItems') }}" + '/' + Item_id,
                                        success: function(data) {
                                            alert("Xóa sản phẩm thành công");
                                            $('.data-table').DataTable().ajax.reload();
                                        },
                                        error: function(data) {
                                            console.log('Error:', data);
                                        }
                                    });
                            });

                            $('body').on('click', '.editItem', function() {
                                var Item_id = $(this).data('id');
                                var url = 'http://127.0.0.1:8000/admin/product/edit/'+Item_id;
                                console.log(url);
                                $.ajax({
                                    type: 'GET',
                                    headers: {
                                        'X-CSRF-Token': '{{ csrf_token() }}',
                                    },
                                    success: function(data) {
                                       window.location.href = url;
                                    },

                                });


                            });

                        </script>
                    @endpush
