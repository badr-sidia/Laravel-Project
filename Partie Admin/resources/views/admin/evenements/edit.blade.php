@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Evenements</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Evenements</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
          <form method="post" action="{{route('admin.evenements.update',$evenements->id)}}" enctype="multipart/form-data">
             @method('PUT')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form_group">
                    <div class="row">
                        <label class="col-md-3">Title</label>
                        <div class="col-md-6"><input type="text" name="title" class="form-control" value="{{$evenements->title}}">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="form_group">
                    <div class="row">
                        <label class="col-md-3">Category</label>
                        <div class="col-md-6">
                        <select name="category_id" class="form_control">
                        <option value="">Choose Category</option>
                        @foreach($categories as $c)
                        <option value="{{$c->id}}" 
                        @if($c->id==$evenements->category_id)
                        selected
                        @endif
                        >{{$c->title}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="form_group">
                    <div class="row">
                        <label class="col-md-3">Author</label>
                        <div class="col-md-6"><input type="text" name="author" class="form-control" value="{{$evenements->author}}">
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="form_group">
                    <div class="row">
                        <label class="col-md-3">Image</label>
                        <!--@if($evenements->image)-->
                        <div class="col-md-9"><input type="file" name="image" ></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                        <img src="{{asset('storage/evenements/'.$evenements->image)}}" style="width:150px;">
                        </div>
                        <div class="clearfix"></div>
                     </div>
                </div>
                        
                        <!--@endif-->

                <div class="form_group">
                    <div class="row">
                        <label class="col-md-3">Description</label>
                        <div class="col-md-6">
                        <textarea name="description" class="form-control">
                        {{$evenements->description}}
                        </textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form_group">
                    <input type="submit" class="btn btn-info" value="Save">
          </form>
      </div>
</section>
</div>
@endsection