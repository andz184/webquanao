@extends('layouts.admin')
 
@section('title')
 <title>Trang Chủ</title>

 
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   @include('partials.contentheader',['name'=>'category','key' =>'edit' ])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <form method="PUT" action="{{route('categories.update',['id'=>$categories->id])}}">
              @csrf
  <div class="mb-3">
    <label  class="form-label"  >Nhập Tên Danh Mục</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Nhập Tên Danh Mục" value="{{$categories->name}}">
    
  </div>
  <select class="form-select" name="parent_id" aria-label="Default select example">
  <option  >Chọn Danh mục cha</option>
       {!!$htmlOption!!}
</select>
<div class="mb-3">
  <label  class="form-label"  >Nhập Tên Danh Mục</label>
  <input type="text" class="form-control" name="slug" id="exampleInputEmail1" placeholder="Nhập Tên Danh Mục" value="{{$categories->slug}}">
  
</div>
  <div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

            </div>
   
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>


@endsection


