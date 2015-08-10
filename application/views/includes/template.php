<?php $this->load->view('includes/header'); ?>
<!-- Main Content area tabs -->
<div class="row row-no-margin">
    <div class="col-md-12 bhoechie-tab-container">
        <div class="row row-no-margin">
            <div class="col-md-1 col-md-1-nutri">
               
                <div class="menu_simple text-center">
      <ul>
        <li id="HomeIcon">
            
            <a href="<?php echo site_url('Home') ?>" class="<?php if($this->uri->segment(1)=="Home"){echo "active";}?>"><span class="icons-nav-list"></span><span class="center-block text-icon">Home</span></a>
        </li>
        <li id="RecipeIcon"><a href="<?php echo site_url('Recipefinder') ?>" class="<?php if($this->uri->segment(1)=="Recipefinder"){echo "active";}?>"><span class="icons-nav-list"></span><span class="center-block text-icon">Recipe Finder</span></a></li>
     
        <li id="NaturalHealingIcon"><a href="<?php echo site_url('Naturalhealing') ?>" class="<?php if($this->uri->segment(1)=="Naturalhealing"){echo "active";}?>"><span class="icons-nav-list"></span><span class="center-block text-icon">Natural Healing</span></a></li>
        <li id="MealIcon"><a href="<?php echo site_url('Mealplanner') ?>" class="<?php if($this->uri->segment(1)=="Mealplanner"){echo "active";}?>"><span class="icons-nav-list"></span><span class="center-block text-icon">Meal Planner</span></a></li>
        <li id="ShoppingListIcon" ><a href="<?php echo site_url('Shoppinglist') ?>" class="<?php if($this->uri->segment(1)=="Shoppinglist"){echo "active";}?>"><span class="icons-nav-list"></span><span class="center-block text-icon">Shopping List</span></a></li>
        <li id="GuessIcon"><a href="<?php echo site_url('Guessright') ?>" class="<?php if($this->uri->segment(1)=="Guessright"){echo "active";}?>"><span class="icons-nav-list"></span><span class="center-block text-icon" id="GuessIconTxt">Guess Right<br>
          Eat Right</span></a></li>
        <li  id="BlogIcon"><a href="<?php echo site_url('Blog') ?>" class="<?php if($this->uri->segment(1)=="Blog"){echo "active";}?>"><span class="icons-nav-list"></span><span class="center-block text-icon"></span></a></li>
      </ul>
    </div>
            </div>

            <div class="col-md-11 col-md-11-nutri">


                <?php $this->load->view($main_content); ?>

            </div>

        </div>
    </div>
</div>
<!-- Main Content area tabs -->


<?php $this->load->view('includes/footer'); ?>