<?php
/*
portal-config.php
Used to store all of our WEB120 configuration information
*/

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

function getTitleString($pageType){
    return 'Aggie\'s WEB120 ' . $pageType . ' Page';
}

switch(THIS_PAGE){
    case 'index.php':
        $title = getTitleString('Title');
        $pageId = 'About me';
    break;

    case 'contactme.php':
        $title = getTitleString('Contact');
        $pageId = 'Contact Aggie';
    break;

    case 'flowchart.php':
        $title = getTitleString('Flowchart');
        $pageId = 'Flowchart';
    break;

    case 'aia.php':
        $title = getTitleString('AIA');
        $pageId = 'AIA';
    break;

    default:
        $title = THIS_PAGE;
        $pageId = 'Doh';
}
?>