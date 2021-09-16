<?php


/*
Plugin Name: Wtyczka Google Analytics Code.
Description: Kod Google Analytics dodany w sekcji head strony opartej na Wordpress.Kod należy podmienić na własny.
Version: 0.1
License: GPL
Author: Imię Nazwisko
Author URI: https://twojasuperstrona.pl
*/


/*
* Kod nalezy podmienic na swoj, pomiedzy komentarzami BEGIN twoj kod i END twoj kod
*/

add_action( 'wp_head', 'my_own_analytics', 20 );
function my_own_analytics() { ?>

//BEGIN twoj kod

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=xxxxxxxxxxxxxxxx"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'xxxxxxxxxxxxxxxx');
    </script>

//END twoj kod
    <?php
}












