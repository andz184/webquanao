@extends('layouts.admin')
 
@section('title')
 <title>Trang Chủ</title>

 
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.contentheader',['name'=>'category','key' =>'index' ])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <a  href ="{{route('categories.create')}}" class="btn btn-primary float-right m-2">ADD</a>
            <div style="padding-bottom : 10px    "></div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên Danh Mục</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach ($category as $item)
    <tr>
     
          
      
      <th scope="row">{{$item->id}}</th>
      <th scope="row">{{$item->name}}</th>
      <td><a href="{{route('categories.edit',['id'=>$item->id])}}"class="btn btn-default">Sửa</a>
        <a href="{{route('categories.delete',['id'=>$item->id])}}"class="btn btn-danger">Xóa</a></td>
     
    </tr>
    @endforeach
  </tbody>
</table>
<div class="col-md-12">
  {{$category->links() }}
</div>
</div>

</div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>


@endsection


