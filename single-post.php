<?php 
    get_header(); 
?>
<div class="main">
    <div class="external-indentation">
        <div class="contents">
            <div class="contents__title"><?php the_title();?></div>
            <div class="content">
                <div class="content__text">
                    <?= CFS()->get("crad_text")?>
                </div>
            </div>

        </div>

        <div class="slider">
            <div class="slider-image">
                <?php
                        $loop = CFS()->get("add_slider_images");
                        foreach($loop as $row){
                            ?>
                            <img src="<?= $row["add_image"];?>" class="slider-image__item">
                            <?php
                        }
                    ?>
            </div>
            <div class="slider-controllers">
                <div class="slider-controllers__circles"></div>
                <div class="slider-controllers__arrow">
                    <div class="main-button">
                        <div class="main-button__btn slider-controllers__arrow-icon icon-left"></div>
                    </div>
                    <div class="main-button">
                        <div class="main-button__btn slider-controllers__arrow-icon icon-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>