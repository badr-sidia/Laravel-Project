@extends('layouts.client')

@section('content')


<section class="category">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-8 text-left">
		        <div class="row">
		          <div class="col-md-12">        
		            <ol class="breadcrumb">
		              <li><a href="#">Home</a></li>
		              <li class="active"><?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT title FROM categories WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?></li>
		            </ol>
		            <h1 class="page-title">Category: <?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT title FROM categories WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?></h1>
		            <p class="page-subtitle">Showing all posts with category <i><?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT title FROM categories WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?></i></p>
		          </div>
		        </div>
		        <div class="line"></div>
		        <div class="row">
                @foreach($evenements as $e)
		          <article class="col-md-12 article-list">
		            <div class="inner">
		              <figure>
			              <a href="single.html">
			                <img src="{{asset('images2/news/13856093-20075760.jpg')}}">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   <a href="category.html">{{$e->author}}</a>
		                  </div>
		                  <div class="time">{{$e->created_at}}</div>
		                </div>
		                <h1><a href="{{route('client.details.edit',$e->id)}}">{{$e->title}}</a></h1>
		                <p>
                        {{$e->description}}
		                </p>
		                <footer>
		                  <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>237</div></a>
		                  <a class="btn btn-primary more" href="single.html">
		                    <div>More</div>
		                    <div><i class="ion-ios-arrow-thin-right"></i></div>
		                  </a>
		                </footer>
		              </div>
		            </div>
                  </article>
                  @endforeach
		         
				  {{$evenements->render()}} 
		        </div>
		      </div>
			  
		      <div class="col-md-4 sidebar">
		       
		        <aside>
		          <h1 class="aside-title">Recent Post</h1>
		          <div class="aside-body">
		            <article class="article-fw">
		              <div class="inner">
		                
		                
		              </div>
		            </article>
		            <div class="line"></div>
		           
		            
		          </div>
		        </aside>
		        <aside>
		          <div class="aside-body">
		            <form class="newsletter">
		              <div class="icon">
		                <i class="ion-ios-email-outline"></i>
		                <h1>Newsletter</h1>
		              </div>
		              <div class="input-group">
		                <input type="email" class="form-control email" placeholder="Your mail">
		                <div class="input-group-btn">
		                  <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
		                </div>
		              </div>
		              <p>By subscribing you will receive new articles in your email.</p>
		            </form>
		          </div>
		        </aside>
		      </div>
		    </div>
		  </div>
		</section>

        @endsection