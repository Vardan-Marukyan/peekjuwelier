<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>
        <?php
            if(is_404()){
                echo "Error 404";
            }elseif(is_category("card")){
                echo single_cat_title();
            }else{
                the_title();
            }
        ?>
    </title>
</head>
<body class="body">
    <div class="warper">
        <header class="header header-custom-style">
            <div class="nav-bar">
                <div class="logo">
                    <a href=<?= home_url()?>><img src="<?= get_template_directory_uri() ?> /assets/image/home/logo.png" class="logo__image"/></a>
                </div>
                <div class="menu">
                    <div class= "menu__icon">
                        <span></span>
                    </div>
                    <?php
                        wp_nav_menu( [
                            "theme_location" => "top",
                            "container" => "",
                            "menu_class" => "menu__items",
                            "menu_id" => ""
                        ] )
                    ?>
                </div>
            </div>
        </header>