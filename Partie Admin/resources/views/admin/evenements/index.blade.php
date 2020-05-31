@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Evenements</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Evenements</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
          <p>
          <a href="{{route('admin.evenements.create')}}" class="btn btn-primary">Add New Evenement</a>
          </p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Action</th>
              </tr>
              @if(count($evenements))
              @foreach($evenements as $n)
              <tr>
                  <td>{{$n->id}}</td>
                  <td>{{$n->title}}</td>
                  <td>{{$n->category->title}}</td>
                  <td><a href="{{route('admin.evenements.edit',$n->id)}}" class="btn btn-info">Edit</a>
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                  <a href="{{route('admin.evenements.show',$n->id)}}" class="btn btn-info">Liste des Inscrits</a>
                <form action="{{route('admin.evenements.destroy',$n->id)}}" method="post">
                    @method('DELETE')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                </td>

              </tr>
              @endforeach
              @else
              <tr><td colspan ="3">No Evenements found</td></tr>
              @endif
          </table>
          {{$evenements->render()}}
      </div>
</section>
</div>
@endsection