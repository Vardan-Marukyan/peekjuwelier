<?php 
/*
    Template Name: Home
*/

    get_header(); 
?>
<img src="<?= get_template_directory_uri() ?> /assets/image/home/original.jpg" class="image-header"/>
<div class="main">
    <div class="greetings">
        Welkom in de wereld van PeekJuwelier! Bij ons is elk sieraad een kunstwerk, gemaakt met liefde. Onze unieke creaties combineren 
        traditie en moderniteit en benadrukken jouw unieke stijl. Ontdek onze collectie, waar elk meesterwerk zijn eigen verhaal vertelt. 
        Vind het perfecte sieraad samen met PeekJuwelier!
    </div>
    <div class="about-us-width-box">
        <div class="about-us">
            <div class="card">
                <img src="<?= get_template_directory_uri() ?> /assets/image/home/aboutUs-card-image1.jpg" class="card__img"/>
                <div class="card__information">
                    <div class="card__title">
                        Exclusieve Collecties
                    </div>
                    <div class="card__sub-title">
                        "Peek Juwelier" presenteert regelmatig exclusieve collecties, gemaakt in unieke exemplaren. Dit zijn echte kunstwerken die uw onnavolgbare stijl benadrukken.
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="<?= get_template_directory_uri() ?> /assets/image/home/aboutUs-card-image2.jpg" class="card__img"/>
                <div class="card__information">
                    <div class="card__title">
                        Individuele Sieraden
                    </div>
                    <div class="card__sub-title">
                        Wij bieden diensten aan voor het maken van sieraden op maat. Onze vakmensen zullen met plezier uw ideeën tot leven brengen, waardoor een sieraad ontstaat dat uw uniciteit weerspiegelt.
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="<?= get_template_directory_uri() ?> /assets/image/home/aboutUs-card-image3.jpg" class="card__img"/>
                <div class="card__information">
                    <div class="card__title">
                        Collecties van Verfijning
                    </div>
                    <div class="card__sub-title">
                        Elk stuk in onze collecties is een belichaming van verfijning en elegantie. Van klassieke ontwerpen tot moderne trends - wij hebben voor elk wat wils.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="exclusive-jewelry exclusive-jewelry-device">
        <div class="exclusive-jewelry-row">
            <img src="<?= get_template_directory_uri() ?> /assets/image/home/line1-1.jpg" class="exclusive-jewelry-row__img"/>
            <img src="<?= get_template_directory_uri() ?> /assets/image/home/line1-2.jpg"class="exclusive-jewelry-row__img"/>
            <img src="<?= get_template_directory_uri() ?> /assets/image/home/line1-3.jpg" class="exclusive-jewelry-row__img"/>
        </div>
        <div class="exclusive-jewelry-row">
            <img src="<?= get_template_directory_uri() ?> /assets/image/home/line2-1.jpg" class="exclusive-jewelry-row__img"/>
            <div class="exclusive-jewelry-row__word exclusive-jewelry-row__img" >
                <div class="exclusive-jewelry-row__title">Exclusieve Sieraden voor Een Unieke Stijl</div>
                <div class="exclusive-jewelry-row__text">
                    Welkom in de wereld van verfijnde juwelen bij "Peek Juwelier".
                    Ontdek onze unieke combinatie van traditie en innovatie, ontworpen voor degenen 
                    die schoonheid en elegantie in elk detail waarderen.
                </div>
            </div>
            <img src="<?= get_template_directory_uri() ?> /assets/image/home/line2-3.jpg" class="exclusive-jewelry-row__img"/>
        </div>
        <div class="exclusive-jewelry-row">
            <img src="<?= get_template_directory_uri() ?> /assets/image/home/line3-1.jpg" class="exclusive-jewelry-row__img"/>
            <img src="<?= get_template_directory_uri() ?> /assets/image/home/line3-2.jpg" class="exclusive-jewelry-row__img"/>
            <img src="<?= get_template_directory_uri() ?> /assets/image/home/line3-3.jpg" class="exclusive-jewelry-row__img"/>
        </div>
    </div>

                
    <div class="exclusive-jewelry exclusive-jewelry-mobile">
        <div class="exclusive-jewelry-row__word exclusive-jewelry-row__img" >
            <div class="exclusive-jewelry-row__title">Exclusieve Sieraden voor Een Unieke Stijl</div>
            <div class="exclusive-jewelry-row__text">
                Welkom in de wereld van verfijnde juwelen bij "Peek Juwelier".
                Ontdek onze unieke combinatie van traditie en innovatie, ontworpen voor degenen 
                die schoonheid en elegantie in elk detail waarderen.
            </div>
        </div>
        <img src="<?= get_template_directory_uri() ?> /assets/image/home/line1-3.jpg" class="exclusive-jewelry-row__img"/>
    </div>

    <div class="our-promises-width-box">
        <div class="our-promises">
            <img src="<?= get_template_directory_uri() ?> /assets/image/home/FauxPearl.jpg"/>
            <div class="our-promises-info">
                <div class="our-promises-info__title">
                    Onze Beloften:
                </div>
                <div class="our-promises-info__text">
                    <div class="our-promises-info__item">
                        <span class="our-promises-info__item-title">Kwaliteit:</span> We zijn trots op de hoge kwaliteit van onze sieraden. Elk stuk ondergaat strenge kwaliteitscontrole voordat het bij u terechtkomt.
                    </div>

                    <div class="our-promises-info__item">
                        <span class="our-promises-info__item-title">Individuele Benadering:</span> We waarderen elke klant en streven ernaar een individuele benadering te bieden voor elke bestelling. Uw wensen hebben onze hoogste prioriteit.
                    </div>

                    <div class="our-promises-info__item">
                        <span class="our-promises-info__item-title">Tradities en Innovaties:</span> We respecteren de tradities van de juwelierskunst, maar houden ook de laatste trends en innovaties op het gebied van design in de gaten.
                    </div>
                </div>

                <div class="our-promises-info__sub-text">
                    Welkom bij "Peek Juwelier" - uw bron van unieke en verfijnde sieraden. Gun uzelf de luxe om uw dromen tot leven te brengen in de glans van edelstenen en verfijnde metalen.
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
