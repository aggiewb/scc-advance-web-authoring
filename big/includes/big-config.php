<?php
//Output buffering which prevents data from being sent early
ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php':
        $title = 'Web Dev Examples By Aggie Wheeler Bateman';
        $logo = 'fa-bullhorn';
        $pageId = 'Web Dev Examples By Aggie';
    break;

    case 'flexbox.php':
        $title = $pageId = 'Flexbox';
        $logo = 'fa-arrows';
    break;

    case 'galleries.php':
        $title = $pageId = 'Galleries';
        $logo = 'fa-table';
    break;

    case 'shopping-carts.php':
        $title = $pageId = 'Shopping Carts';
        $logo = 'fa-shopping-cart';
    break;

    case 'site-app.php':
        $title = 'Site vs App';
        $logo = 'fa-tablet';
        $pageId = 'Responsive vs Mobile';
    break;

    case 'map.php':
        $title = $pageId = 'Google Map';
        $logo = 'fa-map-o';
    break;

    case 'calendar.php':
        $title = $pageId = 'Google Calendar';
        $logo = 'fa-calendar';
    break;

    case 'youtube.php':
        $title = $pageId ='Youtube Video';
        $logo = 'fa-youtube';
    break;

    case 'webcam.php':
        $title = $pageId = 'Live Web Cameras';
        $logo = 'fa-video-camera';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-exclamation-circle';
        $pageId = 'Not yet constructed';
}
?>