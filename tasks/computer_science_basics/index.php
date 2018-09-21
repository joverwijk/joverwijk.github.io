<?php
    ob_start(); // start buffer 
    $root = $_SERVER["DOCUMENT_ROOT"];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'Computer Science Basics';
            include($root . '/needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $nav_link_active = 'computer_science_basics';
            include($root . '/needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Computer Science Basics</h1>
                <p>
                    SOON...^tm
                </p>
                <?php include($root . '/needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    // sla inhoud op in $page_content en wis buffer
    $page_content = ob_get_clean();

    // postprocessing
    include($root . '/needs/postprocessing.php');

    // sla inhoud na postprocessing op in HTML
    file_put_contents($root . '/html/tasks/computer_science_basics/index.html', $github_page_content);
?>