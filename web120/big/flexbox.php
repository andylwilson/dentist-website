<?php include "includes/header.php"?>

    <p>Flexbox is a (relatively) new layout mode that has become a part of the CSS3 spec. The “flex” display value now sits alongside the traditional display types, like block, inline, table, and positioned display values. It aims to solve a lot of the problems with layouts that are hack-ily put together using floats and tables, and make layout creation more intuitive. As Tab Atkins Jr --the developer who took over the Flexbox project and is responsible for bringing the technology to fruition-- explains (via SpaceNinja):</p>
    
    <p class="quote">My goal in doing Flexbox and later Grid was to replace all the crazy float/table/inline-block/etc hacks that I’d had to master as a webdev. All that crap was (a) stupid, (b) hard to remember, and (c) limited in a million annoying ways, so I wanted to make a few well-done layout modules that solved the same problems in simple, easy-to-use, and complete ways.</p>

    <p>Flexbox creates containers which allow items within them to flow and dynamically size and proportion themselves throughout the container in many ways as specified by the developer, making it very useful for responsive layouts. It also now features widespread support among all modern browsers, as web developer Carlos Wagner points out in his blog on Medium:</p>

    <p class="quote">Flexbox integration has come a long way, and as of today, browser support comes as it follows: Edge 13, Firefox 44, Chrome 48, Safari 9, and Opera 34 have total support; Internet Explorer 11 has only partial support.</p>

    <p>For older browsers and IE11, there are also many shims designed to allow compatibility via mimicking Flexbox displayed elements with older display methods.</p>

    </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
     <h3>Citations</h3>
        <p>Scott Vandehey, Tab Atkins Jr., via <a href="https://spaceninja.com/2015/08/24/what-is-flexbox/">SpaceNinja</a></p>
        <p>Carlos Wagner, via <a href="https://medium.com/@carlos.afw/what-is-flexbox-and-why-it-is-going-to-change-the-way-web-applications-are-developed-7362ffd70e14">Medium</a></p>
    </aside>
    <!-- END RIGHT COL -->

<?php include "includes/footer.php"?>