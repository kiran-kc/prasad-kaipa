@extends('common.master')
@section('content')
<!-- Home Page hero section -->
    <section class="hp-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hp-heroImg">
                    <img src="/images/homePage/Heroimage.png"/>
                </div>
            </div>
            <div class="row hp-showcase">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row hp-flexCard">
                        <div class="col-lg-3 col-md-3 col-sm-3 hp-card">
                            <a href="writings.html">
                                <img src='/images/homePage/Writing.jpg'>
                                <h2 align="center">Writing</h2>
                                <h3 align="center">Explore a repository of Prasad's books, research papers, articles and blogs. Topics range from physics to management and leadership.</h3> 
                                <p align="center">Know More</p>  
                            </a>  
                        </div>  
                        <div class="col-lg-3 col-md-3 col-sm-3 hp-card">
                            <a href="speaking.html"> 
                                <img src='/images/homePage/Videos.jpg'>
                                <h2 align="center">Videos</h2>
                                <h3 align="center">Collection of keynote speeches, interviews, lectures and leadership sessions hosted by Prasad.</h3>
                                <p align="center">Know More</p>
                            </a>
                        </div>    
                        <div class="col-lg-3 col-md-3 col-sm-3 hp-card">
                            <a href="academia.html">
                                <img src='/images/homePage/Academia.jpg'>
                                <h2 align="center">Academia</h2>
                                <h3 align="center">As a business educator, Prasad has taught a variety of leadership, change management, creativity and innovation topics.</h3>
                                <p align="center">Know More</p>
                            </a>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="row hp-socialIcon">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 hp-flexIcons">
                    <a href='https://www.facebook.com/prasad.kaipa' target="_blank">
                        <div class="col-lg-2 col-md-2 col-md-offset-4 col-sm-2 col-sm-offset-3 col-xs-2 col-xs-offset-1 hp-area">
                            <img src='/images/homePage/fb.png'>
                        </div>
                    </a> 
                    <a href='https://twitter.com/PKaipa' target="_blank"> 
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hp-area">
                            <img src='/images/homePage/twitter.png'>
                        </div>
                    </a>  
                    <a href='https://www.linkedin.com/in/prasadkaipa/' target="_blank">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 hp-area">
                            <img src='/images/homePage/linkedin.png'>
                        </div>
                    </a>
                </div>  
            </div>
            <form method="post" action="newsletter.php" id="newsLetter">
                <div class="row hp-contactForm">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 hp-formArea">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 hp-para">
                                <h2><b>Sign Up!</b></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-11 col-xs-offset-1 hp-para">
                                <h3>Join our robust community to receive our newsletter and stay informed about latest news and events.</h3>
                                <h3>This is a great start to your journey of inner growth.</h3>
                            </div>
                            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1 form-group hp-inputs">
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
