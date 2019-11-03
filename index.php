<?php

define('DIR_BASE',      realpath(dirname(__FILE__)));
define('DIR_JSON',    DIR_BASE . '/json/');
define('DIR_LAYOUT',  DIR_BASE . '/layout/');
define('DIR_VIEW',    DIR_BASE . '/views/');
define('LAYOUT_HEADER', 	DIR_LAYOUT . 'header.php');
define('LAYOUT_NAVTOP', 	DIR_LAYOUT . 'navigation-top.php');
define('LAYOUT_CONTENT', 	DIR_LAYOUT . 'content.php');
define('LAYOUT_SIDERBAR', 	DIR_LAYOUT . 'sidebar.php');
define('LAYOUT_FOOTER', 	DIR_LAYOUT . 'footer.php');

require_once "vendor/autoload.php";

include( LAYOUT_HEADER );
include( LAYOUT_NAVTOP );
include( LAYOUT_CONTENT );
include( LAYOUT_SIDERBAR );
include( LAYOUT_FOOTER );