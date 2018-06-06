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
						<a align="center" href="mailto:prasad@kaipagroup.com" target="_blank"><i class="fa fa-envelope"></i>&nbsp;&nbsp; prasad at kaipagroup dot com</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container-fluid git-container">		
		<div class="row git-content">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 git-headline">
				<h2>A few ways in which Prasad can help you...</h2>
			</div>
		</div>	
		<div class="row git-content">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="left">			
				<div class="row git-cards" style="margin:0 padding:0;" align="left">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 cardArea">
						<h3><b>SAGE ON THE STAGE</b></h3>
						<div class="number1">
							<h4>As a 'sage on the stage', Prasad delivers keynotes and workshops in addition to being a business educator. He helps individuals and students ignite their own genius.</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 cardArea">
						<h3><b>GUIDE ON THE SIDE</b></h3>
						<div class="number2">
							<h4>Prasad's role as a 'guide on the side' allows him to look for ways to evoke one's wisdom in the capacity of an executive coach and mentor.</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8 cardArea">
						<h3><b>PLAYER ON THE FIELD</b></h3>
						<div class="number3">
							<h4>In an adviser and consultant role, Prasad extends the thinking, creativity and innovation capacities of his clients by becoming a part of their team, as a 'player on the field'.</h4>
						</div>
					</div>
				</div>
			</div>
            <form method="post" action="newsletter.php">
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
                                <h3>This is a great start to your journey of inner growth.</h3>
                            </div>
                            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 form-group git-inputs">
                                <input type="text" name="userName" class="form-control" placeholder="Name" pattern="^[A-Za-z\ \s-]+">
                                <input type="email" name="userEmail" class="form-control" placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-zA-Z]{2,3}$" required>
                                <button type="submit" name="submit" class="form-control submitBtn" placeholder="Submit">Submit</button>
                            </div>  
                        </div>
                    </div>
                </div>
            </form>
	    </div>
	</section>
@stop