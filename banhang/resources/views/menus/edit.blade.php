@extends('layouts.admin')
 
@section('title')
 <title>Trang Chủ</title>

 
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   @include('partials.contentheader',['name'=>'menu','key' =>'Add' ])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <form method="PUT" action="{{route('menus.update',['id'=>$menu->id])}}">
              @csrf
              <div class="mb-3">
                <label class="form-label">Nhập Tên Menu</label>
                <input type="text" class="form-control" value="{{$menu->name}}" name="name" id="slug" onkeyup="ChangeToSlug()" placeholder="Nhập Tên menu">
            </div>
            <div class="mb-3">
                <label class="form-label">Nhập Slug</label>
                <input type="text" class="form-control" value="{{$menu->slug}}" name="slug" id="convert_slug" placeholder="Slug">
            </div>
  <select class="form-select" name="parent_id" aria-label="Default select example">
  <option selected >Chọn Danh mục cha</option>
       {!!$htmlOption!!}
</select>

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


