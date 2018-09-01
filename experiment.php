<?php ob_start(); // start buffer ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $page_title = 'MOAR EXPERIMENTS';
            include('needs/header.php');
        ?>
    </head>
    <body>
        <?php
            $active_exper = ' class="active" ';
            include('needs/nav.php');
        ?>
        <main>
            <section>
                <p>Hallo wereld!</p>
                <?php include('needs/footer.php'); ?>
            </section>
        </main>
    </body>
</html>
<?php
    // sla inhoud op in $page_content en wis buffer
    $page_content = ob_get_clean();

    // postprocessing
    include('needs/postprocessing.php');

    // sla inhoud na postprocessing op in HTML
    file_put_contents('experiment.html', $github_page_content);
?>