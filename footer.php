<footer class="footer">
            <div style="width: 1200px;">
                <img src="<?= get_template_directory_uri() ?> /assets/image/home/logo.png" class="footer__logo"/>
                <div class="footer__menu">
                    <ul class="footer__items">
                        <li class="footer__item footer__title">Adres</li>
                        <li class="footer__item">Tel: <span>072 - 533 57 30</span></li>
                        <li class="footer__item">Email: <span>info@peekjuwelier.nl</span></li>
                        <li class="footer__item">KVK: <span>1851 LN Heiloo</span></li>
                        <li class="footer__item">Adres: <span>Stationsplein 96</span></li>
                    </ul>
                    <ul class="footer__items">
                        <li class="footer__item footer__title">OPENINGSTIJDEN</li>
                        <div class="opening">
                            <ul class="opening__items">
                                <li class="opening__item">Maandag</li>
                                <li class="opening__item">Dinsdag</li>
                                <li class="opening__item">Woensdag</li>
                                <li class="opening__item">Donderdag</li>
                                <li class="opening__item">Vrijdag</li>
                                <li class="opening__item">Zaterdag</li>
                                <li class="opening__item">Zondag</li>
                            </ul>
                            <ul class="opening__items">
                                <li class="opening__item">Gesloten</li>
                                <li class="opening__item">09:30 - 17:00</li>
                                <li class="opening__item">09:30 - 17:00</li>
                                <li class="opening__item">09:30 - 17:00</li>
                                <li class="opening__item">09:30 - 17:00</li>
                                <li class="opening__item">09:30 - 17:00</li>
                                <li class="opening__item">Gesloten</li>
                            </ul>
                        </div>
                    </ul>
                    <ul class="footer__items">
                        <li class="footer__item footer__title">VOLG ONS</li>
                        <li class="footer__item">
                            <a href="https://www.facebook.com/Peekjuwelier" class="icon-facebook"></a>
                        </li>
                    </ul>
                </div>

                <div style="display: flex;"><div class = "main-button__btn footer__btn" onclick="window.open('https://www.mijnjuwelier.online/', '_blank');"> Bekijk onze collectie</div></div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>