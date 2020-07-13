<?php
/*
portal-config.php
Used to store all of our WEB120 configuration information
*/

define('THIS_PAGE', basename($_SERVER['PHP_SELF']);
THIS_PAGE;

switch(THIS_PAGE){
    case 'index.php':
        $title = 'Aggie\'s WEB120 Title Page';
    break;

    default:
        $title = THIS_PAGE;
}
?>
