<?php include "./includes/header.php";
include "./includes/big_contact_include.php";
?>
<main>
    <article>
        <h2 class="pageId"><span class="fa <?=$logo?>"></span><?=$pageId?></h2>
        <?php 

        $toAddress = "aggiewbdev@gmail.com";
        $toName = "Aggie Wheeler Bateman";
        $website = "https://www.aggiewheelerbateman.com/it162/";

        loadContact('multiple.php');
        ?>
    </article>
    <aside>
        <h2>Basic Website Design Cycle</h2>
        <p>Provide at least 3 (linked) resources that help you and/or your web team with steps found in very basic website design and development cycle. For example, client surveys, wireframing tools, etc.</p>
        <p>Here's a website to help get you started, https://business.tutsplus.com/articles/...
        </p>
    </aside>
</main>
<?php include "./includes/footer.php";?>