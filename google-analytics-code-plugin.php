<?php


/*
Plugin Name: Wtyczka Google Analytics na GrzegorzZajac.pl
Description: Funkcjonalność bloga, niezwiązana z wyglądem motywu.
Version: 0.1-16.09.2021
License: GPL
Author: Grzegorz Zając
Author URI: https://grzegorzzajac.pl
*/


/*
* Dodanie w sekcji head
*/

add_action( 'wp_head', 'my_own_analytics', 20 );
function my_own_analytics() { ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=XXXXXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'XXXXXXXXXXXX');
    </script>
    <?php
}












