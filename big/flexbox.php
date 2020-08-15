<?php include "./includes/header.php";?>
<main>
    <article>
        <h2 class="pageId"><span class="fa <?=$logo?>"></span><?=$pageId?></h2>
        <p>Flexbox is a CSS method for laying out HTML content to achieve a responsive website design. It is a proven alternative to using floats and positioning, which can be limiting and frustrating. Its effectiveness is achieved through the adjusting of items’ height and width to best fill the available space, since “a flex container expands items to fill free space or shrinks them to prevent overflow(Complete).” While using Flexbox, the basic components are the parent flex container and the children flex items(Complete, Flexbox).</p>

        <p>On the flex container, the display property is set to flex, and the default flex-direction property of all of the child items within the parent are set to be placed in a row. However, you can change this to be row-reverse, column, and column-reverse. This establishes the main-axis which allows you to then set the alignment property of all of the items. Justify content is for the alignment along the main axis, and align-items is for the alignment along the cross-axis. Lastly, you can align the parent container’s cross-axis lines when there is extra space with the align-content property(Complete, Flexbox).</p>

        <p>On the children or flex items, you can establish their their order appearance with the property order; the flex-grow and flex-shrink properties for the items to grow or shrink if necessary; and finally flex-basis property which defines the minimum size of a child element before flex-grow or flex-shrink is applied. There’s a shorthand for all of those child properties called flex, which allows your code to be more readable. Additionally, you can align specific children items with align-self that overrides any values set to the parent property align-items(Complete, Flexbox).</p>

        <p>You can even use Flexbox to fulfill complex layouts by nesting parent containers inside of a flex child(Flexbox)! Flexbox usage is well supported for all users is about 97% for users of the most current versions of Edge, Firefox, Chrome, Safari, QQ Browser, Baidu Browser, and Opera as well as for mobile browsers Samsung Internet, Opera Mini, ioS Safari, Android Browser, Opera Mobile, KaiOS Browser and Chrome, Firefox, and UC Br for Android(CSS).</p>

        <p>With this new tool in your toolbox, you’ll be able to create a sleek, responsive layout without having to force items into place. In addition, you’ll be able to move configurations with media queries at a drop of a hat changing parents from column to row or left to right aligned.</p>
    </article>
    <aside>
        <h3>Resources</h3>
        <ul>
            <li>“A Complete Guide to Flexbox: CSS-Tricks.” CSS, CSS-Tricks, 12 June 2020, <a href="css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">css-tricks.com/snippets/css/a-guide-to-flexbox/</a>.</li>
            <li>“Flexbox.” MDN Web Docs, MDN Contributors, 20 July 2020, <a href="developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox" target="_blank">developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout/Flexbox</a>.</li>
            <li>“CSS Flexible Box Layout Module.” Can I Use... Support Tables for HTML5, CSS3, Etc, Alexis Deveria, <a href="https://caniuse.com/#feat=flexbox" target="_blank">https://caniuse.com/#feat=flexbox</a>.</li>
        </ul> 
    </aside>
</main>
<?php include "./includes/footer.php";?>