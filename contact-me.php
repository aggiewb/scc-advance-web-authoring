<?php 
include "includes/header.php";
include "includes/contact_include.php"; #site keys & code here
?>

<h2 class="pageId"><span class="fa <?=$logo?>"></span><?=$pageId?></h2>

<?php /* Below are 2 different forms to be re-used. Only use one at a time, comment out the other! */

$toAddress = "aggiewbdev@gmail.com";
$toName = "Aggie Wheeler Bateman";
$website = "https://www.aggiewheelerbateman.com/it162/";

loadContact('simple.php'); #demonstrates a simple contact form

include "includes/footer.php";
?>