<div id="slider1_container" style="margin-top: 15px ! important;display: none; position: relative; margin: 0 auto; width: 755px; height: 390px; overflow: hidden;"> 

    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

             background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"> </div>
        <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

             top: 0px; left: 0px;width: 100%;height:100%;"> </div>
    </div>

    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: -15px; width: 755px; height: 390px;
         overflow: hidden;">
        <div> <img u="image" src2="<?= base_url('public/img/slide-1.png') ?>"  /> <div class="slider_caption">
                <span id="header_caption_green"><strong>Dinah’s Pizza-Stuffed Eggplants</strong></span><br>
                <span id="description_caption_gry">Prep Time: 20 min, Cook Time: 35 min, Serves: 4, <span id="description_caption_blue"> Avg Price: R77</span></span>
            </div></div>
        <div> <img u="image" src2="<?= base_url('public/img/slide-2.png') ?>" /><div class="slider_caption">
                <span id="header_caption_green"><strong>Dinah’s Pizza-Stuffed Eggplants</strong></span><br>
                <span id="description_caption_gry">Prep Time: 20 min, Cook Time: 35 min, Serves: 4, <span id="description_caption_blue"> Avg Price: R77</span></span>
            </div> </div>
        <div> <img u="image" src2="<?= base_url('public/img/slide-3.png') ?>" /> <div class="slider_caption">
                <span id="header_caption_green"><strong>Dinah’s Pizza-Stuffed Eggplants</strong></span><br>
                <span id="description_caption_gry">Prep Time: 20 min, Cook Time: 35 min, Serves: 4, <span id="description_caption_blue"> Avg Price: R77</span></span>
            </div></div>

    </div>


    <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;"> 
        <!-- bullet navigator item prototype -->
        <div u="prototype"></div>
    </div>

    <!-- Arrow Left --> 
    <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;"> </span> 
    <!-- Arrow Right --> 
    <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;"> </span> 
    <!--#endregion Arrow Navigator Skin End --> 
</div>
<div class="row">
    <div class="row">
        <div class="col-md-12">
            <div class="HomepageHeader"><strong>and for tonight, what will it be?</strong></div>
            
            <div class="col-md-8 tabContainerInner">
                
                <div class="HomepageHeaderPopular"><strong>Most popular recipes this week:</strong></div>
                
                
    
                       <div id="myHome" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">

                <?php
                $open = 0;
                $close = 1;
                $active = 0;
                $didClose = false;
                //$caseStudies = array("Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo");
                foreach ($recipes as $caseStudy) {



                    $activeCss = "";

                    if (($open) % 5 == 0) {
                        if ($active == 0)
                            $activeCss = " active";
                        echo '<div class="item' . $activeCss . '">';
                    }
                    ?>



                    <a href="<?php echo ('recipefinder/view/' . $caseStudy->id ); ?>"><div class="col-md-3 recipecarouselthumbHome">
                        
                    <div class="RecipeContainer float">
                            <div class="Recipethumbnail">
                                <!-- caption --> 
                                <div class="caption">
                                    <p class="short_thumbnail_description">This delicious grilled chicken salad on a bed of lettuce is an all-time favourite. Quick and easy and so cheap!</p>
                                    <p class="average_price">Average price per serving: R55</p>
                                    <ul class="iconlist">
                                        <li class="pdf"><span data-toggle="tooltip" data-placement="right" title="Adds to favourite"></span></li>
                                        <li class="doc"><span data-toggle="tooltip" data-placement="top" title="Adds Shopping list or Meal Planner"></span></li>
                                        <li class="text"><span data-toggle="tooltip" data-placement="top" title="Takes you to recipe"></span></li>
                                    </ul>
                                </div>
                                <!-- caption --> 

                                
                                 <img src="<?= base_url('uploads/' . $caseStudy->thumbnail); ?>" />
                                <div class="Recipethumbnail_rating"><div class="star"></div></div>
                                <div class="Recipethumbnail_caption_HP text-center"><?php echo $caseStudy->recipe; ?></div>
                            </div>
                        </div>
                        </div></a>

                    <?php
                    if (($close) % 5 == 0) {
                        echo "</div>";
                        $didClose = true; // Maybe the carousel has less than 4 items ...
                    }

                    $open++;
                    $close++;
                    $active++;
                }
                if ($didClose == false)
                    echo "</div></div>"; // If has less than 4 items in the carousel close the tags.
                ?>

            </div>
            <!--/carousel-inner-->

            <a class="left carousel-control" href="#myHome" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myHome" data-slide="next">›</a>
        </div><!--/myCarousel-->
                
                
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
</div>