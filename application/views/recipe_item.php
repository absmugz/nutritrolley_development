<h3 class="sectionheading"><?php echo $recipe->recipe; ?></h3>

<div class="row row-no-margin">
    <div class="col-md-12 natural_healing">

        <div class="row">
            <div class="col-md-8 no-padding-five">


                <div id="myRecipe" class="carousel slide" data-interval="3000" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myRecipe" data-slide-to="0" class="active"></li>
                        <li data-target="#myRecipe" data-slide-to="1"></li>
                        <li data-target="#myRecipe" data-slide-to="2"></li>
                    </ol>   
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <img src = "<?= base_url('uploads/' . $recipe->main_image_1); ?>" class="img-responsive"/>
                        </div>
                        <div class="item">
                            <img src = "<?= base_url('uploads/' . $recipe->main_image_2); ?>" class="img-responsive"/>
                        </div>
                        <div class="item">
                            <img src = "<?= base_url('uploads/' . $recipe->main_image_3); ?>" class="img-responsive"/>
                        </div>
                    </div>
                    <!-- Carousel nav -->

                </div>
                <!-- Place somewhere in the <body> of your page -->


            </div>
            <div class="col-md-4 no-padding-five">


                <section class="ac-container">
                    <div>
                        <input id="ac-1" name="accordion-1" type="checkbox" />
                        <label for="ac-1">Directions</label>
                        <article class="ac-small">
                            <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
                        </article>
                    </div>
                    <div>
                        <input id="ac-2" name="accordion-1" type="checkbox" />
                        <label for="ac-2">Nutrition</label>
                        <article class="ac-medium">
                            <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                        </article>
                    </div>
                    <div>
                        <input id="ac-3" name="accordion-1" type="checkbox" />
                        <label for="ac-3">Burn it!</label>
                        <article class="ac-large">
                            <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
                        </article>
                    </div>
                    <div>
                        <input id="ac-4" name="accordion-1" type="checkbox" />
                        <label for="ac-4">Buck Saver</label>
                        <article class="ac-large">
                            <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
                        </article>
                    </div>
                    <div>
                        <input id="ac-4" name="accordion-1" type="checkbox" />
                        <label for="ac-4">Analyst</label>
                        <article class="ac-large">
                            <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
                        </article>
                    </div>
                </section>



            </div>
        </div>


    </div>
</div>
