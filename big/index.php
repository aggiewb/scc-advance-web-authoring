<?php 
include "./includes/header.php";
include "./includes/contact_include.php";
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
        <ul>
            <li>
                <a href="https://www.lucidchart.com/pages/">Lucidchart</a>
                <p>A wireframing tool which can be access for free with a basic account and includes mockup templates.</p>
            </li>
            <li>
                <a href="https://www.surveylegend.com/">SurveyLegend</a>
                <p>A free online survey tool that can be used for client feedback.</p>
            </li>
            <li>
                <a href="https://randoma11y.com/">Randoma11y</a>
                <p>A color scheme generator that provides accessible, color-contrasted schemes.</p>
            </li>
        </ul>
    </aside>
</main>
<?php include "./includes/footer.php";?>