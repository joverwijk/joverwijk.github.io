<?php
    ob_start(); // start buffer 
    $root = $_SERVER["DOCUMENT_ROOT"];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Opdrachten';
            include($root . '/needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $nav_link_active = 'tasks';
            include($root . '/needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Opdrachten</h1>
                <p>
                    Onder deze pagina worden allerlei opdrachten verzameld die
                    zijn gemaakt in één van de mappen die deze website rijk is.
                </p>
                <p>
                    Wél is het zo dat dit niet opdrachten betreft die zijn gemaakt
                    voor de <i>studieloopbaanoriëntatie</i>. Deze staan in de navigatiebalk.
                </p>
                <h2><i>Programming Basics</i></h2>
                <p>stuff</p>
                <h2><i>Computer Science Basics</i></h2>
                <p>stuff2</p>
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