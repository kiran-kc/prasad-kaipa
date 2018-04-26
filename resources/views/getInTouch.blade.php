@extends('common.master')
@section('content')
	<section class="container-fluid">
		<div class="row git-container pseudo-navbar">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 git-heroImg">
				<div class="row git-gradientImg">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 git-heroHeading">
						<h1 align="center">GET IN TOUCH</h1>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 git-heroContent">
						<h2 align="center" class="topH2"><i class="fa fa-phone"></i>&nbsp;&nbsp; +1 (408)-786-5247</h2>
						<h2 align="center"><i class="fa fa-envelope"></i>&nbsp;&nbsp; prasad@kaipagroup.com</h2>
					</div>
				</div>
				<div class="row git-content">
					<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 git-headline">
						<h2>A few ways in which Prasad can help you...</h2>
					</div>
					<div class="row git-cards">
						<div class="col-lg-3 col-lg-offset-1 cardArea " style="border:1px solid red;">
							<h4 style="border:1px solid red;"><b>SAGE ON THE STAGE</b></h4>
							<div style="border:1px solid green;" class="number1">
<h5 style="border:1px solid red;">As a 'sage on the stage', Prasad delivers keynotes and workshops in addition to being a business educator. He helps individuals and students ignite their own genius.</h5>
</div>
						</div>
						<div class="number1"></div>
						<div class="col-lg-3 number2" style="margin-right:4.5em;margin-left:4.5em;height:300px;background-color:white;">
							<div></div>
						</div>
						<div class="col-lg-3 number3" style="height:300px;background-color:white;"></div>
					</div>
					<!-- Contact form -->
					<div class="git-contactForm">
				        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 git-formArea">
				            <div class="row">
				               <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 git-para">
				                  <h2><b>Sign Up!</b></h2>
				               </div>
				            </div>
				            <div class="row">
				               <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-11 col-xs-offset-1 git-para">
				                  <h3>Join our robust community to receive our newsletter and stay informed about latest news and events.</h3>
				                  <h3>There is a great start to your journey of inner growth.</h3>
				               </div>
				               <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 form-group git-inputs">
				                  <input type="text" name="name" class="form-control" placeholder="Name">
				                  <input type="email" name="email" class="form-control" placeholder="Email">
				                  <input type="submit" name="submit" class="form-control submitBtn" placeholder="Submit">
				               </div>  
				            </div>
				        </div>
			      	</div>
				</div>
			</div>
		</div>
	</section>
@stop