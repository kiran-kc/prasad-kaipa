<!-- WEB NAVBAR -->
<section class="main-header">
        <nav class="navbar navbar-fixed-top navB">
            <div class="container-fluid navbar-list-item">
                <div class="navbar-header homelogo">
                    <a class="navbar-brand" href="/">
                        <img src='../images/homePage/Transparentlogo.png'>
                    </a>
                </div>    
                <ul class="nav navbar-nav">
                    <li><a href="aboutPrasad"><b>ABOUT</b></a></li>
                    <li><a href="writingsByPrasad"><b>WRITING</b></a></li>
                    <li><a href="speaking"><b>SPEAKING</b></a></li>
                    <li><a href="academia"><b>ACADEMIA</b></a></li>
                    <li><a href="getInTouch"><b>GET IN TOUCH</b></a></li>
                </ul>
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li><a><i class="fa fa-bars fa-2x toggle-button toggle"  onclick="navbarModal('connectModal')"></i></a>
                    </li>
                </ul> -->
            </div>
            <label>
                <input type='checkbox'>
                <span class='menu'>
                    <span class='hamburger'></span>
                </span>
                <div class="social-icons">
                    <a href='https://www.facebook.com/prasad.kaipa' target="_blank">
                        <img src='../images/homePage/fb.png'>
                    </a>
                    <a href='https://twitter.com/PKaipa' target="_blank"> 
                        <img src='../images/homePage/twitter.png'>
                    </a> 
                    <a href='https://www.linkedin.com/in/prasadkaipa/' target="_blank">   
                        <img src='../images/homePage/linkedin.png'>
                    </a> 
                </div>
                <ul class="centerAlign">
                    <li><a href="photography">Prasad's Photography</a></li>
                        <li><a href="learningsFromBhagavadGita">Learnings from Bhagavad Gita</a></li>
                        <li><a href="http://mithya.prasadkaipa.com/" target="_blank">Mithya Foundation</a></li>
                        <li><a href="http://selfcorp.prasadkaipa.com/" target="_blank">SelfCorp</a></li>
                        <li><a href="http://kaipagroup.com/publications/" target="_blank">Kaipa Group's Publications</a></li>
                </ul>              
            </label>
        </nav>
    </section>

    <!-- MOBILE NAVBAR -->

    <section class="main-header main-header-ab">
        <nav class="navbar navbar-fixed-top navB">
            <div class="container-fluid navbar-list-item">
                <div class="navbar-header homelogo">
                    <a class="navbar-brand" href="/">
                        <img src='../images/homePage/Transparentlogo.png'>
                    </a>
                </div>    
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fa fa-bars fa-2x toggle-button toggle"  onclick="navbarModal('mobileNav')"></i></a>
                    </li>
                </ul>
            </div>    
        </nav>
    </section>
    <!-- Navigation bar screen for web-->
    <div id="connectModal" class="modal modalNavbar" align="center" style="display:none;">
        <div class="modal-content modalNavbar-content">
            <a type="button" class="close" onclick="modelClose('connectModal')" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
            </a>
            <div class="social-icons">
                <a href='https://www.facebook.com/prasad.kaipa' target="_blank">
                    <img src='../images/homePage/fb.png'>
                </a>
                <a href='https://twitter.com/PKaipa' target="_blank"> 
                    <img src='../images/homePage/twitter.png'>
                </a> 
                <a href='https://www.linkedin.com/in/prasadkaipa/' target="_blank">   
                    <img src='../images/homePage/linkedin.png'>
                </a> 
            </div>
            <div align="center" class="nav-item">             
                <ul>
                    <li><b><a href="photography">Prasad's Photography</a></b></li>
                    <li><b><a href="learningsFromBhagavadGita">Learnings from Bhagavad Gita</a></b></li>
                    <li><b><a href="http://mithya.prasadkaipa.com/" target="_blank">Mithya Foundation</a></b></li>
                    <li><b><a href="http://selfcorp.prasadkaipa.com/" target="_blank">SelfCorp</a></b></li>
                    <li><b><a href="http://kaipagroup.com/publications/" target="_blank">Kaipa Group's Publications</a></b></li>
                </ul>              
            </div>                    
        </div>
    </div>
    <!-- Navigation bar screen for mobile-->
    <div id="mobileNav" class="modal modalNavbar2" align="center" style="display:none;">
        <div class="modal-content modalNavbar-content">
            <a type="button" class="close" onclick="modelClose('mobileNav')" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>
            <div class="social-icons">
                <a href='https://www.facebook.com/prasad.kaipa' target="_blank">
                    <img src='../images/homePage/fb.png'>
                </a>
                <a href='https://twitter.com/PKaipa' target="_blank"> 
                    <img src='../images/homePage/twitter.png'>
                </a> 
                <a href='https://www.linkedin.com/in/prasadkaipa/' target="_blank">   
                    <img src='../images/homePage/linkedin.png'>
                </a> 
            </div>
            <div align="center" class="nav-item">             
                <ul class="nav navbar-nav">
                    <li><a href="aboutPrasad"><b>ABOUT</b></a></li>
                    <li><a href="writingsByPrasad"><b>WRITING</b></a></li>
                    <li><a href="speaking"><b>SPEAKING</b></a></li>
                    <li><a href="academia"><b>ACADEMIA</b></a></li>
                    <li><a href="getInTouch"><b>GET IN TOUCH</b></a></li>
                </ul>
                <hr style="border:none;border-bottom:1px solid #535353;width:80%;" align="center">
                <ul class="nav navbar-nav">
                    <li><b><a href="photography">Prasad's Photography</a></b></li>
                    <li><b><a href="learningsFromBhagavadGita">Learnings from Bhagavad Gita</a></b></li>
                    <li><b><a href="http://mithya.prasadkaipa.com/" target="_blank">Mithya Foundation</a></b></li>
                    <li><b><a href="http://selfcorp.prasadkaipa.com/" target="_blank">SelfCorp</a></b></li>
                    <li><b><a href="http://kaipagroup.com/publications/" target="_blank">Kaipa Group's Publications</a></b></li>
                </ul>
            </div>                    
        </div>
    </div>