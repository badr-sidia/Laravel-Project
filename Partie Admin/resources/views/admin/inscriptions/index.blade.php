@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Inscriptions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Inscriptions</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
          <p>
          <a href="" class="btn btn-primary">Add New Inscription</a>
          </p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>Questions</th>
                  <th>Evenement</th>
                  
              </tr>
              @if(count($inscrits))
              @foreach($inscrits as $i)
              <tr>
                  <td>{{$i->id}}</td>
                  <td>{{$i->name}}</td>
                  <td>{{$i->email}}</td>
                  <td>{{$i->telephone}}</td>
                  <td>{{$i->questions}}</td>
                  <td><?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT * FROM evenements WHERE id ='$i->id_evenement'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[1];
            }
?></td>
                  

              </tr>
              @endforeach
              @else
              <tr><td colspan ="3">No Inscriptions found</td></tr>
              @endif
          </table>
          {{$inscrits->render()}}
      </div>
</section>
</div>
@endsection