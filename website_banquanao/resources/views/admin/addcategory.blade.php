@extends('layouts.master')
@section('title')
     Thêm danh mục
@endsection

@section('content')
<div class="container">
    <section class="panel panel-default">

            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Thêm sản phẩm</h4>
              </div>
              <div class="card-body">
  <form action="{{ route('category.store') }}" class="form-horizontal" role="form" enctype="multipart/form-data" method="post">
            @csrf
 <!-- form-group // -->
     <div class="form-group">
      <label for="name" class="col-sm-3 control-label">Tên danh mục</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="name" id="name" placeholder="">
      </div>
    </div> <!-- form-group // -->
    <div class="form-group">
      <label for="tech" class="col-sm-3 control-label">Danh mục cha</label>
      <div class="col-sm-3">
     <select class="form-control" name="parent">
        <option value=""></option> <!-- default -->
        @foreach ($categories->where('parent_id', null) as $category) <!-- first level only: no parent -->
          <!-- if parent must also be selectable, you can add an option for it before its optgroup -->
          <option value="{{ $category->id }}">
            {{ $category->name }}
          </option>
          @if($category->children->count()>0) <!-- if has children -->
          <optgroup label="{{ $category->name }}"> <!-- display parent optgroup and within child categories option -->
            @foreach($category->children as $child)
              <option value="{{ $child ->id }}">
                {{ $child ->name }}
              </option>
            @endforeach
            @endif
        </optgroup>
            @if($child->children->count()>0) <!-- if has children -->
          <optgroup label="{{ $child->name }}"> <!-- display parent optgroup and within child categories option -->
            @foreach($child->children as $cate)
              <option value="{{ $cate ->id }}">
                {{ $cate->name }}
              </option>
            @endforeach
            @endif
          </optgroup>

          {{-- @if($cate->children->count()>0)
          <optgroup label="{{ $cate->name }}"> <!-- display parent optgroup and within child categories option -->
            @foreach($cate->children as $cat)
              <option value="{{ $cat ->id }}">
                {{ $cat->name }}
              </option>
            @endforeach
            @endif
          </optgroup> --}}
          @endforeach
     </select>
      </div>

    </div> <!-- form-group // -->
    <hr>
    <div class="form-group">
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
      </div>
    </div> <!-- form-group // -->
  </form>

  </div><!-- panel-body // -->

        </div>
    </div>
</div>

  </section><!-- panel// -->
  </div> <!-- container// -->
@endsection

