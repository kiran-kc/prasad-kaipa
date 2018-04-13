@extends('common.master')
@section('content')
<!--====================== PRASAD KAIPA'S BOOKS SECTION ==============================-->
<section class="writings-container">
  	<div class="container-fluid">
    	<div class="row writings-header">
           <div class="pseudo-navbar"></div> 
    		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 writings-box">
    			<header>
    				<h1 align="center">BOOKS</h1>
    				<hr align="center">
    			</header>
    			<div class="row writings-mdesign">
		    		<div class="col-lg-4 col-md-5 col-sm-5 writings-book">
		    			<img src="/images/writingPage/Books/Book1.png" align="center">
		    		</div>
                    <div class="col-xs-8 col-xs-offset-2 writings-bookMobile">
                        <img src="/images/writingPage/Books/Book1.png" align="center">
                    </div>
		    		<div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 writings-content">
		    			<h2><b>You Can: Be Smarter and Wiser</b></h2> 
                        <h4><i>By Prasad Kaipa and Meera Shenoy</i></h4>
                        <h3>The real-life stories profiled in this book cover entrepreneurs ranging from some in wheel chairs to visually impaired persons who build their businesses with zest and energy. It looks at CEOs who hire youth with disability and make products for this market, because it makes business sense. And it celebrates those who have converted disability in their personal lives to an opportunity to transform other vulnerable lives.</h3> 
		    		</div>
		    	</div>
                <div class="row writings-mdesign mdRow">
                    <a href="http://www.fromsmarttowise.com/" target="_blank">
                        <div class="col-lg-4 col-md-5 col-sm-5 writings-book">
                            <img src="/images/writingPage/Books/Book2.png">
                        </div>
                        <div class="col-xs-8 col-xs-offset-2 writings-bookMobile">
                            <img src="/images/writingPage/Books/Book2.png">
                        </div>    
                        <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 writings-content">
                            <h2><b>From Smart to Wise</b></h2> 
                            <h4><i>By Prasad Kaipa and Navi Radjou</i></h4>
                            <h3>From Smart to Wise offers a new approach that balances the two styles to achieve a form of wise leadership that is both functional and smart. Drawing on inspiring real-life stories of historical and contemporary wise leaders such as Bill Gates, Warren Buffet, and even Mahatma Gandhi, the authors identify six characteristics of wise leaders and offer a practical framework to help readers develop their own style of wise leadership.</h3> 
                        </div>
                    </a>
                </div>
                <div class="row writings-mdesign mdRow">
                    <a onclick="confirmDownload('downloadModal')">
                        <div class="col-lg-4 col-md-5 col-sm-5 writings-book">
                            <img src="/images/writingPage/Books/Book3.png">
                        </div>
                        <div class="col-xs-8 col-xs-offset-2 writings-bookMobile">
                            <img src="/images/writingPage/Books/Book3.png">
                        </div>
                    </a>    
                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12 writings-content">
                        <h2><b>Discontinuous Learning: Igniting Genius Within by Aligning Self, Work, & Family (eBook)</b></h2> 
                        <h4><i>By Prasad Kaipa</i></h4>
                        <h3>In times of turbulence, a discontinuity, uncertainty and rapid change brings about a major shift in perspective. Discontinuous learning allows us to learn about ourselves, alters our mental models, and changes our relationship to the world.</h3> 
                    </div>
                </div>
    		</div>
    	</div>
    </div>

    <div class="modal" style="display:none;" id="downloadModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" onclick="modelClose('downloadModal');" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Would you like to download a free copy of this ebook and supporting material?</a></h4>
                </div>
                <div class="modal-footer">  
                    <a class="btn btn-default" id='downloadPDF' download onclick="modelClose('downloadModal');">Yes</a> 
                    <button data-dismiss="modal" class="btn btn-default" type="submit" onclick="modelClose('downloadModal');">No, thanks</button> 
                </div>
            </div>
        </div>
    </div>
</section>

<!--====================== PUBLISHED ARTICLES SECTION ==============================-->
<section class="writings-container">
    <div class="container-fluid">
         <div class="row writings-header" style="margin-top:4em;">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 writings-box">
                <header>
                    <h1 align="center">PUBLISHED ARTICLES</h1>
                    <hr align="center">
                </header>
                <!-- card 1 -->
                <div class="row writings-publishedArticle">
                    <a href="https://www.cnbc.com/id/100634625" target="_blank">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-paRow paCard1" id='articleCard1'>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 writings-logos card1">
                                <img src="/images/writingPage/PublishedArticles/CNBC.png">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 writings-content card1">
                                <h4><b>7 Business Decisions That Looked Bad but Turned Good</b></h4> 
                                <h6>By Prasad Kaipa and Navi Radjou</h6>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-hoverEffect hoverOver1">
                                <sup>
                                    <img src="/images/aboutPage/Left_Quote.png" align="left">
                                </sup>
                                <h4 align="center"><b>Make unpopular and counter-intuitive decisions.</b>
                                    <sub>
                                        <img src="/images/aboutPage/Right_Quote.png" align="right">
                                    </sub> 
                                </h4>
                            </div>
                        </div>
                    </a>      
                </div> 
                <!-- card 2 -->
                <div class="row writings-publishedArticle">
                    <a href="http://forbesindia.com/article/ivey-business-school/how-to-gain-role-clarity-and-lead-from-any-position/35563/1#ixzz2aMHBv1G0" target="_blank">    
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-paRow paCard2" id='articleCard2'>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 writings-logos card2">
                                <img src="/images/writingPage/PublishedArticles/Forbes.png">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 writings-content card2">
                                <h4><b>How to Gain Role Clarity and Lead from any Position</b></h4> 
                                <h6>By Prasad Kaipa, Navi Radjou and Sarwath Khizrana</h6>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-hoverEffect hoverOver2">
                                <sup>
                                    <img src="/images/aboutPage/Left_Quote.png" align="left">
                                </sup>
                                <h4 align="center"><b>Wise Leaders are willing to play the role of a servant or a leader based on the context.</b>
                                    <sub>
                                        <img src="/images/aboutPage/Right_Quote.png" align="right">
                                    </sub>
                                </h4>    
                            </div>
                        </div>
                    </a>          
                </div>
                <!-- card 3  --> 
                <div class="row writings-publishedArticle">
                    <a href="https://hbr.org/2013/02/how-wise-leaders-deal-with-com" target="_blank"> 
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-paRow paCard3" id='articleCard3'>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 writings-logos card3">
                                <img src="/images/writingPage/PublishedArticles/HBR.png">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 writings-content card3">
                                <h4><b>Watching Wise Leaders Deal With Complexity</b></h4> 
                                <h6>By Prasad Kaipa and Navi Radjou</h6>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-hoverEffect hoverOver3">
                                <sup>
                                    <img src="/images/aboutPage/Left_Quote.png" align="left">
                                </sup>
                                <h4 align="center"><b>When wisdom provides the ethical compass, intelligence can become even more potent.</b>
                                    <sub>
                                        <img src="/images/aboutPage/Right_Quote.png" align="right">
                                    </sub>
                                </h4>    
                            </div>
                        </div> 
                    </a>         
                </div> 
                <!-- card 4 -->
                <div class="row writings-publishedArticle">
                    <a href="https://economictimes.indiatimes.com/magazines/corporate-dossier/ayurveda-for-building-innovative-organisations/articleshow/6909645.cms" target="_blank"> 
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-paRow paCard4" id='articleCard4'>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 writings-logos card4">
                                <img src="/images/writingPage/PublishedArticles/ET.png">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 writings-content card4">
                                <h4><b>Ayurveda for Building Innovative Organizations</b></h4> 
                                <h6>By Prasad Kaipa and Navi Radjou</h6>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-hoverEffect hoverOver4">
                                <sup>
                                    <img src="/images/aboutPage/Left_Quote.png" align="left">
                                </sup>
                                <h4 align="center"><b>Ayurveda philosophy can help corporations enhance productivity and creativity</b>
                                    <sub>
                                        <img src="/images/aboutPage/Right_Quote.png" align="right">
                                    </sub>
                                </h4>    
                            </div>
                        </div>
                    </a>          
                </div> 
                <!-- card 5 -->
                <div class="row writings-publishedArticle">
                    <a href="http://fortune.com/2013/04/25/apple-and-tim-cooks-next-steps/" target="_blank"> 
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-paRow paCard5" id='articleCard5'>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 writings-logos card5">
                                <img src="/images/writingPage/PublishedArticles/Fortune.png">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 writings-content card5">
                                <h4><b>Apple and Tim Cook's next steps</b></h4> 
                                <h6>By Prasad Kaipa and John Edson</h6>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-hoverEffect hoverOver5">
                                <sup>
                                    <img src="/images/aboutPage/Left_Quote.png" align="left">
                                </sup>
                                <h4 align="center"><b>Cheap, humbled, and now disruptive. This is the vector along which Apple is going to succeed.</b>
                                    <sub>
                                        <img src="/images/aboutPage/Right_Quote.png" align="right">
                                    </sub>
                                </h4>    
                            </div>
                        </div>
                    </a>          
                </div>
                <!-- card 6 --> 
                <div class="row writings-publishedArticle">
                     <a href="http://blogs.hbr.org/cs/2012/07/recover_your_credibility.html" target="_blank"> 
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-paRow paCard6" id='articleCard6'>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 writings-logos card6">
                                <img src="/images/writingPage/PublishedArticles/HBR.png">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 writings-content card6">
                                <h4><b>Recover Your Credibility</b></h4> 
                                <h6>By Prasad Kaipa</h6>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-hoverEffect hoverOver6">
                                <sup>
                                    <img src="/images/aboutPage/Left_Quote.png" align="left">
                                </sup>
                                <h4 align="center"><b>The most effective way to start bridging the credibility gap is to be more aware of what you say.</b>
                                    <sub>
                                        <img src="/images/aboutPage/Right_Quote.png" align="right">
                                    </sub>
                                </h4>    
                            </div>
                        </div>
                    </a>          
                </div>    
            </div>
        </div>            
    </div>
</section>   	

<!--====================== RESEARCH PAPERS SECTION ==============================-->
<section class="writings-container">
    <div class="container-fluid">
         <div class="row writings-header" style="margin-top:4em;">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 writings-box">
                <header>
                    <h1 align="center">RESEARCH PAPERS</h1>
                    <hr align="center">
                </header>
                <div class="col-lg-offset-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 writings-box">
                    <a class="writings-seemore" href='#physicsResearch' id="seeMore" data-toggle="collapse">
                        <i class="fa fa-angle-double-down" aria-hidden="true"></i> Physics Research
                    </a>
                    <a class="writings-seeless" href='#physicsResearch' id="seeLess" data-toggle="collapse">
                        <i class="fa fa-angle-double-up" aria-hidden="true"></i> Physics Research
                    </a>
                    <hr align="center"> 
                </div>
                <div id='physicsResearch' class="collapse">    
                    <!-- card 7  --> 
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/15061658_Thermoluminescence_Measurements_of_Gamma-ray_Doses_Attributable_to_Fallout_from_the_Nevada_Test_Site_Using_Building_Bricks_As_Natural_Dosimeters" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard7" id='ResearchPaper7'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper7">
                                    <h4><b>Thermoluminescence Measurements of Gamma-ray Doses Attributable to Fallout from the Nevada Test Site Using Building Bricks As Natural Dosimeters</b></h4> 
                                    <h6 class="researchCard">By E. H. Haskell, Ian K. Bailiff, G. H. Kenner, Prasad Kaipa and M. E. Wrenn</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver7">
                                    <h4 align="center"><b>Health Physics 66(4):380-91 1994</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div> 
                    <!-- card 8 -->
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/243617352_Pre-dose_TL_characteristics_of_quartz_inclusions_removed_from_bricks_exposed_to_fallout_radiation_from_atmospheric_testing_at_the_Nevada_Test_Site" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard8" id='ResearchPaper8'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper8">
                                    <h4><b>Pre-dose TL characteristics of quartz inclusions removed from bricks exposed to fallout radiation from atmospheric testing at the Nevada Test Site</b></h4> 
                                    <h6 class="researchCard">By E.H. Haskell, Prasad Kaipa and M.E. Wrenn</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver8">
                                    <h4 align="center"><b>International Journal of Radiation Applications and Instrumentation Part D Nuclear Tracks and Radiation Measurements 14(1-2):113-120 1988</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div> 
                    <!-- card 9  --> 
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/243617369_Beta_dose_attenuation_and_calculations_of_effective_grainsize_in_brick_samples" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard9" id='ResearchPaper9'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper9">
                                    <h4><b>Beta dose attenuation and calculations of effective grainsize in brick samples</b></h4> 
                                    <h6 class="researchCard">By Prasad Kaipa, E.H. Haskell, and G.H. Kenner</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver9">
                                    <h4 align="center"><b> International Journal of Radiation Applications and Instrumentation Part D Nuclear Tracks and Radiation Measurements 14(1-2):215-217 · December 1988</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div> 
                    <!-- card 10 -->
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/243617369_Beta_dose_attenuation_and_calculations_of_effective_grainsize_in_brick_samples" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard10" id='ResearchPaper10'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper10">
                                    <h4><b>Thermoluminescence measurements of gamma rays</b></h4> 
                                    <h6 class="researchCard">By T. Maruyama, Y. Kumamoto, Y. Ichikawa, Takashi Nagatomo, Masaharu Hoshi, E. Haskell, Prasad Kaipa</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver10">
                                    <h4 align="center"><b>Japan: The Radiation Effects Research Foundation</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div>  
                    <!-- card 11  --> 
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/222014843_Environmental_and_accident_dosimetry_using_the_pre-dose_TL_technique" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard11" id='ResearchPaper11'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper11">
                                    <h4><b>Environmental and accident dosimetry using the pre-dose TL technique</b></h4> 
                                    <h6 class="researchCard">By E.H. Haskell, Prasad Kaipa, M.E. Wrenn</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver11">
                                    <h4 align="center"><b>Nuclear Tracks and Radiation Measurements (1982) 10(4-6):513-516 · December 1985</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div> 
                    <!-- card 12 -->
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/222595074_In_situ_dosimetry_using_the_sensitized_210C_TL_peak_of_quartz" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard12" id='ResearchPaper12'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper12">
                                    <h4><b>In situ dosimetry using the sensitized 210°C TL peak of quartz</b></h4> 
                                    <h6 class="researchCard">By Prasad Kaipa and E.H. Haskell</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver12">
                                    <h4 align="center"><b>Nuclear Tracks and Radiation Measurements (1982) 10(4-6):621-623 · December 1985</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div>  
                    <!-- card 13  --> 
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/13352424_Two_fully_bleachable_zero-phonon-line_defects_in_NaF_Possible_candidates_for_highly_efficient_photochemical_hole_burning" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard13" id='ResearchPaper13'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper13">
                                    <h4><b>Two fully bleachable zero-phonon-line defects in NaF: Possible candidates for highly efficient photochemical hole burning</b></h4> 
                                    <h6 class="researchCard">By Prasad Kaipa and Fritz Lüty</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver13">
                                    <h4 align="center"><b>Physical review. B, Condensed matter 32(2):1264-1269 · August 1985</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div> 
                    <!-- card 14 -->
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/13352425_High-efficiency_photochemical_hole_burning_for_an_infrared_color_center" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard14" id='ResearchPaper14'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper14">
                                    <h4><b>High-efficiency photochemical hole burning for an infrared color center</b></h4> 
                                    <h6 class="researchCard">By William Esco Moerner, Frank Schellenberg, G. C. Bjorklund, Prasad Kaipa and Fritz Lüty</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver14">
                                    <h4 align="center"><b>Physical review. B, Condensed matter 32(2):1270-1277 · August 1985</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div>
                    <!-- card 15 -->
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/252528047_High-sensitivity_spectral_hole_burning_A" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard15" id='ResearchPaper15'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper15">
                                    <h4><b>High-sensitivity spectral hole burning (A)</b></h4> 
                                    <h6 class="researchCard">By William Esco Moerner, Gary C. Bjorklund, G. Castro, A. Gutierrez, Prasad Kaipa, Fritz Luty, Frank Schellenberg</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver15">
                                    <h4 align="center"><b>Journal of the Optical Society of America 73 · January 1983</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div>
                </div>

                <!-- Management and Leadership Research -->
                <div class="col-lg-offset-2 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 writings-box">     
                    <a class="writings-seemore" href='#MgmtLeadership' class="seeLess" data-toggle="collapse">
                        <i class="fa fa-angle-double-up" aria-hidden="true"></i> Management and Leadership Research
                    </a>
                    <a class="writings-seeless" href='#MgmtLeadership' class="seeMore" data-toggle="collapse">
                        <i class="fa fa-angle-double-down" aria-hidden="true"></i> Management and Leadership Research
                    </a> 
                    <hr align="center">
                </div>
                <div id='MgmtLeadership' class="collapse in" area-extended='true'>
                    <!-- card 1 -->    
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/273170165_Making_wise_decisions_Leadership_lessons_from_Mahabharata" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow writings-researchPaper rpCard1" id='ResearchPaper1'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper1">
                                    <h4><b>Making wise decisions: Leadership lessons from Mahabharata</b></h4> 
                                    <h6 class="researchCard">By Prasad Kaipa</h6>
                                </div>
                                 <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver1">
                                    <h4 align="center"><b>Journal of Management Development Vol. 33, No. 8/9 2014</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div> 
                    <!-- card 2 -->
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/279172664_Examining_the_relevance_of_Yamas_and_Niyamas_to_Toyota" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard2" id='ResearchPaper2'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper2">
                                    <h4><b>Examining the relevance of Yamas and Niyamas to Toyota</b></h4> 
                                    <h6 class="researchCard">By ChandrasekaharPrasad Vemuri and Prasad Kaipa</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver2">
                                    <h4 align="center"><b>International Journal of Yoga - Philosophy, Psychology and Parapsychology, Vol. 2 2014</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div>
                    <!-- card 3  --> 
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/257809573_The_Impact_of_a_Firm%27s_Financial_Flexibility_on_its_Strategic_Renewal_Key_Concepts_with_Evidential_Support_from_Businesses_Across_Industries" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard3" id='ResearchPaper3'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper3">
                                    <h4><b>The Impact of a Firm’s Financial Flexibility on its Strategic Renewal: Key Concepts with Evidential Support from Businesses Across Industries</b></h4> 
                                    <h6 class="researchCard">By S. Balasubrahmanyam, Prasad Kaipa and Katte Akhilesh</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver3">
                                    <h4 align="center"><b>Global Journal of Flexible Systems Management 13(3) 2013</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div> 
                    <!-- card 4 -->
                     <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/247736110_Empowerment_Vision_and_Positive_Leadership_An_Interview_With_Alan_Mulally_Former_CEO_Boeing_Commercial-Current_CEO_Ford_Motor_Company" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard4" id='ResearchPaper4'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper4">
                                    <h4><b>Empowerment, Vision, and Positive Leadership: An Interview With Alan Mulally, Former CEO, Boeing Commercial—Current CEO, Ford Motor Company</b></h4> 
                                    <h6 class="researchCard">By Prasad Kaipa and Mark Kriger</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver4">
                                    <h4 align="center"><b>Journal of Management Inquiry 19(2):110-115 2010</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div>
                    <!-- card 5 -->
                    <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/249064076_The_inner_sides_of_leadership_and_lessons_from_the_East_an_interview_with_Peter_Senge" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard5" id='ResearchPaper5'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper5">
                                    <h4><b>The inner sides of leadership and lessons from the East: an interview with Peter Senge</b></h4> 
                                    <h6 class="researchCard">By Prasad Kaipa and Mark Kriger</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver5">
                                    <h4 align="center"><b>Journal of Management Spirituality & Religion 6(3):183-193 2009</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div> 
                    <!-- card 6 -->
                     <div class="row writings-researchPapers">
                        <a href="https://www.researchgate.net/publication/247494897_Knowledge_architecture_for_the_twenty-first_century" target="_blank">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 writings-rpRow rpCard6" id='ResearchPaper6'>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 writings-content rPaper6">
                                    <h4><b>Knowledge architecture for the twenty-first century</b></h4> 
                                    <h6 class="researchCard">By Prasad Kaipa</h6>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-8 col-xs-8 writings-rpHover rpHoverOver6">
                                    <h4 align="center"><b>Behaviour and Information Technology 19(3):153-161 2000</b></h4> 
                                </div>
                            </div>
                        </a>      
                    </div>
                </div>      
            </div>
        </div>            
    </div>
</section>
<script type="text/javascript" src="/js/writings.js"></script>

@stop