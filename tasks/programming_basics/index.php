<?php
    ob_start(); // start buffer 
    $root = $_SERVER["DOCUMENT_ROOT"];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Programming Basics';
            include($root . '/needs/header.php');
        ?>
        <script src="/tasks/programming_basics/js/main.js"></script>
        <!-- <script src="/tasks/programming_basics/js/functions.js"></script>
        <script src="/tasks/programming_basics/js/arrays.js"></script> -->
    </head>
    <body>
        <?php
            $nav_link_active = 'programming_basics';
            include($root . '/needs/nav.php');
        ?>
        <main>
            <section id="section">
                <h1>Programming Basics</h1>
                <p>
                    SOON...^tm
                </p>
                <h2>DOM Scripting</h2>
                <b>Boodschappenlijstje</b>
                <ul id="errand_list">
                    <li>tandenborstel</li>
                    <li>deodorant</li>
                    <li>bakmeel</li>
                    <li>wortels</li>
                </ul>
                <p>
                    Proberen zelf de boodschappentabel te maken? Vereisten: 1) eenmaal <code>createElement</code>,
                    2) eenmaal <code>appendChild</code> en 3) 19 of minder coderegels voor de functie, exclusief witregels.</br>
                    <small>EN NIET SPIEKEN!</small>
                </p>
                <script src="/tasks/programming_basics/js/dom.js"></script>
                <?php include($root . '/needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    // sla inhoud op in $page_content en wis buffer
    $page_content = ob_get_clean();

    echo $page_content;
?>