@extends('layouts.client')

@section('content')

<section class="search">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<aside>
							<h2 class="aside-title">Search</h2>
							<div class="aside-body">
								<p>Search with other keywords or use filters for more accurate results.</p>
								<form>
									<div class="form-group">
										<div class="input-group">
											<input type="text" name="q" class="form-control" placeholder="Type something ..." value="hello">
											<div class="input-group-btn">
												<button class="btn btn-primary">
													<i class="ion-search"></i>
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</aside>
						<aside>
							<h2 class="aside-title">Filter</h2>
							<div class="aside-body">
								<form class="checkbox-group" action="" method="GET">
									<div class="group-title">Date</div>
									<div class="form-group">
										<label><input type="radio" name="date" > Anytime</label>
									</div>
									<div class="form-group">
										<label><input type="radio" name="date"> Today</label>
									</div>
									<div class="form-group">
										<label><input type="radio" name="date"> Last Week</label>
									</div>
									<div class="form-group">
										<label><input type="radio" name="date"> Last Month</label>
									</div>
									<br>
									<div class="group-title">Categories</div>
									<div class="form-group">
										<label><input type="radio" name="category"  value="ALL"> All Categories</label>
                                    </div>
                                    @foreach($categories as $c)
									<div class="form-group">
										<label><input type="radio" name="{{$c->title}}" value="{{$c->title}}"> {{$c->title}}</label>
									</div>
									@endforeach
									<input type="submit" value="rechercher">
								</form>
							</div>
						</aside>
					</div>
					<div class="col-md-9">
						<div class="nav-tabs-group">
							<ul class="nav-tabs-list">
								<li class="active"><a href="#">All</a></li>
								<li><a href="#">Latest</a></li>
								<li><a href="#">Popular</a></li>
								<li><a href="#">Trending</a></li>
								<li><a href="#">Videos</a></li>
							</ul>
							<div class="nav-tabs-right">
								<select class="form-control">
									<option>Limit</option>
									<option>10</option>
									<option>20</option>
									<option>50</option>
									<option>100</option>
								</select>
							</div>
						</div>
						<div class="search-result">
							Search results for keyword "hello" found in 5,200 posts.
						</div>
						<div class="row">
                        @if(isset($_GET["category"]))
                        
                        	@foreach($evenements as $e)
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="">
											<img src="{{asset('images2/news/1556552216.jpg')}}">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">{{$e->author}}</a>
											</div>
											<time>{{$e->created_at}}</time>
										</div>
										<h1><a href="">{{$e->title}}</a></h1>
										<p>
										{{$e->description}}
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
											<a class="btn btn-primary more" href="single.html">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
                            </article>
                           	@endforeach
                        @endif
                        @foreach($categories as $c)
                            @if(isset($_GET["$c->title"]))
							  
							<?php
							
							$title=$_GET["$c->title"];
							$c=mysqli_connect("localhost","root","","projetweb");
							$res=mysqli_query($c,"SELECT id FROM categories where  categories.title='$title'  ");
							while($l=mysqli_fetch_array($res))
            				{
								
								$res1=mysqli_query($c,"SELECT* FROM evenements where  category_id='$l[0]'  ");
            					while($l1=mysqli_fetch_array($res1))
            					{
                					echo("<article class='col-md-12 article-list'>
									<div class='inner'>
										<figure>
										<img src='{{asset('images2/news/13856093-20075760.jpg')}}' style='width:150px;'>	
										</figure>
										<div class='details'>
											<div class='detail'>
												<div class='category'>
													<a href='#'>$l1[3]</a>
												</div>
												<time>$l1[4]</time>
											</div>
											<h1><a href='{{route('client.details.edit',$l1[0])}}'>$l1[1]</a></h1>
											<p>
											$l1[2]
											</p>
											<footer>
												<a href='#' class='love'><i class='ion-android-favorite-outline'></i> <div>273</div></a>
												<a class='btn btn-primary more' href=''>
													<div>More</div>
													<div><i class='ion-ios-arrow-thin-right'></i></div>
												</a>
											</footer>
										</div>
									</div>
								</article>");
								}
								
           					 }
            				
							?>
							
							@endif 
						@endforeach
                           
                          
				
						</div>
					</div>
				</div>
			</div>
        </section>
        @endsection