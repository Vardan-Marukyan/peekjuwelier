<?php get_header()?>
<div class="main">
    <div class="error">
        <div class="error__404">404</div>
        <div class="error__text">
            De pagina die u zoekt,<br>
            kan niet worden gevonden
        </div>
        <a class="error__a-return-button" href=<?= home_url()?> ><div class="error__return-button">Terug naar startpagina</div></a>
    </div>
</div>
<?php get_footer()?>