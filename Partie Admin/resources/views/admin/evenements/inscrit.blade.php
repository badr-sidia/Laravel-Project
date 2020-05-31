@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liste des Inscrits</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Liste des Inscrits</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
          <p>
          <a href="{{route('admin.evenements.create')}}" class="btn btn-primary">Add New Inscrit</a>
          </p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>Questions</th>
                  <th>Action</th>
              </tr>
              @if(count($inscrits))
              @foreach($inscrits as $i)
         
              <tr>
                  <td>{{$i->id}}</td>
                  <td>{{$i->name}}</td>
                  <td>{{$i->email}}</td>
                  <td>{{$i->telephone}}</td>
                  <td>{{$i->questions}}</td>
                  <td>
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                  <a href="{{route('admin.confirmations.show',$i->id)}}" class="btn btn-info">Repondre</a>
                <form action="{{route('admin.inscriptions.destroy',$i->id)}}" method="post">
                    @method('DELETE')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                </td>

              </tr>
              @endforeach
              @else
              <tr><td colspan ="3">No Inscrits found</td></tr>
              @endif
          </table>
          {{$inscrits->render()}}
      </div>
</section>
</div> 
@endsection