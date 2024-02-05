<?php 
/*
    Template Name: Winkel
*/

    get_header(); 
?>
<div class="main">
    <div class="external-indentation">
        <div class="contents">
            <div class="contents__title">Winkel</div>
            <div class="content">
                <div class="content__item">
                    <div class="content__text">
                        Een tevreden klant, daar doen we het voor bij Peek Juwelier. En in onze prachtige winkel van 120 m2 aan het 
                        Stationsplein in Heiloo kunnen we u goed van dienst zijn. Onze sieraden en horloges worden overzichtelijk gepresenteerd 
                        en u kunt op uw gemak uw keuze maken. Onze medewerkers nemen de tijd voor u.
                        
                        Naast onze winkel hebben wij ook een eigen atelier en werkplaats waar we sieraden en horloges in ere herstellen. 
                        We zijn bovendien goed bereikbaar met de auto en het openbaar vervoer. In de parkeergarage onder onze winkel kunt u 
                        twee uur gratis parkeren.
                    </div>
                </div>
            </div>

        </div>

        <div class="slider">
            <div class="slider-image">
                <?php
                        $loop = CFS()->get("slider_images");
                        foreach($loop as $row){
                            ?>
                            <img src="<?= $row["slider_image"];?>" class="slider-image__item">
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