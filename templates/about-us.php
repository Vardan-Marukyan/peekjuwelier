<?php 
/*
    Template Name: Over ons
*/

    get_header(); 
?>
<div class="main">
    <div class="external-indentation">
        <div class="contents">
            <div class="contents__title"><?= CFS()->get("service_tile");?></div>
            <div class="content">
                <div>
                    <?php
                        $loop = CFS()->get("service_content");
                        foreach($loop as $row){
                            ?>
                            <div class="content__item">
                                <div class="content__title"><?= $row["service_content_sub_title"];?></div>
                                <div class="content__text"><?= $row["service_content_text"];?></div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <div class="content__img">
                    <img src="<?= CFS()->get("service_image");?>">
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>