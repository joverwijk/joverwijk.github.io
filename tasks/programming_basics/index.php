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
    </head>
    <body>
        <?php
            $nav_link_active = 'programming_basics';
            include($root . '/needs/nav.php');
        ?>
        <main>
            <section>
                <h1>Programming Basics</h1>
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
    file_put_contents($root . '/html/tasks/programming_basics/test.html', $github_page_content);
?>