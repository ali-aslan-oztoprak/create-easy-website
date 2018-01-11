<?php

define('_BASE', 1); // Access parameter.

if(!include_once 'core/core.php'){
    die('Core.php Not Found!');
}
//BEGIN WEBSITE
    pageLoad('elements','head');        // Head scripts, styles, seo ...
    pageLoad('elements','topbar');      // topbar element
    pageLoad('elements','navbar');      // navbar element(menus)
    if(PAGE['view'] == cfg::$main_page){
        pageLoad('elements','slider');  // First Page Slider
    }else{
        pageLoad('elements','seperator');// Seperator element
    }
    pageLoad('page',PAGE['view']);             // View page
    pageLoad('elements','footer');       // Footer element
//END WEBSITE