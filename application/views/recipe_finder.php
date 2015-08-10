
<h3 class="sectionheading">Recipes recommended for you:</h3>

<div class="row row-no-margin">
    <div class="col-md-12 natural_healing">
        <div class="recipefinderH6Header"><strong>Based on your preferences and profile, we found (62) recipes:</strong></div>
<div id="myCarousel" class="carousel slide">
<!-- Carousel items -->
            <div class="carousel-inner">

                <?php
                $open = 0;
                $close = 1;
                $active = 0;
                $didClose = false;
                $caseStudies = array("Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo");
                foreach ($caseStudies as $caseStudy) {



                    $activeCss = "";

                    if (($open) % 5 == 0) {
                        if ($active == 0)
                            $activeCss = " active";
                        echo '<div class="item' . $activeCss . '">';
                    }
                    ?>



                    <div class="col-md-3 recipecarouselthumb">
                        
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

                                <img src="http://placehold.it/122x122" />
                                <div class="Recipethumbnail_rating"><div class="star"></div></div>
                                <div class="Recipethumbnail_caption_HP text-center">This is the title</div>
                            </div>
                        </div>
                    </div>

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

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div><!--/myCarousel-->

        <!--/caption-->
        <div class="cat_caption">
            <div class="row">
                <div class="col-md-6"><div class="H6Header"><strong>Recipes based on your preferences and profile</strong></div></div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <!-- Indicates a successful or positive action -->
                    <button class="btn btn-success" type="button">Pot Luck</button>

                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button class="btn btn-primary" type="button">Recipe Wizard</button>
                </div>

            </div>              
        </div>
        <!--/caption-->

    </div>
</div>


<div class="row row-no-margin">
    <div class="col-md-12 all_recipes">
 <ul class="taxanomy_anchors_list">
            <li class="all_anchor active"><a class="all" href="#">All</a></li> 
            <li class="Budget"><a class="budget" href="#">Budget <i class="icon-angle-down"></i></a></li> 
            <li class="Cuisine"><a class="cuisine" href="#">Cuisine <i class="icon-angle-down"></i></a></li> 
            <li class="Diet"><a class="diet" href="#">Diet <i class="icon-angle-down"></i></a></li> 
            <li class="Meal"><a class="meal" href="#">Meal <i class="icon-angle-down"></i></a></li> 
        </ul> 
        
        

 
 <div class="row row-no-margin">
    <div class="col-md-12 all_recipes_categories">
         <!-- Budget recipes: (prices are per serving) -->
        <div class="recipefinderH6HeadermyBudget"><strong>Budget recipes: (prices are per serving)</strong></div>
        <div id="myBudget" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">

                <?php
                $open = 0;
                $close = 1;
                $active = 0;
                $didClose = false;
                $caseStudies = array("Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo");
                foreach ($caseStudies as $caseStudy) {



                    $activeCss = "";

                    if (($open) % 5 == 0) {
                        if ($active == 0)
                            $activeCss = " active";
                        echo '<div class="item' . $activeCss . '">';
                    }
                    ?>



                    <div class="col-md-3 recipecarouselthumb">
                        
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

                                <img src="http://placehold.it/122x122" />
                                <div class="Recipethumbnail_rating"><div class="star"></div></div>
                                <div class="Recipethumbnail_caption_HP text-center">This is the title</div>
                            </div>
                        </div>
                    </div>

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

            <a class="left carousel-control" href="#myBudget" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myBudget" data-slide="next">›</a>
        </div><!--/myCarousel--></div>
        <!-- Budget recipes: (prices are per serving) -->       

      <hr class="style3recipefinder"> 
       <div class="recipefinderH6HeadermyMeal"><strong>Type of meal:</strong></div>
      <div id="myMeal" class="carousel slide">
<!-- Carousel items -->
            <div class="carousel-inner">

                <?php
                $open = 0;
                $close = 1;
                $active = 0;
                $didClose = false;
                $caseStudies = array("Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo");
                foreach ($caseStudies as $caseStudy) {



                    $activeCss = "";

                    if (($open) % 5 == 0) {
                        if ($active == 0)
                            $activeCss = " active";
                        echo '<div class="item' . $activeCss . '">';
                    }
                    ?>



                    <div class="col-md-3 recipecarouselthumb">
                        
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

                                <img src="http://placehold.it/122x122" />
                                <div class="Recipethumbnail_rating"><div class="star"></div></div>
                                <div class="Recipethumbnail_caption_HP text-center">This is the title</div>
                            </div>
                        </div>
                    </div>

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

            <a class="left carousel-control" href="#myMeal" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myMeal" data-slide="next">›</a>
      </div><!--/myCarousel--></div>
 
    <hr class="style3recipefinder"> 
       <div class="recipefinderH6HeadermyDiet"><strong>Diet-specific recipes:</strong></div>
      <div id="myDiet" class="carousel slide">
<!-- Carousel items -->
            <div class="carousel-inner">

                <?php
                $open = 0;
                $close = 1;
                $active = 0;
                $didClose = false;
                $caseStudies = array("Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo");
                foreach ($caseStudies as $caseStudy) {



                    $activeCss = "";

                    if (($open) % 5 == 0) {
                        if ($active == 0)
                            $activeCss = " active";
                        echo '<div class="item' . $activeCss . '">';
                    }
                    ?>



                    <div class="col-md-3 recipecarouselthumb">
                        
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

                                <img src="http://placehold.it/122x122" />
                                <div class="Recipethumbnail_rating"><div class="star"></div></div>
                                <div class="Recipethumbnail_caption_HP text-center">This is the title</div>
                            </div>
                        </div>
                    </div>

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

            <a class="left carousel-control" href="#myDiet" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myDiet" data-slide="next">›</a>
      </div><!--/myCarousel--></div>
 
    <hr class="style3recipefinder"> 
       <div class="recipefinderH6HeadermyTheme"><strong>Theme-related recipes:</strong></div>
      <div id="myTheme" class="carousel slide">
<!-- Carousel items -->
            <div class="carousel-inner">

                <?php
                $open = 0;
                $close = 1;
                $active = 0;
                $didClose = false;
                $caseStudies = array("Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo");
                foreach ($caseStudies as $caseStudy) {



                    $activeCss = "";

                    if (($open) % 5 == 0) {
                        if ($active == 0)
                            $activeCss = " active";
                        echo '<div class="item' . $activeCss . '">';
                    }
                    ?>



                    <div class="col-md-3 recipecarouselthumb">
                        
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

                                <img src="http://placehold.it/122x122" />
                                <div class="Recipethumbnail_rating"><div class="star"></div></div>
                                <div class="Recipethumbnail_caption_HP text-center">This is the title</div>
                            </div>
                        </div>
                    </div>

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

            <a class="left carousel-control" href="#myTheme" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myTheme" data-slide="next">›</a>
      </div><!--/myCarousel--></div>

 <hr class="style3recipefinder"> 
       <div class="recipefinderH6HeadermyTypes"><strong>Types of cuisines:</strong></div>
      <div id="myTypes" class="carousel slide">
<!-- Carousel items -->
            <div class="carousel-inner">

                <?php
                $open = 0;
                $close = 1;
                $active = 0;
                $didClose = false;
                $caseStudies = array("Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo", "Volvo", "BMW", "Toyota", "Volvo");
                foreach ($caseStudies as $caseStudy) {



                    $activeCss = "";

                    if (($open) % 5 == 0) {
                        if ($active == 0)
                            $activeCss = " active";
                        echo '<div class="item' . $activeCss . '">';
                    }
                    ?>



                    <div class="col-md-3 recipecarouselthumb">
                        
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

                                <img src="http://placehold.it/122x122" />
                                <div class="Recipethumbnail_rating"><div class="star"></div></div>
                                <div class="Recipethumbnail_caption_HP text-center">This is the title</div>
                            </div>
                        </div>
                    </div>

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

            <a class="left carousel-control" href="#myTypes" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myTypes" data-slide="next">›</a>
      </div><!--/myCarousel--></div>

 
 </div>
      
</div></div>

    
    </div>


</div>