@extends('layouts.client')

@section('content')

<section class="single">
			<div class="container">
				<div class="row">
					<div class="col-md-4 sidebar" id="sidebar">
						<aside>
							<div class="aside-body">
								<figure class="ads">
									
									<figcaption>Advertisement</figcaption>
								</figure>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Recent Post</h1>
							<div class="aside-body">
								<article class="article-fw">
									<div class="inner">
										
										<div class="details">
											<h1><a href="single.html"><?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT title FROM evenements WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?></a></h1>
											<p>
											<?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT description FROM evenements WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?>
											</p>
											<div class="detail">
												<div class="time"><?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT created_at FROM evenements WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?></div>
											</div>
										</div>
									</div>
								</article>
								
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
					<div class="col-md-8">
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li class="active"><?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT title FROM evenements WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?></li>
						</ol>
						<article class="article main-article">
							<header>
								<h1>Evenement :<?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT title FROM evenements WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?></h1>
								<ul class="details">
									<li><p>Posté le :<?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT created_at FROM evenements WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?></p></li>
									<li><a><p>Evenement :<?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT title FROM evenements WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?></p></a></li>
									<li>By <a href="#"><?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT author FROM evenements WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
                echo $l[0];
            }
?></a></li>
								</ul>
							</header>
							<div class="main">
								<p>Description :<?php
$c=mysqli_connect("localhost","root","","projetweb");
            $res=mysqli_query($c,"SELECT description FROM evenements WHERE id ='$id'");
            while($l=mysqli_fetch_array($res))
            {
               echo $l[0];
            }
?></p>
								

								
							</div>
							
						</article>
						<div class="sharing">
						
						
						
						
						
						<div class="comments">
							
							
                        <form class="row" method="post" action="{{route('client.inscrits.store')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="col-md-12">
									<h3 class="title">Inscrivez vous</h3>
								</div>
								<div class="form-group col-md-4">
									<label for="name">Name <span class="required"></span></label>
									<input type="text"  name="name" class="form-control">
								</div>
								<div class="form-group col-md-4">
									<label for="email">Email <span class="required"></span></label>
									<input type="email"  name="email" class="form-control">
								</div>
								<div class="form-group col-md-4">
									<label >Telephone</label>
									<input  name="telephone" class="form-control">
								</div>
								<div class="form-group col-md-12">
									<label for="message">Questions <span class="required"></span></label>
									<textarea class="form-control" name="questions" placeholder="Write your response ..."></textarea>
								</div>
								<input  name="id_evenement" " type="hidden" value="{{$id}}">
								<div class="form-group col-md-12">
									<button class="btn btn-primary">S'inscrire</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection