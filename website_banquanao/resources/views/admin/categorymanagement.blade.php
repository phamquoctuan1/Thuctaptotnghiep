@extends('layouts.master')

@section('title')
    Quản lý danh mục
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Danh mục</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
<table class="table table-hover" id="categories">
    <p> <a href="{{ route('category.create') }}" class=" btn btn-info"> Thêm danh mục</a></p>
    <thead class="thead-light">
        <tr >
            <th>id</th>
            <th>Tên </th>
            <th>Mục cha</th>
            <th>Đường dẫn</th>
            <th>Hành động</th>

        </tr>
    </thead>
</table>
</div>
</div>
</div>
</div>

@endsection
@push('scripts')
<script>
$(function() {
    $('#categories').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('category.get-list') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'parent_id', name: 'parent_id' },
            { data: 'url', name: 'url' },
            { data: 'action', name: 'action' },

        ]
    });
});
</script>
@endpush
