@extends('layouts.client')

@section('content')
<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						
						<div class="owl-carousel owl-theme slide" id="featured">
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ asset('images2/news/img04.jpg') }}" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">Choose the category of your Event</a></div>
										
										<div class="time">December 26, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ asset('images2/news/img14.jpg') }}" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">Travel</a></div>
										<h1><a href="single.html">Class aptent taciti sociosqu ad litora torquent per conubia nostra</a></h1>
										<div class="time">December 10, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ asset('images2/news/img13.jpg') }}" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">International</a></div>
										<h1><a href="single.html">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
										<div class="time">October 12, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ asset('images2/news/img05.jpg') }}" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category"><a href="category.html">Lifestyle</a></div>
										<h1><a href="single.html">Mauris elementum libero at pharetra auctor Fusce ullamcorper elit</a></h1>
										<div class="time">November 27, 2016</div>
									</div>
								</article>
							</div>
						</div>
						<div class="line">
							<div>Categories</div>
						</div>
						<div class="row">
						@foreach($categories as $c)
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="">
													<img src="{{asset('images2/news/cropped-evenemendaujourdhui.png')}}" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 10, 2016</div>
													
												</div>
												<h2><a href="{{route('client.evenements.edit',$c->id)}}">{{$c->title}}</a></h2>
												
												
											</div>
										</div>
									</article>
									
								</div>
							</div>
						@endforeach	
						</div>
						
						<div class="banner">
							<a href="#">
								<img src="{{ asset('images2/ads.png') }}" alt="Sample Article">
							</a>
						</div>
						<div class="line transparent little"></div>
						
						
						
					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
						<div class="sidebar-title for-tablet">Sidebar</div>
						<aside>
							<div class="aside-body">
								<div class="featured-author">
									<div class="featured-author-inner">
										<div class="featured-author-cover" style="background-image: url('images/news/img15.jpg');">
											<div class="badges">
												<div class="badge-item"><i class="ion-star"></i> Featured</div>
											</div>
											<div class="featured-author-center">
												<figure class="featured-author-picture">
													<img src="{{ asset('images2/img01.jpg') }}" alt="Sample Article">
												</figure>
												<div class="featured-author-info">
													<h2 class="name">John Doe</h2>
													<div class="desc">@Badr Eddine Sidia</div>
												</div>
											</div>
										</div>
										<div class="featured-author-body">
											<div class="featured-author-count">
												<div class="item">
													<a href="#">
														<div class="name">Posts</div>
														<div class="value">208</div>														
													</a>
												</div>
												<div class="item">
													<a href="#">
														<div class="name">Stars</div>
														<div class="value">3,729</div>														
													</a>
												</div>
												<div class="item">
													<a href="#">
														<div class="icon">
															<div>More</div>
															<i class="ion-chevron-right"></i>
														</div>														
													</a>
												</div>
											</div>
											<div class="featured-author-quote">
												
											</div>
											<div class="block">
												<h2 class="block-title">Photos</h2>
												<div class="block-body">
													<ul class="item-list-round" data-magnific="gallery">
														<li><a href="{{ asset('images2/news/img06.jpg') }}" style="background-image: url('images/news/img06.jpg');"></a></li>
														<li><a href="{{ asset('images2/news/img07.jpg') }}" style="background-image: url('images/news/img07.jpg');"></a></li>
														<li><a href="{{ asset('images2/news/img08.jpg') }}" style="background-image: url('images/news/img08.jpg');"></a></li>
														<li><a href="{{ asset('images2/news/img09.jpg') }}" style="background-image: url('images/news/img09.jpg');"></a></li>
														<li><a href="{{ asset('images2/news/img10.jpg') }}" style="background-image: url('images/news/img10.jpg');"></a></li>
														<li><a href="{{ asset('images2/news/img11.jpg') }}" style="background-image: url('images/news/img11.jpg');"></a></li>
														<li><a href="{{ asset('images2/news/img12.jpg') }}" style="background-image: url('images/news/img12.jpg');"><div class="more">+2</div></a></li>
														<li class="hidden"><a href="{{ asset('images2/news/img13.jpg') }}" style="background-image: url('images/news/img13.jpg');"></a></li>
														<li class="hidden"><a href="{{ asset('images2/news/img14.jpg') }}" style="background-image: url('images/news/img14.jpg');"></a></li>
													</ul>
												</div>
											</div>
											<div class="featured-author-footer">
												<a href="#">See All Authors</a>
											</div>
										</div>
									</div>
								</div>
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
@endsection
